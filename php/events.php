<?php 
$url = "http://" .$_SERVER['HTTP_HOST'] ."WebSite-Turismo";
 require "../partials/header2.php";
 require "../partials/navbar.php";
 ?>

 <?php 
 require "../admin/config/database.php";

 //Recuperar conexion de database
$database = new Database();  
$conn = $database->connect();
 // Haciendo la consulta a los registros 
$query = $conn->prepare("SELECT * FROM events");
$query -> execute();
$events = $query->fetchAll(PDO::FETCH_ASSOC);

 ?>

<section class="events scroll-top" id="events">
<h1>Eventos proximos</h1>
    <div class="container-events">

    <?php foreach($events as $event){ ?>
        <div class="card-event">
        <img src="../../admin/assets/imgEvent/<?php echo $event['image']?>" alt="Portada representativa al evento">
            <div class="description-event">
                <h3><?php echo $event['title']?></h3>
               <p><?php echo $event ['description']?></p>
            </div>
        </div>
   <?php } ?>

    </div>
</section>

<section id="religious-events">

<h2 class="title-index">Fiestas religiosas</h2>

</section>

<?php  require "../partials/footer.php"?>
