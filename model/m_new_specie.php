<?php
require_once ('db.php');
function new_specie ($vulgar, $cientifico, $habitat, $region, $florece, $tipo) {
$db= db_setup();
$sql= "INSERT INTO specie(`id_specie`, `vulgar_name`, `scientific_name`, `habitat`, `region`, `blossom_season`, `id_specie_type`, `baja`) VALUES (NULL, :vulgar, :cientifico, :habitat, :region, :florece, :tipo, '0');" ;

$query = $db->prepare($sql);
$rows = $query->execute(array('vulgar' => $vulgar, 'cientifico' => $cientifico, 'habitat' => $habitat, 'region' => $region, 'florece' => $florece, 'tipo' => $tipo));

}