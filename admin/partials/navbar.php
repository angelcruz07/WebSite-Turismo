<?php 
$url = "http://" . $_SERVER['HTTP_HOST'] . "/WebSite-Turismo";
?>
<header>
  <div class="icon_menu">
  <img  src="<?php echo $url ?>/assets/icons/bars-solid-black.svg" alt="Icono menu" id="btn_open" title="icon-menu">
  </div>
  <h1>Administrador</h1>
</header>

<div class="menu_side" id="menu_side">
  <div class="name_page">
      <div class="icon_menu">
         <img  src="<?php echo $url ?>/assets/icons/folder.svg" alt="Icono folder" title="icon-folder">
      </div>
    <h4>Panel de administracion</h4>
  </div>
  <div class="options_menu">
    <a href="<?php echo $url; ?> /admin/admin.php">
      <div class="option">
        <img  src="<?php echo $url ?>/assets/icons/house-solid-black.svg" alt="Icono house" title="icon-house">
        <h4>Inicio</h4>
      </div>
    </a>
    <a href="#">
      <div class="option">
      <img  src="<?php echo $url ?>/assets/icons/gear.svg" alt="Icono gear" title="icon-gear">
        <h4>Ajustes</h4>
      </div>
    </a>
    <a href="<?php echo $url; ?>/admin/addEvent.php">
      <div class="option">
      <img  src="<?php echo $url ?>/assets/icons/newspaper.svg" alt="Icono gear" title="icon-gear">
        <h4>Agregar evento</h4>
      </div>
    </a>
    <a href="<?php echo $url;?>">
      <div class="option">
      <img  src="<?php echo $url ?>/assets/icons/plus.svg" alt="Icono plus" title="icon-plus">
       
        <h4>Ver sitio web</h4>
      </div>
    </a>
    <a href="<?php echo $url; ?>/admin/logout.php">
      <div class="option">
      <img  src="<?php echo $url ?>/assets/icons/bracket.svg" alt="Icono bracket" title="icon-bracket">
      
        <h4>Cerrar sesion</h4>
      </div>
    </a>
  </div>
</div>
