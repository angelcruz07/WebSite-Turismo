$(document).ready(function() {
    $(".overlay-text").hide(); // Ocultar el texto por defecto

    $(".gallery-item").on("mouseenter", function() {
        $(this).find(".overlay-text").fadeIn(200);
    }).on("mouseleave", function() {
        $(this).find(".overlay-text").fadeOut(200);
    });

    $(".lightbox-trigger").fancybox();
});
