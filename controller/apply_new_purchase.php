<?php
require_once('../model/m_new_transaction.php');

$fecha = $_POST["fecha"];
$cuit = $_POST["cuit"];
$precio = $_POST["precio"];
$color = $_POST["color"];
$cantidad = $_POST["cantidad"];
$especie = $_POST["especies"];

if (new_purchase ($fecha,$cuit,$especie,$precio,$color,$cantidad)) {
	header ("Location: transacciones.php");
} else {
	header ("Location: error.php");
}

?>