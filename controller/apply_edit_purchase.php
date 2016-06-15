<?php
require_once('../model/m_edit_transaction.php');

$fecha = $_POST["fecha"];
$cuit = $_POST["cuit"];
$precio = $_POST["precio"];
$color = $_POST["color"];
$cantidad = $_POST["cantidad"];
$cantidad_vieja = $_POST["cantidad-vieja"];
$especie = $_POST["especies"];
$id = $_POST["id_transaction"];

if (edit_purchase ($fecha,$cuit,$especie,$precio,$color,$cantidad,$cantidad_vieja,$id)) {
	header ("Location: transacciones.php");
} else {
	header ("Location: error.php");
}

?>