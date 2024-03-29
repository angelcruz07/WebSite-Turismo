<header class="header" id="scroll-top">
    <div class="logo">
        <img src="<?= $folder ?>assets/img/LOGO AYUNTAMIENTO.webp" alt="Logo municipal de sultepec" title="H. Ayuntamiento de sultepec">
    </div>
    <div class="container__menu">
        <input type="checkbox" id="check__menu">
        <label for="check__menu" id="label__check">
            <img class="icon__menu" src="<?= $folder ?>assets/icons/bars-solid.svg" alt="Icono menu" id="menu-icon" title="icon-menu">
        </label>
        <nav>
            <ul>
                <li class="margin-left"><a href="<?= $folder ?>" id="selected"></a></li>
                <li class="margin-left"><a href="<?= $folder ?>public/events.php">Eventos</a>
                </li>
                <li class="margin-left"><a class="no__hover" href="#" title="Nuestro encanto">Nuestro Encanto</a>
                    <ul>
                        <li><a href="<?= $folder ?>public/attractive.php">Lugares</a></li>
                        <li><a href="<?= $folder ?>public/gastronomy.php">Gastronomía</a></li>
                    </ul>
                </li>
                <li class="margin-left"><a class="no__hover" href="#" title="Nuestro encanto">Servicios</a>
                    <ul>
                        <li><a href="<?= $folder ?>public/services.php">Transporte</a></li>
                        <li><a href="<?= $folder ?>public/gastronomy.php">Comida</a></li>
                        <li><a href="<?= $folder ?>public/lodging.php">Hospedajes</a></li>
                    </ul>
                </li>
                <li class="margin-left"><a href="<?= $folder ?>/public/blog.php">Blog</a></li>
                <li class="margin-left"> <a href="<?= $folder ?>/admin/login.php"><img src="<?= $folder ?>assets/icons/user-solid.svg" alt="icon-user" title="Iniciar sesion" class="fa-user"></img></a></li>
            </ul>
        </nav>
    </div>
</header>
<main>
