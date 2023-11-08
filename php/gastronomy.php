<?php
require "../partials/header2.php";
require "../partials/navbar.php";
require "../partials/scroll-top.php";
$url_images = "http://" . $_SERVER['HTTP_HOST'] . "/WebSite-Turismo/assets/imgGastronomy"; ?>
<link rel="stylesheet" href="<?php echo $url; ?>/assets/css/gastronomy.css">

</head>

<body class="scroll-top">

  <div class="container-front-page">
    <div class="degraded"></div>
    <div class="title-front-page">
      <h1>Gastronomía</h1>
    </div>
    <img src="<?php echo $url ?>/assets/imgGastronomy/fondo.webp" alt="Portada de gastronomia" title="Gastronomia"
      class="image-front-page">
  </div>
<h2 class="title-index">"Sabores sultepequenses delicias que enamoran tu paladar"</h2>
  <!--Lista de lugares o opciones -->
  <div class="options">
    <ul>
      <li class="active links" data-nombre="all">Todos</li>
      <li class="links" data-nombre="foodOne">Comida Mexicana</li>
      <li class="links" data-nombre="foodTwo">Comida Rápida</li>
      <li class="links" data-nombre="foodThree">Comida Oriental</li>
      <li class="links" data-nombre="foodFor">Comida Tradicional</li>
      <li class="links" data-nombre="foodfive">Bebidas</li>
      <li class="links" data-nombre="foodsix">Reposteria</li>


    </ul>
  </div>

  <section id="gastronomy">
  <div class="container-card-gastronomy">
      <div class="card filter foodFor">
        <div class="card_landing" style="--i:url(<?php echo $url_images ?>/caldo.jpg)">
          <h6>Caldo</h6>
        </div>
        <div class="card_info">
          <div class="head">
            <p class="title">Caldo</p>
            <div class="description">
            </div>
          </div>
          <div class="content">
            <p class="title">Descripcion</p>
            <ul class="list">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Assumenda voluptatibus excepturi, architecto harum dicta quia
                dolorum unde eaque nostrum molestiae a quasi accusantium nesciunt </p>
            </ul>
          </div>
        </div>
      </div>

     

</div>
<div class="container-lodging filter foodFor">
      <div class="lodging-box-left">
        <div class="lodging-image">
          <img src="<?php echo $url ?>/assets/imgGastronomy/locales.jpeg" alt="Imagen del hotel">
        </div>
        <div class="description-lodging left">
          <h3>Nombre de el lugar</h3>
          <p>Descripcion del hospedaje Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet omnis vel deserunt
            distinctio, beatae quod molestias aliquam modi natus voluptas, earum maxime saepe illum possimus esse veniam
            dolore cum nisi!
          </p><br>
          <div class="calf-star">
            <img src="../assets/icons/whatsapp.svg" alt="Numero de Contacto">
          </div>
          <div class="link-lodging">
            <a href="#">Ver en el mapa</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="<?php echo $url; ?>/assets/js/jquery-3.3.1.min.js"></script>

  <script src="<?php echo $url; ?>/assets/js/bottons-links.js"></script>


  <?php require "../partials/footer2.php" ?>

