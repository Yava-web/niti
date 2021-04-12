<?php
    require('../config/connect_db.php');
    
    $name = $_POST['name'];
    $phone = $_POST['tel'];
    $email = $_POST['email'];
    $text = $_POST['text'];
    $color = $_POST['color'];
    $delivery = $_POST['delivery_check'];
    $promocode = $_POST['promo'];
    $delivery_way = $_POST['delivery'];
    $payment_way = $_POST['payment'];

    $name = htmlspecialchars($name);
    $phone = htmlspecialchars($phone);
    $email = htmlspecialchars($email);
    $text = htmlspecialchars($text);
    $color = htmlspecialchars($color);
    $delivery = htmlspecialchars($delivery);
    $promocode = htmlspecialchars($promocode);
    $delivery_way = htmlspecialchars($delivery_way);
    $payment_way = htmlspecialchars($payment_way);

    $id = $_POST['sk_id'];
    
    $sql = "SELECT * FROM `catalog` WHERE id = $id";
    $result = mysqli_query($link, $sql);
    $rows = mysqli_fetch_array($result);

    $photo_data = $rows['imgUrl'];
    $photo_data = str_replace('..','', $photo_data);
    
    $to = "support@nitiplhk.ru";
    $subject = "Заказ с сайта";    
    $message = '
    <html>
        <head>
            <title>Заказ с сайта</title>
        </head>
        <body>
            <h2>Информация о заказчике:</h2>
            <p>Имя: '.$name.'</p>
            <p>Телефон: '.$phone.'E-mail: '.$email.'</p>
            <p>Обращение: '.$text.'</p>
            <p>Цвет: '.$color.'</p>
            <p>Доставка: '.$delivery.'Способ доставки: '.$delivery_way.'</p>
            <p>Способ оплаты: '.$payment_way.'</p>
            <p>Промкод: '.$promocode.'</p>
            <h2>Информация о заказе</h2>
            <p><b>ID в каталоге: '.$id.'</b></p>
            <p>'.$photo_data.'</p>
            <img src="http://nitiplhk.ru'.$photo_data.'" width="400px">
        </body>
    </html>';
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";  

    mail($to, $subject, $message, $headers);
    sleep(20);
?>