<?php
    $link = mysqli_connect("localhost", "mysql", "mysql", "niti_db");
    if (!$link) {
        die('Error connect to DataBase');
    }
?>