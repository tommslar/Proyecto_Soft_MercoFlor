<?php
require_once ('db.php');
function delete_user ($id) {
$db = db_setup();
$sql = "UPDATE `user` SET `baja`='1' WHERE `id_user` = :id;" ;

$query = $db->prepare($sql);
$rows = $query->execute(array('id' => $id));

}