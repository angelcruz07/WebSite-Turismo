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

?>



<?php 
 $url = "http://".$_SERVER['HTTP_HOST']."/WebSite-Turismo"; 
 ?>
 
<?php
require "partials/header.php"
?>

<header>

  <div class="icon_menu">
    <i class="fa-solid fa-bars"></i>
  </div>

  <div class="menu__side">

    <div class="name__page">

      <i class="fa-solid fa-folder-open"></i>
      <h4>Panel de administracion</h4>

    </div>

    <div class="options__menu">

      <a href="<?php echo $url; ?> /admin/admin.php">
        <div class="option">
          <i class="fa-solid fa-house" title="Inicio"></i>
          <h4>Inicio</h4>
        </div>
        </a>

        <a href="#">
          <div class="option">
            <i class="fa-solid fa-gear" title="Ajustes"></i>
            <h4>Ajustes</h4>
          </div>
          </a>

          <a href="<?php echo $url; ?>/admin/sections/events.php">
            <div class="option">
              <i class="fa-regular fa-newspaper"></i>
              <h4>Agregar evento</h4>
            </div>
            </a>

            <a href="<?php echo $url;?>">
              <div class="option">
                <i class="fa-solid fa-plus" title="Agregar"></i>
                <h4>Ver sitio web</h4>
               </div>
            </a>
            <a href="<?php echo $url; ?>/admin/sections/logout.php">
              <div class="option">
                <i class="fa-solid fa-plus" title="Agregar"></i>
                <h4>Cerrar sesion</h4>
              </div>

            </a>

    </div>
  </div>
</header>

<main>

  <section>

  </section>
</main>


<?php require "./partials/footer.php" ?>
