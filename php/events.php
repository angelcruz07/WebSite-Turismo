<?php
require "../admin/config/database.php";
require "../partials/header2.php";
require "../partials/navbar.php";
require "../partials/scroll-top.php";
// Haciendo la consulta a los registros 
$query = $conn->prepare("SELECT * FROM events");
$query->execute();
$events = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<link rel="stylesheet" href="<?php echo $url; ?>/assets/css/events.css" type="text/css"> 
</head>
<body class="scroll-top">

<div class="container-front-page">
  <div class="degraded"></div>
  <div class="title-front-page">
    <h1>Eventos</h1>
  </div>
  <img src="<?php echo $url ?>/assets/imgEvents/front-page.jpg" alt="Portada de gastronomia" title="Gastronomia" class="image-front-page">
</div>

<section class="events scroll-top" id="events">
    <h1>Eventos Proximos en Sultepec</h1>
    <div class="container-events">
<?php
$table = "events";
$alert = '<div class="alert-not-event">
        <span class="alert">"Ups no hay eventos, Estamos preparando eventos emocionantes, ¡Mantente al tanto!</span>
        </div>';
$sql = "SELECT 1 FROM $table LIMIT 1";
$stmt = $conn->query($sql);
if ($stmt->rowCount() == 0) {
    echo $alert;
}
?>
        <?php foreach ($events as $event) { ?>
            <div class="card-event">
                <img src="<?php echo $url ?>/admin/assets/imgEvent/<?php echo $event['image']?>" alt="Portada representativa al evento">
                <div class="description-event">
                    <h3><?php echo $event['title'] ?></h3>
                    <p><?php echo $event['description'] ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</section>
<section id="religious-events">
    <h2 class="title-index">Fiestas religiosas</h2>
</section>
<?php require "../partials/footer2.php" ?>
