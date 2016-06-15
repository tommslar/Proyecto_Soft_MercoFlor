<?php
require_once('../model/m_new_transaction.php');
require_once('../model/m_check_client.php');

$fecha = $_POST["fecha"];
$cuit = $_POST["cuit"];
$precio = $_POST["precio"];
$color = $_POST["color"];
$cantidad = $_POST["cantidad"];
$especie = $_POST["especies"];
$cuit_cli = $_POST["cuit-cli"];

$ok = check_client_exists ($cuit_cli);

if ($ok) {
	if (new_sale ($fecha,$cuit,$especie,$precio,$color,$cantidad,$cuit_cli)) {
		header ("Location: transacciones.php");
	} else {
		header ("Location: error.php");
	}
} else {
	header ("Location: error.php");
}

?>