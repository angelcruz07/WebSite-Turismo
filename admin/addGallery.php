<?php
require_once "config/database.php";
require_once "./config/utilities.php";
$rol = 1;
validateRol($rol);

$id = (isset($_POST['id'])) ? $_POST['id'] : "";
$type = (isset($_POST['type'])) ? $_POST['type'] : '';
$name = (isset($_POST['name'])) ? $_POST['name'] : "";
$description = (isset($_POST['description'])) ? $_POST['description'] : "";
$url_place = (isset($_POST['location'])) ? $_POST['location'] : "";
$image = (isset($_FILES['image']['name'])) ? $_FILES['image']['name'] : "";
$action = (isset($_POST['accion'])) ? $_POST['accion'] : "";

$table = "gallery";
$file = "imgGallery";
$location = "addGallery.php";
$validFields = [
  "type",
  "name",
  "description",
  "location",
  "image",
];
$data = array(
  "id" => $id,
  "type" => $type,
  "name" => $name,
  "description" => $description,
  "location" => $url_place,
  "table" => $table,
  "carpet" => $file
);
switch ($action) {
  case "Agregar":
    insertRegister($conn, $data, $validFields);
    header("Location:$location");
    break;
  case "Modificar":
    editRegister($conn, $data, $validFields);
    editImage($conn, $id, $image, $file, $table);
    header("Location:$location");
  case "Seleccionar":
    $selectedEvent = selectRegister($conn, $id, $table);
    if ($selectedEvent) {
      $type = $selectedEvent['type'];
      $name = $selectedEvent['name'];
      $description = $selectedEvent['description'];
      $url_place = $selectedEvent['location'];
      $image = $selectedEvent['image'];
    }
    break;
  case "Borrar";
    deleteRegister($conn, $id, $table, $file);
    header("Location:$location");
    break;
}
$places = getQuery($conn, $table);

?>
 
 <script type="module">
  //Funcion de contador
  import {
    initCharacterCounter
  }
  from "http://localhost/WebSite-Turismo/admin/assets/js/limits.js"
  initCharacterCounter("title-gallery", 60);
  initCharacterCounter("description-gallery", 450);  
  
  const urlBase = window.location.protocol + "//" + window.location.host;
  let file = urlBase + "/WebSite-Turismo/admin/addGallery.php";
</script> 

<?php
require_once "partials/header.php";
require_once "partials/navbar.php";
?>
<!-- Necesario para alerta -->
<section id="add-form" class="add-form">
  <h1 class="title-index"> Agregar una imagen a galeria</h1>
  <div class="container-form-crud">
    <div class="container-form-form">
      <h2 class="title-form">Nueva publicacion</h2>
      <form method="POST" enctype="multipart/form-data" class="form-container">
        <div class="form-group">
          <input type="hidden" value="<?php echo $id ?>" name="id" id="id">
        </div>
        <div class="form-group">
          <label for="type">Selecciona el tipo de lugar</label>
          <select name="type" id="type" required><?php echo $type ?>
            <option value="#"></option>
            <option value="Mirador">Mirador</option>
            <option value="Parroquia">Parroquia</option>
            <option value="Monumentos">Monumentos</option>
            <option value="Parques">Parque</option>
            <option value="Plaza">Plaza</option>
          </select>
        </div>
        <div class="form-group">
          <label for="name">Nombre del lugar</label>
          <input type="text" value="<?php echo $name; ?>" name="name" class="title-gallery" id="name" maxlength="55">
        </div>
        <div class="form-group">
          <label for="description">Descripción breve del lugar:</label>
          <textarea name="description" id="description" maxlength="300" class="textarea description-gallery" rows="4" cols="30"
            required><?php echo $description; ?></textarea>
        </div>
        <div class="form-group">
          <label for="location">Ubicacion del lugar en google (URL)</label>
          <textarea name="location" id="location" maxlength="300" class="textarea" rows="4"
            cols="30"><?php echo $url_place; ?></textarea>
        </div>
        <div class=" form-group">
          <label for="image">Agrega la imagen correspondiente al lugar:</label><br>
          <?php if ($image != "") { ?>
          <img src="<?php echo $url ?>/admin/assets/imgGallery/<?php echo $image ?>" title="Imagen seleccionada"
            width="50px">
          <?php } ?>
          <input type="file" name="image" id="image">
        </div>
        <div class="group-buttons">
          <button type="submit" <?php echo ($action == "Seleccionar") ? "disabled" : "" ?> value="Agregar" name="accion"
            class="form-btn primary">Agregar</button>
          <button type="submit" <?php echo ($action != "Seleccionar") ? "disabled" : "" ?> value="Modificar"
            name="accion" class="form-btn">Modificar</button>
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
            <th class="date-form-colum title">Nombre</th>
            <th class="date-form-colum description">Descripcion</th>
            <th class="date-form-colum image">Imagen</th>
            <th class="date-form-colum type">Tipo</th>
            <th class="date-form-colum option">Opciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($places as $place) { ?>
          <tr class="form-add">
            <td class="date-form id"><?php echo $place['id'] ?></td>
            <td class="date-form title"><?php echo $place['name'] ?></td>
            <td class="date-form descrption"><?php echo $place['description'] ?></td>
            <td class="date-form image">
              <img src="../admin/assets/imgGallery/<?php echo $place['image'] ?>" width="40px">
            </td>
            <td class="date-form type"><?php echo $place['type'] ?></td>
            <td class="date-form btn-flex option">
              <form method="POST" id="custom-register">
                <input type="hidden" name="id" id="id" value="<?php echo $place['id'] ?>" />
                <button type="submit" name="accion" value="Seleccionar" class="btn primary">Editar</button>
                <button type="submit" data-accion="Borrar" name="accion" value="Borrar" class="btn danger"
                  data-post-id="<?php echo $place['id']; ?>">Borrar</button>
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
