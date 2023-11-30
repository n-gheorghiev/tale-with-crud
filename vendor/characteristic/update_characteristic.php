<?php

require_once '../../config/connect.php';

$id_characteristic = $_POST['id_characteristic'];
$id_characters_in_loc = $_POST['id_characters_in_loc'];
$text_characteristic = $_POST['text_characteristic'];
$growth_characteristic = $_POST['growth_characteristic'];

mysqli_query($connect, "UPDATE `Characteristic` SET `id_characters` = '$id_characters_in_loc', `temperament` = '$text_characteristic', `growth` = '$growth_characteristic' WHERE `Characteristic`.`id` = '$id_characteristic'");

header('Location: ../../redactor.php');