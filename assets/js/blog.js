var swiper = new Swiper('.mySwiper', {
  // Otras opciones de configuración aquí
  
  // Cambia el número de tarjetas visibles según el ancho de la pantalla
  slidesPerView: 1,
  
  // Espacio entre tarjetas
  spaceBetween: 20,
  
  // Habilita el carrusel
  loop: true,
  
  // Rellena el carrusel con tarjetas en blanco si es necesario
  loopFillGroupWithBlank: true,
  
  // Habilita la paginación
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  
  // Habilita la navegación con botones
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  // Cambia el número de tarjetas visibles a 3 en pantallas de 850px o más
  breakpoints: {
    850: {
      slidesPerView: 3,
    }
  }
});
