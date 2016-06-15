<?php
require_once ('db.php');
function new_renter ($nombre, $apellido, $cuit, $mail, $direccion, $razon, $desde, $hasta)  {

$db= db_setup();
$sql="INSERT INTO participant(`id_actor`, `name`, `last_name`, `CUIT`, `email`, `address`, `company`, `AFIP`, `membership_number`, `date_from`, `date_to`, `id_type`, `baja`) 
VALUES (NULL, :nombre, :apellido, :cuit, :mail, :direccion, :razon, NULL, NULL, :desde, :hasta, '3', '0');";


$query = $db->prepare($sql);
$rows = $query->execute(array('nombre' => $nombre, 'apellido' => $apellido, 'cuit' => $cuit, 'mail' => $mail, 'direccion' => $direccion, 'razon' => $razon, 'desde' => $desde, 'hasta' => $hasta));

}
?>

