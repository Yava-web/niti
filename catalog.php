<?php

    require('components/catalog_db.php');
    require('config/connect_db.php');

    $offset = 0;
    $limit = 12;
    $page = intval($_GET['page']) ?: 1;
    $offset = ($page - 1) * $limit;
    $type = $_GET['items_type'] ?: 'all';

    $ind = $offset + 1;

    $sql = "SELECT * FROM `catalog`";
    $result = mysqli_query($link, $sql);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if ($type === 'all') {
        $items_on_page = array_slice($rows, $offset, $limit, true);    
        $pages = ceil(count($rows) / $limit); 
    } else if ($type === 'only_sketch') {

        $items_filter = array_filter($rows, 'filter_sketch');
        $items_on_page = array_slice($items_filter, $offset, $limit, true);
        $pages = ceil(count($items_filter) / $limit);

    } else if ($type === 'only_done') {
        
        $type_done = $_GET['type_done'] ?: 'all_done';
        if($type_done === 't-shirt') {

            $items_filter = array_filter($rows, 'filter_tshirt');
            $items_on_page = array_slice($items_filter, $offset, $limit, true);
            $pages = ceil(count($items_filter) / $limit);
    
        } else if ($type_done === 'hoodie') {
    
            $items_filter = array_filter($rows, 'filter_hoodie');
            $items_on_page = array_slice($items_filter, $offset, $limit, true);
            $pages = ceil(count($items_filter) / $limit);
    
        } else if ($type_done === 'all_done') {
    
            $items_filter = array_filter($rows, 'filter_all_done');
            $items_on_page = array_slice($items_filter, $offset, $limit, true);
            $pages = ceil(count($items_filter) / $limit);
    
        }
    }
    

    function filter_tshirt($rows) {        
        if ($rows['type'] === 't-shirt') {
            return true;
        }    
    }

    function filter_hoodie($rows) {
        if ($rows['type'] == 'hoodie') {
            return true;
        }
    }

    function filter_sketch($rows) {
        if ($rows['type'] == 'sketch') {
            return true;
        }
    }

    function filter_all_done($rows) {
        if (($rows['type'] == 'hoodie')||($rows['type'] == 't-shirt')) {
            return true;
        }
    }
    
    
    require('components/catalog_info.php');
?>
