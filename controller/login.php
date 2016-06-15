<?php

	require_once '../lib/twig/lib/Twig/Autoloader.php';
	Twig_Autoloader::register();

	$loader = new Twig_Loader_Filesystem('../view/');
	$twig = new Twig_Environment($loader, array('cache' => false,));
	
	$template = $twig->loadTemplate('login.php');

	$template->display(array());
	
?>