<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/contacts.css">
    <title>Контакты</title>
</head>
<body>
    <main>
        <?php 
            include('components/header-menu.php');        
        ?> 
    </main>
    <section class="contacts">
        <div class="container">
            <h2>Контакты</h2>
            <div class="clearfix">
            <div class="contact-items">
                <p>Позвонить: </p>
                <p>WhatsApp/Viber/Telegram: </p>
                <p>Связаться в <a href="https://www.instagram.com/niti.alplhk"> <img src="img/instagram_icon.png" alt=""> инстаграм</a></p>
                <p>Связаться во <a href="https://vk.com/nitialplhk"> <img src="img/vk_icon.png" alt=""> вконтакте</a></p>                
            </div>
            <div class="image-cont">
                <img src="img/contacts.png" alt="">
            </div>
            </div>
        </div>
    </section>
    <?php include('components/footer.php'); ?>
</body>
</html>