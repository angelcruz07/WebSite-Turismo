<?php
require_once "../admin/config/database.php";
require_once "../admin/config/utilities.php";
require "../partials/header2.php";
require "../partials/navbar.php";
require "../partials/scroll-top.php";
$table = 'services';
$services = getQuery($conn, $table);
?>
<link rel="stylesheet" href="<?php echo $url; ?>/assets/css/services.css" type="text/css">
</head>

<body class="scroll-top">
  <div class="container-front-page">
    <div class="degraded"></div>
    <div class="title-front-page">
      <h1>Transporte</h1>
    </div>
    <img src="<?php echo $url ?>/admin/assets/imgServices/servicios.jpg" alt="Portada de Transporte" title="Transporte"
      class="image-front-page">
  </div>
  <h1 class="title-index">Movilidad</h1>
  <section class="services" id="services">
    <?php
    $alert = '<div class="alert-not-event"><span class="alert">"Ups no hay servicios, estamos trabajando en ello, ¡Mantente al tanto!</span></div>';
    $sql = "SELECT 1 FROM $table LIMIT 1";
    $stmt = $conn->query($sql);
    if ($stmt->rowCount() == 0) {
      echo $alert;
    }
    ?>
    <?php foreach ($services as $service) { ?>
    <div class="container-service">
      <div class="service-box">
        <div class="service-image">
          <img src="<?php echo $url ?>/admin/assets/imgServices/<?php echo $service['image'] ?>" alt=""
            class="img-services">
        </div>
        <h2 class="subtitle"><?php echo $service['type'] ?></h2>
        <!-- descripcion equivale a tabla  -->
        <div class="description-service">
          <h3>Ruta</h3>
          <img src="<?php echo $url ?>/assets/icons/route.svg" alt="" class="img-services">
          <span><?php echo $service['route'] ?></span>
          <h3>Disponibilidad</h3>
          <span><?php echo $service['availability'] ?></span>
          <h3>Horarios</h3>
          <img src="<?php echo $url ?>/assets/icons/clock.svg" alt="" class="img-services">
          <span><?php echo $service['scheduls'] ?></span> <span>Abierto</span>
        </div>
      </div>
    </div>
    <?php } ?>
  </section>
  <?php require "../partials/footer2.php" ?>