<?php
require_once ('db.php');
function  new_client ($nombre, $apellido, $cuit, $mail, $direccion, $razon, $cond_imp)  {

$db= db_setup();
$sql="INSERT INTO participant(`id_actor`, `name`, `last_name`, `CUIT`, `email`, `address`, `company`, `AFIP`, `membership_number`, `date_from`, `date_to`, `id_type`, `baja`) 
VALUES (NULL, :nombre, :apellido, :cuit, :mail, :direccion, :razon, :cond_imp, NULL, NULL, NULL, '1', '0');";


$query = $db->prepare($sql);
$rows = $query->execute(array('nombre' => $nombre, 'apellido' => $apellido, 'cuit' => $cuit, 'mail' => $mail, 'direccion' => $direccion, 'razon' => $razon, 'cond_imp' => $cond_imp));

}
?>