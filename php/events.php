<?php 
$url = "http://" .$_SERVER['HTTP_HOST'] ."WebSite-Turismo";
 require "../partials/header2.php";
 require "../partials/navbar.php";
 ?>

<section class="events scroll-top" id="events">
<h1>Eventos proximos</h1>
    <div class="container-events">
        <div class="card-event">
            <img src="<?php echo $url?>/assets/img/parroquia de sultepec.jpg" alt="Imagen 1">
            <div class="description-event">
                <h3>Nombre evento</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus, ipsam provident ut natus iste tenetur id molestiae error repudiandae qui atque corporis harum. Ut cum, aliquam alias fuga ipsum sed!</p>
            </div>
        </div>
        <div class="card-event">
            <img src="<?php echo $url?>/assets/img/antiguo sultepec.jpg" alt="Imagen 2">
            <div class="description-event">
                <h3>Nombre evento</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, modi magni 
                    vero unde voluptate laborum incidunt laboriosam nostrum Lorem ipsum dolor 
                    sit, amet consectetur adipisicing elit. Mollitia fuga suscipit repellendus.
                    Alias veritatis iusto veniam dolorum ex rem id aliquid. Ducimus, veritatis quis
                    Minus consequuntur dolor tempore exercitationem sapiente officiis tenetur.</p>
            </div>
        </div>
        <div class="card-event">
            <img src="<?php echo $url?>/assets/img/hospedaje.jpeg" alt="Imagen 3">
            <div class="description-event">
                <h3>Nombre evento</h3>
                <p>Descripción corta.</p>
            </div>
        </div>
    </div>
</section>

<section id="religious-events">

<h2 class="title-index">Fiestas religiosas</h2>

</section>

<?php  require "../partials/footer.php"?>
