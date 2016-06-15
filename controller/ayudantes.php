<?php

	require_once '../lib/twig/lib/Twig/Autoloader.php';
	Twig_Autoloader::register();

	$loader = new Twig_Loader_Filesystem('../view/');
	$twig = new Twig_Environment($loader, array('cache' => false,));

	session_start();
	
	require_once ('check_functions.php');

	check_session_status();
	
	check_privileges_status('ayudantes');

	require_once('../model/m_list_assistants.php');
	require_once ('../model/m_get_role.php');

	$id_s = $_SESSION["id_user"];
	$user_role = get_user_role ($id_s);
	
	$assistants = list_assistants();
	
	$template = $twig->loadTemplate('v_ayudantes.php');
	
	$template->display(array ('user_role' => $user_role, 'assistants' => $assistants, 'id_s' => $id_s));

?>