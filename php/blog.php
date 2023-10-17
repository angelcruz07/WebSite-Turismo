<?php 
  require "../partials/header2.php"; 
  require "../partials/navbar.php";  
  $urlImage = "http://" . $_SERVER['HTTP_HOST'] . "/WebSite-Turismo/assets/imgBlog";
  ?>

<div class="container-front-page">
  <div class="degraded"></div>
  <div class="title-front-page">
    <h1>Blog</h1>
  </div>
  <img src="<?php echo $urlImage ?>/front-page.jpg" alt="Portada de gastronomia" title="Gastronomia" class="image-front-page">
</div>  
 

<section id="blog">   
<!--Cards dinamicas -->   

<article class="contend-info">
<div class="container-cards-dynamic">
    <div class="card-dynamic"> 
    <img src="<?php echo $urlImage ?>/gallery.jpg" alt=""> 
    <div> 
        <h1 class="text-dynamic">Texto</h1> 
        <h2 class="text-dynamic-2">Lorem ipsum, dolor sit</h2>
        <p class="paragraph-dynamic">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti, cum illum? Et tempora perferendis corporis.</p> 
        <button class="btn-dynamic">Clic aqui</button>
    </div>
    </div>
    <div class="card-dynamic"> 
    <img src="<?php echo $urlImage ?>/gallery.jpg" alt=""> 
    <div> 
        <h1 class="text-dynamic">Texto</h1> 
        <h2 class="text-dynamic-2">Lorem ipsum, dolor sit</h2>
        <p class="paragraph-dynamic">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti, cum illum? Et tempora perferendis corporis.</p> 
        <button class="btn-dynamic">Clic aqui</button>
    </div>
    </div> 
</div>
</article>


<!--Carrusel --> 
<article class="carousel">
<div class="Carousel">
        <div class="slick-list" id="slick-list">
            <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
            </button>
            <div class="slick-track" id="track">
                <div class="slick">
                    <div>
                    <a href="/">
                            <h4 class="title-carousel"><small class="small">Share Your Message</small>Watch</h4>
                            <picture>
                                <img src="<?php echo $urlImage ?>/gallery.jpg" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                    <a href="/">
                            <h4 class="title-carousel"><small class="small">Share Your Message</small>Watch</h4>
                            <picture>
                                <img src="<?php echo $urlImage ?>/hospedaje.jpeg" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                    <a href="/">
                            <h4 class="title-carousel"><small class="small">Share Your Message</small>Watch</h4>
                            <picture>
                                <img src="<?php echo $urlImage ?>/gallery.jpg" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                    <a href="/">
                            <h4 class="title-carousel"><small class="small">Share Your Message</small>Watch</h4>
                            <picture>
                                <img src="<?php echo $urlImage ?>/hospedaje.jpeg" alt="Image">
                            </picture>
                        </a>
                    </div>
                </div>
                
                    <button class="slick-arrow slick-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
            </button>
        </div> 
</article> 
               

<!--Tarjetas con efecto landscape -->
<article>
<div class="landscape-container">
         <div class="card__container">
            <article class="card__article">
               <img src="<?php echo $urlImage ?>/landscape-1.png" alt="image" class="card__img">

               <div class="card__data">
                  <span class="card__description">Vancouver Mountains, Canada</span>
                  <h2 class="card__title">The Great Path</h2>
                  <a href="#" class="card__button">Read More</a>
               </div>
            </article>

            <article class="card__article">
               <img src="<?php echo $urlImage ?>/landscape-2.png" alt="image" class="card__img">

               <div class="card__data">
                  <span class="card__description">Poon Hill, Nepal</span>
                  <h2 class="card__title">Starry Night</h2>
                  <a href="#" class="card__button">Read More</a>
               </div>
            </article>

            <article class="card__article">
               <img src="<?php echo $urlImage ?>/landscape-3.png" alt="image" class="card__img">

               <div class="card__data">
                  <span class="card__description">Bojcin Forest, Serbia</span>
                  <h2 class="card__title">Path Of Peace</h2>
                  <a href="#" class="card__button">Read More</a>
               </div>
            </article>
         </div>
      </div> 
</article>
       
</section> 

<?php
require "../partials/footer.php"
?>
