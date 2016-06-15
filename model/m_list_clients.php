<?php
require_once ('db.php');
	function list_clients () {  
		$db= db_setup();
		$sql= "SELECT `participant`.id_actor, `participant`.name, `participant`.last_name, `participant`.CUIT, `participant`.email, `participant`.address, `participant`.company, (`tax_condition`.name) as AFIP FROM `participant` INNER JOIN `tax_condition` ON `participant`.AFIP = `tax_condition`.id_cond WHERE `baja` = 0 AND `id_type` = 1;" ;
		$query = $db->prepare($sql);
		$query->execute();
		return $clients = $query->fetchAll();
	}
?>