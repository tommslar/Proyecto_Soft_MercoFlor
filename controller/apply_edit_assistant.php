<?php
require_once('../model/m_edit_assistant.php');
require_once('../model/m_check_assistant.php');

$nombre = $_POST["nombre"];
$apellido = $_POST["apellidos"];
$dni = $_POST["dni"];
$dni_viejo = $_POST["dni-viejo"];
$dni_jefe = $_POST["dni_jefe"];
$idayu = $_POST['id_assistant'];

if ($dni == $dni_viejo) {
	$unico_dni = true;
} else {
	$unico_dni = check_assistant_uniqueness ($dni);
}

$cant_asistentes_jefe = check_cant_assistants($dni_jefe);

if ($unico_dni && $cant_asistentes_jefe) {
	edit_assistant ($nombre, $apellido, $dni, $dni_jefe, $idayu); 
	header ("Location: ayudantes.php");
} else {
	header ("Location: error.php");
}

?>
