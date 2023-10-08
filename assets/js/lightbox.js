$(document).ready(function() {
    // Inicializa Magnific Popup en las tarjetas con la clase "my-card"
    $('.card').magnificPopup({
        delegate: 'a', // Selecciona los elementos "a" dentro de las tarjetas
        type: 'image', // Tipo de contenido (en este caso, imágenes)
        gallery: {
            enabled: true // Habilita la navegación entre imágenes en la galería
        }
    });
});
