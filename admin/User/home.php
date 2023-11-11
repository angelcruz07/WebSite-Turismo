<?php
require_once "../config/database.php";
require_once "../config/utilities.php";
$rol = 2;
validateRol($rol);
require_once "../partials/headerUser.php";
require_once "../partials/navbarUser.php";
$conn;

//VARIABLES 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // DATOS FORMULARIO
  $business_type = isset($_POST['business_type']) ? $_POST['business_type'] : "";
  $name_business = isset($_POST['name_business']) ? $_POST['name_business'] : "";
  $business_image = isset($_FILES['business_image']) ? $_FILES['business_image']['name'] : "";
  $description = isset($_POST['description']) ? $_POST['description'] : "";
  $product_type = isset($_POST['product_type']) ? $_POST['product_type'] : "";
  $product_image = isset($_FILES['product_image']) ? $_FILES['product_image']['name'] : "";
  $name = isset($_POST['name']) ? $_POST['name'] : "";
  $adress = isset($_POST['adress']) ? $_POST['adress'] : "";
  $phone = isset($_POST['phone']) ? $_POST['phone'] : "";
}

// VALIDACION 
// if (
//   !empty($business_type) &&
//   !empty($name_business) &&
//   !empty($business_image) &&
//   !empty($description) &&
//   !empty($product_type) &&
//   !empty($product_image) &&
//   !empty($name) &&
//   !empty($adress) &&
//   !empty($phone)
// ) {
// INSERTAR A LA BASE DE DATOS 
$sql = $conn->prepare("INSERT INTO request (`business_type`, `business`, `business_image`, `description`, `product_type`, `product_image`, `name`, `adress`, `phone_number`) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

$sql->bindValue(1, $business_type);
$sql->bindValue(2, $name_business);
$sql->bindValue(3, $business_image);
$sql->bindValue(4, $description);
$sql->bindValue(5, $product_type);
$sql->bindValue(6, $product_image);
$sql->bindValue(7, $name);
$sql->bindValue(8, $adress);
$sql->bindValue(9, $phone);

$sql->execute();
//   if ($conn->query($sql) === TRUE) {
//     echo "El registro de tu negocio ha sido exitoso, el administrador pronto verá tus datos...";
//   } else {
//     echo "Error al enviar tus datos: " . $conn->error;
//   }
// } else {
//   echo "Por favor, llena todos los campos del formulario";
// }

?>


<h1>Usuario normal</h1>
<!--Formulario de USER-->
<section id="add-form" class="add-form">
  <div class="container-form-crud">
    <div class="container-form-form">
      <h2 class="title-form">Datos del negocio</h2>

      <form method="POST" class="form-container">
        <div class="form-group">
          <input type="hidden">
        </div>
        <div class="form-group">
          <label for="Type">Selecciona el tipo de negocio</label>
          <select name="business_type" id="business_type">
            <option value=""></option>
            <option value="Restaurante">Restaurante</option>
            <option value="Fonda">Fonda</option>
            <option value="Bar">Bar</option>
            <option value="Local">Local</option>
            <option value="Tienda">Tienda</option>
          </select>
        </div>
        <div class="form-group">
          <label for="title"> Nombre del negocio:</label>
          <input type="text" value="" name="name_business" id="name_business" maxlength="22" required>
        </div>
        <div class=" form-group">
          <label for="image">Imagen del negocio:</label><br>
          <img src="<?php echo $url ?>/admin/assets/imgEvent/<?php echo $image ?>" title="Imagen seleccionada" width="50px">
          <input type="file" name="business_image" id="business_image">
        </div>
        <div class="form-group">
          <label for="description"> Agrega una Descripción del negocio:</label>
          <textarea name="description" id="description" maxlength="300" class="textarea" rows="4" cols="30" required></textarea>
        </div>
        <div class="form-group">
          <label for="Type">Selecciona el tipo de producto</label>
          <select name="product_type" id="product_type">
            <option value=""></option>
            <option value="Comida_mexicana">Comida Mexicana</option>
            <option value="Comida_rapida">Comida Rapida</option>
            <option value="Comida_oriental">Comida Oriental</option>
            <option value="Comida_tradicional">Comida Tradicional</option>
            <option value="Bebidas">Bebidas</option>
            <option value="Reposteria">Reposteria</option>
          </select>
        </div>
        <div class=" form-group">
          <label for="product_image">Imagen del producto:</label><br>
          <img src="<?php echo $url ?>/admin/assets/imgEvent/<?php echo $image ?>" title="Imagen seleccionada" width="50px">
          <input type="file" name="product_image" id="product_image">
        </div>

        <h2 class="title-form">Datos del propietario</h2>
        <div class="form-group">
          <label for="title"> Nombre completo:</label>
          <input type="text" value="" name="name" id="name" maxlength="22" required>
        </div>
        <div class="form-group">
          <label for="title"> Direccion:</label>
          <input type="text" value="" name="adress" id="adress" required>
        </div>
        <div class="form-group">
          <label for="title"> Numero de telefono:</label>
          <input type="text" value="" name="phone" id="phone" maxlength="22" required>
        </div>


        <!--Botones -->
        <div class="group-buttons">
          <button type="submit" value="Agregar" name="accion" class="form-btn primary">Enviar</button>
          <button type="submit" value="Cancelar" name="accion" class="form-btn danger">Cancelar</button>
        </div>
      </form>
    </div>
</section>
