
document.addEventListener("DOMContentLoaded", function () {
  const sliderImage = document.getElementById("slider");
  const sliderTitle = document.getElementById("sliderTitle");
  const sliderDescription = document.getElementById("sliderDescription");
  const imagePaths = [
    "http://localhost/WebSite-Turismo/php/imgSlider/img2.jpg",
    "http://localhost/WebSite-Turismo/php/imgSlider/1.jpg",
    "http://localhost/WebSite-Turismo/php/imgSlider/2.jpg"
  ]; // Lista de rutas de imágenes
  const textData = [
    {
      title: "Nombre del lugar 1",
      description: "Descripción del lugar"
    },
    {
      title: "Nombre del lugar 2",
      description: "Descripción del lugar"
    },
    {
      title: "Nombre del lugar 3",
      description: "Descripción del lugar"
    }
  ];

  let currentIndex = 0;

  function nextSlide() {
    currentIndex = (currentIndex + 1) % imagePaths.length;
    updateSlider();
  }

  function updateSlider() {
    sliderImage.style.opacity = 0;
    sliderTitle.style.opacity = 0;
    sliderDescription.style.opacity = 0;
    setTimeout(() => {
      sliderImage.src = imagePaths[currentIndex];
      sliderImage.style.transition = "opacity 0.5s ease";
      sliderImage.style.opacity = 1;
      sliderTitle.textContent = textData[currentIndex].title;
      sliderDescription.textContent = textData[currentIndex].description;
      sliderTitle.style.transition = "opacity 0.5s ease";
      sliderDescription.style.transition = "opacity 0.5s ease";
      sliderTitle.style.opacity = 1;
      sliderDescription.style.opacity = 1;
    }, 1000); // Cambio de imagen después de 1 segundo (ajusta según tus necesidades)
  }

  // Intervalo para cambiar automáticamente de imagen cada 3 segundos
  setInterval(nextSlide, 3000);
});
