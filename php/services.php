<?php
require "../partials/header2.php";
require "../partials/navbar.php";
$url = "http://" . $_SERVER['HTTP_HOST'] . "/WebSite-Turismo/assets/imgServices";
?>
<div class="container-front-page">
  <div class="degraded"></div>
  <div class="title-front-page">
    <h1>Servicios</h1>
  </div>
  <img src="<?php echo $url ?>/fondo-services.webp" alt="Portada de Servicios" title="Servicios" class="image-front-page">
</div>
<div class="title">
  <h1>TRANSPORTE</h1>  </div>
  <div class="container-services">
  <div class="icons">
         <img  src="<?php echo $url ?>/assets/icons/taxi.svg" alt="Icono taxi" title="icon-taxi">
  </div>
    <div class="services">
    <h2 class="subtitle">TAXI</h2>
    <table class="table-services">
  
  <tr>
    <th>DESTINO</th>
    <th>HORARIO</th>
  </tr>
  <tr>
    <td>LUGAR</td>
    <td>00:00    </td>
  </tr>
  <tr>
    <td>LUGAR</td>
    <td>00:00</td>
  </tr>
    </table> </div>
    <img src="<?php echo $url ?>/bus.webp" alt="" class="img-services">
</div>
<!-- seccion 2 -->
<div class="container-services-2">
  <img src="<?php echo $url ?>/bus.webp" alt="" class="img-services-dos">
  <div class="icons-2">
    <!-- ICONOOO -->
  </div>
  <div class="services-2">
    <h2 class="colectivo-2"> COLECTIVO</h2>
    <table class="table-services-2">
      <tr>
        <th>DESTINO</th>
        <th>HORARIO</th>
      </tr>
      <tr>
        <td>LUGAR</td>
        <td>00:00</td>
      </tr>
      <tr>
        <td>LUGAR</td>
        <td>00:00</td>
      </tr></table>
    </div>
  </div>
</div>

<?php
require "../partials/footer.php"
?>



