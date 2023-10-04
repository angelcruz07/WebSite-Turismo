document.addEventListener("DOMContentLoaded", function () {
  const sliderImage = document.getElementById("sliderImage");
  const imagePaths = [ 
    "http://localhost/WebSite-Turismo/php/aboutSlider/img_1.jpg",  
    "http://localhost/WebSite-Turismo/php/aboutSlider/img_2.jpg",  
    "http://localhost/WebSite-Turismo/php/aboutSlider/img_3.jpg", 
    "http://localhost/WebSite-Turismo/php/aboutSlider/img_4.jpg" 
  ]; // Lista de rutas de imágenes
  let currentIndex = 0;

  function nextSlide() {
      currentIndex = (currentIndex + 1) % imagePaths.length;
      updateSlider();
  }

  function updateSlider() {
      sliderImage.style.opacity = 0;
      setTimeout(() => {
          sliderImage.src = imagePaths[currentIndex];

          sliderImage.style.transition = "opacity 0.8s ease-in-out";
          sliderImage.style.opacity = 1;
      }, 1500); // Cambio de imagen después de 1 segundo (ajusta según tus necesidades)
  }

  // Intervalo para cambiar automáticamente de imagen cada 3 segundos
  setInterval(nextSlide, 4000);
});

