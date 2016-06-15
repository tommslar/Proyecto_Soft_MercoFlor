<?php
require_once('../model/m_new_specie.php');

$vulgar = $_POST["vulgar"];
$cientifico = $_POST["cientifico"];
$habitat = $_POST["habitat"];
$region = $_POST["region"];
$florece = $_POST["epoca"];
$tipo = $_POST["especies"];

new_specie ($vulgar,$cientifico,$habitat,$region,$florece,$tipo); 

header ("Location: especies.php");

?>