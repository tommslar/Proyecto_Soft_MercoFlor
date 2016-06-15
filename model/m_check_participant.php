<?php

	require_once ('db.php');
	
	function check_cuit_uniqueness ($cuit) {
		$db = db_setup();
		$sql = "SELECT * FROM `participant` WHERE `CUIT`= :cuit AND `baja`= 0;";
		$query = $db->prepare($sql);
		$result = $query->execute(array('cuit' => $cuit));
		$result = $query->fetchAll();
		if (count($result) > 0) {
			return false;
		} else {
			return true;
		}
	}
	
	function check_cuit_uniqueness_edit ($cuit, $id) {
		$db = db_setup();
		$sql = "SELECT * FROM `participant` WHERE `CUIT`= :cuit AND `id_actor`<> :id AND `baja`= 0;";
		$query = $db->prepare($sql);
		$result = $query->execute(array('cuit' => $cuit, 'id' => $id));
		$result = $query->fetchAll();
		if (count($result) > 0) {
			return false;
		} else {
			return true;
		}
	}
	
	function check_membership_uniqueness ($numsocio) {
		$db = db_setup();
		$sql = "SELECT * FROM `participant` WHERE `membership_number`= :socio AND `id_type`= 2 AND `baja`= 0;";
		$query = $db->prepare($sql);
		$result = $query->execute(array('socio' => $numsocio));
		$result = $query->fetchAll();
		if (count($result) > 0) {
			return false;
		} else {
			return true;
		}
	}
	
	function check_membership_uniqueness_edit ($numsocio, $id) {
		$db = db_setup();
		$sql = "SELECT * FROM `participant` WHERE `membership_number`= :socio AND `id_actor`<> :id AND `id_type`= 2 AND `baja`= 0;";
		$query = $db->prepare($sql);
		$result = $query->execute(array('socio' => $numsocio, 'id' => $id));
		$result = $query->fetchAll();
		if (count($result) > 0) {
			return false;
		} else {
			return true;
		}
	}
	
	function check_socinq_exists ($cuit_socinq) {
		$db = db_setup();
		$sql = "SELECT * FROM `participant` WHERE (`CUIT` = :cuit_socinq AND `id_type` <> 1) AND `baja` = 0;";
		$query = $db->prepare($sql);
		$query->execute(array('cuit_socinq' => $cuit_socinq));
		$result = $query->fetch();
		if ($result) {
			return true;
		} else {
			return false;
		}
	}
	
?>