<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/reviews.css">
    <title>Отзывы</title>
</head>
<body>
    <main>
        <?php 
            include('components/header-menu.php');
        ?> 
    </main>

    <section class="reviews">
        <div class="container">

            <div class="description">                
                <p>Оставь отзыв и получи персональную <b>скидку 20%</b>  на следующий заказ!</p>
                <button  class="scroll-btn one">Перейти к отзывам</button>
                <button class="scroll-btn two">Оставить свой отзыв</button>
            </div>

            <form class="review-form" method="POST" action="reviews.php" enctype="multipart/form-data" id="review-form">
                <div class="title">Оставить отзыв</div>
                <div class="clearfix">
                    <div class="form-item name">
                        <label for="review_name">Ваше имя</label>
                        <input type="text" name="name" id="review_name">
                    </div>
                    <div class="form-item email">
                        <label for="review_email">Ваш email</label>
                        <input type="email" name="email" id="review_email"></input>
                        <span>*для отправки промокода на скидку 20%</span>
                    </div>
                </div>

                <div class="form-item">
                    <label for="review_area">Ваш комментарий <strong>*</strong></label>
                    <textarea name="text" id="review_area" required></textarea>
                    <span class="text-counter"><output class="char-counter" for="review_area">0</output>/200 символов</span>
                </div>
                <div class="clearfix">
                <div class="form-item photo">
                    <label for="review_photo">Прикрепите фото заказа</label>
                    <input type="file" name="photo" id="review_photo" accept="image/*"></input>                       
                </div>

                <div class="form-item rating">
                    
                    <fieldset class="rating-area">                        
                        <input type="radio" name="rating" value="5" id="review_rating_1"></input>
                        <label for="review_rating_1"></label>
                        <input type="radio" name="rating" value="4" id="review_rating_2"></input>
                        <label for="review_rating_2"></label>  
                        <input type="radio" name="rating" value="3" id="review_rating_3"></input>
                        <label for="review_rating_3"></label>  
                        <input type="radio" name="rating" value="2" id="review_rating_4"></input>
                        <label for="review_rating_4"></label>                        
                        <input type="radio" name="rating" value="1" id="review_rating_5"></input>  
                        <label for="review_rating_5"></label> 
                    </fieldset>
                </div>
                </div>
                 <div class="btn-review">
                    <input type="submit" class="btn-page" value="Отправить" id="sbm">
                    <button type="reset" class="btn-page">Очистить</button>
                 </div>                   
            </form>
            
            <div class="section-title" >
                <img src="../img/arrowLeft.png" alt="">
                <h2>Отзывы наших любимых клиентов</h2>
                <img src="../img/arrowRight.png" alt="">
            </div>

            <div class="reviews-list">
                <span id="reviews-list"></span>
                <?php if (count($rows) === 0): ?>
                    <div class="no-comments">
                        <p>Упс... отзывов пока нет... </p>
                        <p>Но они точно есть в нашем <a href="https://www.instagram.com/niti.alplhk"> инстаграме !</a><p>
                            <img src="../img/cat-review.png" alt="">
                        <p>Оставь комментарий на сайте и получи промокод !</p>
                    </div>
                <?php endif; ?>
                <?php for($i = count($rows) - 1; $i>=0; $i--): ?>
                    <blockquote class="review-item" >

                        <div class="clearfix">
                            <cite><?= $rows[$i]['name'] ?></cite>
                            <span class="current-date"><?=date('d.m.Y', strtotime($rows[$i]['date']));?></span>
                            <?php if (!empty($rows[$i]['rating'])): ?>
                            <span class="rating">
                                <?php for($j = 0; $j < $rows[$i]['rating']; $j++):?>
                                    <img src="../img/rating_on.png" alt="">
                                <?php endfor;?>
                            </span>
                            <?php endif; ?>
                        </div>

                        <?php if (!empty($rows[$i]['photo'])) { ?>
                            <img src="<?= $rows[$i]['photo'] ?>" alt="">
                            <?= $allLine = '' ?>
                        <?php } else { $allLine = 'all-line'; } ?>
                        
                        <p class="<?= $allLine ?>"> <?= $rows[$i]['text'] ?> </p>
                        
                    </blockquote>
                <?php endfor;?>
                
            </div>
            
            

        </div>
    </section>
    
    <?php include('components/footer.php'); ?>
                            
    
</body>
</html>