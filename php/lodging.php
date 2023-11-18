<?php
require_once "../admin/config/database.php";
require_once "../admin/config/utilities.php";
require_once "../partials/header2.php";
require_once "../partials/navbar.php";
require_once "../partials/scroll-top.php";
$table = 'lodging';
$lodgings = getQuery($conn, $table);
?>
<link rel="stylesheet" href="<?php echo $url; ?>/assets/css/lodging.css" type="text/css">
</head>

<body id="scroll-top">

  <div class="container-front-page">
    <div class="degraded"></div>
    <div class="title-front-page">
      <h1>Hospedajes</h1>
    </div>
    <img src="<?php echo $url ?>/admin/assets/imgLodging/portada.jpg" alt="Portada de hospedajes " title="Hospedajes" class="image-front-page">
  </div>
  <section class="lodging" id="lodging">
    <h2 class="title-index">Donde Descansar Hospedajes Económicos en Sultepec</h2>
    <?php
    $alert = '<div class="alert-not-event"><span class="alert">"Ups no hay hospedajes, estamos trabajando en ello, ¡Mantente al tanto!</span></div>';
    $sql = "SELECT 1 FROM $table LIMIT 1";
    $stmt = $conn->query($sql);
    if ($stmt->rowCount() == 0) {
      echo $alert;
    }
    ?>
    <?php foreach ($lodgings as $lodging) { ?>
      <div class="container-lodging">
        <div class="lodging-box">
          <div class="lodging-image">
            <img src="<?php echo $url ?>/admin/assets/imgLodging/<?php echo $lodging['image'] ?>" alt="Imagen del hotel">
          </div>
          <div class="description-lodging">
            <h3><?php echo $lodging['name'] ?></h3>
            <p><?php echo $lodging['description'] ?></p><br>
            <div class="calf-star">
              <img src="../assets/icons/star.svg" alt="">
              <img src="../assets/icons/star.svg" alt="">
              <img src="../assets/icons/star.svg" alt="">
              <img src="../assets/icons/star-regular.svg" alt="">
              <img src="../assets/icons/star-regular.svg" alt="">
            </div>
            <div class="link-lodging">
              <a href="<?php echo $lodging['location'] ?>" target="_blank">Ver en el mapa</a>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </section>
  <?php require "../partials/footer2.php" ?>
