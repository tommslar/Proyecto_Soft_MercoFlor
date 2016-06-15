<?php
require_once ('db.php');
function  edit_renter ($nombre, $apellido, $cuit, $mail, $direccion, $razon, $desde, $hasta, $id)  {
 
$db=db_setup();
$sql= "UPDATE `participant` SET `name`= :nombre, `last_name`= :apellido, `CUIT`= :cuit, `email`= :mail, `address`= :direccion, `company`= :razon, `date_from`= :desde, `date_to`= :hasta WHERE `id_actor` = :id;" ;


$query = $db->prepare($sql);
$rows= $query->execute(array('nombre' => $nombre, 'apellido' => $apellido, 'cuit' => $cuit, 'mail' => $mail, 'direccion' => $direccion, 'razon' => $razon, 'desde' => $desde, 'hasta' => $hasta, 'id' => $id));


}
?>