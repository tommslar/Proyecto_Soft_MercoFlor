<?php
	require_once ('db.php');
	
	function edit_user ($id_actual, $user, $pass, $email, $rol, $id_csi) {
		$db = db_setup();
		$sql = "UPDATE `user` SET `username`= :user, `password`= :pass, `email`= :email , `id_csi`= :id_csi WHERE `id_user`= :id;";
		$query = $db->prepare($sql);
		$rows = $query->execute(array('user' => $user, 'pass' => $pass, 'email' => $email, 'id' => $id_actual, 'id_csi' => $id_csi));
		
		$sql = "UPDATE `user_role` SET `id_role`=:rol WHERE `id_user`=:id;";
		$query = $db->prepare($sql);
		$rows = $query->execute(array('rol' => $rol, 'id' => $id_actual));
	
	}
	
?>