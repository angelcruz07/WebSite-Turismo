<?php
require "../partials/header2.php";
require "../partials/navbar.php";
$url = "http://" . $_SERVER['HTTP_HOST'] . "/WebSite-Turismo";
?>


<div class="container-front-page">
    <div class="degraded"></div>
     <div class="title-front-page">
       <h1>Servicios</h1>
     </div>
  <img src="<?php echo $url ?>/assets/imgServices/fondo-services.webp" alt="Portada de Servicios" title="Servicios" class="image-front-page">
</div>


<section class="services" id="services">
  <h1 class="title-index">Transporte</h1>

  <div class="container-services">

  <div class="service-box">
  <div class="services-rigth">
  <div class="icons">
      <img  src="<?php echo $url ?>/assets/icons/taxi.svg" alt="Icono taxi" title="icon-taxi">
  </div>
 
    <h2 class="subtitle">Taxi</h2>

  <table class="table-services">
    <thead>
      <tr>
        <th>DESTINO</th>
        <th>HORARIO</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>LUGAR</td>
        <td>00:00    </td>
     </tr>
     <tr>
        <td>LUGAR</td>
        <td>00:00    </td>
     </tr>
    </tbody>
  </table>
</div>
</div>



<div class="service-image-right"> 
  <img src="<?php echo $url ?>/assets/imgServices/bus.webp" alt="" class="img-services">
</div>

<!-- seccion 2 -->

<div class="services-left">
    <div class="service-image-left">
      <img src="<?php echo $url ?>/assets/imgServices/" alt="" class="img-services-lefth">
    </div>
    <div class="icons">
      <img  src="<?php echo $url ?>/assets/icons/taxi.svg" alt="Icono taxi" title="icon-taxi">
    </div>
    
<div class="service-left">
<table class="table-services">
    <thead>
      <tr>
        <th>DESTINO</th>
        <th>HORARIO</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>LUGAR</td>
        <td>00:00    </td>
     </tr>
     <tr>
        <td>LUGAR</td>
        <td>00:00    </td>
     </tr>
    </tbody>
  </table>
        </div>
      </div>
    </div>
  </div>
</div>
</section>


<?php
require "../partials/footer.php"
?>



