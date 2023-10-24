<?php
require "partials/header.php";
require "partials/navbar.php";
require "config/database.php";

$id = (isset($_POST['id'])) ? $_POST['id'] : "";
$name = (isset($_POST['name'])) ? $_POST['name'] : "";
$description = (isset($_POST['description'])) ? $_POST['description'] : "";
$socials_networks = (isset($_POST['social_networks'])) ? $_POST['social_networks'] : "";
$image = (isset($_FILES['image']['name'])) ? $_FILES['image']['name'] : "";
$action = (isset($_POST['accion'])) ? $_POST['accion'] : "";

switch ($action) {
  case "Agregar";
    $sql = $conn->prepare("INSERT INTO lodging (name, description, socials_networks, image) VALUES (:name, :description,:socials_networks :image);");
    // Insertando los datos con la variables
    $sql->bindParam(':name', $name);
    $sql->bindParam(':description', $description);
    $sql->bindParam(':socials_networks', $socials_networks);
    //Guardando la iamgen con la fecha en que se agrego
    $date = new DateTime();
    $nameFile = ($image != "") ? $date->getTimestamp() . "_" . $_FILES["image"]["name"] : "imagen.jpg";
    $tmpImage = $_FILES["image"]["tmp_name"];

    if ($tmpImage != "") {
      move_uploaded_file($tmpImage, "../admin/assets/imgEvent/" . $nameFile);
    }

    $sql->bindParam(':image', $nameFile);
    $sql->execute();
    header("Location:AddEvent.php");
    break;

  case "Modificar";
    $sql = $conn->prepare("UPDATE events SET name=:name, description=:description WHERE id=:id");
    $sql->bindParam(':name', $name);
    $sql->bindParam(':description', $description);
    $sql->bindParam(':socials_networks', $socials_networks);
    $sql->bindParam(':id', $id);
    $sql->execute();

    if ($image != "") {

      $date = new DateTime();
      $nameFile = ($image != "") ? $date->getTimestamp() . "_" . $_FILES["image"]["name"] : "imagen.jpg";
      $tmpImage = $_FILES["image"]["tmp_name"];

      move_uploaded_file($tmpImage, "../admin/assets/imgEvent/" . $nameFile);

      $sql = $conn->prepare("SELECT image FROM events WHERE id=:id");
      $sql->bindParam(':id', $id);
      $sql->execute();
      $form = $sql->fetch(PDO::FETCH_LAZY);

      if (isset($event["image"]) && ($event['image'] != "imagen.jpg")) {
        if (file_exists("../admin/assets/imgEvent/" . $event["image"])) {

          unlink("../admin/assets/imgEvent/" . $event["image"]);
        }
      }

      $sql = $conn->prepare("UPDATE events SET image=:image WHERE id=:id");
      $sql->bindParam(':image', $nameFile);
      $sql->bindParam(':id', $id);
      $sql->bindParam(':socials_networks', $socials_networks);
      $sql->execute();
    }
    header("Location:AddEvent.php");
    break;
  case "Cancelar";
    header("Location:AddEvent.php");
    break;
  case "Seleccionar";
    $sql = $conn->prepare("SELECT * FROM events WHERE id=:id");
    $sql->bindParam(':id', $id);
    $sql->execute();
    $event = $sql->fetch(PDO::FETCH_LAZY);
    $name = $event['name'];
    $description = $event['description'];
    $social_networks = $event['socialnetworks'];
    $image = $event['image'];
    break;
  case "Borrar";
    // Verificar si la imagen existe y eliminarla de la carpeta imgEvent
    $sql = $conn->prepare("SELECT image FROM events WHERE id=:id");
    $sql->bindParam(':id', $id);
    $sql->execute();
    $event = $sql->fetch(PDO::FETCH_LAZY);

    if (isset($event["image"]) && ($event['image'] != "imagen.jpg")) {
      if (file_exists("../admin/assets/imgEvent/" . $event["image"])) {

        unlink("../admin/assets/imgEvent/" . $event["image"]);
      }
    }

    $sql = $conn->prepare("DELETE FROM events WHERE id=:id");
    $sql->bindParam(':id', $id);
    $sql->execute();
    header("Location:addEvent.php");
    break;
}
// Haciendo la consulta a los registros 
$query = $conn->prepare("SELECT * FROM events");
$query->execute();
$events = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<section id="add-form" class="add-form">

  <h1 class="name-index"> Agregar un hospoedaje</h1>
  <!-- <p>Llena el formulario para agregar un nuevo formo a la pagina</p> -->
  <div class="container-form-crud">

    <div class="container-form-form">
      <h2 class="name-form">Nueva publicacion</h2>

      <form method="POST" enctype="multipart/form-data" class="form-container">
        
        <div class="form-group">
          <input type="hidden" value="<?php echo $id ?>" name="id" id="id">
        </div>

        <div class="form-group">
          <label for="name"> Agrega un título:</label>
          <input type="text" value="<?php echo $name?>" name="name" id="name" required maxlength="22">
        </div>

        <div class="form-group">
          <label for="description"> Agrega una Descripción:</label>
          <input type="text" value="<?php echo $description; ?>" name="description" id="description" required maxlength="220">
        </div>
        <div class="form-group">
          <label for="description"> Agrega un metodo de contacto</label>
          <input type="text" value="<?php echo $social_networks; ?>" name="social_networks" id="social_networks" required maxlength="220">
        </div>
        <div class="form-group">
          <label for="image">Agrega una imagen:</label><br>
          <?php if ($image != "") { ?>
            <img src="../admin/assets/imgEvent/<?php echo $image ?>" name="Imagen seleccionada" width="50px">
          <?php } ?>
          <input type="file" name="image" id="image">
        </div>

        <div class="group-buttons">
          <button type="submit" <?php echo ($action == "Seleccionar") ? "disabled" : "" ?> value="Agregar" name="accion" class="form-btn primary">Agregar</button>
          <button type="submit" <?php echo ($action != "Seleccionar") ? "disabled" : "" ?> value="Modificar" name="accion" class="form-btn">Modificar</button>
          <button type="submit" <?php echo ($action != "Seleccionar") ? "disabled" : "" ?>value="Cancelar" name="accion" class="form-btn danger">Cancelar</button>
        </div>

      </form>
    </div>

    <div class="contaier-forms-add">
      <h2 class="name-form">Publicadas</h2>

      <table class="info-crud">
        <thead>
          <tr class="form-add">
            <th class="date-form-colum id">ID</th>
            <th class="date-form-colum name">Titulo</th>
            <th class="date-form-colum description ">Descripcion</th>
            <th class="date-form-colum image">Imagen</th>
            <th class="date-form-colum option">Opciones</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($events as $event) { ?>
            <tr class="form-add">
              <td class="date-form id"><?php echo $event['id'] ?></td>
              <td class="date-form name"><?php echo $event['name'] ?></td>
              <td class="date-form descrption"><?php echo $event['description'] ?></td>
              <td class="date-form image">
                <img src="../admin/assets/imgEvent/<?php echo $event['image'] ?>" width="50px">
              </td>

              <td class="date-form btn-flex option">

                <form method="POST">
                  <input type="hidden" name="id" id="id" value="<?php echo $event['id'] ?>" />
                  <button type="submit" name="accion" value="Seleccionar" class="btn primary">Editar</button>
                  <button type="submit" name="accion" value="Borrar" class="btn danger">Borrar</button>
                </form>

              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</section>
<?php require "./partials/footer.php" ?>
