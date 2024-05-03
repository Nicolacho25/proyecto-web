let currentIndex = 0;
const images = document.querySelectorAll('.carousel img');
const totalImages = images.length;



function nextImage() {
    currentIndex = (currentIndex + 1) % totalImages;
    showImage(currentIndex);
}

function prevImage() {
    currentIndex = (currentIndex - 1 + totalImages) % totalImages;
    showImage(currentIndex);
}


