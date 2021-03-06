<?php
require_once ('db.php');
	function list_species () {
		$db= db_setup();
		$sql= "SELECT `specie`.id_specie, `specie`.vulgar_name, `specie`.scientific_name, (`habitat`.name) AS hname, (`region`.name) AS rname, (`blossom_season`.name) AS bsname, `specie_type`.name FROM `specie` INNER JOIN `specie_type` ON `specie`.id_specie_type = `specie_type`.id_specie_type INNER JOIN `habitat` ON `specie`.habitat = `habitat`.id_habitat INNER JOIN `region` ON `specie`.region = `region`.id_region INNER JOIN `blossom_season` ON `specie`.blossom_season = `blossom_season`.id_blossom_season WHERE `specie`.baja = 0;" ;
		$query = $db->prepare($sql);
		$query->execute();
		return $species = $query->fetchAll();
	}
?>