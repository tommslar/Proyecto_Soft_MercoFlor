<?php
	require_once ('db.php');
	
	function edit_purchase ($fecha,$cuit,$especie,$precio,$color,$cantidad,$cantidad_vieja,$id) {
		$db = db_setup();
		
		$sql = "SELECT `id_actor` FROM `participant` WHERE `cuit` = :cuit AND `id_type` <> 1;";
		$query = $db->prepare($sql);
		$datos_participant = $query->execute(array('cuit' => $cuit));
		$datos_participant = $query->fetch();
		
		if (!empty($datos_participant)) {
		
			$id_actor = $datos_participant['id_actor'];
			
			$sql = "SELECT * FROM `account` WHERE `id_actor` = :id_actor AND `id_specie` = :especie;" ;
			$query = $db->prepare($sql);
			$existe_account = $query->execute(array('id_actor' => $id_actor, 'especie' => $especie));
			$existe_account = $query->fetch();
			
			if (!empty($existe_account)) {
			
				$id_cuenta = $existe_account['id_account'];
			
				if ($cantidad == $cantidad_vieja) {
				$nuevo_stock = $existe_account['cant_actual'];
				} elseif ((int)$cantidad > (int)$cantidad_vieja) {
				$nuevo_stock = $existe_account['cant_actual'] + ((int)$cantidad - (int)$cantidad_vieja);
				} else {
				$nuevo_stock = $existe_account['cant_actual'] - ((int)$cantidad_vieja - (int)$cantidad);
				}
			
				$sql = "UPDATE `account` SET `cant_actual`= :nuevo_stock WHERE `id_account` = :cuenta;";
				$query = $db->prepare($sql);
				$result = $query->execute(array('nuevo_stock' => $nuevo_stock, 'cuenta' => $id_cuenta));
			
			} else {
			
				return false;
			
			}
			
			$sql = "UPDATE `transaction` SET `date` = :fecha, `id_account`= :cuenta, `color`= :color, `cant`= :cant, `price`= :price WHERE `id_transaction` = :id;";
			$query = $db->prepare($sql);
			$result = $query->execute(array('fecha' => $fecha, 'cuenta' => $id_cuenta, 'color' => $color, 'cant' => $cantidad, 'price' => $precio, 'id' => $id));
			
			return true;
			
		} else {
			return false;
		}
	
	}
		
	function edit_sale ($fecha, $cuit,$especie,$precio,$color,$cantidad,$cantidad_vieja,$id,$cuit_csi) {
		$db = db_setup();
		
		$sql = "SELECT `id_actor` FROM `participant` WHERE `cuit` = :cuit AND `id_type` <> 1;";
		$query = $db->prepare($sql);
		$datos_participant = $query->execute(array('cuit' => $cuit));
		$datos_participant = $query->fetch();
		
		if (!empty($datos_participant)) {
		
			$id_actor = $datos_participant['id_actor'];
			
			$sql = "SELECT * FROM `account` WHERE `id_actor` = :id_actor AND `id_specie` = :especie;" ;
			$query = $db->prepare($sql);
			$existe_account = $query->execute(array('id_actor' => $id_actor, 'especie' => $especie));
			$existe_account = $query->fetch();
			
			if (!empty($existe_account)) {
			
				$id_cuenta = $existe_account['id_account'];
			
				if ($cantidad == $cantidad_vieja) {
				$nuevo_stock = $existe_account['cant_actual'];
				} elseif ((int)$cantidad > (int)$cantidad_vieja) {
				$nuevo_stock = $existe_account['cant_actual'] - ((int)$cantidad - (int)$cantidad_vieja);
				} else {
				$nuevo_stock = $existe_account['cant_actual'] + ((int)$cantidad_vieja - (int)$cantidad);
				}
			
				$sql = "UPDATE `account` SET `cant_actual`= :nuevo_stock WHERE `id_account` = :cuenta;";
				$query = $db->prepare($sql);
				$result = $query->execute(array('nuevo_stock' => $nuevo_stock, 'cuenta' => $id_cuenta));
			
			} else {
			
				return false;
			
			}
			
			$sql = "UPDATE `transaction` SET `date` = :fecha, `id_account`= :cuenta, `color`= :color, `cant`= :cant, `price`= :price , `CCUIT`= :cuit_csi WHERE `id_transaction` = :id;";
			$query = $db->prepare($sql);
			$result = $query->execute(array('fecha' => $fecha, 'cuenta' => $id_cuenta, 'color' => $color, 'cant' => $cantidad, 'price' => $precio, 'cuit_csi' => $cuit_csi, 'id' => $id));
			
			return true;
			
		} else {
			return false;
		}
	}
	
?>