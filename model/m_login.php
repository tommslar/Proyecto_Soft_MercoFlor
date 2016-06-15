<?php
require_once ('db.php');
	function iniciar_sesion ($username, $password) {
		$db= db_setup();
		$sql= "SELECT `id_user`, `username` FROM `user` WHERE `username` = :username and `password` = :password and `baja` = 0;" ;
		$query = $db->prepare($sql);
		$rows= $query->execute(array('username' => $username, 'password' => $password));
		$rows = $query->fetch() ;
		if ($rows > 0) {
			$_SESSION["id_user"]= $rows['id_user']; 
			$_SESSION["username"]= $rows['username']; 
			return true;
		}
		return false;
		
	}
?>