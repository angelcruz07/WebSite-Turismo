<?php
require_once "../admin/config/database.php";
require_once "../admin/config/utilities.php";
require_once "../partials/header2.php";
require_once "../partials/navbar.php";
require_once "../partials/scroll-top.php";
$url_images = "http://" . $_SERVER['HTTP_HOST'] . "/WebSite-Turismo/admin/assets/imgGastronomy/";
$table = "gastronomy";
$saucers = getQuery($conn, $table);
$table2 = "business";
$business = getQuery($conn, $table2);
?>
<link rel="stylesheet" href="<?php echo $url; ?>/assets/css/gastronomy.css">
</head>

<body id="scroll-top">

  <div class="container-front-page">
    <div class="degraded"></div>
    <div class="title-front-page">
      <h1>Gastronomía</h1>
    </div>
    <img src="<?php echo $url ?>/admin/assets/imgGastronomy/fondo.webp" alt="Portada de gastronomia" title="Gastronomia" class="image-front-page">
  </div>
  <h2 class="title-index">"Sabores sultepequenses delicias que enamoran tu paladar"</h2>
  <!--Lista de lugares o opciones -->
  <div class="options">
    <ul>
      <li class="active links" data-nombre="all">Todos</li>
      <li class="links" data-nombre="Mexicana">Comida Mexicana</li>
      <li class="links" data-nombre="Rapida">Comida Rápida</li>
      <li class="links" data-nombre="Oriental">Comida Oriental</li>
      <li class="links" data-nombre="Tradicional">Comida Tradicional</li>
      <li class="links" data-nombre="Reposteria">Bebidas</li>
      <li class="links" data-nombre="Bebidas">Reposteria</li>
    </ul>
  </div>

  <section id="gastronomy">
    <div class="container-card-gastronomy">
      <?php
      $alert = '<div class="alert-not-event"><span class="alert">"Ups no hay platillos, estamos trabajando en ello, ¡Mantente al tanto!</span></div>';
      $sql = "SELECT 1 FROM $table LIMIT 1";
      $stmt = $conn->query($sql);
      if ($stmt->rowCount() == 0) {
        echo $alert;
      }
      ?>

      <?php foreach ($saucers as $saurcer) { ?>
        <div class="card filter <?php echo $saurcer['type'] ?>">
          <div class="card_landing" style="--i:url(<?php echo $url_images;
                                                    echo $saurcer['image']; ?>">
            <h6><?php echo $saurcer['name'] ?></h6>
          </div>
          <div class="card_info">
            <div class="head">
              <p class="title"><?php echo $saurcer['name'] ?></p>
              <div class="description">
              </div>
            </div>
            <div class="content">
              <p class="title">Descripcion</p>
              <ul class="list">
                <p><?php echo $saurcer['description'] ?></p>
              </ul>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
    <h2 class="title-index">Dónde Comer: Especialidades Gastronómicas de Sultepec</h2>

    <?php
    $alert = '<div class="alert-not-event"><span class="alert">"Ups no hay restaurants, estamos trabajando en ello, ¡Mantente al tanto!</span></div>';
    $sql = "SELECT 1 FROM $table2 LIMIT 1";
    $stmt = $conn->query($sql);
    if ($stmt->rowCount() == 0) {
      echo $alert;
    }
    ?>


    <?php foreach ($business as $busine) { ?>
      <div class="container-lodging filter <?php echo $busine['type']; ?>">
        <div class="lodging-box-left">
          <div class="lodging-image">
            <img src="<?php echo $url ?>/admin/assets/imgBusiness/<?php echo $busine['image']; ?>" alt="<?php echo $busine['name'] ?>">
          </div>
          <div class="description-lodging left">
            <h3><?php echo $busine['name']; ?></h3>
            <p><?php echo $busine['description']; ?></p><br>
            <div class="calf-star">
              <a href="#">
                <img src="../assets/icons/whatsapp.svg" alt="Numero de Contacto">
              </a>
            </div>
            <div class="link-lodging">
              <a href="<?php echo $busine['location']; ?>">Ver en el mapa</a>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>

    <div class="register-business">
      <a href="<?php echo $url ?>/admin/register.php" class="btn2">Registra tu negocio </a>
    </div>
  </section>

  <script src="<?php echo $url; ?>/assets/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo $url; ?>/assets/js/bottons-links.js"></script>
  <?php require "../partials/footer2.php" ?>
