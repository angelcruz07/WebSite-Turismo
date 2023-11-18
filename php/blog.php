<?php
require "../admin/config/database.php";
require "../partials/header2.php";
require "../partials/navbar.php";
require "../partials/scroll-top.php";
$urlImage = "http://" . $_SERVER['HTTP_HOST'] . "/WebSite-Turismo";
$query = $conn->prepare("SELECT * FROM blog");
$query->execute();
$blogs = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<link rel="stylesheet" href="<?php echo $url; ?>/assets/css/blog.css" type="text/css">
<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>

<body id="scroll-top">

  <div class="container-front-page">
    <div class="degraded"></div>
    <div class="title-front-page">
      <h1>Blog</h1>
    </div>
    <img src="<?php echo $urlImage ?>/admin/assets/imgBlog/front-page.jpg" alt="Imagen del portada al blog" title="Blog Portada" class="image-front-page">
  </div>
  <section id="blog">
    <h2 class="title-index">Turismo Cultural: Explora la Belleza de Sultepec</h2>
    <!--Cards dinamicas -->
    <article class="contend-info">
      <?php
      $table = "blog";
      $alert = '<div class="alert-not-event">
              <span class="alert">"Ups no hay publicaciones, Estamos trabajando en ello., ¡Mantente al tanto!</span>
              </div>';
      $sql = "SELECT 1 FROM $table LIMIT 1";
      $stmt = $conn->query($sql);
      if ($stmt->rowCount() == 0) {
        echo $alert;
      }
      ?>
      <div class="container-cards-dynamic">
        <?php foreach ($blogs as $blog) { ?>
          <div class="card-dynamic">
            <img src="../admin/assets/imgBlog/<?php echo $blog['image'] ?>" alt="<?php echo $blog['title'] ?>" title="
            <?php echo $blog['title'] ?>" />
            <div>
              <h2 class=" text-dynamic"><?php echo $blog['title'] ?></h2>
              <p class="paragraph-dynamic"><?php echo $blog['description'] ?></p>
            </div>
          </div>
        <?php } ?>
      </div>
    </article>
    <!--Tarjetas con efecto landscape -->
    <article>
      <h2 class="title-index">"Paisajes Inolvidables de Sultepec"</h2>
      <div class="landscape-container">
        <div class="card__container">
          <article class="card__article">
            <img src="<?php echo $urlImage ?>/admin/assets/imgBlog/puesta-de-sol.jpg" class=" card__img" />

            <div class="card__data">
              <span class="card__description">Puesta de Sol en Sultepec</span>
              <h2 class="card__title">Municipio Encantador</h2>

            </div>
          </article>
          <article class="card__article">
            <img src="<?php echo $urlImage ?>/admin/assets/imgBlog/noche.jpg" alt="image" class="card__img">

            <div class="card__data">
              <span class="card__description">Sultepec de Noche</span>
              <h2 class="card__title">La Luna Solitaria Ilumina el Misterio</h2>

            </div>
          </article>
          <article class="card__article">
            <img src="<?php echo $urlImage ?>/admin/assets/imgBlog/puesta-de-sol-2.jpg" alt="image" class="card__img">

            <div class="card__data">
              <span class="card__description">Atardecer en Sultepec</span>
              <h2 class="card__title"> Un Rincón de Paz</h2>

            </div>
          </article>

        </div>
      </div>
    </article>


    <!--Desarrolladores-Colaboraciones -->
    <h2 class="title-index">Nuestro Equipo y Colaboradores</h2>
    <section class="colaborations">
      <div class="swiper mySwiper container-colaborations">
        <div class="swiper-wrapper content-colaborations">
          <!--Empieza -->
          <div class="swiper-slide card-colaborations">
            <div class="card-content-colaborations">
              <div class="image-colaborations">
                <img src="<?php echo $urlImage ?>/admin/assets/imgBlog/Angel-colab.webp" alt="">
              </div>
              <div class="media-icons">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-github"></i>
              </div>
              <div class="name-profession">
                <span class="name">Angel Alejandro</span>
                <span class="profession">Programador Web</span>
              </div>

            </div>
          </div>
          <!--Termina -->
          <!--Empieza -->
          <div class="swiper-slide card-colaborations">
            <div class="card-content-colaborations">
              <div class="image-colaborations">
                <img src="<?php echo $urlImage ?>/admin/assets/imgBlog//Lizandro-colab.png" alt="">
              </div>
              <div class="media-icons">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-github"></i>
              </div>

              <div class="name-profession">
                <span class="name">Lizandro Antonio Santos</span>
                <span class="profession">Programador Web</span>
              </div>

            </div>
          </div>
          <!--Termina -->
          <!--Empieza -->
          <div class="swiper-slide card-colaborations">
            <div class="card-content-colaborations">
              <div class="image-colaborations">
                <img src="<?php echo $urlImage ?>/admin/assets/imgBlog/landscape-3.png" alt="">
              </div>

              <div class="media-icons">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-github"></i>
              </div>

              <div class="name-profession">
                <span class="name">NOMBRE</span>
                <span class="profession">PROFESION/PUESTO</span>
              </div>

            </div>
          </div>
          <!--Termina -->
          <!--Empieza -->
          <div class="swiper-slide card-colaborations">
            <div class="card-content-colaborations">
              <div class="image-colaborations">
                <img src="<?php echo $urlImage ?>/admin/assets/imgBlog/landscape-1.png" alt="">
              </div>

              <div class="media-icons">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-github"></i>
              </div>

              <div class="name-profession">
                <span class="name">NOMBRE</span>
                <span class="profession">PROFESION/PUESTO</span>
              </div>

            </div>
          </div>
          <!--Termina -->
        </div>
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </section>

  </section>


  <script src="<?php echo $url; ?>/assets/js/blog.js"></script>
  <?php require "../partials/footer2.php" ?>
