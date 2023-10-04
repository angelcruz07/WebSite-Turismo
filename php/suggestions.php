<?php
$url = "http://" . $_SERVER['HTTP_HOST'] . "/WebSite-Turismo/assets/img/";
$redirection = "http://" . $_SERVER['HTTP_HOST'] . "/WebSite-Turismo";
?>

<section id="suggestions">

  <h2 class="title-suggetions">¿Que deseas conocer?</h2>

  <div class="container_sugetions">
    <div class="card_suggetion">
      <img src="<?php echo $url ?>antiguo sultepec.jpg" alt="Cultura sultepequense">
      <div class="text_sugetion">
        <a href="#" class="hover-text">Leer más</a>
      </div>
      <h2>Historia</h2>
    </div>
    <div class="card_suggetion">
      <img src="<?php echo $url ?>galletas.jpeg" alt="Gastronomia sultepequence">
      <div class="text_sugetion">
        <a href="<?php echo $redirection?>/php/gastronomy.php" class="hover-text">Leer más</a>
      </div>
      <h2>Gastronomía</h2>
    </div>
    <div class="card_suggetion">
      <img src="<?php echo $url ?>minero sultepec.jpg" alt="Que visitar en sultepec">
      <div class="text_sugetion">
        <a href="#" class="hover-text">Leer más</a>
      </div>
      <h2>Lugares</h2>
    </div>
    <div class="card_suggetion">
      <img src="<?php echo $url ?>hospedaje.jpeg" alt="Donde hospedarte en sultepec">
      <div class="text_sugetion">
        <a href="#" class="hover-text">Leer más</a>
      </div>
      <h2>Hospedaje</h2>
    </div>
  </div>
</section>
