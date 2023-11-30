<?php

require_once '../../config/connect.php';

$id_character = $_POST['id_character'];
$name_character = $_POST['name_character'];
$img_character = $_POST['img_character'];

mysqli_query($connect, "UPDATE `characters` SET `name` = '$name_character', `img` = '$img_character' WHERE `characters`.`id` = '$id_character'");

header('Location: ../../redactor.php');