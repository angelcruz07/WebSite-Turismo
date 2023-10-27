<?php
require "../partials/header2.php";
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
    <div class="container-gallery">
    <div class="card my-card">
        <div class="face front">
            <a href="<?php echo $images?>/minero_sultepec.jpg">
                <img src="<?php echo $images?>/minero_sultepec.jpg" alt="Imagen minero">
                <h3>Minero Sultepec</h3>
            </a>
        </div>
        <div class="face back">
            <h3>Minero Sultepec</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis debitis in perferendis!</p>
            <div class="link"></div>
        </div>
    </div>
    <!-- Repite esta estructura para las demás imágenes --> 
    <div class="card my-card">
        <div class="face front">
            <a href="<?php echo $images?>/minero_sultepec.jpg" >
                <img src="<?php echo $images?>/minero_sultepec.jpg" alt="Imagen minero">
                <h3>Minero Sultepec</h3>
            </a>
        </div>
        <div class="face back">
            <h3>Minero Sultepec</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis debitis in perferendis!</p>
            <div class="link"></div>
        </div>
    </div> 
     
    <div class="card my-card">
        <div class="face front">
            <a href="<?php echo $images?>/minero_sultepec.jpg" >
                <img src="<?php echo $images?>/minero_sultepec.jpg" alt="Imagen minero">
                <h3>Minero Sultepec</h3>
            </a>
        </div>
        <div class="face back">
            <h3>Minero Sultepec</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis debitis in perferendis!</p>
            <div class="link"></div>
        </div>
    </div> 
     
    <div class="card my-card">
        <div class="face front">
            <a href="<?php echo $images?>/minero_sultepec.jpg" >
                <img src="<?php echo $images?>/minero_sultepec.jpg" alt="Imagen minero">
                <h3>Minero Sultepec</h3>
            </a>
        </div>
        <div class="face back">
            <h3>Minero Sultepec</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis debitis in perferendis!</p>
            <div class="link"></div>
        </div>
    </div> 
     
    <div class="card my-card">
        <div class="face front">
            <a href="<?php echo $images?>/minero_sultepec.jpg" >
                <img src="<?php echo $images?>/minero_sultepec.jpg" alt="Imagen minero">
                <h3>Minero Sultepec</h3>
            </a>
        </div>
        <div class="face back">
            <h3>Minero Sultepec</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis debitis in perferendis!</p>
            <div class="link"></div>
        </div>
    </div> 
     
    <div class="card my-card">
        <div class="face front">
            <a href="<?php echo $images?>/minero_sultepec.jpg" >
                <img src="<?php echo $images?>/minero_sultepec.jpg" alt="Imagen minero">
                <h3>Minero Sultepec</h3>
            </a>
        </div>
        <div class="face back">
            <h3>Minero Sultepec</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis debitis in perferendis!</p>
            <div class="link"></div>
        </div>
    </div>
</div>

</section>

<?php require "../partials/footer2.php" ?>
