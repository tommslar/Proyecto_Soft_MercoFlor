<?php
require_once('../model/m_edit_renter.php');
require_once('../model/m_check_participant.php');

$nombre = $_POST["nombre"];
$apellido = $_POST["apellidos"];
$cuit = $_POST["cuit"];
$cuit_viejo = $_POST["cuit-viejo"];
$mail = $_POST["mail"];
$direccion = $_POST["direccion"]; 
$razon = $_POST["razon"];
$desde = $_POST["desde"];
$hasta = $_POST["hasta"];

$id = $_POST['id_actor'] ;

if ($cuit == $cuit_viejo) {
	$unico_cuit = true;
} else {
	$unico_cuit = check_cuit_uniqueness_edit ($cuit, $id);
}

if ($unico_cuit) {
	edit_renter ($nombre, $apellido, $cuit, $mail, $direccion, $razon, $desde, $hasta, $id);
	header ("Location: inquilinos.php");
} else {
	header ("Location: error.php");
}

?>
