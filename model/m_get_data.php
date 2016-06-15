<?php
require_once ('db.php');
function get_roles() {
$db= db_setup();
$sql= "SELECT `id_role`, `description` FROM `role`;" ;
$query = $db->prepare($sql);
$query->execute();
$roles= $query->fetchAll();
return $roles;
}

function get_specie_types() {
$db= db_setup();
$sql= "SELECT `id_specie_type`, `name` FROM `specie_type`;" ;
$query = $db->prepare($sql);
$query->execute();
$specie_types= $query->fetchAll();
return $specie_types;
}

function get_regions_names() {
$db= db_setup();
$sql= "SELECT `id_region`, `name` FROM `region`;" ;
$query = $db->prepare($sql);
$query->execute();
$regions= $query->fetchAll();
return $regions;
}

function get_cond_names() {
$db= db_setup();
$sql= "SELECT `id_cond`, `name` FROM `tax_condition`;" ;
$query = $db->prepare($sql);
$query->execute();
$cond_names= $query->fetchAll();
return $cond_names;
}

function get_colors_names() {
$db= db_setup();
$sql= "SELECT `id_color`, `name` FROM `color`;" ;
$query = $db->prepare($sql);
$query->execute();
$colors= $query->fetchAll();
return $colors;
}

function get_habitats_names() {
$db= db_setup();
$sql= "SELECT `id_habitat`, `name` FROM `habitat`;" ;
$query = $db->prepare($sql);
$query->execute();
$habitats= $query->fetchAll();
return $habitats;
}

function get_blossom_seasons_names() {
$db= db_setup();
$sql= "SELECT `id_blossom_season`, `name` FROM `blossom_season`;" ;
$query = $db->prepare($sql);
$query->execute();
$blossom_seasons= $query->fetchAll();
return $blossom_seasons;
}

function get_transaction_types() {
$db= db_setup();
$sql= "SELECT `id_type`, `type_description` FROM `transaction_type`;" ;
$query = $db->prepare($sql);
$query->execute();
$transaction_types= $query->fetchAll();
return $transaction_types;
}

function get_species_names() {
$db= db_setup();
$sql= "SELECT `id_specie`, `scientific_name` FROM `specie` WHERE `baja` = 0;" ;
$query = $db->prepare($sql);
$query->execute();
$species= $query->fetchAll();
return $species;
}	
//desde aca cambie todos los fetchAll por fetch

function get_data_assistant ($id) {

$db=db_setup();
$sql= "SELECT `name`, `last_name`, `DNI`, `dni_participant` FROM `assistant` WHERE `baja` = 0 AND `id_assistant` = :id;" ;

$query = $db->prepare($sql);
$query->execute(array('id' => $id));
$rows= $query->fetch();
return $rows;
}

function get_data_client ($id) {

$db= db_setup();
$sql= "SELECT `name`, `last_name`, `CUIT`, `email`, `address`, `company`, `AFIP` FROM `participant` WHERE `baja` = 0 AND `id_actor` = :id;" ;

$query = $db->prepare($sql);
$query->execute(array('id' => $id));
$rows= $query->fetch() ;
return $rows;
}

function get_data_renter ($id) {

$db= db_setup();
$sql= "SELECT `name`, `last_name`, `CUIT`, `email`, `address`, `company`, `date_from`, `date_to` FROM `participant` WHERE `baja` = 0 AND `id_actor` = :id;" ;

$query = $db->prepare($sql);
$query->execute(array('id' => $id));
$rows= $query->fetch() ;
return $rows;
}

function get_data_user ($id) {

$db= db_setup();
$sql= "SELECT `user`.username, `user`.password, `user`.email, `user_role`.id_role, `user`.id_csi FROM `user` INNER JOIN `user_role` ON `user`.id_user = `user_role`.id_user WHERE `baja` = 0 AND `user`.id_user = :id;" ;

$query = $db->prepare($sql);
$query->execute(array('id' => $id));
$rows= $query->fetch() ;
return $rows;
}

function get_data_associate ($id) {

$db= db_setup();
$sql= "SELECT `name`, `last_name`, `CUIT`, `email`, `address`, `membership_number`, `company` FROM `participant` WHERE `baja` = 0 AND `id_actor` = :id;" ;

$query = $db->prepare($sql);
$query->execute(array('id' => $id));
$rows= $query->fetch() ;
return $rows;
}

function get_data_transaction ($id) {

$db= db_setup();
$sql= "SELECT `transaction`.id_transaction, `transaction`.date, `transaction`.time, `transaction`.price, `transaction`.color, `transaction`.cant, `participant`.CUIT, `transaction`.id_tipo_movimiento, `account`.id_specie, `transaction`.CCUIT FROM `transaction` INNER JOIN `account` ON `transaction`.id_account = `account`.id_account INNER JOIN `participant` ON `account`.id_actor = `participant`.id_actor INNER JOIN `color` ON `color`.id_color = `transaction`.color WHERE `transaction`.baja = 0 AND `transaction`.id_transaction = :id;" ;

$query = $db->prepare($sql);
$query->execute(array('id' => $id));
$rows= $query->fetch() ;
return $rows;
}

function get_data_specie ($id) {

$db= db_setup();
$sql= "SELECT `specie`.id_specie, `specie`.id_specie_type, `specie`.vulgar_name, `specie`.scientific_name, `specie`.habitat, `specie`.region, `specie`.blossom_season FROM `specie` WHERE `baja` = 0 AND `id_specie` = :id;" ;

$query = $db->prepare($sql);
$query->execute(array('id' => $id));
$rows= $query->fetch() ;
return $rows;
}

function get_data_csi ($cuit) {

$db= db_setup();
$sql= "SELECT `id_actor` FROM `participant` WHERE `baja` = 0 AND `cuit` = :cuit;" ;
$query = $db->prepare($sql);
$query->execute(array('cuit' => $cuit));
$rows= $query->fetch() ;
return $rows['id_actor'];
}

function get_id_csi ($id_s) {

$db= db_setup();
$sql= "SELECT `id_csi` FROM `user` WHERE `baja` = 0 AND `id_user` = :id_s;" ;
$query = $db->prepare($sql);
$query->execute(array('id_s' => $id_s));
$rows= $query->fetch() ;
return $rows['id_csi'];
}

function get_cuit_client ($id_csi) {

$db= db_setup();
$sql= "SELECT `CUIT` FROM `participant` WHERE `baja` = 0 AND `id_actor` = :id_csi;" ;
$query = $db->prepare($sql);
$query->execute(array('id_csi' => $id_csi));
$rows= $query->fetch() ;
return $rows['CUIT'];
}

function get_data_socinq ($id_s) {

$db= db_setup();
$sql= "SELECT * FROM `user` INNER JOIN `participant` ON `user`.id_csi = `participant`.id_actor WHERE `user`.baja = 0 AND `participant`.baja = 0 AND `user`.id_user = :id_s;" ;
$query = $db->prepare($sql);
$query->execute(array('id_s' => $id_s));
$data_socinq= $query->fetch() ;
return $data_socinq;
}

?>