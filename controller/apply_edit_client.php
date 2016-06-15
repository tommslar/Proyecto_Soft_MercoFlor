<?php
require_once('../model/m_edit_client.php');
require_once('../model/m_check_participant.php');

$nombre = $_POST["nombre"];
$apellido = $_POST["apellidos"];
$cuit = $_POST["cuit"];  
$mail = $_POST["mail"];
$direccion = $_POST["direccion"]; 
$razon = $_POST["razon"]; 
$cond_imp = $_POST["cond_imp"]; 

$id = $_POST['id_actor'];

$unico_cuit = check_cuit_uniqueness_edit ($cuit, $id);

if ($unico_cuit) {
	edit_client ($nombre, $apellido, $cuit, $mail, $direccion, $razon, $cond_imp, $id);
	header ("Location: clientes.php");
} else {
	header ("Location: error.php");
}

?>
