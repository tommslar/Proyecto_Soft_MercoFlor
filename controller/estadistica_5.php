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
	
	$dintel = $_POST["dintel"];
	$umbral = $_POST["umbral"];
	
	$direcciones_menos = "";
	
	if ($dintel != "") {
	
		$data_menos = get_direcciones_productores_menos_ventas($dintel);
	
		foreach ($data_menos as $socinq_menos) {
			$direcciones_menos = $direcciones_menos."['".$socinq_menos["last_name"]." ".$socinq_menos["name"]." (".$socinq_menos["company"].") - Ventas totales: ".$socinq_menos["suma"]."', '".$socinq_menos["address"]."'], ";
		}
	
		$direcciones_menos = rtrim($direcciones_menos, ", ");
		
	} else {
		$direcciones_menos = "[]";
	}
	
	$direcciones_mas = "";
	
	if ($umbral != "") {
	
		$data_mas = get_direcciones_productores_mas_ventas($umbral);
	
		foreach ($data_mas as $socinq_mas) {
			$direcciones_mas = $direcciones_mas."['".$socinq_mas["last_name"]." ".$socinq_mas["name"]." (".$socinq_mas["company"].") - Ventas totales: ".$socinq_mas["suma"]."', '".$socinq_mas["address"]."'], ";
		}
	
		$direcciones_mas = rtrim($direcciones_mas, ", ");
		
	} else {
		$direcciones_mas = "[]";
	}
	
	$template = $twig->loadTemplate('v_grafico_5.php');
	
	$template->display(array ('user_role' => $user_role, 'direcciones_menos' => $direcciones_menos, 'direcciones_mas' => $direcciones_mas));

?>