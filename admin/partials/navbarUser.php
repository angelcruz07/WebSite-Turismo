<header>
  <div class="icon_menu">
    <img src="<?php echo $url ?>/assets/icons/bars-solid-black.svg" alt="Icono menu" id="btn_open" title="icon-menu">
  </div>
  <h1>Portal</h1>
</header>

<div class="menu_side" id="menu_side">
  <div class="options_menu">
    <div class="name_page">
      <div class="icon_menu">
      </div>
      <h4>Opciones</h4>
    </div>
    <a href="<?php echo $url; ?>/admin/User/home.php">
      <div class="option">
        <img src="<?php echo $url ?>/assets/icons/house-solid-black.svg" alt="Icono house" title="Inicio">
        <h4>Inicio</h4>
      </div>
    </a>
    <a href="<?php echo $url; ?>/admin/User/request.php">
      <div class="option">
        <img src="<?php echo $url ?>/assets/icons/file.svg" alt="Icono house" title="Inicio">
        <h4>Solicitud</h4>
      </div>
    </a>
    <a href="<?php echo $url; ?>">
      <div class="option">
        <img src="<?php echo $url ?>/assets/icons/eye-solid.svg" alt="Icono plus" title="Ver sitio">
        <h4>Ver sitio web</h4>
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
