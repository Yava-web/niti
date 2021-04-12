<?php
//qTdJ03HXoc iamto276_niti
require('config/connect_db.php');

$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['text'];
$rating = $_POST['rating'];
$photo = $_FILES['photo'];
$current_date = date('Y-m-d');


if (is_uploaded_file($photo['tmp_name'])) {
    if($photo['type'] == 'image/gif' || $photo['type'] == 'image/jpeg' || $photo['type'] == 'image/png' || $photo['type'] == 'image/svg') {

        $target = "img/reviews/".basename($photo['name']);    
    
        if(!(move_uploaded_file($photo['tmp_name'], $target))) {
            echo "<script type=\"text/javascript\"> alert('Неверное'); </script>";
        }
        

    } else {
        echo "<script type=\"text/javascript\"> alert('Неверное расширение файла. Допустимые расширения: gif, jpeg, png, svg'); </script>";        
        echo '
        <script language="JavaScript">
        window.location.href="reviews.php";
        </script> ';
        exit();  
    }
}

if (empty($name)) {
    $name = 'Анонимно';
}


if (isset($text)) {

    $name = htmlspecialchars($name);    
    $email = htmlspecialchars($email);
    $text = htmlspecialchars($text);

    if (isset($rating)) {
        $sql = "INSERT INTO reviews (`name`, `text`, `email` ,`photo`, `rating`, `date`) values ('$name', '$text','$email','$target','$rating','$current_date')";
    } else {
        $sql = "INSERT INTO reviews (`name`, `text`, `photo`, `date`) values ('$name', '$text', '$target','$current_date')";
    }

    $result = mysqli_query($link, $sql);
    //echo mysqli_error($link);
    header('Location: reviews.php');    
}   



$sql = 'SELECT * FROM reviews';
$result = mysqli_query($link, $sql);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
require('components/reviews_info.php');

?>