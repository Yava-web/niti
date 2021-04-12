<?php
    $name = $_POST['name'];
    $phone = $_POST['tel'];
    $email = $_POST['email'];
    $text = $_POST['text'];
    $photo = $_FILES['idea-img'];

    $name = htmlspecialchars($name);
    $phone = htmlspecialchars($phone);
    $email = htmlspecialchars($email);
    $text = htmlspecialchars($text);

    $dist = "../img/ideas/";
    $type = $_FILES['idea-img']['type'];

    if ($type === 'image/png') {
        $type = '.png';
    } else if ($type === 'image/jpeg') {
        $type = '.jpg';
    } else {
        $type = '.jpg';
    }
    
    
    if (is_uploaded_file($photo['tmp_name'])) {
        if($photo['type'] == 'image/gif' || $photo['type'] == 'image/jpeg' || $photo['type'] == 'image/png' || $photo['type'] == 'image/svg')
        { 
            $nameimg = date('d.m.Y_H.i.s').$type;
            $uploadfile = "$dist$nameimg";
            move_uploaded_file($photo['tmp_name'], $uploadfile);
            
        } else {            
            echo "<script type=\"text/javascript\"> alert('Выбрано неверное расширение файла'); </script>";
        }
    }
    //toscha.zhilenkov@yandex.ru
    $to = "support@nitiplhk.ru";
    $subject = 'Идея с сайта';
    $message = '
    <html>
        <head>
            <title>Идея с сайта</title>
        </head>
        <body>
            <p>Имя: '.$name.'</p>
            <p>Телефон: '.$phone.'</p>
            <p>E-mail: '.$email.'</p>
            <p>Обращение: '.$text.'</p>
            <p>Фото: http://nitiplhk.ru/img/ideas/'.$nameimg.'<p>
            <p>Фото: <img src="http://nitiplhk.ru/img/ideas/'.$nameimg.'" width="400px"><p>
        </body>
    </html>';
    
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";  

    mail($to, $subject, $message, $headers);
    sleep(20);   
    
?>