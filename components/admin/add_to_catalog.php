<?php
    session_start();

    require('../catalog_db.php');
    require('../../config/connect_db.php');    

    $photo = $_FILES['photo'];
    $title = $_POST['title'];
    $color_1 = $_POST['colors_1'];
    $color_2 = $_POST['colors_2'];
    $color_3 = $_POST['colors_3'];
    $color_4 = $_POST['colors_4'];
    $color_5 = $_POST['colors_5'];
    $color_6 = $_POST['colors_6'];
    $is_new = $_POST['is_new'];
    $type = $_POST['type'];
      
    $target = "../../img/catalog-items/".basename($photo['name']);    
    move_uploaded_file($photo['tmp_name'], $target);

    $img = '../img/catalog-items/'.basename($photo['name']);
    if ($is_new === 'Да') {
        $is_new = 1;
    } else if ($is_new === 'Нет') {
        $is_new = 0;
    }
   
     /* for ($i = 0; $i < 18; $i++) {
        $a =$catalogItemData[$i]['imgUrl'];
        $b =$catalogItemData[$i]['title'];
        $c =$catalogItemData[$i]['is_new'];
        $d =$catalogItemData[$i]['type'];
        $e =$catalogItemData[$i]['color_1'];
        $f =$catalogItemData[$i]['color_2'];
        $g =$catalogItemData[$i]['color_3'];
        
        $sql = "INSERT INTO `catalog` (`imgUrl`,`title`,`is_new`,`type`,`color_1`,`color_2`,`color_3`) values ('$a','$b','$c','$d','$e','$f','$g')";
        $result = mysqli_query($link, $sql);
    }   */

    $sql = "INSERT INTO `catalog` (`imgUrl`,`title`,`is_new`,`type`) values ('$img','$title','$is_new','$type')";
    $result = mysqli_query($link, $sql);

    $lastId = mysqli_insert_id($link);
   
    if (!empty($color_1)) {
        $sql = "UPDATE `catalog` SET `color_1` = '$color_1', `color_2`= '$color_2', `color_3`= '$color_3' WHERE catalog.id = $lastId";
        $result = mysqli_query($link, $sql);
    }
    if (!empty($color_4)) {
        $sql = "UPDATE `catalog` SET `color_1` = '$color_1', `color_2`= '$color_2', `color_3`= '$color_3',
                 `color_4`= '$color_4' WHERE catalog.id = $lastId";
        $result = mysqli_query($link, $sql);
    }
    if (!empty($color_5)) {
        $sql = "UPDATE `catalog` SET `color_1` = '$color_1', `color_2`= '$color_2', `color_3`= '$color_3',
                 `color_4`= '$color_4', `color_5`= '$color_5' WHERE catalog.id = $lastId";
        $result = mysqli_query($link, $sql);
    }
    if (!empty($color_6)) {
        $sql = "UPDATE `catalog` SET `color_1` = '$color_1', `color_2`= '$color_2', `color_3`= '$color_3',
                 `color_4`= '$color_4', `color_5`= '$color_5', `color_6`= '$color_6' WHERE catalog.id = $lastId";
        $result = mysqli_query($link, $sql);
    }
    
    
    header('Location: admin_info.php?change=catalog&type=add');
    
?>