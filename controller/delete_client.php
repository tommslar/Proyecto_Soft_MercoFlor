<?php
require_once('../model/m_delete_client.php');

$id= $_GET['id']; 
 
delete_client ($id);

header ("Location: clientes.php");

?>