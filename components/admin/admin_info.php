<?php session_start();
    if (!isset($_SESSION['login'])) {
        header('Location: admin_log.php');
    }
?>
<!DOCTYPE html>
<html lang="ru en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/bootstrap.css">
    <link rel="stylesheet" href="../../CSS/style.css">
    <link rel="stylesheet" href="../../CSS/admin.css">
    <title>Admin Panel</title>
</head>
<body>    
    <section class="admin">
        <div class="container">
            <a class="logout" href="logout.php">Выход</a>
            <div class="admin-main-menu">
                <h2>Меню</h2>
                <ul class="admin-list">
                    <li><a href="admin_info.php?change=catalog">Изменить каталог</a> </li>
                    <li><a href="admin.php?change=catalog">Изменить цены</a></li>
                    <li><a href="admin.php?change=catalog">Изменить доставку</a></li>                
                    <li><a href="admin.php?change=catalog">Ссылки на хостинг и БД</a></li>
                </ul>
            </div>
            <div class="submenu">
            <?php if ($_GET['change'] === 'catalog'): ?>
                <h2>Изменить каталог</h2>
                <ul class="change-list">
                    <li id="catalog_type_add"><a href="admin_info.php?change=catalog&type=add">Добавить эскиз в каталог</a> </li>                   
                    <li id="catalog_type_delet"><a href="admin.php?change=catalog&type=delet">Удалить эскиз из каталога</a></li>                    
                    <li id="catalog_type_changing"><a href="admin.php?change=catalog&type=changing">Изменить эскиз</a></li>                    
                </ul>
                <?php if ($_GET['type'] === 'add'): ?>
                    <h2>Добавить эскиз</h2>
                    <form action="add_to_catalog.php" method="POST" enctype="multipart/form-data" id="add_form">
                        <label for="">Фото эскиза</label>
                        <input type="file" name="photo" id="image" accept="image/*" required>
                        <label for="">Название эскиза</label>
                        <input type="text" name="title" id="title" required>
                        <label for="colors">Цвета</label>
                        <fieldset id="colors">
                            <p>Если цвета нет, оставьте поле пустым. В каждом поле <b>только один цвет</b></p>
                            <p>Названия цветов на английском с маленькой буквы!</p>
                            <label for="color_1">Первый цвет</label>
                            <input type="text" name="colors_1" id="color_1" placeholder="black" required>
                            <label for="color_2">Второй цвет</label>
                            <input type="text" name="colors_2" id="color_2" placeholder="white">
                            <label for="color_3">Третий цвет</label>
                            <input type="text" name="colors_3" id="color_3" placeholder="gray">                                              
                        </fieldset>
                        <button class="add_color">Добавить цвет</button>
                        <label for="new">Новое?</label>
                        <fieldset id="new">                            
                            <input type="radio" name="is_new" id="is_new_1" value="1" required>
                            <label for="is_new_1">Да</label>                            
                            <input type="radio" name="is_new" id="is_new_0" value="0">
                            <label for="is_new_0">Нет</label>
                        </fieldset>
                        <label for="type">Тип</label>
                        <fieldset id="type">                            
                            <input type="radio" name="type" id="type_t" value="t-shirt" required>
                            <label for="type_t">Футболка</label>                            
                            <input type="radio" name="type" id="type_h" value="hoodie"> 
                            <label for="type_h">Худи/свит</label>                           
                            <input type="radio" name="type" id="type_s" value="sketch">            
                            <label for="type_s">Эскиз</label>                
                        </fieldset>
                        <button type="submit" id="4">Добавить</button>
                    </form>
                <?php endif; ?>
            <?php endif; ?>
            </div>
        </div>
    </section>    
    <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
    <script src="../../JS/admin--add_to_catalog.js"></script>    
</body>
</html>