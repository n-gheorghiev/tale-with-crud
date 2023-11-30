<?php

require_once '../../config/connect.php';

$id_character_in_house = $_POST['id_character_in_house'];
$img_house = $_POST['img_house'];

mysqli_query($connect, "INSERT INTO `Houses` (`id`, `id_characters`, `img`) VALUES (NULL, '$id_character_in_house', '$img_house')");

header('Location: ../../redactor.php');