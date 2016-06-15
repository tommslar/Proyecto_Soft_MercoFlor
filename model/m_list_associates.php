<?php
require_once ('db.php');
	function list_associates () {
		$db= db_setup();
		$sql= "SELECT `id_actor`, `name`, `last_name`, `CUIT`, `email`, `address`, `company`, `membership_number` FROM `participant` WHERE `baja` = 0 AND `id_type` = 2;" ;
		$query = $db->prepare($sql);
		$query->execute();
		return $users = $query->fetchAll();
	}
?>