<?php
require_once('../model/m_new_assistant.php');
require_once('../model/m_check_assistant.php');

$nombre = $_POST["nombre"];
$apellido = $_POST["apellidos"];
$dni = $_POST["dni"];  
$dni_jefe = $_POST["dni_jefe"];

$unico_dni = check_assistant_uniqueness ($dni);
echo $unico_dni;
$cant_asistentes_jefe = check_cant_assistants($dni_jefe);
echo $cant_asistentes_jefe;
if ($unico_dni && $cant_asistentes_jefe) {
	new_assistant ($nombre, $apellido, $dni, $dni_jefe);
	header ("Location: ayudantes.php");
} else {
	header ("Location: error.php");
}
?>
