<?php
require_once "config/database.php";
require_once "./config/utilities.php";
$rol = 1;
validateRol($rol);

//Recuperar los datos del formulario
$id = (isset($_POST['id'])) ? $_POST['id'] : "";
$title = (isset($_POST['title'])) ? $_POST['title'] : "";
$description = (isset($_POST['description'])) ? $_POST['description'] : "";
$image = (isset($_FILES['image']['name'])) ? $_FILES['image']['name'] : "";
$action = (isset($_POST['accion'])) ? $_POST['accion'] : "";
date_default_timezone_set('America/Mexico_City');
$dataSend = date('Y-m-d H:i:s');
// Parametros de la funcion 
$table = "blog";
$location = "addBlog.php";
$file = "imgBlog";
$validFields = ['title', 'description', 'date', 'image'];
$data = array(
  'id' => $id,
  'title' => $title,
  'description' => $description,
  'dataSend' => $dataSend,
  'table' => $table,
  'carpet' => $file,
);
switch ($action) {
  case "Agregar";
    insertRegister($conn, $data, $validFields);
    header("Location:$location");
    break;
  case "Modificar";
    editRegister($conn, $data, $validFields);
    editImage($conn, $id, $image, $file, $table);
    header("Location:$location");
    break;
  case "Seleccionar":
    $selectedEvent = selectRegister($conn, $id, $table);
    if ($selectedEvent) {
      $title = $selectedEvent['title'];
      $description = $selectedEvent['description'];
      $image = $selectedEvent['image'];
    }
    break;
  case "Borrar";
    deleteRegister($conn, $id, $table, $file);
    header("Location:$location");
    break;
}

// Consulta de los datos
$blogs = getQuery($conn, $table);
?>

<script type="module">
  //Funcion de contador
  import {
    initCharacterCounter
  }
  from "http://localhost/WebSite-Turismo/admin/assets/js/limits.js"
  initCharacterCounter("title-blog", 60);
  initCharacterCounter("description-blog", 450); 

  const urlBase = window.location.protocol + "//" + window.location.host;
  let file = urlBase + "/WebSite-Turismo/admin/addBlog.php";
</script>

<?php require_once "partials/header.php";
require_once "partials/navbar.php"; ?>
<section id="add-form" class="add-form">
  <h1 class="title-index"> Agregar nuevo dato al blog</h1>
  <div class="container-form-crud">
    <div class="container-form-form">
      <h2 class="title-form">Nueva publicacion</h2>

      <form method="POST" enctype="multipart/form-data" class="form-container">
        <div class="form-group">
          <input type="hidden" value="<?php echo $id ?>" name="id" id="id" required>
        </div>
        <div class="form-group">
          <label for="title"> Agrega un título:</label>
          <input type="text" value="<?php echo $title ?>" name="title" id="title" class="title-blog" maxlength="22" required>
          <?php if (!empty($titleError)) {
            echo "<div class='error-message'>$titleError</div>";
          } ?>
        </div>
        <div class="form-group">
          <label for="description"> Agrega una Descripción:</label>
          <textarea name="description" id="description" maxlength="300" class="textarea description-blog" rows="4" cols="30" required><?php echo $description; ?></textarea>
        </div>
        <div class=" form-group">
          <label for="image">Agrega una imagen:</label><br>
          <?php if ($image != "") { ?>
            <img src="../admin/assets/imgBlog/<?php echo $image ?>" title="Imagen seleccionada" width="50px">
          <?php } ?>
          <input type="file" name="image" id="image">
        </div>
        <div class="group-buttons">
          <button type="submit" <?php echo ($action == "Seleccionar") ? "disabled" : "" ?> value="Agregar" name="accion" class="form-btn primary">Agregar</button>
          <button type="submit" <?php echo ($action != "Seleccionar") ? "disabled" : "" ?> value="Modificar" name="accion" class="form-btn">Modificar</button>
          <button type="reset" value="Cancelar" name="accion" class="form-btn danger">Cancelar</button>
        </div>
      </form>
    </div>


    <div class="container-forms-add">
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
                <img src="../admin/assets/imgBlog/<?php echo $blog['image'] ?>" width="40px">
              </td>
              <td class="date-form btn-flex option">
                <form method="POST" id="custom-register">
                  <input type="hidden" name="id" id="id" value="<?php echo $blog['id'] ?>" />
                  <button type="submit" name="accion" value="Seleccionar" class="btn primary">Editar</button>

                  <button type="submit" data-accion="Borrar" name="accion" value="Borrar" class="btn danger" data-post-id="<?php echo $blog['id']; ?>">Borrar</button>
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
