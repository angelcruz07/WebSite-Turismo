<?php
$images = "http://" . $_SERVER['HTTP_HOST'] . "/WebSite-Turismo/assets/img/";
?>

<section id="suggestions">
    <h2 class="title-index">¿Que deseas conocer?</h2>
    <div class="container_sugetions">
        <div class="card-suggetion">
            <div class="face front">
                <img src="<?php echo $images ?>antiguo-sultepec.jpg" alt="Cultura sultepequense" title="Cultura">
                <h3>Historia</h3>
            </div>
            <div class="face back">
                <h3>Historia</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In reiciendis neque nam quibusdam qui cupiditate esse!</p>
                <div class="link">
                    <a href="#" class="hover-text">Leer más</a>
                </div>
            </div>
        </div>

        <div class="card-suggetion">
            <div class="face front">
                <img src="<?php echo $images ?>pipian-dulce.jpg" alt="Gastronomia sultepequence" title="Gastronomia">
                <h3>Gastronomia</h3>
            </div>
            <div class="face back">
                <h3>Gastronomia</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur ipsum numquam modi dolorem. Nobis, quasi fuga!</p>
                <div class="link">
                    <a href="<?php echo $url ?>/php/gastronomy.php" class="hover-text">Leer más</a>
                </div>
            </div>
        </div>

        <div class="card-suggetion">
            <div class="face front">
                <img src="<?php echo $images ?>minero sultepec.jpg" alt="Lugares Turisticos sultepec" title="Turismo">
                <h3>Lugares</h3>
            </div>
            <div class="face back">
                <h3>Lugares</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, magnam consequuntur veritatis voluptas doloremque nemo perspiciatis.</p>
                <div class="link">
                    <a href="<?php echo $url ?>/php/attractive.php" class="hover-text">Leer más</a>
                </div>
            </div>
        </div>

        <div class="card-suggetion">
            <div class="face front">
                <img src="<?php echo $images ?>hospedaje.jpeg" alt="Donde hospedarte en sultepec" title="Hospedajes">
                <h3>Hospedaje</h3>
            </div>
            <div class="face back">
                <h3>Hospedaje</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum molestias magnam quae odit doloremque officia quisquam.</p>
                <div class="link">
                    <a href="<?php echo $url ?>/php/lodging.php" class="hover-text">Leer más</a>
                </div>
            </div>
        </div>
</section>
 



