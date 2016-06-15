<?php

	require_once './model/m_index.php';

    require_once './lib/twig/lib/Twig/Autoloader.php';
	Twig_Autoloader::register();
	
	try {

	$loader = new Twig_Loader_Filesystem('view');
	$twig = new Twig_Environment($loader, array('cache' => false,));

	$index_stock = get_current_stock();
	
	$template = $twig->loadTemplate('index.php');

	$template->display(array('index_stock' => $index_stock,));
	
	} catch (Exception $e) {
		die ('ERROR: ' . $e->getMessage());
	}

?>