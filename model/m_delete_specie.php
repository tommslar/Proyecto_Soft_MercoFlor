<?php
require_once ('db.php');
function delete_specie ($id) {
$db= db_setup();
$sql= "UPDATE `specie` SET `baja`='1' WHERE `id_specie` = :id;" ;

$query = $db->prepare($sql);
$rows= $query->execute(array('id' => $id));

}