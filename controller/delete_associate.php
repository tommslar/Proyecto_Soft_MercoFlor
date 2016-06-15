<?php
require_once('../model/m_delete_associate.php');

$id= $_GET['id'];
 
delete_associate ($id) ;

header ("Location: socios.php");

?>