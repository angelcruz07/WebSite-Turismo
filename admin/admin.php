<?php
require_once "./config/database.php";
require_once "./config/utilities.php";
$rol = 1;
validateRol($rol);
require_once "partials/header.php";
require_once "./partials/navbar.php";
?>

<section class="desktop" id="desktop">
  <div class="container-desktop">
    <img src="../assets/img/LOGO AYUNTAMIENTO.webp" class="logo" alt="Logo del Ayuntamiento" title="H. Ayuntamiento de sultepec">
    <h2 class="title-index">Bienvenido comencemos administrar el sitio</h2>
    <div class="container-card-menu">
      <a href="<?php echo $url ?>/admin/request.php" class="link-desktop">
        <?php
        $table = 'request';
        $request = getQuery($conn, $table);
        $numSolicitudes = count($request);
        // Verifica si hay al menos una solicitud en revisión
        if ($numSolicitudes > 0) {
          $solicitudesEnRevision = array_filter($request, function ($item) {
            return strtolower($item['status']) === 'en revision';
          });
          $numSolicitudesEnRevision = count($solicitudesEnRevision);
          if ($numSolicitudesEnRevision > 0) {
            echo '<span id="alert">' . ($numSolicitudesEnRevision > 9 ? '9+' : $numSolicitudesEnRevision) . '</span>';
          }
        }
        ?>
        <div class="card-menu">
          <div class="image-container">
            <img src="<?php echo $url ?>/assets/icons/file.svg" alt="Icono plus" class="icon-desktop" title="Ver solicitudes">
          </div>
          Ver Solicitudes
        </div>
      </a>
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
      <a href="<?php echo $url; ?>/admin/addGallery.php" class="link-desktop">
        <div class="card-menu">
          <div class="image-container">
            <img src="<?php echo $url ?>/assets/icons/image.svg" alt="Icono plus" class="icon-desktop" title="Agregar Galeria">
          </div>
          Agregar a galeria
        </div>
      </a>
      <a href="<?php echo $url; ?>/admin/addGastronomy.php" class="link-desktop">
        <div class="card-menu">
          <div class="image-container">
            <img src="<?php echo $url ?>/assets/icons/gastronomy.svg" alt="Icono plus" class="icon-desktop" title="Agregar gastronomia">
          </div>
          Agregar gastronomia
        </div>
      </a>
      <a href="<?php echo $url; ?>/admin/addBusiness.php" class="link-desktop">
        <div class="card-menu">
          <div class="image-container">
            <img src="<?php echo $url ?>/assets/icons/store.svg" alt="Icono plus" class="icon-desktop" title="Agregar gastronomia">
          </div>
          Agregar negocio
        </div>
      </a>
      <a href="<?php echo $url; ?>/admin/addService.php" class="link-desktop">
        <div class="card-menu">
          <div class="image-container">
            <img src="<?php echo $url ?>/assets/icons/taxi.svg" alt="Icono plus" class="icon-desktop" title="Agregar evento">
          </div>
          Agregar Servicio
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
      <a href="<?php echo $url; ?>/admin/logout.php" class="link-desktop">
        <div class="card-menu">
          <div class="image-container">
            <img src="<?php echo $url ?>/assets/icons/bracket.svg" alt="Icono plus" class="icon-desktop" title="Agregar evento">
          </div>
          Cerrar Sesion
        </div>
      </a>
    </div>
  </div>
</section>
<?php require "./partials/footer.php" ?>
