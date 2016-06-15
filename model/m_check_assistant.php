<?php
	require_once('db.php');
	
	function check_assistant_uniqueness ($dni) {
		$db = db_setup();
		$sql = "SELECT * FROM `assistant` WHERE `dni`= :dni AND `baja`= 0;";
		$query = $db->prepare($sql);
		$result = $query->execute(array('dni' => $dni));
		$result = $query->fetchAll();
		if (count($result) > 0) {
			return false;
		} else {
			return true;
		}
	}
	
	function check_cant_assistants ($dni_jefe) {
		$db = db_setup();
		$sql = "SELECT * FROM `assistant` WHERE `dni_participant`= :dni_jefe AND `baja`= 0;";
		$query = $db->prepare($sql);
		$result = $query->execute(array('dni_jefe' => $dni_jefe));
		$result = $query->fetchAll();
		if (count($result) == 2) {
			return false;
		} else {
			return true;
		}
	}
?>