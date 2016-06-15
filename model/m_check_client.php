<?php
	require_once('db.php');
	
	function check_client_exists ($cuit_cli) {
		$db = db_setup();
		$sql = "SELECT * FROM `participant` WHERE (`CUIT` = :cuit_cli AND `id_type` = 1) AND `baja` = 0;";
		$query = $db->prepare($sql);
		$query->execute(array('cuit_cli' => $cuit_cli));
		$result = $query->fetch();
		if ($result) {
			return true;
		} else {
			return false;
		}
	}
	
?>