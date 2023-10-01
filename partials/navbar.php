<?php

$url = "http://" . $_SERVER['HTTP_HOST'] . "/WebSite-Turismo";

?>

<header class="header" id="header">
    <a href="index.php" class="logo">
        <img src="<?php echo $url ?>/assets/img/LOGO AYUNTAMIENTO.webp" alt="Logo municipal de sultepec" title="H. Ayuntamiento de sultepec">
    </a>


    <div class="menu-icon" id="menu-icon">
        <img src="<?php echo $url ?>/assets/icons/bars-solid.svg" alt="Icono menu" title="icon-menu">
    </div>


    <nav class="navbar" id="navbar">
        <a href="<?php echo $url; ?>/index.php#" class="active">Inicio</a>
        <a href="<?php echo $url; ?>/index.php#">Eventos</a>
        <a href="<?php echo $url; ?>/index.php#">Nuestro encanto</a>
        <a href="<?php echo $url; ?>/index.php#">Blog</a>
        <a href="<?php echo $url; ?>/admin/login.php"><i class="fa-solid fa-user"></i></a>
    </nav>
</header>
