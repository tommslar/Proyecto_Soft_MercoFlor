<?php
require_once('../model/m_delete_specie.php');

$id= $_GET['id'];
 
delete_specie ($id) ;

header ("Location: especies.php");
?>