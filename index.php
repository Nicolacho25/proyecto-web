<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <header class="header-upper">
        <div class="container__menu">
            <a href="index.php.html" class="logo">
                <img src="homeimagen.png" alt="Logo">
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
                    <li><img src="logo2.png" alt="logo2"></li> 
                </ul>
            </nav>
        </div>
    </header>
    <!-- Trigger/Open The Modal -->


<!-- The Modal -->
<div id="div"> 
    
</div>
    <!-- Carrusel centrado -->
    <div class="carousel-container">
        <div class="carousel">
            <img src="inam1.png" alt="inam1">
            <img src="inam2.png" alt="inam2">
            <img src="inam3.png" alt="inam3">
        </div>
    </div>
    <!-- Recuadro azul con label "Rastrear" y texto con botón -->
    <div class="container">
        <div class="blue-box">
            <div id="test" class="small-box">
                <label for="rastrear">Rastrear</label>
            </div>
            <input type="text" id="rastrear" placeholder="Ingresa el código">
            <button>Buscar</button>
        </div>
        
    </div>
    
    <footer class="footer-lower">
        <!-- Contenido del footer inferior -->
    </footer>
    
    <script src="home.js"></script>
</body>
</html>

