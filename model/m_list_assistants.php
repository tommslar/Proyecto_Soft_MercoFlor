<?php
require_once ('db.php');
	function list_assistants () {
		$db= db_setup();
		$sql= "SELECT `id_assistant`, `name`, `last_name`, `DNI`, `dni_participant` FROM `assistant` WHERE `baja` = 0;" ;
		$query = $db->prepare($sql);
		$query->execute();
		return $assistants = $query->fetchAll();
	}
?>