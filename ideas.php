<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/ideas.css">
    <title>Свой эскиз</title>
</head>
<body>
    <main>
        <?php 
            include('components/header-menu.php');        
        ?> 
    </main>
    <section class="ideas">
        <div class="container">
            <form class="ideas-form" action="requests/ideas_form.php" method="POST" enctype="multipart/form-data">
                <legend><h2>Пожалуйста, введите данные и прикрепите фото</h2></legend>
                <div class="form-item">
                    <label for="fed-name">Ваше имя:</label>
                    <input type="text" name="name" id="fed-name" placeholder="Имя">
                </div>
                <div class="clearfix">
                    <div class="form-item form-tel">
                        <label for="fed-tel">Телефон:</label>
                        <input type="tel" name="tel" id="fed-tel" placeholder="+7 XXX XXX XX XX" reqiured>
                    </div>

                    <div class="form-item form-mail">
                        <label for="email">Электронная почта:</label>
                        <input type="email" name="email" id="email" placeholder="E-mail">
                    </div>
                </div>
                

                <div class="form-item">
                    <label for="text">Пожелания:</label>
                    <textarea name="text" id="text" placeholder="Введите текст" ></textarea>
                </div>

                <div class="form-item">
                    <label for="idea-img" class="upload-image clearfix">
                        <span class="input-file-icon"><img src="img/add.svg" alt="Выбрать файл"></span>
                        <span class="input-file-text">Выберите файл</span>
                    </label>
                    <input type="file" class="upload-input-image" name="idea-img" id="idea-img" multiple accept="image/*" required>
                    <button class="clr">Удалить загржуенные изображения</button>
                </div>                
                
                <input type="submit" class="btn-page" value="Отправить эскиз">                
                
            </form>
        </div>
    </section>

    <?php include('components/footer.php'); ?>
    <script src="JS/ideas-img-input.js"></script>
</body>
</html>