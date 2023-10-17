<?php
require "../partials/header2.php";
require "../partials/navbar.php";
$url = "http://" . $_SERVER['HTTP_HOST'] . "/WebSite-Turismo";
?>


<section class="lodging" id="lodging">
    <h2>¿Donde descansar?</h2>
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
            <div class="description">
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
            <div class="description left">
                <h3>Nombre del hospedaje</h3>
                <p>Descripcion del hospedaje</p>
            </div>
        </div>
    </div>
</section>

<?php
require "../partials/footer.php"
?>
