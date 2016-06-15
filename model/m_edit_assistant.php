<?php
require_once ('db.php');
function edit_assistant ($nombre, $apellido, $dni, $dni_jefe, $id) {
 
$db= db_setup();
$sql= "UPDATE `assistant` SET `name`= :nombre,`last_name`= :apellido,`DNI`= :dni,`dni_participant`= :dni_jefe WHERE `id_assistant` = :id;" ;

$query = $db->prepare($sql);
$rows= $query->execute(array('nombre' => $nombre, 'apellido' => $apellido, 'dni' => $dni, 'dni_jefe' => $dni_jefe, 'id' => $id));


}
?>