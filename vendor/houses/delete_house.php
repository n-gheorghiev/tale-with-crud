<?php

require_once '../../config/connect.php';

$id_house = $_POST['id_house'];

mysqli_query($connect, "DELETE FROM `Houses` WHERE `Houses`.`id` = '$id_house'");

header('Location: ../../redactor.php');