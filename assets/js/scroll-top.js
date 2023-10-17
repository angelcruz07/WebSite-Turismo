document.addEventListener('scroll', () => {
  const scrollButton = document.getElementById('scroll-to-top');
  const triggerScroll = 200;  

  if (window.scrollY > triggerScroll) {
    scrollButton.classList.remove('hidden');
  } else {
    scrollButton.classList.add('hidden');
  }
});

