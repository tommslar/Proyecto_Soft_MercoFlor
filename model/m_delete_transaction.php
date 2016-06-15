<?php
require_once ('db.php');
function delete_transaction ($id, $tipo) {
$db= db_setup();

$sql = "SELECT `cant`, `id_account` FROM `transaction` WHERE `id_transaction`= :id;";
$query = $db->prepare($sql);
$result = $query->execute(array('id' => $id));
$result = $query->fetch();

$cant = $result['cant'];
$cuenta = $result['id_account'];

$sql = "SELECT `cant_actual` FROM `account` WHERE `id_account`= :cuenta;";
$query = $db->prepare($sql);
$result = $query->execute(array('cuenta' => $cuenta));
$result = $query->fetch();

if ($tipo == 1) {
	$nuevo_stock = $result['cant_actual'] - (int)$cant;
} else {
	$nuevo_stock = $result['cant_actual'] + (int)$cant;
}

$sql= "UPDATE `account` SET `cant_actual`= :nuevo_stock WHERE `id_account` = :cuenta;" ;
$query = $db->prepare($sql);
$result= $query->execute(array('nuevo_stock' => $nuevo_stock, 'cuenta' => $cuenta));

$sql= "UPDATE `transaction` SET `baja`='1' WHERE `id_transaction` = :id;" ;
$query = $db->prepare($sql);
$result= $query->execute(array('id' => $id));

}