<?php

require_once '../../config/connect.php';

$id_characters_in_loc = $_POST['id_characters_in_loc'];
$id_characters_in_loc2 = $_POST['id_characters_in_loc2'];
$id_house_in_act = $_POST['id_house_in_act'];
$description_act = $_POST['description_act'];

mysqli_query($connect, "INSERT INTO `Actions` (`id`, `action`, `id_character1`, `id_character2`, `id_house`) VALUES (NULL, '$description_act', '$id_characters_in_loc', '$id_characters_in_loc2', '$id_house_in_act')");

header('Location: ../../redactor.php');