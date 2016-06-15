<?php
require_once('../model/m_edit_associate.php');
require_once('../model/m_check_participant.php');

$nombre = $_POST["nombre"];
$apellido = $_POST["apellidos"];
$cuit = $_POST["cuit"];
$cuit_viejo = $_POST["cuit-viejo"];  
$mail = $_POST["mail"];
$direccion = $_POST["direccion"]; 
$numsocio = $_POST["numsocio"];
$numsocio_viejo = $_POST["numsocio-viejo"];
$razon = $_POST["razon"]; 

$id = $_POST['id_actor'];

if ($cuit == $cuit_viejo) {
	$unico_cuit = true;
} else {
	$unico_cuit = check_cuit_uniqueness($cuit);
}

if ($numsocio == $numsocio_viejo) {
	$unico_nro_socio = true;
} else {
	$unico_nro_socio = check_membership_uniqueness_edit($numsocio, $id);
}

if ($unico_cuit && $unico_nro_socio) {
	edit_associate ($nombre, $apellido, $cuit, $mail, $direccion, $numsocio, $razon, $id);
	header ("Location: socios.php");
} else {
	header ("Location: error.php");
}

?>
