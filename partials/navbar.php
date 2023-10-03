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
                <li class="margin-left"><a href="<?php echo $url; ?>/php/events.php">Eventos</a>
                    <!-- Sub menu 1-->
                    <ul>
                        <li><a href="#">Programacion</a></li>
                        <li><a href="#">Animacion Digital</a></li>
                    </ul>
                </li>
                <li class="margin-left"><a class="no__hover" href="">Nuestro Encanto</a>
                    <ul>
                        <li><a href="#">Contacto</a></li>
                        <li><a href="#">Ubicacion</a></li>
                        <li><a href="#">Servicios escolares</a></li>
                    </ul>
                </li>
                <li class="margin-left"><a href="#">Blog</a></li>
                <li class="margin-left"> <a href="<?php echo $url; ?>/admin/login.php"><img src="<?php echo $url ?>/assets/icons/user-solid.svg" alt="icon-user" title="Iniciar sesion" class="fa-user"></img></a></li>
            </ul>
        </nav>
    </div>
</header>
<main>
    <div id="scroll-to-top" class="hidden">
        <a href="#silder_main">
            <img class="icon-footer-svg" src="<?php echo $url ?>/assets/icons/arrow-up-solid.svg" alt="Icono de Scroll al inicio"></a>
        </a>
    </div>
