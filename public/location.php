<?php
require "../partials/header2.php";
require "../partials/navbar.php";
require "../partials/scroll-top.php";


?>
<link rel="stylesheet" href="<?php echo $url; ?>/assets/css/location.css" type="text/css">
<link rel="stylesheet" href="<?php echo $url; ?>/assets/css/buttons.css" type="text/css">
</head>

<body class="scroll-top">

  <div class="container-front-page">
    <div class="degraded"></div>
    <div class="title-front-page">
      <h1>Nuestra Ubicacion</h1>
    </div>
    <img src="<?php echo $url ?>/admin/assets/imgLocation/front-page.jpg" alt="Portada de Ubicacion" title="Ubicacion" class="image-front-page">
  </div>
  <h2 class="title-index">Ubicacion Geográfica</h2>
  <div class="container-btn">
    <div class="show-map-btn">
      <a href="<?php echo $url ?>/php/gastronomy.php">Sabor Local: Mejores Restaurantes y Cafeterías en Sultepec</a>
    </div>
    <div class="show-map-btn">
      <a href="<?php echo $url ?>/php/services.php">Cómo Llegar a Sultepec Consejos de Transporte </a>
    </div>
    <div class="show-map-btn">
      <a href="<?php echo $url ?>/php/lodging.php"> Hoteles y Alojamientos en Sultepec</a>
    </div>
  </div>

  <section class="ubication" id="location">
    <div class="container-ubication">
      <div class="container-map">
        <h2 class="title-index">Mapa Territorial</h2>
        <iframe src="https://www.google.com/maps/d/embed?mid=1LwYd4jbEay2rivpSh2MEulo-UltvtNg&ehbc=2E312F" width="540" height="480"></iframe>
        <div class="container-location">
          <p class="location-text">Sultepec de Pedro Ascencio de Alquisiras, ubicado al sur del estado de México, es una
            joya
            escondida que deslumbra a los visitantes con su encanto. la belleza de la región de Tierra Caliente.
            Adéntrate en
            este rincón único del sur del estado de México y descubre un lugar que captura el corazón de quienes lo
            visitan.
          </p>
        </div>
      </div>
    </div>
    <div class="container-ubication">
      <div class="container-map">
        <h2 class="title-index">Cabecera Municipal</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120829.58850872482!2d-99.97506079556884!3d18.846018284608412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cd0bbd07b910f5%3A0x5091b878405ffa4a!2s51600%20Sultepec%20de%20Pedro%20Ascencio%20de%20Alquisiras%2C%20M%C3%A9x.!5e0!3m2!1ses-419!2smx!4v1698376217238!5m2!1ses-419!2smx" width="540" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <div class="container-location">
          <p class="location-text">Sultepec de Pedro Ascencio de Alquisiras, ubicado al sur del estado de México, es una
            joya
            escondida que deslumbra a los visitantes con su encanto. la belleza de la región de Tierra Caliente.
            Adéntrate en
            este rincón único del sur del estado de México y descubre un lugar que captura el corazón de quienes lo
            visitan.
          </p>
        </div>
      </div>
    </div>

  </section>
