<?php

require_once '../../config/connect.php';

$id_characteristic = $_POST['id_characteristic'];

mysqli_query($connect, "DELETE FROM `Characteristic` WHERE `Characteristic`.`id` = '$id_characteristic'");

header('Location: ../../redactor.php');