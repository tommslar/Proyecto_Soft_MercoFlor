<?php
require_once('../model/m_new_associate.php');
require_once('../model/m_check_participant.php');

$nombre = $_POST["nombre"];
$apellido = $_POST["apellidos"];
$cuit = $_POST["cuit"];  
$mail = $_POST["mail"];
$direccion = $_POST["direccion"]; 
$numsocio = $_POST["numsocio"];
$razon = $_POST["razon"];

$unico_cuit = check_cuit_uniqueness($cuit);

$unico_nro_socio = check_membership_uniqueness($numsocio);

if ($unico_cuit && $unico_nro_socio) {
	new_associate ($nombre, $apellido, $cuit, $mail, $direccion, $numsocio, $razon);
	header ("Location: socios.php");
} else {	
	header ("Location: error.php");
}

?>
