<?php
	require_once ('db.php');
	
	function new_purchase ($fecha,$cuit,$especie,$precio,$color,$cantidad) {
		$db = db_setup();
		
		$sql = "SELECT `id_actor` FROM `participant` WHERE `cuit` = :cuit AND `id_type` <> 1;";
		$query = $db->prepare($sql);
		$datos_participant = $query->execute(array('cuit' => $cuit));
		$datos_participant = $query->fetch();
		
		if (!empty($datos_participant)) {
		
			$id_actor = $datos_participant['id_actor'];
			
			$fecha_aux = strtotime ($fecha);
			
			$date = date("Y/m/d", $fecha_aux);
			$time = date("H:i:s");
			
			$sql = "SELECT * FROM `account` WHERE `id_actor` = :id_actor AND `id_specie` = :especie;" ;
			$query = $db->prepare($sql);
			$existe_account = $query->execute(array('id_actor' => $id_actor, 'especie' => $especie));
			$existe_account = $query->fetch();
			
			if (!empty($existe_account)) {
			
				$nuevo_stock = $existe_account['cant_actual'] + (int)$cantidad;
				$id_cuenta = $existe_account['id_account'];
			
				$sql = "UPDATE `account` SET `cant_actual`= :nuevo_stock WHERE `id_account` = :cuenta;";
				$query = $db->prepare($sql);
				$result = $query->execute(array('nuevo_stock' => $nuevo_stock, 'cuenta' => $id_cuenta));
				
			} else {
			
				$sql = "INSERT INTO `account`(`id_actor`, `id_specie`, `cant_actual`) VALUES (:actor, :especie, :cantidad);";
				$query = $db->prepare($sql);
				$result = $query->execute(array('actor' => $id_actor, 'especie' => $especie, 'cantidad' => $cantidad));
				
				$id_cuenta = $db->lastInsertId();
			
			}
			
			$sql = "INSERT INTO `transaction`(`id_transaction`, `id_account`, `date`, `time`, `color`, `cant`, `price`, `id_tipo_movimiento`, `CCUIT`, `baja`) VALUES (NULL, :cuenta, :date, :time, :color, :cant, :price, '1', NULL, '0');";
			$query = $db->prepare($sql);
			$result = $query->execute(array('cuenta' => $id_cuenta, 'date' => $date, 'time' => $time, 'color' => $color, 'cant' => $cantidad, 'price' => $precio));
			
			return true;
			
		} else {
			return false;
		}
		
	}
	
	function new_sale ($fecha,$cuit,$especie,$precio,$color,$cantidad,$cuit_csi) {
		$db = db_setup();
		
		$sql = "SELECT `id_actor` FROM `participant` WHERE `cuit` = :cuit AND `id_type` <> 1;";
		$query = $db->prepare($sql);
		$datos_participant = $query->execute(array('cuit' => $cuit));
		$datos_participant = $query->fetch();
		
		if (!empty($datos_participant)) {
		
			$id_actor = $datos_participant['id_actor'];
			
			$fecha_aux = strtotime ($fecha);
			
			$date = date("Y/m/d", $fecha_aux);
			$time = date("H:i:s");
			
			$sql = "SELECT * FROM `account` WHERE `id_actor` = :id_actor AND `id_specie` = :especie;" ;
			$query = $db->prepare($sql);
			$existe_account = $query->execute(array('id_actor' => $id_actor, 'especie' => $especie));
			$existe_account = $query->fetch();
			
			if (!empty($existe_account)) {
			
				$stock = $existe_account['cant_actual'];
				$id_cuenta = $existe_account['id_account'];
			
				if ($stock >= $cantidad) {
			
					$nuevo_stock = $existe_account['cant_actual'] - (int)$cantidad;
			
					$sql = "UPDATE `account` SET `cant_actual`= :nuevo_stock WHERE `id_account` = :cuenta;";
					$query = $db->prepare($sql);
					$result = $query->execute(array('nuevo_stock' => $nuevo_stock, 'cuenta' => $id_cuenta));
				
					$sql = "INSERT INTO `transaction`(`id_transaction`, `id_account`, `date`, `time`, `color`, `cant`, `price`, `id_tipo_movimiento`, `CCUIT`, `baja`) VALUES (NULL, :cuenta, :date, :time, :color, :cant, :price, '2', :cuit_csi, '0');";
					$query = $db->prepare($sql);
					$result = $query->execute(array('cuenta' => $id_cuenta, 'date' => $date, 'time' => $time, 'color' => $color, 'cant' => $cantidad, 'price' => $precio, 'cuit_csi' => $cuit_csi));
					
					return true;
					
				} else {
					return false;
				}
			
			} else {
				return false;
			}
			
		} else {
			return false;
		}
			
	}
	
?>