<?php
require_once ('db.php');
	function list_purchases () {
		$db= db_setup();
		$sql= "SELECT `transaction`.id_transaction, `transaction`.date, `transaction`.time, `specie`.scientific_name, (`color`.name) AS cname, `transaction`.cant, `transaction`.price, `participant`.CUIT FROM `transaction` INNER JOIN `account` ON `transaction`.id_account = `account`.id_account INNER JOIN `participant` ON `account`.id_actor = `participant`.id_actor INNER JOIN `specie` ON `specie`.id_specie = `account`.id_specie INNER JOIN `color` ON `transaction`.color = `color`.id_color WHERE `transaction`.id_tipo_movimiento = 1 AND `transaction`.baja = 0 ORDER BY `transaction`.date ASC;" ;
		$query = $db->prepare($sql);
		$query->execute();
		return $purchases = $query->fetchAll();
	}
	function list_sales () {
		$db= db_setup();
		$sql= "SELECT `transaction`.id_transaction, `transaction`.date, `transaction`.time, `specie`.scientific_name, (`color`.name) AS cname, `transaction`.cant, `transaction`.price, `transaction`.CCUIT, `participant`.CUIT FROM `transaction` INNER JOIN `account` ON `transaction`.id_account = `account`.id_account INNER JOIN `participant` ON `account`.id_actor = `participant`.id_actor INNER JOIN `specie` ON `specie`.id_specie = `account`.id_specie INNER JOIN `color` ON `transaction`.color = `color`.id_color WHERE `transaction`.id_tipo_movimiento = 2 AND `transaction`.baja = 0 ORDER BY `transaction`.date ASC;" ;
		$query = $db->prepare($sql);
		$query->execute();
		return $sales = $query->fetchAll();
	}
	
	function list_purchases_for ($id_csi) {
		$db= db_setup();
		$sql= "SELECT `transaction`.id_transaction, `transaction`.date, `transaction`.time, `specie`.scientific_name, (`color`.name) AS cname, `transaction`.cant, `transaction`.price, `participant`.CUIT FROM `transaction` INNER JOIN `account` ON `transaction`.id_account = `account`.id_account INNER JOIN `participant` ON `account`.id_actor = `participant`.id_actor INNER JOIN `specie` ON `specie`.id_specie = `account`.id_specie INNER JOIN `color` ON `transaction`.color = `color`.id_color WHERE `account`.id_actor = :id_csi AND `transaction`.id_tipo_movimiento = 1 AND `transaction`.baja = 0 ORDER BY `transaction`.date ASC;" ;
		$query = $db->prepare($sql);
		$query->execute(array('id_csi' => $id_csi));
		return $purchases = $query->fetchAll();
	}
	function list_sales_for ($id_csi) {
		$db= db_setup();
		$sql= "SELECT `transaction`.id_transaction, `transaction`.date, `transaction`.time, `specie`.scientific_name, (`color`.name) AS cname, `transaction`.cant, `transaction`.price, `transaction`.CCUIT, `participant`.CUIT FROM `transaction` INNER JOIN `account` ON `transaction`.id_account = `account`.id_account INNER JOIN `participant` ON `account`.id_actor = `participant`.id_actor INNER JOIN `specie` ON `specie`.id_specie = `account`.id_specie INNER JOIN `color` ON `transaction`.color = `color`.id_color WHERE `account`.id_actor = :id_csi AND `transaction`.id_tipo_movimiento = 2 AND `transaction`.baja = 0 ORDER BY `transaction`.date ASC;" ;
		$query = $db->prepare($sql);
		$query->execute(array('id_csi' => $id_csi));
		return $sales = $query->fetchAll();
	}
	function list_sales_for_client ($cuit) {
		$db= db_setup();
		$sql= "SELECT `transaction`.id_transaction, `transaction`.date, `transaction`.time, `specie`.scientific_name, (`color`.name) AS cname, `transaction`.cant, `transaction`.price, `transaction`.CCUIT, `participant`.CUIT FROM `transaction` INNER JOIN `account` ON `transaction`.id_account = `account`.id_account INNER JOIN `participant` ON `account`.id_actor = `participant`.id_actor INNER JOIN `specie` ON `specie`.id_specie = `account`.id_specie INNER JOIN `color` ON `transaction`.color = `color`.id_color WHERE `transaction`.CCUIT = :cuit AND `transaction`.id_tipo_movimiento = 2 AND `transaction`.baja = 0 ORDER BY `transaction`.date ASC;" ;
		$query = $db->prepare($sql);
		$query->execute(array('cuit' => $cuit));
		return $sales = $query->fetchAll();
	}
?>