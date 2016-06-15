<?php
require_once ('db.php');
function delete_client ($id) {
$db= db_setup();
$sql= "UPDATE `participant` SET `baja`='1' WHERE `id_actor` = :id;" ;

$query = $db->prepare($sql);
$rows= $query->execute(array('id' => $id));

}