<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/bootstrap.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/sketch.css">
    <title><?=$ind.'. '. $rows['title'] ?></title>
</head>
<body>
    <main>
        <?php 
            require('header-menu.php');        
        ?>  
    </main> 

    <section class="sketch">
        <div class="container">
            <div class="clearfix">
                <div class="img-box">
                    <div class="clearfix">
                        <h2><?=$ind.'. '. $rows['title'] ?></h2>
                        <span>от 650р</span>
                    </div>
                    <img src="<?= $rows['imgUrl'] ?>" alt="">

                    <div class="colors">
                        <?php for($i = 0; $i < count($colors); $i++): ?>
                            <input  type="radio" name="color" value="<?= $colors[$i]?>" form="sketch-form" id="sketch_color_<?= $colors[$i]?>" required>
                            <label class="color-<?= $colors[$i]?>" for="sketch_color_<?= $colors[$i]?>"></label>   
                        <?php endfor; ?>
                    </div>                    
                </div>
                

                <form class="sketch-form" method="POST" action="requests/sketch_form.php" id="sketch-form">
                    <div class="title">Для заказа, пожалуйста, заполните данные:</div>

                    <div class="form-item">
                        <label for="sketch_name">Ваше имя</label>
                        <input type="text" name="name" id="sketch_name">
                    </div>

                    <div class="form-item">
                        <label for="sketch_tel">Номер телефона<strong>*</strong></label>
                        <input type="tel" name="tel" id="sketch_tel" required>
                    </div>
                                    
                    <div class="form-item email">
                        <label for="sketch_email">Ваш email</label>
                        <input type="email" name="email" id="sketch_email">                      
                    </div>

                    <div class="form-item pay clearfix">
                        <label for="sketch_pay_select">Удобный способ оплаты:</label>
                        <select size="1" name="payment" id="sketch_pay_select">
                            <option selected  value="Онлайн перевод">Онлайн перевод</option>
                            <option value="Наличными">Наличными</option>
                        </select>
                    </div>

                    <div class="form-item delivery clearfix">
                        <input type="checkbox" name="delivery_check" class="custom-check" id="sketch_delivery_select" value="Доставка нужна">
                        <label for="sketch_delivery_select">Нужна доставка</label>
                        <select size="1" name="delivery" id="select_del" disabled>
                            <option selected  value="Почта России">Почта России</option>
                            <option value="СДЭК">СДЭК</option>
                            <option value="Ваш вариант">Ваш вариант</option>
                        </select>
                    </div>
                    <div class="form-item">
                        <label for="sketch_promo">Промокод</label>
                        <input type="text" name="promo" id="sketch_promo">                      
                    </div>
                    <div class="form-item">
                            <label for="sketch_text">Пожелания</label>
                            <textarea type="text" name="text" id="sketch_text"></textarea>                        
                    </div>
                        
                    <div class="btn-sketch clearfix">
                        <input type="submit" class="btn-page left" name="submit" value="Оставить заявку">
                        <input type="reset" class="btn-page right" value="Очистить">
                    </div>
                    <input type="hidden" name="sk_id" value="<?= $_GET['id'];?>">
                </form>
            </div>
        </div>
        
    </section>

    <?php require('footer.php'); ?>

    <script src="../JS/delivery_check.js"></script>
</body>
</html>