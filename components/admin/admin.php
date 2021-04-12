<?php
    session_start();
    require('../../config/connect_db.php');
    
    $login = $_POST['login'];
    $pass = md5($_POST['pass']);
    
    $sql = "SELECT * FROM `admin` WHERE `login` = '$login' AND `password` = '$pass' ";
    $check_admin = mysqli_query($link, $sql);
    if (mysqli_num_rows($check_admin) > 0) {
        $_SESSION['login'] = 'yes';
        header('Location: admin_info.php');
    } else {
        $_SESSION['message'] = 'Неверный логин или пароль';
        header('Location: admin_log.php');
    }
?>