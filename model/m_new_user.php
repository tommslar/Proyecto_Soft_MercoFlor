<?php
require_once ('db.php');
	function new_user ($user, $pass, $email, $rol, $id_csi) {
	$db= db_setup();
	$sql = "INSERT INTO user(`id_user`, `username`, `password`, `email`, `id_csi`) 
	VALUES (NULL, :user, :pass, :email, :id_csi);" ;
	$query = $db->prepare($sql);
	$query->execute(array('user' => $user, 'pass' => $pass, 'email' => $email, 'id_csi' => $id_csi));
	
	$ultimo = $db->lastInsertId();
	
	$sql = "INSERT INTO user_role(`id_user`, `id_role`)
	VALUES (:id_user, :id_role);";
	$query = $db->prepare($sql);
	$query->execute(array('id_user' => $ultimo, 'id_role' => $rol));

	}
?>