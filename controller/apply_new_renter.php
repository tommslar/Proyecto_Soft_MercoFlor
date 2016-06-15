<?php
require_once('../model/m_new_renter.php');
require_once('../model/m_check_participant.php');

$nombre = $_POST["nombre"];
$apellido = $_POST["apellidos"];
$cuit = $_POST["cuit"];  
$mail = $_POST["mail"];
$direccion = $_POST["direccion"]; 
$razon = $_POST["razon"];
$desde = $_POST["desde"];
$hasta = $_POST["hasta"];

$unico_cuit = check_cuit_uniqueness($cuit);

if ($unico_cuit) {
	new_renter ($nombre, $apellido, $cuit, $mail, $direccion, $razon, $desde, $hasta);
	header ("Location: inquilinos.php");
} else {
	header ("Location: error.php");
}

?>
