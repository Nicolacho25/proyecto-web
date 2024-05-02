<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include("./Connection.php");

$con = new Connection("shipment_fast","root");

$con->rastrear($_REQUEST["id"]);

?>

