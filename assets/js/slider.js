document.addEventListener("DOMContentLoaded", function () {
  const sliderImage = document.getElementById("slider");
  const sliderTitle = document.getElementById("sliderTitle");
  const sliderDescription = document.getElementById("sliderDescription");
  const imagePaths = [
    "http://localhost/WebSite-Turismo/assets/imgSlider/kiosco_sultepec.webp",
    "http://localhost/WebSite-Turismo/assets/imgSlider/santuario.webp",
    "http://localhost/WebSite-Turismo/assets/imgSlider/atardecer.webp",
  ]; // Lista de rutas de imágenes
  const textData = [
    {
      title: "Kiosko Central",
      description:
        "Guardián de las experiencias más especiales en nuestro municipio",
    },
    {
      title: "Santuario de la Sta.Veracruz",
      description: "Custodiando a todo Sultepec",
    },
    {
      title: "Atardeceres Únicos en Sultepec",
      description:
        "Disfruta de la magia de los atardeceres que solo Sultepec puede ofrecer",
    },
  ];

  let currentIndex = 0;

  function nextSlide() {
    currentIndex = (currentIndex + 1) % imagePaths.length;
    updateSlider();
  }

  function updateSlider() {
    sliderImage.style.transform = "translateX(-100%)"; // Desliza la imagen hacia la izquierda
    setTimeout(() => {
      sliderImage.src = imagePaths[currentIndex]; // Cambia la imagen
      sliderTitle.textContent = textData[currentIndex].title;
      sliderDescription.textContent = textData[currentIndex].description;
      sliderImage.style.transform = "translateX(0)"; // Vuelve la imagen a su posición original
    }, 500); // Deja tiempo para que la imagen se desplace antes de cambiarla
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
