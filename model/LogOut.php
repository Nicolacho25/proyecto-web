<?php

include("./Connection.php"); 

$database = new Connection("shipment_fast","root");
$res = $database->insertIntoUsuarios($_REQUEST["nombre"], $_REQUEST["apellido"], $_REQUEST["direccion"], $_REQUEST["telefono"], $_REQUEST["contraseña"], $_REQUEST["correo"]);
if($res == 1){
    echo "<p>registrado correctamente<p>";
}
else{
    echo "no cant inserting";
}
?>