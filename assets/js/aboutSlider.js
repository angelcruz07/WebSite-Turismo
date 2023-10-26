document.addEventListener("DOMContentLoaded", function () {
  const sliderImage = document.getElementById("sliderImage");
  const imagePaths = [ 
    "http://localhost/WebSite-Turismo/php/aboutSlider/casas2.jpg",  
    "http://localhost/WebSite-Turismo/php/aboutSlider/centro2.jpg",  
    "http://localhost/WebSite-Turismo/php/aboutSlider/iglesia1.jpg", 
    "http://localhost/WebSite-Turismo/php/aboutSlider/pirotecnia.jpg" 
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

  // Asegurarse de que todas las imágenes se hayan cargado antes de iniciar el slider
  let imagesLoaded = 0;
  
  imagePaths.forEach((path) => {
    const img = new Image();
    img.src = path;
    img.onload = () => {
      imagesLoaded++;
      if (imagesLoaded === imagePaths.length) {
        // Todas las imágenes se han cargado, por lo que comenzamos el slider.
        setInterval(nextSlide, 5000);
      }
    };
  });
});
