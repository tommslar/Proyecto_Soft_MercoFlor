<?php
	function twig_setup() {
		require_once '../view/twig/lib/Twig/Autoloader.php';
		Twig_Autoloader::register();

		$loader = new Twig_Loader_Filesystem('../view');
		$twig = new Twig_Environment($loader, 
				array(
					'cache' => false,
				)
			);
			
		return $twig;
	
	}
	
?>