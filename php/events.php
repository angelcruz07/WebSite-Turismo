<?php
require_once "../admin/config/database.php";
require_once "../admin/config/utilities.php";
require_once "../partials/header2.php";
require_once "../partials/navbar.php";
require_once "../partials/scroll-top.php";
$table = 'events';
// Consulta de los datos
$events = getQuery($conn, $table);

$socialEvents = array();
$religiousEvents = array();

foreach ($events as $event) {
  if ($event['type'] === 'Social') {
    $socialEvents[] = $event;
  } else {
    $religiousEvents[] = $event;
  }
}
?>
<link rel="stylesheet" href="<?php echo $url; ?>/assets/css/events.css" type="text/css">
<link rel="stylesheet" href="<?php echo $url; ?>/assets/css/buttons.css" type="text/css">
</head>

<body id="scroll-top">
  <div class="container-front-page">
    <div class="degraded"></div>
    <div class="title-front-page">
      <h1>Eventos</h1>
    </div>
    <img src="<?php echo $url ?>/admin/assets/imgEvent/front-page.jpg" alt="Portada de gastronomia" title="Gastronomia"
      class="image-front-page">
  </div>

  <section class="events scroll-top" id="events">
    <h1 class="title-index">Eventos Proximos en Sultepec</h1>
    <div class="container-btn">
      <div class="show-map-btn">
        <a href="https://www.facebook.com/Ayuntamientosultepec2022/" target="_blank">Enterate de mas en nuestras redes</a>
      </div>
    </div>

    <div class="container-events">
      <?php
      if (empty($socialEvents)) {
        echo '<div class="alert-not-event">
                <span class="alert">Ups, no hay eventos sociales programados. ¡Mantente al tanto!</span>
            </div>';
      }
      foreach ($socialEvents as $event) { ?>
      <div class="card-event">
        <img src="<?php echo $url ?>/admin/assets/imgEvent/<?php echo $event['image'] ?>"
          alt="Portada representativa al evento">
        <div class="description-event">
          <h3><?php echo $event['title'] ?></h3>
          <p><?php echo $event['description'] ?></p>
        </div>
      </div>
      <?php } ?>
    </div>
  </section>
  <section id="religious-events">
    <h2 class="title-index">Celebra la Tradición: Eventos Religiosos</h2>
    <div class="container-events">
      <?php
      if (empty($religiousEvents)) {
        echo '<div class="alert-not-event">
            <span class="alert">Ups, no hay eventos religiosos programados. ¡Mantente al tanto!</span>
        </div>';
      }
      foreach ($religiousEvents as $event) { ?>
      <div class="card-event">
        <img src="<?php echo $url ?>/admin/assets/imgEvent/<?php echo $event['image'] ?>"
          alt="<?php echo $event['title'] ?>" />
        <div class="description-event">
          <h3><?php echo $event['title'] ?></h3>
          <p><?php echo $event['description'] ?></p>
        </div>
      </div>
      <?php } ?>
    </div>
  </section>
  <?php require "../partials/footer2.php" ?>
