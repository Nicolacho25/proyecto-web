<?php

include("./Connection.php"); 

$database = new Connection("shipment_fast","root");
$res = $database->insertIntoPaquete($_REQUEST["peso"], $_REQUEST["longitud"], $_REQUEST["valor_declarado"], $_REQUEST["nombre_destino"], $_REQUEST["telefono_destino"], $_REQUEST["fecha_envio"], $_REQUEST["tipo_producto"], $_REQUEST["metodo_pago"]);
$res = $database->insertIntoInicio($_REQUEST["nombre"], $_REQUEST["direccion"])
$res = $database->insertIntoDestino($_REQUEST["nombre"], $_REQUEST["direccion"])
if($res == 3){
    echo "<p>registrado correctamente<p>";
}
else{
    echo "no cant inserting";
}

?>