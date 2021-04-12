<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">        
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="CSS/style.css">
        <title>Вышивка на одежде</title>
    </head>

<body>    
    <main>        
            
        <?php include('components/header-menu.php'); ?>

        <div class="container">
            <div class="header-content">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 col-md-12">
                        <h1>Сделай заказ прямо сейчас</h1>
                        <p>Эксклюзивный эскиз + футболка</p>
                        <span>
                            Цены от 650р
                        </span>
                    </div>
                    
                    <div class="col-xl-4 offset-xl-2 col-lg-4 offset-lg-1 col-md-8 offset-md-2">
                        <div class="header-form">
                            <h2>Быстрый заказ</h2>
                            <form id="form" class="fed-form" >
                                <label for="name">Ваше имя:</label>
                                <input type="text" id="name" name="name">
                                <label for="tel">Номер телефона:<strong>*</strong></label>
                                <input type="tel" id="tel" name="tel" required> 
                                <input type="text" class="hidden_form_log" name="invisible" value=" ">
                                <button class="btn btn-header-form" type="submit">Оставить заявку</button>
                            </form>
                        </div>
                    </div>                    
                </div>                
            </div> 
            
        </div>
    </main>

    <section class="features">
        <div class="container">
            <div class="section-title">
                <h2>Почему мы ?</h2>
            </div>
            
            <div class="features-block">
                <ul class="features-items">
                    <li class="feature-item">
                        <img src="img/feature-items/quality-icon.png" alt="Изображение не загружено...">
                        <h3>Качество</h3>
                        <p>Материалы наилучшего качества. <br> Футболки и худи из стопроцентного хлопка
                        <br>не доставят неудобств и дискомфорта</p>
                    </li>
                    <li class="feature-item">
                        <img src="img/feature-items/idea-icon.svg" alt="Изображение не загружено...">
                        <h3>Оригинальность</h3>
                        <p>Вы можете выбрать уже готовый эскиз или предложить свой собственный дизайн</p>
                    </li>
                    <li class="feature-item">
                        <img src="img/feature-items/price-icon.svg" alt="Изображение не загружено...">
                        <h3>Цена</h3>
                        <p>Вы ни за что не переплачиваете. <br> В цену включены футболка (худи), вышивка и оформление подарка (по желанию) </p>
                    </li>
                </ul>
        </div>

        </div>
    </section>
    
    <section class="catalog">        
        <div class="container">

            <div class="row">
                <div class="col-4 offset-4">
                    <div class="section-title">
                        <h2>Каталог</h2>
                    </div>                                        
                </div>
                <div class="btn-right col-sm-4 col-12">
                    <a href="catalog.php" class="btn-page">Все эскизы</a>
                </div>
            </div>

            <div class="row justify-content-center">
               <?php for($i = 0; $i<count($new_items); $i++):?>
                <div class="col-md-4 col-10">
                    <div class="catalog-item">
                        <img src="<?= $new_items[$i]['imgUrl'] ?>" alt="">
                        <div class="item-desription">
                            <h3><?= $new_items[$i]['title'] ?></h3>
                            <span>new</span>
                        </div>
                        <a href="sketch.php?id=<?= $new_items[$i]['id']?>&ind=<?=$i+1?>" class="order">Заказать</a>
                        
                    </div>
                </div>
               <?php endfor; ?>                
            </div>
            
            <div class="row mobile-but">
                <div class="col-12">
                    <a href="catalog.php" class="btn-page">Ко всем эскизам</a>
                </div>
            </div>

            <div class="price">
                <div class="row">
                    <div class="col-lg-12 justify-content-center">
                        <div class="section-title">
                            <h2>Прайс-лист</h2>
                        </div>
                    </div>
                    
                    <div class="col-lg-12">
                        <table class="price-list">
                            <tr>
                                <th></th>
                                <th>Футболка</th>
                                <th>Худи</th>
                            </tr>
                            <tr>
                                <td>Надпись</td>
                                <td>700 ₽</td>
                                <td>1350 ₽</td>
                            </tr>
                            <tr>
                                <td>Рисунок</td>
                                <td>700 ₽</td>
                                <td>1300 ₽</td>
                            </tr>
                        </table>
                        <p class="price-list-addon">*цены представлены без учета акций, скидок и спецпредложений</p>
                    </div>
                </div>
                <div class="row mobile-but">
                <div class="col-12">
                    <a href="catalog.php" class="btn-page">К ценам</a>
                </div>
            </div>
            </div>
            
        </div>
    </section>
    
    <section class="reviews">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4 col-12">
                    <div class="section-title">
                        <h2>Отзывы</h2>
                    </div>                                        
                </div>
                <div class="btn-right col-4">
                    <a href="reviews.php" class="btn-page">Все отзывы</a>
                </div>
            </div>
         
            <div class="reviews-list clearfix">
            <?php if (count($rows) < 2): ?>
                    <div class="no-comments">
                        <p>Упс... отзывов пока нет... </p>
                        <p>Но они точно есть в нашем <a href="https://www.instagram.com/niti.alplhk"> инстаграме !</a><p>
                    </div>
                <?php endif; ?>

                <?php if(count($rows) > 1): ?>
                <?php for($i = count($rows)-1; $i>=count($rows)-2; $i--): ?>
                    <blockquote class="review-item">
                        <p><?= $rows[$i]['text'] ?></p>
                        <cite><?= $rows[$i]['name'] ?></cite>
                    </blockquote>
                <?php endfor; ?> 
                <?php endif; ?>           
            </div>
            <div class="row mobile-but">
                <div class="col-12">
                    <a href="catalog.php" class="btn-page">Ко всем отзывам</a>
                </div>
            </div>
        </div>        
    </section>

    <section class="feedback" id="feedback-form-section" >
        <div class="container">
            <div class="section-title">
                <h2>Свяжитесь с нами</h2>
            </div>
            <form class="feedback-form fed-form" action="requests/feedback_form.php" method="POST" mid="feedback-for">
                <div class="form-item">
                    <label for="fed-name">Ваше имя:</label>
                    <input type="text" name="name" id="fed-name" placeholder="Имя">
                </div>
                <div class="clearfix">
                    <div class="form-item form-tel">
                        <label for="fed-tel">Телефон:<strong>*</strong></label>
                        <input type="tel" name="tel" id="fed-tel" placeholder="+7 XXX XXX XX XX" required>
                    </div>

                    <div class="form-item form-mail">
                        <label for="fed-email">Электронная почта:</label>
                        <input type="email" name="email" id="fed-email" placeholder="E-mail">
                    </div>
                </div>
                

                <div class="form-item">
                    <label for="text">Текст обращения:<strong>*</strong></label>
                    <textarea name="text" id="text" placeholder="Введите текст" required></textarea>
                </div>

                <input type="submit" class="btn-page" value="Оставить заявку">
                <input type="text" class="hidden_form_log"  name="invisible" value=" ">
                
                <img src="img/feedback.svg" alt="">
            </form>
        </div>
    </section>
    
    <?php include('components/footer.php'); ?>        
        
</body>