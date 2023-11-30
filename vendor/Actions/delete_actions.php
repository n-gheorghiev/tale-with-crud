<?php

require_once '../../config/connect.php';

$id_actions = $_POST['id_act'];

mysqli_query($connect, "DELETE FROM Actions WHERE `Actions`.`id` = '$id_actions'");

header('Location: ../../redactor.php');