<?php
require_once ('db.php');
function delete_assistant ($id) {
$db= db_setup();
$sql= "UPDATE `assistant` SET `baja`='1' WHERE `id_assistant` = :id;" ;

$query = $db->prepare($sql);
$rows= $query->execute(array('id' => $id));

}
?>