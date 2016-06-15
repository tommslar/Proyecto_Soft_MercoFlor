<?php

    require_once '../model/m_get_role.php';
        
    require_once 'check_functions.php';

	require_once '../lib/twig/lib/Twig/Autoloader.php';
	Twig_Autoloader::register();
        
    $loader = new Twig_Loader_Filesystem('../view/');
	$twig = new Twig_Environment($loader, array('cache' => false,));

	session_start();

	check_session_status();
	
	$id_s = $_SESSION["id_user"];
	$persona = $_SESSION["username"];
	$user_role = get_user_role ($id_s);
        
    $template = $twig->loadTemplate('backend.php');

	$template->display(array ('persona' => $persona, 'user_role' => $user_role));
    
?>