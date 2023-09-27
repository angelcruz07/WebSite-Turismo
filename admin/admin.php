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
require "partials/header.php"
?>

<header>

  <div class="icon_menu">
    <i class="fa-solid fa-bars"></i>
  </div>

  <div class="menu__side">

    <div class="name__page">

      <i class="fa-solid fa-folder-open"></i>
      <h4> Panel de administracion</h4>

    </div>

    <div class="options__menu">

      <a href="#">
        <div class="option">
          <i class="fa-solid fa-house" title="Inicio"></i>
          <h4>Inicio</h4>
        </div>
        <a href="#">
          <div class="option">
            <i class="fa-solid fa-gear" title="Ajustes"></i>
            <h4>Ajustes</h4>
          </div>
          <a href="#">
            <div class="option">
              <i class="fa-regular fa-newspaper"></i>
              <h4>Nueva Publicacion</h4>
            </div>
            <a href="#">
              <div class="option">
                <i class="fa-solid fa-plus" title="Agregar"></i>
                <h4>Nose que poner</h4>
              </div>

            </a>

    </div>
  </div>
</header>


<a class="nav-link" href="logout.php">Logout</a>

<?php require "./partials/footer.php" ?>
