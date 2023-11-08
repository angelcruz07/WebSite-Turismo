$(document).ready(function() {
    // Inicializa Magnific Popup en las tarjetas con la clase "my-card"
    $('.my-card').magnificPopup({
        delegate: 'a', // Selecciona los elementos "a" dentro de las tarjetas
        type: 'image', // Tipo de contenido (en este caso, imágenes)
        gallery: {
            enabled: true // Habilita la navegación entre imágenes en la galería
        }
    });
});


document.addEventListener("DOMContentLoaded", function() {
    // Obtén una colección de elementos con la clase "back"
    let mapButtons = document.getElementsByClassName("back");
    let link = document.getElementsByClassName("link")
  
    // Itera a través de la colección y agrega el evento "mouseenter" a cada elemento
    for (let i = 0; i < mapButtons.length; i++) {
      mapButtons[i].addEventListener("mouseenter", function() {
        console.log("Mouse encima")
        link[i].classList.remove("hidden")
      });
    }
  });
