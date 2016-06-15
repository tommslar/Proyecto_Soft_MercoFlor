<?php
require_once('../model/m_delete_renter.php');

$id= $_GET['id'];
 
delete_renter ($id);

header ("Location: inquilinos.php");

?>