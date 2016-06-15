<?php
require_once ('db.php');
function  edit_associate ($nombre, $apellido, $cuit, $mail, $direccion, $numsocio, $razon, $id) {
 
$db= db_setup();
$sql= "UPDATE `participant` SET `name`= :nombre, `last_name`= :apellido, `CUIT`= :cuit, `email`= :mail, `address`= :direccion, `membership_number`= :numsocio, `company`= :razon WHERE `id_actor` = :id;" ;


$query = $db->prepare($sql);
$rows= $query->execute(array('nombre' => $nombre, 'apellido' => $apellido, 'cuit' => $cuit, 'mail' => $mail, 'direccion' => $direccion, 'numsocio' => $numsocio, 'razon' => $razon, 'id' => $id));


}
?>