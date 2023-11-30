<?php

require_once '../../config/connect.php';

$id_characters_in_loc = $_POST['id_characters_in_loc'];
$text_characteristic = $_POST['text_characteristic'];
$growth_characteristic = $_POST['growth_characteristic'];

mysqli_query($connect, "INSERT INTO `Characteristic` (`id`, `id_characters`, `temperament`, `growth`) VALUES (NULL, '$id_characters_in_loc', '$text_characteristic', '$growth_characteristic')");

header('Location: ../../redactor.php');