<header>
  <div class="icon_menu">
    <img src="<?php echo $url ?>/assets/icons/bars-solid-black.svg" alt="Icono menu" id="btn_open" title="icon-menu">
  </div>
  <h1>Escritorio</h1>
</header>

<div class="menu_side" id="menu_side">
  <div class="options_menu">
    <div class="name_page">
      <div class="icon_menu">
      </div>
      <h4>Administrar </h4>
    </div>
    <a href="<?php echo $url; ?>/admin/admin.php">
      <div class="option">
        <img src="<?php echo $url ?>/assets/icons/house-solid-black.svg" alt="Icono house" title="Inicio">
        <h4>Inicio</h4>
      </div>
    </a>
    <a href="<?php echo $url; ?>/admin/request.php">
      <div class="option">
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
            echo '<span id="alert-2">' . ($numSolicitudesEnRevision > 9 ? '9+' : $numSolicitudesEnRevision) . '</span>';
          }
        }
        ?>
        <img src="<?php echo $url ?>/assets/icons/file.svg" alt="Icono gear" title="Agregar evento">
        <h4>Ver solicitud</h4>
      </div>
    </a>
    <a href="<?php echo $url; ?>/admin/addEvent.php">
      <div class="option">
        <img src="<?php echo $url ?>/assets/icons/plus.svg" alt="Icono gear" title="Agregar evento">
        <h4>Agregar evento</h4>
      </div>
    </a>
    <a href="<?php echo $url; ?>/admin/addBlog.php">
      <div class="option">
        <img src="<?php echo $url ?>/assets/icons/pen.svg" alt="Icono gear" title="Agregar al blog">
        <h4>Agregar al blog</h4>
      </div>
    </a>
    <a href="<?php echo $url; ?>/admin/addLodging.php">
      <div class="option">
        <img src="<?php echo $url ?>/assets/icons/hotel.svg" alt="Icono gear" title="Agregar hospedaje">
        <h4>Agregar hospedaje</h4>
      </div>
    </a>
    <a href="<?php echo $url; ?>/admin/addGallery.php">
      <div class="option">
        <img src="<?php echo $url ?>/assets/icons/image.svg" alt="Icono gear" title="Agregar galeria">
        <h4>Agregar Galeria</h4>
      </div>
    </a>
    <a href="<?php echo $url; ?>/admin/addGastronomy.php">
      <div class="option">
        <img src="<?php echo $url ?>/assets/icons/gastronomy.svg" alt="Icono gear" title="Agregar Gastronomia">
        <h4>Agregar Gastronomia</h4>
      </div>
    </a>
    <a href="<?php echo $url; ?>/admin/addBusiness.php">
      <div class="option">
        <img src="<?php echo $url ?>/assets/icons/store.svg" alt="Icono gear" title="Agregar negocio">
        <h4>Agregar Negocio</h4>
      </div>
    </a>
    <a href="<?php echo $url; ?>/admin/addService.php">
      <div class="option">
        <img src="<?php echo $url ?>/assets/icons/taxi.svg" alt="Icono gear" title="Agregar Servicio">
        <h4>Agregar Servicio</h4>
      </div>
    </a>
    <a href="<?php echo $url; ?>">
      <div class="option">
        <img src="<?php echo $url ?>/assets/icons/eye-solid.svg" alt="Icono plus" title="Ver sitio">
        <h4>Ver sitio</h4>
      </div>
    </a>
    <a href="<?php echo $url; ?>/admin/logout.php">
      <div class="option">
        <img src="<?php echo $url ?>/assets/icons/bracket.svg" alt="Icono bracket" title="Cerrar sesion">
        <h4>Cerrar sesion</h4>
      </div>
    </a>
  </div>
</div>
