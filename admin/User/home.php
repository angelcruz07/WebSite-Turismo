<?php
require_once "../config/database.php";
require_once "../config/utilities.php";
$rol = 2;
validateRol($rol);
require_once "../partials/headerUser.php";
require_once "../partials/navbarUser.php";
$conn;

//Datos del formulario a la basede datos 
$business_type = $_POST['business_type'];
$name_business = $_POST['name_busines'];
$business_image = $_FILES['business_image'];
$description = $_POST['description'];
$product_type = $_POST['product_type'];
$product_image = $_FILES['product_image'];
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];

$send_date = "INSERT INTO request('business_type', 'business', 'business_image', 'description', 'product_type', 'product_image', 'name', 'address', 'phone_number') 
              VALUES('$business_type', '$name_business', '$business_image', '$description', '$product_type', '$product_image', '$name', '$address', '$phone')";

?>

<h1>Usuario normal</h1>
<!--Formulario de USER-->
<section id="add-form" class="add-form">
  <div class="container-form-user">
    <div class="container-form-form user">
      <h2 class="title-form">Datos del negocio</h2>
      <form method="POST" enctype="multipart/form-data" class="form-container">
        <div class="form-group">
          <label for="Type">Selecciona el tipo de negocio</label>
          <select name="business_type" id="business_type" required>
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
          <input type="file" name="product_image" id="product_image" required>
        </div>

        <h2 class="title-form">Datos del propietario</h2>
        <div class="form-group">
          <label for="title"> Nombre completo:</label>
          <input type="text" value="" name="name" id="name" maxlength="22" required>
        </div>
        <div class="form-group">
          <label for="title"> Direccion:</label>
          <input type="text" value="" name="address" id="address" required>
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
