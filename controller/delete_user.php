<?php

require_once('../model/m_delete_user.php');
require_once('check_functions.php');

check_privileges_status('usuarios');

$id= $_GET['id'];

delete_user ($id) ;

header ("Location: usuarios.php");
?>