<?php
require_once ('db.php');
function edit_specie ($vulgar, $cientifico, $habitat, $region, $florece, $tipo, $id) {
$db= db_setup();
$sql= "UPDATE `specie` SET `vulgar_name`= :vulgar, `scientific_name`= :cientifico, `habitat`= :habitat, `region`= :region, `blossom_season`= :florece, `id_specie_type`= :tipo WHERE `id_specie` = :id;" ;

$query = $db->prepare($sql);
$rows = $query->execute(array('vulgar' => $vulgar, 'cientifico' => $cientifico, 'habitat' => $habitat, 'region' => $region, 'florece' => $florece, 'tipo' => $tipo, 'id' => $id));

}