<?php

	require_once 'check_functions.php';
	
	require_once '../model/m_get_role.php';
	require_once '../model/m_get_data.php';
	
	require_once '../lib/twig/lib/Twig/Autoloader.php';
	Twig_Autoloader::register();
	
	$loader = new Twig_Loader_Filesystem('../view/');
	$twig = new Twig_Environment($loader, array('cache' => false,));
	
	session_start();
	
	check_session_status();
	
	$id = $_GET['id'];

	$rows = get_data_transaction($id);
	
	$species = get_species_names();
	
	$colors = get_colors_names();

	$id_s = $_SESSION["id_user"];
	$user_role = get_user_role ($id_s);
	
	$template = $twig->loadTemplate('v_edit_purchase.php');
	
	if ($user_role['id_role'] <= 2) {
		$template->display(array ('user_role' => $user_role, 'rows' => $rows, 'species' => $species, 'colors' => $colors));
	} else {
		$datos_socinq = get_data_socinq($id_s);
		$template->display(array ('user_role' => $user_role, 'rows' => $rows, 'species' => $species, 'data_socinq' => $datos_socinq, 'colors' => $colors));
	}
	
?>