<?php

	require_once '../model/m_list_users.php';
	require_once '../model/m_get_role.php';
        
    require_once 'check_functions.php';

	require_once '../lib/twig/lib/Twig/Autoloader.php';
	Twig_Autoloader::register();

	$loader = new Twig_Loader_Filesystem('../view/');
	$twig = new Twig_Environment($loader, array('cache' => false,));

	session_start();

	check_session_status();
	
	check_privileges_status('usuarios');

	$id_s = $_SESSION["id_user"];
	$user_role = get_user_role ($id_s);
	
	$users = list_users();
	
	$template = $twig->loadTemplate('v_usuarios.php');
	
	$template->display(array ('user_role' => $user_role, 'users' => $users));

?>