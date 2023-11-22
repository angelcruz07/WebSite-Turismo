<?php
require_once "config/database.php";
require_once "./config/utilities.php";
$rol = 1;
validateRol($rol);

$id = (isset($_POST['id']) ? $_POST['id'] : "");
$type = (isset($_POST['type'])) ? $_POST['type'] : '';
$name = (isset($_POST['name'])) ? $_POST['name'] : "";
$description = (isset($_POST['description'])) ? $_POST['description'] : "";
$phone_number = (isset($_POST['phone_number'])) ? $_POST['phone_number'] : "";
$location_url = (isset($_POST['location'])) ? $_POST['location'] : "";
$action = (isset($_POST['accion'])) ? $_POST['accion'] : "";
$image = (isset($_FILES['image']['name'])) ? $_FILES['image']['name'] : "";

$table = "business";
$file = "imgBusiness";
$location = "addBusiness.php";
$validFields = [
  "type",
  "name",
  "description",
  "phone_number",
  "location",
  "image"
];

$data = array(
  "id" => $id,
  "type" => $type,
  "name" => $name,
  "description" => $description,
  "location" =>  $location_url,
  "phone_number" => $phone_number,
  "table" => $table,
  "carpet" => $file
);
switch ($action) {
  case "Agregar":
    insertRegister($conn, $data, $validFields);
    header("Location: $location");
    break;
  case "Modificar":
    editRegister($conn, $data, $validFields);
    editImage($conn, $id, $image, $file, $table);
    header("Location: $location");
  case "Seleccionar":
    $selectedRestaurant = selectRegister($conn, $id, $table);
    if ($selectedRestaurant) {
      $type = $selectedRestaurant['type'];
      $name = $selectedRestaurant['name'];
      $description = $selectedRestaurant['description'];
      $phone_number = $selectedRestaurant['phone_number'];
      $location_url = $selectedRestaurant['location'];
      $image = $selectedRestaurant['image'];
    }
    break;
  case "Borrar";
    deleteRegister($conn, $id, $table, $file);
    header("Location: $location");
    break;
}
$restaurants = getQuery($conn, $table);
?>
 
 <script type="module">
  //Funcion de contador
  import {
    initCharacterCounter
  }
  from "http://localhost/WebSite-Turismo/admin/assets/js/limits.js"
  initCharacterCounter("title-business", 60);
  initCharacterCounter("description-business", 450);  
  initCharacterCounter("number-business", 14);

  
  const urlBase = window.location.protocol + "//" + window.location.host;
  let file = urlBase + "/WebSite-Turismo/admin/addBusiness.php";
</script> 

<?php require "partials/header.php";
require "partials/navbar.php"; ?>
<section id="add-form" class="add-form">
  <h1 class="title-index"> Agregar un Restaurante(o negocio)</h1>
  <div class="container-form-crud">
    <div class="container-form-form">
      <h2 class="title-form">Nueva publicacion</h2>
      <form method="POST" enctype="multipart/form-data" class="form-container">
        <div class="form-group">
          <input type="hidden" value="<?php echo $id ?>" name="id" id="id">
        </div>
        <div class="form-group">
          <label for="type">Selecciona el tipo de restaurant</label>
          <select name="type" id="type" required>
            <option value="<?php echo $type ?>"><?php echo $type ?></option>
            <option value="Mexicana"> Comida Mexicana</option>
            <option value="Rapida">Comida Rapida</option>
            <option value="Oriental">Comida oriental</option>
            <option value="Tradicional">Comida tradicional</option>
            <option value="Reposteria">Reposteria</option>
            <option value="Bebidas">Bebidas</option>
          </select>
        </div>
        <div class="form-group">
          <label for="name">Nombre del Restaurant</label>
          <input type="text" value="<?php echo $name; ?>" name="name" class="title-business" id="name" maxlength="55">
        </div>
        <div class="form-group">
          <label for="description">Descripción breve del restaurant:</label>
          <textarea name="description" id="description" maxlength="300" class="textarea description-business" rows="4" cols="30"
            required><?php echo $description; ?></textarea>
        </div>
        <div class="form-group">
          <label for="phone_number">Numero del telefono:</label>
          <input name="phone_number" class="number-business" id="phone_number" maxlength="300" value="<?php echo $phone_number; ?>"></input>
        </div>
        <div class="form-group">
          <label for="description">Ubicacion del lugar en google maps:</label>
          <textarea name="location" id="location" maxlength="300" required><?php echo  $location_url; ?></textarea>
        </div>
        <div class=" form-group">
          <label for="image">Agrega la imagen correspondiente al restaurant:</label><br>
          <?php if ($image != "") { ?>
          <img src="<?php echo $url ?>/admin/assets/imgBusiness/<?php echo $image ?>" title="Imagen seleccionada"
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
          <?php foreach ($restaurants as $restaurant) { ?>
          <tr class="form-add">
            <td class="date-form id"><?php echo $restaurant['id'] ?></td>
            <td class="date-form title"><?php echo $restaurant['name'] ?></td>
            <td class="date-form descrption"><?php echo $restaurant['description'] ?></td>
            <td class="date-form image">
              <img src=../admin/assets/imgBusiness/<?php echo $restaurant['image'] ?> width="40px">
            </td>
            <td class="date-form type"><?php echo $restaurant['type'] ?></td>
            <td class="date-form btn-flex option">
              <form method="POST" id="custom-register">
                <input type="hidden" name="id" id="id" value="<?php echo $restaurant['id'] ?>" />
                <button type="submit" name="accion" value="Seleccionar" class="btn primary">Editar</button>
                <button type="submit" data-accion="Borrar" name="accion" value="Borrar" class="btn danger"
                  data-post-id="<?php echo $restaurant['id']; ?>">Borrar</button>
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
