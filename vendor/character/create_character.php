<?php

require_once '../../config/connect.php';

$name_character = $_POST['name_character'];
$img_character = $_POST['img_character'];

mysqli_query($connect, "INSERT INTO `characters` (`id`, `name`, `img`) VALUES (NULL, '$name_character', '$img_character')");

header('Location: ../../redactor.php');