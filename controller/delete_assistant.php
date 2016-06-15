<?php
require_once('../model/m_delete_assistant.php');

$id= $_GET["id"] ;
 
delete_assistant ($id) ;

header ("Location: ayudantes.php");

?>