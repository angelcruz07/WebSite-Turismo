document.addEventListener("DOMContentLoaded", function () {
  const sliderImage = document.getElementById("slider");
  const imagePaths = [ 
    "http://localhost/WebSite-Turismo/php/imgSlider/Postal.jpg",  
    "http://localhost/WebSite-Turismo/php/imgSlider/img2.jpg",  
    "http://localhost/WebSite-Turismo/php/imgSlider/1.jpg", 
    "http://localhost/WebSite-Turismo/php/imgSlider/2.jpg" 
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
          sliderImage.style.opacity = 1;
      }, 1000); // Cambio de imagen después de 1 segundo (ajusta según tus necesidades)
  }

  // Intervalo para cambiar automáticamente de imagen cada 3 segundos
  setInterval(nextSlide, 1000);
});

