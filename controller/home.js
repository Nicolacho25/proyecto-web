let currentIndex = 0;
const images = document.querySelectorAll('.carousel img');
const totalImages = images.length;
const btnR = document.getElementById("btnR");
const btnI = document.getElementById("btnI");
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
}s

function prevImage() {
    currentIndex = (currentIndex - 1 + totalImages) % totalImages;
    showImage(currentIndex);
}

// Iniciar el carrusel
showImage(currentIndex);

// Cambiar a la siguiente imagen cada 3 segundos (ajusta según necesites)
setInterval(nextImage, 3000);

btnR.addEventListener("click",function(){
    insertUser();
    alert("registro");
});

btnI.addEventListener("click", function(){
    checkUser();
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
            document.getElementById("div").innerHTML = this.responseText;
            
        }
        
        
    };
    xmlhttp.open("POST","./controller/LogOut.php?nombre=" + nombre + "&apellido=" + apellido + "&direccion=" + direccion + "&telefono=" + telefono + "&correo=" + correo + "&contraseña=" + contraseña,true);
    xmlhttp.send();
}




function checkUser(){
    var nombre = document.getElementById("NombreI").value;
    var password = document.getElementById("PasswordI").value;
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            alert(this.responseText);
        }
    };
    xmlhttp.open("POST","./model/LogIn.php?nombre=" + nombre +"&contraseña=" + password, true);
    xmlhttp.send();
}


