<?php
require_once('../model/m_edit_specie.php');

$vulgar = $_POST["vulgar"];
$cientifico = $_POST["cientifico"];
$habitat = $_POST["habitat"];
$region = $_POST["region"];
$florece = $_POST["epoca"];
$tipo = $_POST["especies"];
$id = $_POST["id_specie"];

edit_specie ($vulgar,$cientifico,$habitat,$region,$florece,$tipo,$id);

header ("Location: especies.php");

?>