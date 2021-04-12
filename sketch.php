<?php
//require('components/catalog_db.php');
require('config/connect_db.php');

$id = intval($_GET['id']);
$ind = intval($_GET['ind']);

$sql = "SELECT * FROM `catalog` WHERE id = $id";

$result = mysqli_query($link, $sql);
$rows = mysqli_fetch_array($result);

$sql_colors = "SELECT catalog.color_1, catalog.color_2, catalog.color_3, catalog.color_4, catalog.color_5, catalog.color_6  FROM `catalog`
               WHERE id = $id";
               
$result = mysqli_query($link, $sql_colors);
$colors = mysqli_fetch_row($result);

$colors = array_values(array_filter($colors, 'filter')); //aray_values для индексирования с нуля

function filter($colors) {        
    if (!empty($colors)) {
        return true;
    }    
}
 
    //sleep(20);

    require('components/sketch_info.php');
?>