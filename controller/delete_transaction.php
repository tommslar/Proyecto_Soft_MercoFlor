<?php
require_once '../model/m_delete_transaction.php';

$id= $_GET['id'];
$tipo= $_GET['tipo'];
 
delete_transaction ($id, $tipo) ;

header ("Location: transacciones.php");
?>