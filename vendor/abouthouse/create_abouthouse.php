<?php

require_once '../../config/connect.php';

$id_house_in_act = $_POST['id_house_in_act'];
$material_abouthouse = $_POST['material_abouthouse'];
$quality_abouthouse = $_POST['quality_abouthouse'];
$crushability_abouthouse = $_POST['crushability_abouthouse'];

mysqli_query($connect, "INSERT INTO `About_house` (`id`, `id_house`, `material`, `quality`, `crushability`) VALUES (NULL, '$id_house_in_act', '$material_abouthouse', '$quality_abouthouse', '$crushability_abouthouse')");

header('Location: ../../redactor.php');