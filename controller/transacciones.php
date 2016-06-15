<?php

	require_once 'check_functions.php';

	require_once '../model/m_list_transactions.php';
   	require_once '../model/m_get_role.php';
	require_once '../model/m_get_data.php';
	
	require_once '../lib/twig/lib/Twig/Autoloader.php';
	Twig_Autoloader::register();
	
	$loader = new Twig_Loader_Filesystem('../view/');
	$twig = new Twig_Environment($loader, array('cache' => false,));
	
	session_start();
	
	check_session_status();

   	$id_s = $_SESSION["id_user"];
	$user_role = get_user_role ($id_s);
	
	switch ($user_role['id_role']) {
		case '3':
			$id_csi = get_id_csi ($id_s);
			$sales = list_sales_for ($id_csi);
		break;
		
		case '4':
			$id_csi = get_id_csi ($id_s);
			$cuit = get_cuit_client ($id_csi);
			$sales = list_sales_for_client ($cuit);
		break;
		
		default:
			$sales = list_sales();
		break;
	}
		
	$template = $twig->loadTemplate('v_transacciones.php');
	
	if ($user_role['id_role'] <= 3) {
		if ($user_role['id_role'] <= 2) {
			$purchases = list_purchases();
		} else {
			$id_csi = get_id_csi ($id_s);
			$purchases = list_purchases_for ($id_csi);
		}
		$template->display(array ('user_role' => $user_role, 'sales' => $sales, 'purchases' => $purchases));
	} else {
		$template->display(array ('user_role' => $user_role, 'sales' => $sales));
	}

?>