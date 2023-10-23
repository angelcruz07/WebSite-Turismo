<?php
require "./config/database.php";
session_start();
if (!isset($_SESSION["rol"])) {
  header("Location: login.php");
} else {
  if ($_SESSION['rol'] != 1) {
    header('location: login.php');
  }
}
$url = "http://" . $_SERVER['HTTP_HOST'] . "/WebSite-Turismo";
?>

<?php
require "partials/header.php";
require "./partials/navbar.php"
?>

<section class="desktop" id="desktop">
  <div class="container-desktop">
    <img src="../assets/img/LOGO AYUNTAMIENTO.webp" class="logo" alt="Logo del Ayuntamiento" title="H. Ayuntamiento de sultepec">
    <h2 class="title-index">Bienvenido @user.gmail.com</h2>
    <p class="parraf-description">Comencemos administrar el sitio</p>

    <div class="container-card-menu">

    <a href="<?php echo $url ?>/admin/addEvent.php" class="link-desktop">
      <div class="card-menu">
       
          <div class="image-container">
            <img src="<?php echo $url ?>/assets/icons/plus.svg" alt="Icono plus" class="icon-desktop" title="Agregar evento">
          </div>
          Agregar Evento
      </div>
      </a>
      <a href="<?php echo $url ?>/admin/addBlog.php" class="link-desktop">
      <div class="card-menu">
          <div class="image-container">
            <img src="<?php echo $url ?>/assets/icons/pen.svg" alt="Icono plus" class="icon-desktop" title="Agregar evento">
          </div>
          Agregar al blog
      </div>
      </a>
      <a href="<?php echo $url; ?>/admin/addLodging.php" class="link-desktop">
      <div class="card-menu">
          <div class="image-container">
            <img src="<?php echo $url ?>/assets/icons/hotel.svg" alt="Icono plus" class="icon-desktop" title="Agregar evento">
          </div>
          Agregar Hospedaje
      </div>
      </a>
      <a href="<?php echo $url; ?>" class="link-desktop">
      <div class="card-menu">
          <div class="image-container">
            <img src="<?php echo $url ?>/assets/icons/eye-solid.svg" alt="Icono plus" class="icon-desktop" title="Agregar evento">
          </div>
          Ver sitio
      </div>
      </a>
    </div>
  </div>
</section>

<?php require "./partials/footer.php" ?>
