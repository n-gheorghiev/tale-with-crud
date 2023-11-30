<?php

require_once '../../config/connect.php';

$id_abouthouse = $_POST['id_abouthouse'];
$id_house_in_act = $_POST['id_house_in_act'];
$material_abouthouse = $_POST['material_abouthouse'];
$quality_abouthouse = $_POST['quality_abouthouse'];
$crushability_abouthouse = $_POST['crushability_abouthouse'];

mysqli_query($connect, "UPDATE `About_house` SET `id_house` = '$id_house_in_act', `material` = '$material_abouthouse', `quality` = '$quality_abouthouse', `crushability` = '$crushability_abouthouse' WHERE `About_house`.`id` = '$id_abouthouse'");

header('Location: ../../redactor.php');