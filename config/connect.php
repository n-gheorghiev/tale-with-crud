<?php 

    $connect = mysqli_connect("localhost", "root", "", "laba");

    if (!$connect) {
        die("Ошибка подключения к базе данных: " . $mysqli->connect_error);
    }
    
?>