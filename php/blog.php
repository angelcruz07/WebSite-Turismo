<?php 
  require "../partials/header2.php"; 
  require "../partials/navbar.php";  
  $urlImage = "http://" . $_SERVER['HTTP_HOST'] . "/WebSite-Turismo/assets/";
  ?>
 <div class="container-front-page-blog">
  <div class="degraded-blog"></div>
  <div class="title-front-page-blog">
    <h1>Blog</h1>
  </div>
  <img src="<?php echo $url ?>/assets/img/gallery.jpg" alt="Portada del blog" title="Blog" class="image-front-page-blog">
</div>   
 
<section id="blog">  
  <!--Conetenedor de 3 columnas-->
 <section id="main-container">
  <article id="card_1" class="columns">
    <h2 class="title-columns">Texto</h2>
    <p class="text-columns">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur saepe adipisci maxime tempora in, molestias aliquam.</p>
    <button id="More_1" class="more-columns">Leer más</button>
  </article>

  <article id="card_2" class="columns">
    <h2 class="title-columns">Texto</h2>
    <p class="text-columns">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci dolore, laborum exercitationem illum dignissimos est blanditiis.</p>
    <button id="More_2" class="more-columns">Leer más</button>
  </article>

  <article id="card_3" class="columns">
    <h2 class="title-columns">Texto</h2>
    <p class="text-columns">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur sit laudantium, illo libero exercitationem culpa. Dolorem.</p>
    <button id="More_3" class="more-columns">Leer más</button>
  </article>
</section> 
</section> 
 
<!--Tarjetas con efecto landscape--> 
<div class="landscape-container">
         <div class="card__container">
            <article class="card__article">
               <img src="<?php echo $url ?>/assets/img/landscape-1.png" alt="image" class="card__img">

               <div class="card__data">
                  <span class="card__description">Vancouver Mountains, Canada</span>
                  <h2 class="card__title">The Great Path</h2>
                  <a href="#" class="card__button">Read More</a>
               </div>
            </article>

            <article class="card__article">
               <img src="<?php echo $url ?>/assets/img/landscape-2.png" alt="image" class="card__img">

               <div class="card__data">
                  <span class="card__description">Poon Hill, Nepal</span>
                  <h2 class="card__title">Starry Night</h2>
                  <a href="#" class="card__button">Read More</a>
               </div>
            </article>

            <article class="card__article">
               <img src="<?php echo $url ?>/assets/img/landscape-3.png" alt="image" class="card__img">

               <div class="card__data">
                  <span class="card__description">Bojcin Forest, Serbia</span>
                  <h2 class="card__title">Path Of Peace</h2>
                  <a href="#" class="card__button">Read More</a>
               </div>
            </article>
         </div>
      </div>
