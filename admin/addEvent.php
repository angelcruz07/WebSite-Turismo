<?php
require "partials/header.php";
require "partials/navbar.php";


//Archivo de conecion a la base de datos
require "config/database.php";
//Recuperar conexion de database
$database = new Database();
$conn = $database->connect();


// Validar los campos (Falta)
//Recibir los datos del formulario
$id = (isset($_POST['id'])) ? $_POST['id'] : "";
$title = (isset($_POST['title'])) ? $_POST['title'] : "";
$description = (isset($_POST['description'])) ? $_POST['description'] : "";
$image = (isset($_FILES['image']['name'])) ? $_FILES['image']['name'] : "";
$action = (isset($_POST['accion'])) ? $_POST['accion'] : "";

switch ($action) {
  case "Agregar";
    $sql = $conn->prepare("INSERT INTO events (title, description, image) VALUES (:title, :description, :image);");
    // Insertando los datos con la variables
    $sql->bindParam(':title', $title);
    $sql->bindParam(':description', $description);
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
    $sql = $conn->prepare("UPDATE events SET title=:title, description=:description WHERE id=:id");
    $sql->bindParam(':title', $title);
    $sql->bindParam(':description', $description);
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
      $event = $sql->fetch(PDO::FETCH_LAZY);

      if (isset($event["image"]) && ($event['image'] != "imagen.jpg")) {
        if (file_exists("../admin/assets/imgEvent/" . $event["image"])) {

          unlink("../admin/assets/imgEvent/" . $event["image"]);
        }
      }

      $sql = $conn->prepare("UPDATE events SET image=:image WHERE id=:id");
      $sql->bindParam(':image', $nameFile);
      $sql->bindParam(':id', $id);
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
    $title = $event['title'];
    $description = $event['description'];
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
    header("Location:AddEvent.php");
    break;
}
// Haciendo la consulta a los registros 
$query = $conn->prepare("SELECT * FROM events");
$query->execute();
$events = $query->fetchAll(PDO::FETCH_ASSOC);

?>


<section id="add-event" class="add-event">

  <h1 class="title-event"> Agregar un nuevo evento</h1>
  <!-- <p>Llena el formulario para agregar un nuevo evento a la pagina</p> -->
  <div class="container-event-crud">

    <div class="container-form-event">
      <h2 class="title-index">Nueva publicacion</h2>

      <form method="POST" enctype="multipart/form-data" class="form-container">
        
        <div class="form-group">
          <input type="hidden" value="<?php echo $id ?>" name="id" id="id">
        </div>

        <div class="form-group">
          <label for="title"> Agrega un título:</label>
          <input type="text" value="<?php echo $title ?>" name="title" id="title" required="">
        </div>

        <div class="form-group">
          <label for="description"> Agrega una Descripción:</label>
          <input type="text" value="<?php echo $description; ?>" name="description" id="description" required="">
        </div>

        <div class="form-group">
          <label for="image">Agrega una imagen:</label><br>
          <?php if ($image != "") { ?>
            <img src="../admin/assets/imgEvent/<?php echo $image ?>" title="Imagen seleccionada" width="50px">
          <?php } ?>
          <input type="file" name="image" id="image">
        </div>

        <div class="group-buttons">
          <button type="submit" <?php echo ($action == "Seleccionar") ? "disabled" : "" ?> value="Agregar" name="accion" class="form-btn">Agregar</button>
          <button type="submit" <?php echo ($action != "Seleccionar") ? "disabled" : "" ?> value="Modificar" name="accion" class="form-btn">Modificar</button>
          <button type="submit" <?php echo ($action != "Seleccionar") ? "disabled" : "" ?>value="Cancelar" name="accion" class="form-btn">Cancelar</button>
        </div>

      </form>
    </div>

    <div class="contaier-events-add">
      <h2 class="title-index">Publicadas</h2>

      <table class="info-crud">
        <thead>
          <tr class="event-add">
            <th class="date-event-colum">ID</th>
            <th class="date-event-colum">Titulo</th>
            <th class="date-event-colum">Descripcion</th>
            <th class="date-event-colum">Imagen</th>
            <th class="date-event-colum">Opciones</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($events as $event) { ?>
            <tr class="event-add">
              <td class="date-event"><?php echo $event['id'] ?></td>
              <td class="date-event"><?php echo $event['title'] ?></td>
              <td class="date-event"><?php echo $event['description'] ?></td>
              <td class="date-event">
                <img src="../admin/assets/imgEvent/<?php echo $event['image'] ?>" width="50px">
              </td>

              <td class="date-event">

                <form method="POST">
                  <input type="hidden" name="id" id="id" value="<?php echo $event['id'] ?>" />
                  <button type="submit" name="accion" value="Seleccionar" class="btn primary">Seleccionar</button>
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
