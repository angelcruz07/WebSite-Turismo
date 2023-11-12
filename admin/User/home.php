<?php
require_once "../config/database.php";
require_once "../config/utilities.php";
$rol = 2;
validateRol($rol);
require_once "../partials/headerUser.php";
require_once "../partials/navbarUser.php";
$conn; 

function clean($data) {
  return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $business_type = $name_business = $business_image = $description = $product_type = $product_image = $name = $adress = $phone = "";

  foreach ($_POST as $key => $value) {
      $$key = clean($value);
  }

  $uploadDirectory = __DIR__ . "/User/imageUser/";

  function processImage($imageField) {
      global $uploadDirectory;

      if (isset($_FILES[$imageField]) && $_FILES[$imageField]['error'] == 0) {
          $fileName = $uploadDirectory . basename($_FILES[$imageField]['name']);

          if (move_uploaded_file($_FILES[$imageField]['tmp_name'], $fileName)) {
              return basename($_FILES[$imageField]['name']);
          } else {
              echo "Error al subir la imagen de $imageField.";
          }
      } else {
          echo "Error al cargar la imagen de $imageField.";
      }

      return false;
  }

  $businessImage = processImage('business_image');
  $productImage = processImage('product_image');

  if ($businessImage !== false && $productImage !== false) {
      $sql = "INSERT INTO request (business_type, business, description, product_type, name, adress, phone, business_image, product_image) VALUES ('$business_type', '$name_business', '$description', '$product_type', '$name', '$adress', '$phone', '$businessImage', '$productImage')";

      if ($conn->query($sql) === TRUE) {
          echo "Datos insertados correctamente";
      } else {
          echo "Error al insertar datos: " . $conn->error;
      }
  }
}
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
          <button type="reset" value="Cancelar" name="accion" class="form-btn danger">Cancelar</button>
        </div>
      </form>
    </div>
</section>
