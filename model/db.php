<?php
	function db_setup() {
		$bbdd = new PDO("mysql:dbname=grupo53;host=localhost;charset=utf8","grupo53","QguMlKiiFkrdVhFu");
		//$bbdd = new PDO("mysql:dbname=grupo53;host=localhost;charset=utf8","root","");
		$bbdd->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		$bbdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $bbdd;
	}
?>