<?php
 
	session_start();
	require_once ('../model/m_login.php');
	$username = $_POST['username'];
	$password = $_POST['password'];
	$ok = iniciar_sesion ($username, $password);
	if ($ok) {
		header("Location: backend.php");
	}
	else {
		header("Location: login.php");
	}
?>