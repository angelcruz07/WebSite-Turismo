<?php
require "../partials/header2.php";
require "../partials/navbar.php";
require "../partials/scroll-top.php";
?>

<div class="container-front-page">
  <div class="degraded"></div>
  <div class="title-front-page">
    <h1>Hospedajes </h1>
  </div>
  <img src="<?php echo $url ?>/assets/imgLodging/portada.jpg" alt="Portada de gastronomia" title="Gastronomia" class="image-front-page">
</div>

<section class="lodging" id="lodging">
    <h1 class="title-index">¿Donde descansar?</h1>
    <div class="container-lodging">
<!--  copear formato lodging box -->
        <div class="lodging-box">
            <div class="lodging-image">
                <img src="<?php  echo $url?>/assets/img/hotel.jpg" alt="Imagen del hotel">
                <div class="overlay">
                    <p> Calificacion</p>
                </div>
            </div>
            <!-- descripcion equivale a tabla  -->
            <div class="description-lodging">
                <h3>Nombre del hospedaje</h3>
                <p>Descripcion del hospedaje</p>
            </div>
        </div>


        <div class="lodging-box-left">
            <div class="lodging-image">
            <img src="<?php  echo $url?>/assets/img/hotel.jpg" alt="Imagen del hotel">
                <div class="overlay-left">
                    <p> Calificacion</p>
                </div>
            </div>
            <div class="description-lodging left">
                <h3>Nombre del hospedaje</h3>
                <p>Descripcion del hospedaje</p>
            </div>
        </div>
    </div>
</section>

<?php
require "../partials/footer.php"
?>
