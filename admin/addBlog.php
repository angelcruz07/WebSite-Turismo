<?php  
require_once "config/database.php";
require_once "./config/utilities.php";
validateRol();

//Recuperar los datos del formulario
$id = (isset($_POST['id'])) ? $_POST['id'] : "";
$title = (isset($_POST['title'])) ? $_POST['title'] : "";
$description = (isset($_POST['description'])) ? $_POST['description'] : "";
$image = (isset($_FILES['image']['name'])) ? $_FILES['image']['name'] : "";
$action = (isset($_POST['accion'])) ? $_POST['accion'] : "";

// Parametros de la funcion 
$table = "blog";
$location = "addBlog.php";

switch ($action) {
  case "Agregar";
    $sql = $conn->prepare("INSERT INTO blog (title, description, image) VALUES (:title, :description, :image);");
    // Insertando los datos con la variables
    $sql->bindParam(':title', $title);
    $sql->bindParam(':description', $description);
    //Guardando la iamgen con la fecha en que se agrego
    $date = new DateTime();
    $nameFile = ($image != "") ? $date->getTimestamp() . "_" . $_FILES["image"]["name"] : "imagen.jpg";
    $tmpImage = $_FILES["image"]["tmp_name"];

    if ($tmpImage != "") {
      move_uploaded_file($tmpImage, "../admin/assets/imgblog/" . $nameFile);
    }

    $sql->bindParam(':image', $nameFile);
    $sql->execute();
    header("Location:Addblog.php");
    break;
  case "Modificar";
  editEvent($conn, $type, $title, $description, $id, $image, $table);
    break;
  case "Cancelar";
    header("Location: $location");
    break;
  case "Seleccionar";
  $selectedBlog = selectEvent($conn, $id, $table);
    if ($selectedBlog) {
        $title = $selectedBlog['title'];
        $description = $selectedBlog['description'];
        $image = $selectedBlog['image'];
    }
    break;
  case "Borrar";
    deleteEvent($conn, $id, $location, $table);
    break;
}
// Consulta a la publicaciones
$blogs = getEvents($conn, $table);
?>

<?php require_once "partials/header.php"; require_once "partials/navbar.php"; ?>
<section id="add-form" class="add-form">
  <h1 class="title-index"> Agregar nuevo dato al blog</h1>
  <div class="container-form-crud">
    <div class="container-form-form">
      <h2 class="title-form">Nueva publicacion</h2>

      <form method="POST" enctype="multipart/form-data" class="form-container">
        <div class="form-group">
          <input type="hidden" value="<?php echo $id ?>" name="id" id="id">
        </div>
        <div class="form-group">
          <label for="title"> Agrega un título:</label>
          <input type="text" value="<?php echo $title ?>" name="title" id="title"  maxlength="22">
          <?php if (!empty($titleError)) { echo "<div class='error-message'>$titleError</div>"; }?>
        </div>
        <div class="form-group">
          <label for="description"> Agrega una Descripción:</label>
          <textarea name="description"id="description" maxlength="300" class="textarea" rows="4" cols="30"><?php echo $description; ?></textarea>
        </div>
        <div class="form-group">
          <label for="image">Agrega una imagen:</label><br>
          <?php if ($image != "") { ?>
            <img src="../admin/assets/imgEvent/<?php echo $image ?>"  title="Imagen seleccionada" width="50px">
          <?php } ?>
          <input type="file" name="image" id="image">
        </div>
        <div class="group-buttons">
          <button type="submit" <?php echo ($action == "Seleccionar") ? "disabled" : "" ?> value="Agregar" name="accion" class="form-btn primary">Agregar</button>
          <button type="submit" <?php echo ($action != "Seleccionar") ? "disabled" : "" ?> value="Modificar" name="accion" class="form-btn">Modificar</button>
          <button  type="submit" value="Cancelar" name="accion" class="form-btn danger">Cancelar</button>
        </div>
      </form>
    </div>

    <div class="contaier-forms-add">
      <h2 class="title-form">Publicadas</h2>
      <table class="info-crud">
        <thead>
          <tr class="form-add">
            <th class="date-form-colum id">ID</th>
            <th class="date-form-colum title">Titulo</th>
            <th class="date-form-colum description ">Descripcion</th>
            <th class="date-form-colum image">Imagen</th>
            <th class="date-form-colum option">Opciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($blogs as $blog) { ?>
            <tr class="form-add">
              <td class="date-form id"><?php echo $blog['id'] ?></td>
              <td class="date-form title"><?php echo $blog['title'] ?></td>
              <td class="date-form descrption"><?php echo $blog['description'] ?></td>
              <td class="date-form image">
                <img src="../admin/assets/imgEvent/<?php echo $blog['image'] ?>" width="40px">
              </td>
              <td class="date-form btn-flex option">
                <form method="POST"id="custom-register">
                  <input type="hidden" name="id" id="id" value="<?php echo $blog['id'] ?>" />
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
