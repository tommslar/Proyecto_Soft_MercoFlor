<?php
require_once ('db.php');
	function list_users () {
		$db= db_setup();
		$sql= "SELECT `user`.id_user, `user`.username, `user`.password, `user`.email, `role`.description, `participant`.CUIT FROM `user` INNER JOIN `user_role` ON `user`.id_user = `user_role`.id_user INNER JOIN `role` ON `role`.id_role = `user_role`.id_role LEFT JOIN `participant` ON `user`.id_csi = `participant`.id_actor WHERE `user`.baja = 0" ;
		$query = $db->prepare($sql);
		$query->execute();
		return $users = $query->fetchAll();
	}
?>