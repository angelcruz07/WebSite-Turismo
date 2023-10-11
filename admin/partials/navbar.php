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
    <!-- Copiar este div -->
      <div class="icon_menu">
         <img  src="<?php echo $url ?>/assets/icons/folder.svg" alt="Icono folder" title="icon-folder">
      </div>
      <!-- -------------------------------- -->
    <h4>Panel de administracion</h4>
  </div>
  <div class="options_menu">
    <a href="<?php echo $url; ?> /admin/admin.php">
      <div class="option">
        <i class="fa-solid fa-house bx" title="Inicio"></i>
        <h4>Inicio</h4>
      </div>
    </a>
    <a href="#">
      <div class="option">
        <i class="fa-solid fa-gear bx" title="Ajustes"></i>
        <h4>Ajustes</h4>
      </div>
    </a>
    <a href="<?php echo $url; ?>/admin/addEvent.php">
      <div class="option">
        <i class="fa-regular fa-newspaper bx"></i>
        <h4>Agregar evento</h4>
      </div>
    </a>
    <a href="<?php echo $url;?>">
      <div class="option">
        <i class="fa-solid fa-plus bx" title="Agregar"></i>
        <h4>Ver sitio web</h4>
      </div>
    </a>
    <a href="<?php echo $url; ?>/admin/logout.php">
      <div class="option">
        <i class="fa-solid fa-right-to-bracket  bx" title="Cerrar sesion"></i>
        <h4>Cerrar sesion</h4>
      </div>
    </a>
  </div>
</div>
