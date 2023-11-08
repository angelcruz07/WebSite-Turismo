<?php
require "../partials/header2.php";
require "../partials/navbar.php"; 
require "../partials/scroll-top.php";
$url_images = "http://" . $_SERVER['HTTP_HOST'] . "/WebSite-Turismo/assets/imgGastronomy";?>
<link rel="stylesheet" href="<?php echo $url; ?>/assets/css/gastronomy.css">  

</head>
<body class="scroll-top">

<div class="container-front-page">
  <div class="degraded"></div>
  <div class="title-front-page">
    <h1>Gastronomía</h1>
  </div>
  <img src="<?php echo $url ?>/assets/imgGastronomy/fondo.webp" alt="Portada de gastronomia" title="Gastronomia" class="image-front-page">
</div>
<section id="gastronomy">
     <!--Lista de lugares o opciones -->
     <div class="options">
            <ul>
                <li class="active links" data-nombre="all">Todos</li>
                <li class="links" data-nombre="foodOne">reegional</li>
                <li class="links" data-nombre="foodTwo">Parroquias</li>
                <li class="links" data-nombre="foodThree">Lugares</li>
                <li class="links" data-nombre="foodFor">comida cuatro</li>
            </ul>
        </div>



         <div class="container-card-gastronomy">
<div class="card  filter foodOne ">
    <div class="card_landing" style="--i:url(<?php echo $url_images ?>/mole.jpg)">
      <h6>Mole</h6>
    </div>
    <div class="card_info">
      <div class="head">
        <p class="title">Mole</p>
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
  <div class="card filter foodOne">
    <div class="card_landing" style="--i:url(<?php echo $url_images ?>/Tacos-Dorados.jpg)">
      <h6>Tacos-Dorados</h6>
    </div>
    <div class="card_info">
      <div class="head">
        <p class="title">Tacos-Dorados</p>
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
  <div class="card filter foodTwo">
    <div class="card_landing" style="--i:url(<?php echo $url_images ?>/tacos.jpg)">
      <h6>Tacos</h6>
    </div>
    <div class="card_info">
      <div class="head">
        <p class="title">Tacos</p>
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
</section>
<section id="gastronomy">
<div class="container-card-gastronomy">

  <div class="card filter foodTwo">
    <div class="card_landing" style="--i:url(<?php echo $url_images ?>/tamales.jpg)">
      <h6>Tamales</h6>
    </div>
    <div class="card_info">
      <div class="head">
        <p class="title">Tamales</p>
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
  <div class="card filter foodThree">
    <div class="card_landing" style="--i:url(<?php echo $url_images ?>/guacamole.jpg)">
      <h6>Guacamole</h6>
    </div>
    <div class="card_info">
      <div class="head">
        <p class="title">Guacamole</p>
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

</div>
</section>
<script src="<?php echo $url; ?>/assets/js/jquery-3.3.1.min.js"></script>

<script src="<?php echo $url; ?>/assets/js/bottons-links.js"></script>


<?php require "../partials/footer2.php" ?>
