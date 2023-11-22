<?php
require_once "config/database.php";
require_once "./config/utilities.php";
$rol = 1;
validateRol($rol);
$id = (isset($_POST['id'])) ? $_POST['id'] : "";
$type = (isset($_POST['type'])) ? $_POST['type'] : '';
$route = (isset($_POST['route'])) ? $_POST['route'] : "";
$scheduls = (isset($_POST['scheduls'])) ? $_POST['scheduls'] : "";
$availability = (isset($_POST['availability'])) ? $_POST['availability'] : "";
$image = (isset($_FILES['image']['name'])) ? $_FILES['image']['name'] : "";
$action = (isset($_POST['accion'])) ? $_POST['accion'] : "";

$table = "services";
$file = "imgServices";
$location = "addService.php";
$validFields = ["type", "availability", "scheduls", "route", "image"];
$data = array(
  "id" => $id,
  "type" => $type,
  "availability" => $availability,
  "scheduls" => $scheduls,
  "route" => $route,
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
    $selectedService = selectRegister($conn, $id, $table);
    if ($selectedService) {
      $type = $selectedService['type'];
      $scheduls = $selectedService['scheduls'];
      $availability = $selectedService["availability"];
      $route = $selectedService['route'];
      $image = $selectedService['image'];
    }
    break;
  case "Borrar";
    deleteRegister($conn, $id, $table, $file);
    header("Location:$location");
    break;
}
$services = getQuery($conn, $table);
?>
 
 <script type="module">
  //Funcion de contador
  import {
    initCharacterCounter
  }
  from "http://localhost/WebSite-Turismo/admin/assets/js/limits.js"
  initCharacterCounter("route-title", 60);
  initCharacterCounter("schedule", 450);  
  

  
  const urlBase = window.location.protocol + "//" + window.location.host;
  let file = urlBase + "/WebSite-Turismo/admin/addService.php";
</script>  

<?php require "partials/header.php";
require "partials/navbar.php"; ?>

<section id="add-form" class="add-form">
  <h1 class="title-index">Agregar un servicio</h1>
  <div class="container-form-crud">
    <div class="container-form-form">
      <h2 class="title-form">Nueva publicacion</h2>

      <form method="POST" enctype="multipart/form-data" class="form-container">
        <div class="form-group">
          <input type="hidden" value="<?php echo $id ?>" name="id" id="id">
        </div>
        <div class="form-group">
          <label for="Type">Selecciona el tipo de transporte</label>
          <select name="type" id="type">
            <option value="<?php echo $type ?>"><?php echo $type ?></option>
            <option value="Taxi">Taxis</option>
            <option value="Autobus">Autobus</option>
            <option value="Urban">Urban</option>
            <option value="Ruletera">Ruletera</option>
          </select>
        </div>
        <div class="form-group">
          <label for="route">Ruta(Salida - Destino)</label>
          <input type="route" value="<?php echo $route; ?>" name="route" class="route-title" id="route" maxlength="55">
        </div>
        <div class="form-group">
          <label>Disponibilidad</label>
          <select name="availability" id="availability">
            <option value="<?php echo $availability ?>"><?php echo $availability ?></option>
            <option value="Lunes a Viernes">Lunes a Viernes</option>
            <option value="Lunes a Sabado">Lunes a Sabado</option>
            <option value="Lunes a Domingo">Lunes a Domingo</option>
          </select>
        </div>
        <div class="form-group">
          <label for="name">Horarios:</label>
          <input type="scheduls" value="<?php echo $scheduls; ?>" name="scheduls" class="schedule" id="scheduls" maxlength="55">
        </div>
        <div class=" form-group">
          <label for="image">Agrega la imagen correspondiente al platillo:</label><br>
          <?php if ($image != "") { ?>
          <img src="<?php echo $url ?>/admin/assets/imgServices/<?php echo $image ?>" title="Imagen seleccionada"
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
            <th class="date-form-colum title">Tipo</th>
            <th class="date-form-colum description">Ruta</th>
            <th class="date-form-colum image">Imagen</th>
            <th class="date-form-colum type">Horarios</th>
            <th class="date-form-colum option">Opciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($services as $service) { ?>
          <tr class="form-add">
            <td class="date-form id"><?php echo $service['id'] ?></td>
            <td class="date-form title"><?php echo $service['type'] ?></td>
            <td class="date-form descrption"><?php echo $service['route'] ?></td>
            <td class="date-form image">
              <img src="../admin/assets/imgServices/<?php echo $service['image'] ?>" width="40px">
            </td>
            <td class="date-form type"><?php echo $service['scheduls'] ?></td>
            <td class="date-form btn-flex option">
              <form method="POST" id="custom-register">
                <input type="hidden" name="id" id="id" value="<?php echo $service['id'] ?>" />
                <button type="submit" name="accion" value="Seleccionar" class="btn primary">Editar</button>
                <button type="submit" data-accion="Borrar" name="accion" value="Borrar" class="btn danger"
                  data-post-id="<?php echo $service['id']; ?>">Borrar</button>
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
