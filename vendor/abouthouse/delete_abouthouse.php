<?php

require_once '../../config/connect.php';

$id_abouthouse = $_POST['id_abouthouse'];

mysqli_query($connect, "DELETE FROM `About_house` WHERE `About_house`.`id` = '$id_abouthouse'");

header('Location: ../../redactor.php');