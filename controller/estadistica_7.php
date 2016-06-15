<?php

	require_once 'check_functions.php';
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
	
	$month = $_POST["mes"];
	
	$data = get_especies_mas_vendidas_mes ($month);
	
	$especies = array();
	$valores = array();

	foreach ($data as $et) {
		$especies[] = $et["scientific_name"];
		$valores[] = $et["total"];
	}
	
	$especies = implode("', '", $especies);
	$especies = "['".$especies."']";
	
	$valores = join(", ", $valores);
	$valores = "[".$valores."]";
	
	$month = date("F", mktime(0, 0, 0, $month, 10));
	
	$template = $twig->loadTemplate('v_grafico_7.php');
	
	$template->display(array ('user_role' => $user_role, 'month' => $month, 'especies' => $especies, 'valores' => $valores));

?>