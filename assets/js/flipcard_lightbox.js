const lightbox = document.getElementById("lightbox");
const lightboxImage = document.getElementById("lightbox-image");
const closeButton = document.getElementById("close-button");
const prevButton = document.getElementById("prev-button");
const nextButton = document.getElementById("next-button");

const galleryImages = [
    { src: "http://localhost/WebSite-Turismo/assets/img/sultepec2.jpg", caption: "Texto de la imagen 1" },
    // Agrega más imágenes aquí
];

let currentIndex = 0;

function showImage(imageSrc, caption) {
    lightbox.style.display = "flex";
    lightboxImage.src = imageSrc;
    lightboxImage.alt = caption;
    currentIndex = galleryImages.findIndex((img) => img.src === imageSrc);
    updateNavButtons();
}

function showNextImage() {
    currentIndex = (currentIndex + 1) % galleryImages.length;
    updateLightboxContent();
}

function showPrevImage() {
    currentIndex = (currentIndex - 1 + galleryImages.length) % galleryImages.length;
    updateLightboxContent();
}

function updateLightboxContent() {
    const image = galleryImages[currentIndex];
    lightboxImage.src = image.src;
    lightboxImage.alt = image.caption;
    updateNavButtons();
}

function updateNavButtons() {
    prevButton.disabled = currentIndex === 0;
    nextButton.disabled = currentIndex === galleryImages.length - 1;
}

closeButton.addEventListener("click", () => {
    lightbox.style.display = "none";
});

updateNavButtons();
