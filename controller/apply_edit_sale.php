<?php
require_once('../model/m_edit_transaction.php');
require_once('../model/m_check_client.php');

$fecha = $_POST["fecha"];
$cuit = $_POST["cuit"];
$precio = $_POST["precio"];
$color = $_POST["color"];
$cantidad = $_POST["cantidad"];
$cantidad_vieja = $_POST["cantidad-vieja"];
$especie = $_POST["especies"];
$id = $_POST["id_transaction"];
$cuit_cli = $_POST["cuit-cli"];

$ok = check_client_exists ($cuit_cli);

if ($ok) {
	if (edit_sale ($fecha,$cuit,$especie,$precio,$color,$cantidad,$cantidad_vieja,$id,$cuit_cli)) {
		header ("Location: transacciones.php");
	} else {
		header ("Location: error.php");
	}
} else {
	header ("Location: error.php");
}

?>