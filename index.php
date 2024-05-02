<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./views/home.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <header class="header-upper">
        <div class="container__menu">
            <a href="index.php" class="logo">
                <img src="./img/homeimagen.png" alt="Logo">
            </a>
            <nav>
                <ul>
                    <li><a href="#">Ingresar</a>
                        <ul>
                            <li><input id="NombreI" type="text" placeholder="Usuario"></li>
                            <li><input id="PasswordI" type="password" placeholder="Contraseña"></li>
                            <li><button id="btnI">Ingresar</button></li>
                        </ul>
                    </li>
                    <li><a href="#">Registro</a>
                        <ul>
                            
                                <li><input id="Nombre" type="text" name="name" placeholder  ="Nombre"></li>
                                <li><input id="Apellido"type="text" placeholder="Apellidos"></li>
                                <li><input id="Direccion"type="text" placeholder="Dirección"></li>
                                <li><input id="Telefono"type="tel" placeholder="Teléfono"></li>
                                <li><input id="Correo"type="email" placeholder="Correo electrónico"></li>
                                <li><input id="Contraseña" type="password" placeholder="Contraseña"></li>
                                <li><input type="password" placeholder="Confirmar contraseña"></li>
                                <li><button id="btnR">Registrar</button></li>
                            
                      </ul>
                    </li>
                    <li><img src="./img/logo2.png" alt="logo2"></li> 
                </ul>
            </nav>
        </div>
    </header>
    <!-- Trigger/Open The Modal -->

<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
        <header class="w3-container w3-teal" style="background-color: 'white'"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Registro</h2>
      </header>
      <div id="modal" class="w3-container">
        
      </div>
      <footer class="w3-container w3-teal">
        <p>Modal Footer</p>
      </footer>
    </div>
  </div>
    <!-- Carrusel centrado -->
    <div class="carousel-container">
        <div class="carousel">
            <img src="./img/inam1.png" alt="inam1">
            <img src="./img/inam2.png" alt="inam2">
            <img src="./img/inam3.png" alt="inam3">
        </div>
    </div>
    <!-- Recuadro azul con label "Rastrear" y texto con botón -->
    <div class="container">
        <div class="blue-box">
            <div id="test" class="small-box">
                <label for="rastrear">Rastrear</label>
            </div>
            <input id="rastreoI" type="text" id="rastrear" placeholder="Ingresa el código">
            <button id='rastreo'>Buscar</button>
        </div>
        
    </div>
    
    <footer class="footer-lower">
        <!-- Contenido del footer inferior -->
    </footer>
    
    <script src="./controller/home.js"></script>
</body>
</html>

