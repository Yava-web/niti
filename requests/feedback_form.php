<?php
    $name = $_POST['name'];
    $phone = $_POST['tel'];
    $email = $_POST['email'];
    $text = $_POST['text'];

    $name = htmlspecialchars($name);
    $phone = htmlspecialchars($phone);
    $email = htmlspecialchars($email);
    $text = htmlspecialchars($text);

   
   
    
    $to = "support@nitiplhk.ru";
    $subject = 'Заявка с сайта';
    $message = '
    <html>
        <head>
            <title>Заявка с сайта</title>
        </head>
        <body>
            <p>Имя: '.$name.'</p>
            <p>Телефон: '.$phone.'</p>
            <p>E-mail: '.$email.'</p>
            <p>Обращение: '.$_POST['invisible'].'</p>
        </body>
    </html>';

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";  

    mail($to, $subject, $message, $headers)
   
    
?>