<?php

require_once '../../config/connect.php';

$id_character = $_POST['id_character'];

mysqli_query($connect, "DELETE FROM `characters` WHERE `characters`.`id` = '$id_character'");

header('Location: ../../redactor.php');