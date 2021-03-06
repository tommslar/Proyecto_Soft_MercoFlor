<?php

	require_once 'check_functions.php';
	require_once '../model/m_check_participant.php';
	require_once '../model/m_estadisticas.php';
	
   	require_once '../model/m_get_role.php';
	
	require_once '../lib/twig/lib/Twig/Autoloader.php';
	Twig_Autoloader::register();
	
	$loader = new Twig_Loader_Filesystem('../view/');
	$twig = new Twig_Environment($loader, array('cache' => false,));
	
	session_start();
	
	check_session_status();

   	$id_s = $_SESSION["id_user"];
	$user_role = get_user_role ($id_s);
	
	$cuit_si = $_POST["cuit"];
	
	$ok = check_socinq_exists($cuit_si);
	
	if ($ok) {
	
		$data = get_ventas_generales_socio($cuit_si);
		
		$especies = array();
		$totales = array();

		foreach ($data as $et) {
			$especies[] = $et["scientific_name"];
			$totales[] = $et["total"];
		}
		
		$especies = implode("', '", $especies);
		$especies = "['".$especies."']";
		
		$totales = join(", ", $totales);
		$totales = "[".$totales."]";
			
		$template = $twig->loadTemplate('v_grafico_2.php');
		
		$template->display(array ('user_role' => $user_role, 'especies' => $especies, 'totales' => $totales, 'cuit' => $cuit_si));

	} else {
		header ("Location: error.php");
	}
		
?>