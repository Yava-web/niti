<?php
    require('components/catalog_db.php');
    require('config/connect_db.php');

    $sql = "SELECT * FROM `catalog` WHERE is_new = 1";
    $result = mysqli_query($link, $sql);
    $rows_1 = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // catalog
    $offset = 0;
    $limit = 3;    
    $new_items = array_slice($rows_1, $offset, $limit, true);
    
    //reviews
    $link = mysqli_connect("localhost", "mysql", "mysql", "niti_db");
    $sql = 'SELECT * FROM reviews';
    $result = mysqli_query($link, $sql);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);


    require('components/index_info.php');
?>
