<?php

	require_once ('check_functions.php');
	require_once ('../model/m_get_role.php');
	require_once ('../model/m_get_data.php');
	require_once '../lib/twig/lib/Twig/Autoloader.php';
	Twig_Autoloader::register();

	$loader = new Twig_Loader_Filesystem('../view/');
	$twig = new Twig_Environment($loader, array('cache' => false,));

	session_start();
	check_session_status();

	$id = $_GET['id'];

	$specie_types = get_specie_types();

	$rows = get_data_specie($id);
	
	$regions = get_regions_names();
	
	$habitats = get_habitats_names();
	
	$blossom_seasons = get_blossom_seasons_names();

	$id_s = $_SESSION["id_user"];
	$user_role = get_user_role ($id_s);

		
	$template = $twig->loadTemplate('v_edit_specie.php');
	
	$template->display(array('id' => $id, 'rows' => $rows, 'user_role' => $user_role, 'id_s' => $id_s, 'specie_types' => $specie_types, 'regions' => $regions, 'habitats' => $habitats, 'blossom_seasons' => $blossom_seasons)); 

?>