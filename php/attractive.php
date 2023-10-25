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
    <div class="gallery">
    <div class="gallery-item">
        <a class="lightbox-trigger" href="<?php echo $images?>/minero_sultepec.jpg">
            <img class="thumbnail" src="<?php echo $images?>/minero_sultepec.jpg" alt="Descripción de la imagen">
            <span class="overlay-text">Texto al pasar el mouse</span>
        </a>
    </div> 
     
    <div class="gallery-item">
        <a class="lightbox-trigger" href="<?php echo $images?>/minero_sultepec.jpg">
            <img class="thumbnail" src="<?php echo $images?>/minero_sultepec.jpg" alt="Descripción de la imagen">
            <span class="overlay-text">Texto al pasar el mouse</span>
        </a>
    </div> 
     
    <div class="gallery-item">
        <a class="lightbox-trigger" href="<?php echo $images?>/minero_sultepec.jpg">
            <img class="thumbnail" src="<?php echo $images?>/minero_sultepec.jpg" alt="Descripción de la imagen">
            <span class="overlay-text">Texto al pasar el mouse</span>
        </a>
    </div> 
     
    <div class="gallery-item">
        <a class="lightbox-trigger" href="<?php echo $images?>/minero_sultepec.jpg">
            <img class="thumbnail" src="<?php echo $images?>/minero_sultepec.jpg" alt="Descripción de la imagen">
            <span class="overlay-text">Texto al pasar el mouse</span>
        </a>
    </div> 
     
    <div class="gallery-item">
        <a class="lightbox-trigger" href="<?php echo $images?>/minero_sultepec.jpg">
            <img class="thumbnail" src="<?php echo $images?>/minero_sultepec.jpg" alt="Descripción de la imagen">
            <span class="overlay-text">Texto al pasar el mouse</span>
        </a>
    </div> 
     
    <div class="gallery-item">
        <a class="lightbox-trigger" href="<?php echo $images?>/minero_sultepec.jpg">
            <img class="thumbnail" src="<?php echo $images?>/minero_sultepec.jpg" alt="Descripción de la imagen">
            <span class="overlay-text">Texto al pasar el mouse</span>
        </a>
    </div>  
     
    <div class="gallery-item">
        <a class="lightbox-trigger" href="<?php echo $images?>/minero_sultepec.jpg">
            <img class="thumbnail" src="<?php echo $images?>/minero_sultepec.jpg" alt="Descripción de la imagen">
            <span class="overlay-text">Texto al pasar el mouse</span>
        </a>
    </div>  
     
    <div class="gallery-item">
        <a class="lightbox-trigger" href="<?php echo $images?>/minero_sultepec.jpg">
            <img class="thumbnail" src="<?php echo $images?>/minero_sultepec.jpg" alt="Descripción de la imagen">
            <span class="overlay-text">Texto al pasar el mouse</span>
        </a>
    </div> 

</div>

</section>

<?php require "../partials/footer2.php" ?>
