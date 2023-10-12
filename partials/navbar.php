<?php
$url = "http://" . $_SERVER['HTTP_HOST'] . "/WebSite-Turismo";
?>
<header class="header">
    <div class="logo">
        <img src="<?php echo $url ?>/assets/img/LOGO AYUNTAMIENTO.webp" alt="Logo municipal de sultepec" title="H. Ayuntamiento de sultepec">
    </div>
    <div class="container__menu">
        <input type="checkbox" id="check__menu">
        <label for="check__menu" id="label__check">
            <img class="icon__menu" src="<?php echo $url ?>/assets/icons/bars-solid.svg" alt="Icono menu" id="menu-icon" title="icon-menu">
        </label>
        <nav>
            <ul>
                <li class="margin-left"><a href="<?php echo $url; ?>" id="selected"></a></li>
                <li class="margin-left"><a href="<?php echo $url; ?>/php/events.php" class="no__hover">Eventos</a>
                    <ul>
                        <li><a href="<?php echo $url; ?>/php/events.php/#events" title="Eventos sociales">Eventos sociales</a></li>
                        <li><a href="<?php echo $url; ?>/php/events.php/#religious-events">Eventos patronales</a></li>
                    </ul>
                </li>
                <li class="margin-left"><a class="no__hover" href="#" title="Nuestro encanto">Nuestro Encanto</a>
                    <ul>
                        <li><a href="<?php echo $url; ?>/php/attractive.php">Lugares</a></li>
                        <li><a href="<?php echo $url; ?>/php/gastronomy.php">Gastronomía</a></li>
                        <li><a href="#">Hospedaje</a></li>
                    </ul>
                </li>
                <li class="margin-left"><a href="#">Blog</a></li>
                <li class="margin-left"> <a href="<?php echo $url; ?>/admin/login.php"><img src="<?php echo $url ?>/assets/icons/user-solid.svg" alt="icon-user" title="Iniciar sesion" class="fa-user"></img></a></li>
            </ul>
        </nav>
    </div>
</header>
<main>
