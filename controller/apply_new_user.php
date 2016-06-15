<?php
require_once('../model/m_new_user.php');
require_once('../model/m_check_user.php');
require_once('../model/m_get_data.php');

$user = $_POST["username"];
$pass = $_POST["password"];
$email = $_POST["email"];
$rol = $_POST["roles"];
$cuit = $_POST["cuit-csi"];  

if (strlen($cuit) > 0) {
	$id_csi = get_data_csi ($cuit);
} else {
	$id_csi = NULL;
}

$ok = check_user_uniqueness($user, $email);

if ($ok) {
	new_user ($user, $pass, $email, $rol, $id_csi);
	header ("Location: usuarios.php");
} else {
	header ("Location: error.php");
}
?>
