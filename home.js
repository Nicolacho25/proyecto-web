let currentIndex = 0;
const images = document.querySelectorAll('.carousel img');
const totalImages = images.length;
const btn = document.getElementById("btnR");
var name;
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

btn.addEventListener("click",function(){
    insertUser();
    
});

function insertUser(){
    var nombre = document.getElementById("Nombre").value;
    var apellido = document.getElementById("Apellido").value;
    var direccion = document.getElementById("Direccion").value;
    var telefono = document.getElementById("Telefono").value;
    var correo = document.getElementById("Correo").value;
    var contraseña = document.getElementById("Contraseña").value;
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            alert(this.responseText);
            var modal = document.getDocumentById("myModal");
            modal.style.display = "block";
        }
        
    };
    xmlhttp.open("POST","Connection.php?nombre=" + nombre + "&apellido=" + apellido + "&direccion=" + direccion + "&telefono=" + telefono + "&correo=" + correo + "&contraseña=" + contraseña,true);
    xmlhttp.send();
}
