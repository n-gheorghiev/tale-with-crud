<?php

require_once '../../config/connect.php';

$id_actions = $_POST['id_act'];
$id_characters_in_loc = $_POST['id_characters_in_loc'];
$id_characters_in_loc2 = $_POST['id_characters_in_loc2'];
$id_house_in_act = $_POST['id_house_in_act'];
$description_act = $_POST['description_act'];

mysqli_query($connect, "UPDATE `Actions` SET `id_character1` = '$id_characters_in_loc', `id_character2` = '$id_characters_in_loc2', `action` = '$description_act', `id_house` = '$id_house_in_act' WHERE `Actions`.`id` = '$id_actions'");

header('Location: ../../redactor.php');