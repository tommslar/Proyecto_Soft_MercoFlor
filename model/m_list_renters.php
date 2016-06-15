<?php
require_once ('db.php');
	function list_renters () {
		$db= db_setup();
		$sql= "SELECT `id_actor`, `name`, `last_name`, `CUIT`, `email`, `address`, `company`, `date_from`, `date_to` FROM `participant` WHERE `baja` = 0 AND `id_type` = 3;" ;
		$query = $db->prepare($sql);
		$query->execute();
		return $renters = $query->fetchAll();
	}
?>