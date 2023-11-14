<?php
require_once "config/database.php";
require_once "./config/utilities.php";
$rol = 1;
validateRol($rol);

?>
<section id="add-form" class="add-form">

  <div class="container-form-crud">
    <div class="container-form-form">
      <h2 class="title-form">Solicitud</h2>
      <form method="POST" enctype="multipart/form-data" class="form-container">
        <label for="">Tipo de negocio</label>
        <label>Nombre del negocio:</label>
        <label>Imagen del negocio</label>
        <label for="">Descripción del negocio</label>
        <label for="">Tipo de producto</label>
        <label>Imagen del producto</label>
        <label for="">Nombre del propietario</label>
        <label for="">Dirreccion del local</label>
        <label for="">Numero de contacto</label>
      </form>
    </div>
  </div>
</section>


<?php require "partials/header.php";
require "partials/navbar.php"; ?>
