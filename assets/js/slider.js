document.addEventListener("DOMContentLoaded", function () {
  const sliderImage = document.getElementById("slider");
<<<<<<< HEAD
  const imagePaths = [ 
    "http://localhost/WebSite-Turismo/php/imgSlider/Postal.jpg",  
    "http://localhost/WebSite-Turismo/php/imgSlider/img2.jpg",  
    "http://localhost/WebSite-Turismo/php/imgSlider/1.jpg", 
    "http://localhost/WebSite-Turismo/php/imgSlider/2.jpg" 
=======
  const sliderTitle = document.getElementById("sliderTitle");
  const sliderDescription = document.getElementById("sliderDescription");
  const imagePaths = [
    "http://localhost/WebSite-Turismo/php/imgSlider/centro.jpg",
    "http://localhost/WebSite-Turismo/php/imgSlider/img3.jpg",
    "http://localhost/WebSite-Turismo/php/imgSlider/img4.jpg"
>>>>>>> b9a15ff3a9bce356c9d3befe53222e3ee702658f
  ]; // Lista de rutas de imágenes
  let currentIndex = 0;

  function nextSlide() {
      currentIndex = (currentIndex + 1) % imagePaths.length;
      updateSlider();
  }
  
  function updateSlider() {
<<<<<<< HEAD
      sliderImage.style.opacity = 0;
      setTimeout(() => {
          sliderImage.src = imagePaths[currentIndex];
          sliderImage.style.transition = "opacity 0.5s ease";
          sliderImage.style.opacity = 1;
      }, 1000); // Cambio de imagen después de 1 segundo (ajusta según tus necesidades)
=======
    sliderImage.style.transform = "translateX(-100%)"; // Desliza la imagen hacia la izquierda
    setTimeout(() => {
      sliderImage.src = imagePaths[currentIndex]; // Cambia la imagen
      sliderTitle.textContent = textData[currentIndex].title;
      sliderDescription.textContent = textData[currentIndex].description;
      sliderImage.style.transform = "translateX(0)"; // Vuelve la imagen a su posición original
    }, 500); // Deja tiempo para que la imagen se desplace antes de cambiarla
>>>>>>> b9a15ff3a9bce356c9d3befe53222e3ee702658f
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
        setInterval(nextSlide, 8000);
      }
    };
  });
});

