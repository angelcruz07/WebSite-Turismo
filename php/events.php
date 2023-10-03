<?php 
$url = "http://" .$_SERVER['HTTP_HOST'] ."WebSite-Turismo";
 require "../partials/header.php";
 require "../partials/navbar.php";
 ?>

<section class="events scroll-top" id="events">
<h1>Eventos proximos</h1>
    <div class="container-events">
        <div class="card-event">
            <img src="<?php echo $url?>/assets/img/parroquia de sultepec.jpg" alt="Imagen 1">
            <div class="description-event">
                <!-- Información para la primera imagen -->
                <h3>Nombre evento</h3>
                <p>Descripción corta.</p>
            </div>
        </div>
        <div class="card-event">
            <img src="<?php echo $url?>/assets/img/parroquia de sultepec.jpg" alt="Imagen 2">
            <div class="description-event">
                <!-- Información para la segunda imagen -->
                <h3>Nombre evento</h3>
                <p>Descripción corta.</p>
            </div>
        </div>
        <div class="card-event">
            <img src="<?php echo $url?>/assets/img/parroquia de sultepec.jpg" alt="Imagen 3">
            <div class="description-event">
                <!-- Información para la tercera imagen -->
                <h3>Nombre evento</h3>
                <p>Descripción corta.</p>
            </div>
        </div>
        <div class="card-event">
            <img src="<?php echo $url?>/assets/img/parroquia de sultepec.jpg" alt="Imagen 3">
            <div class="description-event">
                <!-- Información para la tercera imagen -->
                <h3>Nombre evento</h3>
                <p>Descripción corta.</p>
            </div>
        </div>
        <div class="card-event">
            <img src="<?php echo $url?>/assets/img/parroquia de sultepec.jpg" alt="Imagen 3">
            <div class="description-event">
                <!-- Información para la tercera imagen -->
                <h3>Nombre evento</h3>
                <p>Descripción corta.</p>
            </div>
        </div>
        <div class="card-event">
            <img src="<?php echo $url?>/assets/img/parroquia de sultepec.jpg" alt="Imagen 3">
            <div class="description-event">
                <!-- Información para la tercera imagen -->
                <h3>Nombre evento</h3>
                <p>Descripción corta.</p>
            </div>
        </div>
    </div>
</section>
<section id="events-2">

<h2>Fiestas religiosas</h2>

</section>

<?php  require "../partials/footer.php"?>
