<?php

	require_once ('../model/m_get_role.php');

	session_start();

	function check_session_status() {

		if (!isset($_SESSION['username'])) {
			header("Location: login.php");
		}
	}

	function check_privileges_status($op) {

		$id_s = $_SESSION['id_user'];
		$role = get_user_role($id_s);

		switch ($op) {
			case 'usuarios':
				if (($role['id_role'] == 2 xor $role['id_role'] == 3) xor $role['id_role'] == 4) {
					header ("Location: error_privileges.php");
				}
				break;
			case 'clientes':
				if ($role['id_role'] == 3) {
					header ("Location: error_privileges.php");
				}
				break;
			case 'socios':
				if ($role['id_role'] == 3) {
					header ("Location: error_privileges.php");
				}
				break;
			case 'inquilinos':
				if ($role['id_role'] == 3) {
					header ("Location: error_privileges.php");
				}
				break;
			case 'ayudantes':
				if ($role['id_role'] == 3) {
					header ("Location: error_privileges.php");
				}
				break;
			//Acá van a ir más restricciones a medida que sean necesarias
		}
	}

?>