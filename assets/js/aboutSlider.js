document.addEventListener("DOMContentLoaded", function () {
  const sliderImage = document.getElementById("sliderImage");
  const imagePaths = [
    "./assets/aboutSlider/casas2.webp",
    "./assets/aboutSlider/centro2.webp",
    "./assets/aboutSlider/iglesia1.webp",
    "./assets/aboutSlider/pirotecnia.webp",
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
