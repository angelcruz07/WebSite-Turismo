<?php
require "../partials/header2.php";
require "../partials/navbar.php";
require "../partials/scroll-top.php";
?>
<link rel="stylesheet" href="<?php echo $url; ?>/assets/css/services.css" type="text/css">
</head>

<body class="scroll-top">
  <div class="container-front-page">
    <div class="degraded"></div>
    <div class="title-front-page">
      <h1>Transporte</h1>
    </div>
    <img src="<?php echo $url ?>/assets/imgServices/servicios.jpg" alt="Portada de Transporte" title="Transporte" class="image-front-page">
  </div>
  <h1 class="title-index">Movilidad</h1>
  <section class="services" id="services">
    <div class="container-service">
      <div class="service-box">
        <div class="service-image">
          <img src="<?php echo $url ?>/assets/imgServices/RUTA.png" alt="" class="img-services">
        </div>
        <h2 class="subtitle">Taxis</h2>
        <!-- descripcion equivale a tabla  -->
        <div class="description-service">
          <h3>Ruta</h3>
          <img src="<?php echo $url ?>/assets/icons/route.svg" alt="" class="img-services">
          <span>Sultepec - Tejupilco</span>
          <h3>Disponibilidad</h3>
          <span>Lunes - Domingo</span>
          <h3>Horarios</h3>
          <img src="<?php echo $url ?>/assets/icons/clock.svg" alt="" class="img-services">
          <span>7:00am - 6:00pm</span> <span>Abierto</span>
        </div>
      </div>
    </div>
  </section>
  <?php require "../partials/footer2.php" ?>
