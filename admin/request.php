<?php
require_once "config/database.php";
require_once "./config/utilities.php";
$rol = 1;
validateRol($rol);
$table = "request";
$requests = getQuery($conn, $table);
?>
<section id="add-form" class="add-form">
<?php foreach($requests as $request) { ?>
  <div class="container-form-crud">
    <div class="container-form-form">
      <h2 class="title-form">Solicitud</h2>
      <form method="POST" enctype="multipart/form-data" class="form-container">
      <div class="container-titles">
        <label class="label-request"  for="">Tipo de negocio:</label>
        <label class="label-request" >Nombre del negocio:</label>
      </div> 
      <div class="container-info">
          <span><?php echo $request["business_type"]?></span>
          <span><?php echo $request["business"]?></span>
      </div>
      <div class="container-titles">
          <label class="label-request" >Imagen del negocio</label>
          <label class="label-request" >Imagen del producto</label>
      </div>
        <div class="container-img-request">
        <img class="img-request" src="../admin/assets/imgUser/<?php echo $request["business_image"]?>"/>
        <img class="img-request" src="../admin/assets/imgUser/<?php echo $request["product_image"]?>"/>
        </div>
        <div class="container-titles">
       <label class="label-request"  for="">Descripción del negocio</label>
       <label class="label-request"  for="">Tipo de producto</label>
       </div>

       <span><?php echo $request["description"]?></span>
        <span><?php echo $request["product_type"]?></span>
       <label class="label-request"  for="">Nombre del propietario</label>

       
        <span><?php echo $request["name"]?></span>
       <label class="label-request"  for="">Dirreccion del local</label>
        <span><?php echo $request["address"]?></span>
       <label class="label-request"  for="">Numero de contacto</label>
        <span><?php echo $request["phone_number"]?></span>
      </form>
    </div>
  </div>
 <?php } ?>
</section>
<?php require "partials/header.php";
require "partials/navbar.php"; ?>
