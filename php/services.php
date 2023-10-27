<?php
require "../partials/header2.php";
require "../partials/navbar.php";
require "../partials/scroll-top.php";

?>
<div class="container-front-page">
  <div class="degraded"></div>
  <div class="title-front-page">
    <h1>Transporte</h1>
  </div>
  <img src="<?php echo $url ?>/assets/imgServices/servicios.jpg" alt="Portada de Transporte" title="Transporte" class="image-front-page">
</div>
<section class="services" id="services">
  <h1 class="title-index">Transporte</h1>
  <div class="container-service">
    <div class="service-box-left">
      <div class="service-image">
        <img src="<?php echo $url ?>/assets/imgServices/bus.webp" alt="" class="img-services">
        <div class="overlay-left">
          <p>UBICACION</p>
        </div>
      </div>
      <div class="description-service left">
        <h2 class="subtitle">Colectivo</h2>
        <div class="horarios-services">
          <table>
            <tr>
              <th>Horario Inicio=00:00</th>
              <th>Horario Salida=00:00</th>
            </tr>
          </table>
        </div>
        <table class="table-services-1">
          <thead>
            <tr>
              <th>DESTINO</th>
              <th>HORARIO</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>LUGAR</td>
              <td>00:00 </td>
            </tr>
            <tr>
              <td>LUGAR</td>
              <td>00:00 </td>
            </tr>
            <tr>
              <td>LUGAR</td>
              <td>00:00 </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="service-box">
      <div class="service-image">
        <img src="<?php echo $url ?>/assets/imgServices/bus.webp" alt="" class="img-services">

        <div class="overlay">
          <p>UBICACION</p>
        </div>
      </div>
      <!-- descripcion equivale a tabla  -->
      <div class="description-service">
        <h2 class="subtitle">Combi</h2>
        <div class="horarios-services">
          <table>
            <tr>
              <th>Horario inicio=00:00</th>
              <th>Horario salida=00:00</th>
            </tr>
          </table>
        </div>
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
              <td>00:00 </td>
            </tr>
            <tr>
              <td>LUGAR</td>
              <td>00:00 </td>
            </tr> 
            <tr>
              <td>LUGAR</td>
              <td>00:00 </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="service-box-left">
      <div class="service-image">
        <img src="<?php echo $url ?>/assets/imgServices/bus.webp" alt="" class="img-services">
        <div class="overlay-left">
          <p> UBICACION</p>
        </div>
      </div>
      <div class="description-service left">
        <h2 class="subtitle">Autobus</h2>
        <div class="horarios-services">
          <table>
            <tr>
              <th>Horario inicio=00:00</th>
              <th>Horario salida=00:00</th>
            </tr>
          </table>
        </div>
        <table class="table-services-1">
          <thead>
            <tr>
              <th>DESTINO</th>
              <th>HORARIO</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>LUGAR</td>
              <td>00:00 </td>
            </tr>
            <tr>
              <td>LUGAR</td>
              <td>00:00 </td>
            </tr>
            <tr>
              <td>LUGAR</td>
              <td>00:00 </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="service-box">
      <div class="service-image">
        <img src="<?php echo $url ?>/assets/imgServices/bus.webp" alt="" class="img-services">

        <div class="overlay">
          <p> Calificacion</p>
        </div>
      </div>
      <!-- descripcion equivale a tabla  -->
      <div class="description-service">
        <h2 class="subtitle">Taxi</h2>
        <div class="horarios-services">
          <table>
            <tr>
              <th>Horario inicio=00:00</th>
              <th>Horario salida=00:00</th>
            </tr>
          </table>
        </div>
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
              <td>00:00 </td>
            </tr>
            <tr>
              <td>LUGAR</td>
              <td>00:00 </td>
            </tr>
            <tr>
              <td>LUGAR</td>
              <td>00:00 </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<?php require "../partials/footer2.php" ?>
