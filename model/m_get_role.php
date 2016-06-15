<?php
	require_once ('db.php');
	function get_user_role ($id_s) {
		$db= db_setup();
		$sql= "SELECT `id_role` FROM `user_role` WHERE `id_user` = :id ;" ;
		$query = $db->prepare($sql);
		$rows= $query->execute(array('id' => $id_s));
		return $query->fetch() ;
	}
?>