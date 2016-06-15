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
	
	$year = $_POST["anio"];
	
	$aux_mas = Array();
	$aux_menos = Array();
	$categories = Array();
	
	$mas = "[";
	$menos = "[";
	
	$aux = -1;
	
	for ($i = 1; $i <= 12; $i++) {
		$more = get_especie_mas_vendida_para_mes_de_anio ($year, $i);
		$less = get_especie_menos_vendida_para_mes_de_anio ($year, $i);
		if ((!empty($more)) AND (!empty($less))) {
			$categories[] = date("F", mktime(0, 0, 0, $i, 10));
			$aux_mas[0][] = array("'".$more[0]["scientific_name"]."'", $more[0]["total"]);
			$aux_menos[0][] = array("'".$less[0]["scientific_name"]."'",$less[0]["total"]);
			$aux++;
			$mas = $mas."[".implode (", ", $aux_mas[0][$aux])."]";
			$menos = $menos."[".implode (", ", $aux_menos[0][$aux])."]";
			if ($i != 12) {
				$mas = $mas.", ";
				$menos = $menos.", ";
			}
		}
	}
	
	$cat = "['".implode ("', '", $categories)."']";
	$mas = $mas."]";
	$menos = $menos."]";
	
	$template = $twig->loadTemplate('v_grafico_4.php');
	
	$template->display(array ('user_role' => $user_role, 'year' => $year, 'cat' => $cat, 'mas' => $mas, 'menos' => $menos));

?>