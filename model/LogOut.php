<?php

include("./Connection.php"); 

$database = new Connection("shipment_fast","root");
$res = $database->insertIntoUsuarios($_REQUEST["nombre"], $_REQUEST["apellido"], $_REQUEST["direccion"], $_REQUEST["telefono"], $_REQUEST["contraseña"], $_REQUEST["correo"]);
if($res == 1){
   
    echo '<script> document.getElementById("id01").style.display = "block"; </script>';
}
else{
    echo "no cant inserting";
}
?>