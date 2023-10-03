document.addEventListener('scroll', () => {
  const scrollButton = document.getElementById('scroll-to-top');

  const sections = document.querySelectorAll('.scroll-top');
  const lastSection = sections[sections.length - 1];

  if (window.scrollY > lastSection.offsetTop + lastSection.offsetHeight) {
    scrollButton.classList.remove('hidden');
  } else {
    scrollButton.classList.add('hidden');
  }
});

