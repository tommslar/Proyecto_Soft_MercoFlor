<?php
	require_once('db.php');
	
	function get_ventas_generales () {
		$db = db_setup();
		$sql = "SELECT `specie`.scientific_name, SUM(`transaction`.cant) AS total FROM transaction INNER JOIN account ON `transaction`.id_account = `account`.id_account INNER JOIN `specie` ON `account`.id_specie = `specie`.id_specie WHERE `transaction`.id_tipo_movimiento = 2 AND `transaction`.baja = 0 GROUP BY `specie`.id_specie ORDER BY total DESC;";
		$query = $db->prepare($sql);
		$result = $query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}
	
	function get_ventas_generales_socio ($cuit_si) {
		$db = db_setup();
		$sql = "SELECT `specie`.scientific_name, SUM(`transaction`.cant) AS total FROM transaction INNER JOIN account ON `transaction`.id_account = `account`.id_account INNER JOIN `specie` ON `account`.id_specie = `specie`.id_specie INNER JOIN `participant` ON `participant`.id_actor = `account`.id_actor WHERE `transaction`.id_tipo_movimiento = 2 AND `transaction`.baja = 0 AND `participant`.CUIT = :cuit GROUP BY `specie`.id_specie ORDER BY total DESC;";
		$query = $db->prepare($sql);
		$result = $query->execute(array('cuit' => $cuit_si));
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}
	
	function get_ventas_generales_fechas ($fecha_ini, $fecha_fin) {
		$db = db_setup();
		$sql = "SELECT `specie`.scientific_name, SUM(`transaction`.cant) AS total FROM transaction INNER JOIN account ON `transaction`.id_account = `account`.id_account INNER JOIN specie ON `account`.id_specie = `specie`.id_specie WHERE `transaction`.id_tipo_movimiento = 2 AND `transaction`.baja = 0 AND (`transaction`.date BETWEEN :fecha_ini AND :fecha_fin) GROUP BY `specie`.id_specie ORDER BY total DESC;";
		$query = $db->prepare($sql);
		$result = $query->execute(array('fecha_ini' => $fecha_ini, 'fecha_fin' => $fecha_fin));
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}
	
	function get_especie_mas_vendida_para_mes_de_anio ($year, $month) {
		$db = db_setup();
		$sql = "SELECT `specie`.scientific_name, SUM(`transaction`.cant) AS total FROM transaction INNER JOIN account ON `transaction`.id_account = `account`.id_account INNER JOIN `specie` ON `account`.id_specie = `specie`.id_specie WHERE `transaction`.id_tipo_movimiento = 2 AND `transaction`.baja = 0 AND MONTH(`transaction`.date) = :month AND YEAR(`transaction`.date) = :year GROUP BY `specie`.id_specie ORDER BY total DESC LIMIT 1;";
		$query = $db->prepare($sql);
		$result = $query->execute(array('year' => $year, 'month' => $month));
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}
	
	function get_especie_menos_vendida_para_mes_de_anio ($year, $month) {
		$db = db_setup();
		$sql = "SELECT `specie`.scientific_name, SUM(`transaction`.cant) AS total FROM transaction INNER JOIN account ON `transaction`.id_account = `account`.id_account INNER JOIN `specie` ON `account`.id_specie = `specie`.id_specie WHERE `transaction`.id_tipo_movimiento = 2 AND `transaction`.baja = 0 AND MONTH(`transaction`.date) = :month AND YEAR(`transaction`.date) = :year GROUP BY `specie`.id_specie ORDER BY total ASC LIMIT 1;";
		$query = $db->prepare($sql);
		$result = $query->execute(array('year' => $year, 'month' => $month));
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}
	
	function get_especies_mas_vendidas_mes ($month) {
		$db = db_setup();
		$sql = "SELECT `specie`.scientific_name, SUM(`transaction`.cant) AS total FROM transaction INNER JOIN account ON `transaction`.id_account = `account`.id_account INNER JOIN `specie` ON `account`.id_specie = `specie`.id_specie WHERE `transaction`.id_tipo_movimiento = 2 AND `transaction`.baja = 0 AND MONTH(`transaction`.date) = :month GROUP BY `specie`.id_specie ORDER BY total DESC LIMIT 5;";
		$query = $db->prepare($sql);
		$result = $query->execute(array('month' => $month));
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}
	
	function get_compras_para_cliente_especie ($id_especie) {
		$db = db_setup();
		$sql = "SELECT `transaction`.CCUIT, SUM(`transaction`.cant) AS total FROM `transaction` INNER JOIN `account` ON `account`.id_account = `transaction`.id_account WHERE `account`.id_specie = :id AND `transaction`.id_tipo_movimiento = 2 AND `transaction`.baja = 0 GROUP BY `transaction`.CCUIT;";
		$query = $db->prepare($sql);
		$result = $query->execute(array('id' => $id_especie));
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}
	
	function get_all_names_especie() {
		$db = db_setup();
		$sql = "SELECT `specie`.scientific_name FROM `specie` WHERE `specie`.baja = 0;";
		$query = $db->prepare($sql);
		$result = $query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}
	
	function get_cuit_all_clients () {
		$db = db_setup();
		$sql = "SELECT `participant`.CUIT FROM `participant` WHERE `participant`.baja = 0 AND `participant`.id_type = 1;";
		$query = $db->prepare($sql);
		$result = $query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}
	
	function get_direcciones_productores_menos_ventas ($dintel) {
		$db = db_setup();
		$sql = "SELECT  `participant`.name,  `participant`.last_name,  `participant`.company,  `participant`.address,  IF(ISNULL(`sc`.total), 0, `sc`.total) AS suma FROM participant LEFT JOIN (SELECT  `account`.id_actor, SUM( `transaction`.cant ) AS total FROM  `transaction` INNER JOIN  `account` ON  `account`.id_account =  `transaction`.id_account WHERE  `transaction`.id_tipo_movimiento =2 AND  `transaction`.baja =0 GROUP BY  `account`.id_actor ) AS sc ON  `participant`.id_actor =  `sc`.id_actor WHERE  `participant`.baja =0 AND  `participant`.id_type <>1 GROUP BY  `participant`.id_actor HAVING suma <= :dintel ORDER BY  `sc`.total DESC;";
		$query = $db->prepare($sql);
		$result = $query->execute(array('dintel' => $dintel));
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}
	
	function get_direcciones_productores_mas_ventas ($umbral) {
		$db = db_setup();
		$sql = "SELECT  `participant`.name,  `participant`.last_name,  `participant`.company,  `participant`.address,  IF(ISNULL(`sc`.total), 0, `sc`.total) AS suma FROM participant LEFT JOIN (SELECT  `account`.id_actor, SUM( `transaction`.cant ) AS total FROM  `transaction` INNER JOIN  `account` ON  `account`.id_account =  `transaction`.id_account WHERE  `transaction`.id_tipo_movimiento =2 AND  `transaction`.baja =0 GROUP BY  `account`.id_actor ) AS sc ON  `participant`.id_actor =  `sc`.id_actor WHERE  `participant`.baja =0 AND  `participant`.id_type <>1 GROUP BY  `participant`.id_actor HAVING suma >= :umbral ORDER BY  `sc`.total DESC;";
		$query = $db->prepare($sql);
		$result = $query->execute(array('umbral' => $umbral));
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}

?>