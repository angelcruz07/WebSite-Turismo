<?php

$url = "http://" . $_SERVER['HTTP_HOST'] . "/WebSite-Turismo";

?>

<header class="header" id="header">
    <a href="index.php" class="logo">
        <img src="<?php echo $url ?>/assets/img/LOGO AYUNTAMIENTO.png " alt="Logo municipal" title="H. Ayuntamiento de sultepec">
    </a>
    <i class="fa-solid fa-bars" id="menu-icon"></i>
    
    <nav class="navbar">
        <a href="<?php echo $url; ?>/index.php#about" class="active">Inicio</a>
        <a href="<?php echo $url; ?>/index.php#home">Acerca de</a>
        <a href="<?php echo $url; ?>/index.php#attractive">Atractivos</a>
        <a href="<?php echo $url; ?>/index.php#lodging">Hospedaje</a>
        <a href="<?php echo $url; ?>/index.php#events">Eventos</a>
        <a href="<?php echo $url; ?>/admin/login.php">Iniciar sesion</a>
    </nav>
</header>
