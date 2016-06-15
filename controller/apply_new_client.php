<?php
require_once('../model/m_new_client.php');
require_once('../model/m_check_participant.php');

$nombre = $_POST["nombre"];
$apellido = $_POST["apellidos"];
$cuit = $_POST["cuit"];  
$mail = $_POST["mail"];
$direccion = $_POST["direccion"]; 
$razon = $_POST["razon"]; 
$cond_imp = $_POST["cond-imp"];

$unico_cuit = check_cuit_uniqueness ($cuit);

if ($unico_cuit) {
	new_client ($nombre, $apellido, $cuit, $mail, $direccion, $razon, $cond_imp);
	header ("Location: clientes.php");
} else {
	header ("Location: error.php");
}
   
?>
