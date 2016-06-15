<?php
require_once ('db.php');
function  edit_client ($nombre, $apellido, $cuit, $mail, $direccion, $razon, $cond_imp, $id) {
 
$db= db_setup();
$sql= "UPDATE `participant` SET `name`= :nombre, `last_name`= :apellido, `CUIT`= :cuit, `email`= :mail, `address`= :direccion, `company`= :razon, `AFIP`= :cond_imp WHERE `id_actor` = :id;" ;


$query = $db->prepare($sql);
$rows= $query->execute(array('nombre' => $nombre, 'apellido' => $apellido, 'cuit' => $cuit, 'mail' => $mail, 'direccion' => $direccion, 'razon' => $razon, 'cond_imp' => $cond_imp, 'id' => $id));


}
?>