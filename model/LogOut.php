<?php

include("./Connection.php"); 

$database = new Connection("shipment_fast","root");
$res = $database->insertIntoUsuarios($_REQUEST["nombre"], $_REQUEST["apellido"], $_REQUEST["direccion"], $_REQUEST["telefono"], $_REQUEST["contraseña"], $_REQUEST["correo"]);
if($res == 1){
   
echo "<div id='myModal' class='modal'>";

  echo "<div class='modal-content'>";
   echo "<span class='close'>&times;</span>";
   echo  "<p>Some text in the Modal..</p>";
  echo"</div>";

echo "</div>";   
}
else{
    echo "no cant inserting";
}
?>