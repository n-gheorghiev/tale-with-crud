<?php

require_once '../../config/connect.php';

$id_house = $_POST['id_house'];
$id_character_in_house = $_POST['id_character_in_house'];
$img_house = $_POST['img_house'];

mysqli_query($connect, "UPDATE `Houses` SET `id_characters` = '$id_character_in_house', `img` = '$img_house' WHERE `Houses`.`id` = '$id_house'");

header('Location: ../../redactor.php');