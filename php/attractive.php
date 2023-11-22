<?php
require_once "../admin/config/database.php";
require_once "../admin/config/utilities.php";
require_once "../partials/header2.php";
require_once  "../partials/navbar.php";
require_once  "../partials/scroll-top.php";
$images = "http://" . $_SERVER['HTTP_HOST'] . "/WebSite-Turismo/admin/assets/imgGallery/";
$table = 'gallery';
$places = getQuery($conn, $table);
?>
<link rel="stylesheet" href="<?php echo $url; ?>/assets/css/attractive.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
<link rel="stylesheet" href="<?php echo $url; ?>/assets/css/buttons.css" type="text/css">
</head>

<body id="scroll-top">

  <div class="container-front-page">
    <div class="degraded"></div>
    <div class="title-front-page">
      <h1>Atractivos</h1>
    </div>
    <img src="<?php echo $url ?>/admin/assets/imgGallery/front-page.jpg" alt="Portada de gastronomia" title="Gastronomia" class="image-front-page">
  </div>

  <section class="attractive" id="attractive">
    <h2 class="title-index">Descubre las maravillas turisticas de Sultepec</h2>
    <!--Lista de lugares o opciones -->
    <div class="options">
      <ul>
        <li class="active links" data-nombre="all">Todos</li>
        <li class="links" data-nombre="Lugares">Lugares</li>
        <li class="links" data-nombre="Mirador">Miradores</li>
        <li class="links" data-nombre="Parques">Parques</li>
        <li class="links" data-nombre="Monumentos">Monumentos</li>
        <li class="links" data-nombre="Parroquia">Parroquias</li>
      </ul>
    </div>

    <!--Contenedor de la galeria -->

    <div class="container-gallery">
      <?php
      $alert = '<div class="alert-not-event"><span class="alert">"Ups no hay lugares, estamos trabajando en ello, ¡Mantente al tanto!</span></div>';
      $sql = "SELECT 1 FROM $table LIMIT 1";
      $stmt = $conn->query($sql);
      if ($stmt->rowCount() == 0) {
        echo $alert;
      }
      ?>
      <?php foreach ($places as $place) { ?>
        <div class="card my-card box filter <?php echo $place['type'] ?>">
          <a href="<?php echo $images;
                    echo $place['image']; ?>">
            <div class="face front">
              <img src="<?php echo $images;
                        echo $place['image']; ?>" alt="<?php echo $place["title"] ?>" title="<?php echo $place["title"] ?>">
              <h3><?php echo $place['name'] ?></h3>

            </div>
            <div class=" face back">
              <h3><?php echo $place['name'] ?></h3>
              <p><?php echo $place['description'] ?></p>
              <div class="link"></div>
            </div>
          </a>
        </div>
      <?php } ?>
  </section>

  <div class="container-btn">
      <div class="show-map-btn">
          <a href="<?php echo $url ?>/php/location.php">Ubica los destinos</a>
      </div>
 </div>
  <script src="<?php echo $url; ?>/assets/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo $url; ?>/assets/js/bottons-links.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo $url; ?>/assets/js/lightbox.js"></script>
  <?php require "../partials/footer2.php" ?>
