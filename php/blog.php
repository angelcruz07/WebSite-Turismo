<?php 
  require "../partials/header2.php"; 
  require "../partials/navbar.php";  
  require "../partials/scroll-top.php";  
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
        <h2 class="text-dynamic">Texto</h2> 
        <p class="paragraph-dynamic">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti, cum illum? Et tempora perferendis corporis.</p> 
    </div>
    </div> 
    <div class="card-dynamic"> 
    <img src="<?php echo $urlImage ?>/gallery.jpg" alt=""> 
    <div> 
        <h2 class="text-dynamic">Texto</h2> 
        <p class="paragraph-dynamic">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti, cum illum? Et tempora perferendis corporis.</p> 
    </div>
    </div> 
    <div class="card-dynamic"> 
    <img src="<?php echo $urlImage ?>/gallery.jpg" alt=""> 
    <div> 
        <h2 class="text-dynamic">Texto</h2> 
        <p class="paragraph-dynamic">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti, cum illum? Et tempora perferendis corporis.</p> 
    </div>
    </div> 
    <div class="card-dynamic"> 
    <img src="<?php echo $urlImage ?>/gallery.jpg" alt=""> 
    <div> 
        <h2 class="text-dynamic">Texto</h2> 
        <p class="paragraph-dynamic">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti, cum illum? Et tempora perferendis corporis.</p> 
    </div>
    </div> 
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
                  
               </div>
            </article>

            <article class="card__article">
               <img src="<?php echo $urlImage ?>/landscape-2.png" alt="image" class="card__img">

               <div class="card__data">
                  <span class="card__description">Poon Hill, Nepal</span>
                  <h2 class="card__title">Starry Night</h2>
                  
               </div>
            </article>

            <article class="card__article">
               <img src="<?php echo $urlImage ?>/landscape-3.png" alt="image" class="card__img">

               <div class="card__data">
                  <span class="card__description">Bojcin Forest, Serbia</span>
                  <h2 class="card__title">Path Of Peace</h2>
                 
               </div>
            </article>
         </div>
      </div> 
</article> 
 
<!--Desarrolladores-Colaboraciones --> 
<section class="colaborations">
    
    <div class="swiper mySwiper container-colaborations">
      <div class="swiper-wrapper content-colaborations"> 
        <!--Empieza -->
        <div class="swiper-slide card-colaborations">
          <div class="card-content-colaborations">
            <div class="image-colaborations">
              <img src="<?php echo $urlImage ?>/landscape-1.png" alt="">
            </div>

            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <i class="fab fa-instagram"></i>
              <i class="fab fa-github"></i>
            </div>

            <div class="name-profession">
              <span class="name">NOMBRE</span>
              <span class="profession">PROFESION/PUESTO</span>
            </div>

          </div>
        </div> 
        <!--Termina --> 
        <!--Empieza -->
        <div class="swiper-slide card-colaborations">
          <div class="card-content-colaborations">
            <div class="image-colaborations">
              <img src="<?php echo $urlImage ?>/landscape-2.png" alt="">
            </div>

            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <i class="fab fa-instagram"></i>
              <i class="fab fa-github"></i>
            </div>

            <div class="name-profession">
              <span class="name">NOMBRE</span>
              <span class="profession">PROFESION/PUESTO</span>
            </div>

          </div>
        </div> 
        <!--Termina --> 
        <!--Empieza -->
        <div class="swiper-slide card-colaborations">
          <div class="card-content-colaborations">
            <div class="image-colaborations">
              <img src="<?php echo $urlImage ?>/landscape-3.png" alt="">
            </div>

            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <i class="fab fa-instagram"></i>
              <i class="fab fa-github"></i>
            </div>

            <div class="name-profession">
              <span class="name">NOMBRE</span>
              <span class="profession">PROFESION/PUESTO</span>
            </div>

          </div>
        </div> 
        <!--Termina --> 
        <!--Empieza -->
        <div class="swiper-slide card-colaborations">
          <div class="card-content-colaborations">
            <div class="image-colaborations">
              <img src="<?php echo $urlImage ?>/landscape-1.png" alt="">
            </div>

            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <i class="fab fa-instagram"></i>
              <i class="fab fa-github"></i>
            </div>

            <div class="name-profession">
              <span class="name">NOMBRE</span>
              <span class="profession">PROFESION/PUESTO</span>
            </div>

          </div>
        </div> 
        <!--Termina --> 
        <!--Empieza -->
        <div class="swiper-slide card-colaborations">
          <div class="card-content-colaborations">
            <div class="image-colaborations">
              <img src="<?php echo $urlImage ?>/landscape-2.png" alt="">
            </div>

            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <i class="fab fa-instagram"></i>
              <i class="fab fa-github"></i>
            </div>

            <div class="name-profession">
              <span class="name">NOMBRE</span>
              <span class="profession">PROFESION/PUESTO</span>
            </div>

          </div>
        </div> 
        <!--Termina --> 
        <!--Empieza -->
        <div class="swiper-slide card-colaborations">
          <div class="card-content-colaborations">
            <div class="image-colaborations">
              <img src="images/1.jpg" alt="">
            </div>

            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <i class="fab fa-instagram"></i>
              <i class="fab fa-github"></i>
            </div>

            <div class="name-profession">
              <span class="name">NOMBRE</span>
              <span class="profession">PROFESION/PUESTO</span>
            </div>

          </div>
        </div> 
        <!--Termina -->

        

      </div>
    </div>

    <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
  </section>
       
</section> 

<?php
require "../partials/footer.php"
?>
