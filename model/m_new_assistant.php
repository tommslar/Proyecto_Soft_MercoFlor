<?php
require_once ('db.php');
	function new_assistant ($nombre, $apellido, $dni, $dni_jefe) {
	$db= db_setup();
	$sql= "INSERT INTO assistant(`id_assistant`, `name`, `last_name`, `DNI`, `dni_participant`, `baja`) VALUES (NULL, :nombre, :apellido, :dni, :dni_jefe,'0');" ;

	$query = $db->prepare($sql);
	$rows= $query->execute(array('nombre' => $nombre, 'apellido' => $apellido, 'dni' => $dni, 'dni_jefe' => $dni_jefe));

	}
?>


