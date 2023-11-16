<?php
require_once "../config/database.php";
require_once "../config/utilities.php";
$rol = 2;
validateRol($rol);
require_once "../partials/headerUser.php";
require_once "../partials/navbarUser.php";
?>
<section class="desktop" id="desktop">
  <div class="container-desktop">
    <img src="../assets/img/LOGO AYUNTAMIENTO.webp" class="logo" alt="Logo del Ayuntamiento"
      title="H. Ayuntamiento de sultepec">
    <h2 class="title-index">Bienvenido</h2>
    <div class="container-card-menu">
      <a href="<?php echo $url; ?>/admin/User/request.php" class="link-desktop">
        <div class="card-menu">
          <div class="image-container">
            <img src="<?php echo $url ?>/assets/icons/file.svg" alt="Icono plus" class="icon-desktop"
              title="Agregar evento">
          </div>
          Enviar solicitud
        </div>
      </a>
      <a href="<?php echo $url; ?>" class="link-desktop">
        <div class="card-menu">
          <div class="image-container">
            <img src="<?php echo $url ?>/assets/icons/eye-solid.svg" alt="Icono plus" class="icon-desktop"
              title="Agregar evento">
          </div>
          Ver sitio
        </div>
      </a>
      <a href="<?php echo $url; ?>/admin/logout.php" class="link-desktop">
        <div class="card-menu">
          <div class="image-container">
            <img src="<?php echo $url ?>/assets/icons/bracket.svg" alt="Icono plus" class="icon-desktop"
              title="Agregar evento">
          </div>
          Cerrar Sesion
        </div>
      </a>
    </div>
  </div>
</section>
<?php require_once "../partials/footerUser.php" ?>
