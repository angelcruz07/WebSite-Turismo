<?php
$url = "http://" . $_SERVER['HTTP_HOST'] . "/WebSite-Turismo";
?>
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
    <a href="<?php echo $url; ?> /admin/admin.php">
      <div class="option">
        <img src="<?php echo $url ?>/assets/icons/house-solid-black.svg" alt="Icono house" title="icon-house">
        <h4>Inicio</h4>
      </div>
    </a>
    <a href="<?php echo $url; ?>/admin/addEvent.php">
      <div class="option">
        <img src="<?php echo $url ?>/assets/icons/plus.svg" alt="Icono gear" title="icon-gear">
        <h4>Agregar evento</h4>
      </div>
    </a>
    <a href="#">
      <div class="option">
        <img src="<?php echo $url ?>/assets/icons/pen.svg" alt="Icono gear" title="icon-gear">
        <h4>Agregar al blog</h4>
      </div>
    </a>
    <a href="#">
      <div class="option">
        <img src="<?php echo $url ?>/assets/icons/hotel.svg" alt="Icono gear" title="icon-gear">
        <h4>Agregar hospedaje</h4>
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
