<?php
$images = "http://" . $_SERVER['HTTP_HOST'] . "/WebSite-Turismo/assets/img/";
?>

<section id="suggestions">
  <h2 class="title-index">Sumérgete en la Cultura y Belleza de Sultepec</h2>
  <div class="container_sugetions">
    <div class="card-suggetion">
      <div class="face front">
        <img src="<?php echo $images ?>antiguo-sultepec.jpg" alt="Cultura sultepequense" title="Cultura sultepequense">
        <h3>Historia</h3>
      </div>
      <div class="face back">
        <h3>Historia</h3>
        <p>Sultepec, tierra de tradiciones ancestrales y belleza natural, donde el pasado se entrelaza con el presente
          en cada rincón del pueblo.</p>
        <div class="link">
          <a href="<?php echo $url ?>/php/blog.php" title="Leer mas sobre la historia de sultepec" class=" hover-text">Leer más</a>
        </div>
      </div>
    </div>
    <div class="card-suggetion">
      <div class="face front">
        <img src="<?php echo $images ?>pipian-dulce.jpg" alt="Gastronomia sultepequence" title="Gastronomia sultepequense">
        <h3>Gastronomia</h3>
      </div>
      <div class="face back">
        <h3>Gastronomia</h3>
        <p>Las rosquitas o frutas de horno son una delicia tradicional de la gastronomía de Sultepec, que ha sido
          elaborada por generaciones desde 1890</p>
        <div class="link">
          <a href="<?php echo $url ?>/php/gastronomy.php" title="Ver mas sobre gastronomia" class="hover-text">Leer más</a>
        </div>
      </div>
    </div>

    <div class="card-suggetion">
      <div class="face front">
        <img src="<?php echo $images ?>minero sultepec.jpg"  alt="Lugares Turisticos sultepec" title="Lugares Turisticos sultepec">
        <h3>Lugares</h3>
      </div>
      <div class="face back">
        <h3>Lugares</h3>
        <p>Los coloridos mercados de Sultepec son un verdadero festín para los sentidos, donde puedes encontrar
          productos frescos, artesanías locales y sumergirte en la vibrante cultura de este encantador pueblo
        <p>
        <div class="link">
          <a href="<?php echo $url ?>/php/attractive.php" title="Leer mas sobre Lugares" class="hover-text">Leer más</a>
        </div>
      </div>
    </div>

    <div class="card-suggetion">
      <div class="face front">
        <img src="<?php echo $images ?>hospedaje.jpeg" alt="Donde hospedarte en sultepec" title="Donde hospedarte en sultepec">
        <h3>Hospedaje</h3>
      </div>
      <div class="face back">
        <h3>Hospedaje</h3>
        <p>Los hospedajes te reciben con calidez y comodidad, brindándote una experiencia inolvidable en medio de la
          belleza natural de este encantador pueblo.</p>
        <div class="link">
          <a href="<?php echo $url ?>/php/lodging.php" class="hover-text">Leer más</a>
        </div>
      </div>
    </div>
</section>
<h3 class="title-index">Te recomendamos visitar </h3>
<div class="container-btn">
  <div class="show-map-btn">
    <a href="<?php echo $url ?>/php/events.php" title="Festivales en Sultepec ">Festivales y Eventos en Sultepec</a>
  </div>
  <div class="show-map-btn">
    <a href="<?php echo $url ?>/php/attractive.php" title="Manjares Gastronomicos de sultepec">Explora los Sabores Auténticos de Sultepec</a>
  </div>
  <div class="show-map-btn">
    <a href="<?php echo $url ?>/php/attractive.php" title="Descubre los lugares imperdibles de sultepec">Descubre los Lugares Imperdibles de Sultepec</a>
  </div>
</div>
