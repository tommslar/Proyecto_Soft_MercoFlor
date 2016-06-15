<?php
	require_once('db.php');
	
	function check_user_uniqueness ($user, $email) {
		$db = db_setup();
		$sql = "SELECT * FROM `user` WHERE (`username` = :user OR `email` = :email) AND `baja` = 0;";
		$query = $db->prepare($sql);
		$query->execute(array('user' => $user, 'email' => $email));
		$result = $query->fetchAll();
		if (count($result) > 0) {
			return false;
		} else {
			return true;
		}
	}
	
	function check_user_uniqueness_edit ($user, $email, $id_actual) {
		$db = db_setup();
		$sql = "SELECT * FROM `user` WHERE (`username` = :user OR `email` = :email) AND `id_user` <> :id AND `baja` = 0;";
		$query = $db->prepare($sql);
		$query->execute(array('user' => $user, 'email' => $email, 'id' => $id_actual));
		$result = $query->fetchAll();
		if (count($result) > 0) {
			return false;
		} else {
			return true;
		}
	}
	
?>