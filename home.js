let currentIndex = 0;
const images = document.querySelectorAll('.carousel img');
const totalImages = images.length;

alert(currentIndex);
function showImage(index) {
    images.forEach((image, i) => {
        if (i === index) {
           image.style.display = 'inline-block';
        } else {
            image.style.display = 'none';
        }
    });
}
function nextImage() {
    currentIndex = (currentIndex + 1) % totalImages;
    showImage(currentIndex);
}

function prevImage() {
    currentIndex = (currentIndex - 1 + totalImages) % totalImages;
    showImage(currentIndex);
}

// Iniciar el carrusel
showImage(currentIndex);

// Cambiar a la siguiente imagen cada 3 segundos (ajusta según necesites)
setInterval(nextImage, 3000);