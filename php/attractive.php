<?php require_once "../partials/header2.php"; ?>
<link rel="stylesheet" href="<?php echo $url; ?>/assets/css/attractive.css">  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
</head>

<body class="scroll-top">
    <?php
    require "../partials/navbar.php";
    require "../partials/scroll-top.php";
    $images = "http://" . $_SERVER['HTTP_HOST'] . "/WebSite-Turismo/assets/imgGallery";
    ?>

    <div class="container-front-page">
        <div class="degraded"></div>
        <div class="title-front-page">
            <h1>Atractivos</h1>
        </div>
        <img src="<?php echo $url ?>/assets/imgAttractive/front-page.jpg" alt="Portada de gastronomia" title="Gastronomia" class="image-front-page">
    </div>
    <section class="attractive" id="attractive">
        <h2 class="title-attractive">Maravillas Turísticas de Sultepec</h2>
        <!--Lista de lugares o opciones -->
        <div class="options">
            <ul>
                <li class="active links" data-nombre="all">Todos</li>
                <li class="links" data-nombre="lookout">Mirador</li>
                <li class="links" data-nombre="churches">Parroquias</li>
                <li class="links" data-nombre="places">Lugares</li>
            </ul>
        </div>

        <!--Contenedor de la galeria -->
        <div class="container-gallery">


            <div class="card my-card box filter lookout">
                <a href="<?php echo $images ?>/minero_sultepec.jpg">
                    <div class="face front">

                        <img src="<?php echo $images ?>/minero_sultepec.jpg" alt="Imagen minero">
                        <h3>Minero Sultepec</h3>

                    </div>
                    <div class="face back">
                        <h3>Minero Sultepec</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis debitis in perferendis!</p>
                        <div class="link">
                        </div>
                    </div>
                </a>
            </div>

            <div class="card my-card box filter churches">
                <a href="<?php echo $images ?>/puesta-de-sol-2.jpg">
                    <div class="face front">

                        <img src="<?php echo $images ?>/puesta-de-sol-2.jpg" alt="Imagen minero">
                        <h3>Atardecer en Sultepec</h3>

                    </div>
                    <div class="face back">
                        <h3>Atardecer en Sultepec</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis debitis in perferendis!</p>
                        <div class="link">
                        </div>
                    </div>
                </a>
            </div>

            <div class="card my-card box filter places">
                <a href="<?php echo $images ?>/puesta-de-sol.jpg">
                    <div class="face front">

                        <img src="<?php echo $images ?>/puesta-de-sol.jpg" alt="Imagen minero">
                        <h3>Un buen atardecer</h3>

                    </div>
                    <div class="face back">
                        <h3>Un buen atardecer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis debitis in perferendis!</p>
                        <div class="link">
                        </div>
                    </div>
                </a>
            </div>
            <div class="card my-card box filter lookout">
                <a href="<?php echo $images ?>/noche.jpg">
                    <div class="face front">

                        <img src="<?php echo $images ?>/noche.jpg" alt="Imagen minero">
                        <h3>Noche Sultepec</h3>

                    </div>
                    <div class="face back">
                        <h3>Noche Sultepec</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis debitis in perferendis!</p>
                        <div class="link">
                        </div>
                    </div>
                </a>
            </div>
            <div class="card my-card box filter churches">
                <a href="<?php echo $images ?>/minas.jpg">
                    <div class="face front">

                        <img src="<?php echo $images ?>/minas.jpg" alt="Imagen minero">
                        <h3>Mañana Sultepec</h3>

                    </div>
                    <div class="face back">
                        <h3>Mañana Sultepec</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis debitis in perferendis!</p>
                        <div class="link">
                        </div>
                    </div>
                </a>
            </div>
    </section>
    <script src="<?php echo $url; ?>/assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo $url; ?>/assets/js/bottons-links.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo $url; ?>/assets/js/lightbox.js"></script>
    <?php require "../partials/footer2.php" ?>
