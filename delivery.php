<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/delivery.css">
    <title>Доставка</title>
</head>
<body>
    <main>
        <?php 
            include('components/header-menu.php');        
        ?> 
    </main>
    <section class="delivery">
        <div class="container">
            <div class="section-title">
                <h2>Доставка</h2>
            </div>
            <p class="addon">Стандартное время доставки до 7 дней (в среднем 2-5 дней).</p>
            <div class="description">
                <div class="row">
                    <div class="col-md-6 col-12" >
                        <div class="description-item one" style="border-right: 1px solid #74747493;">
                            <img src="img/delivery1.svg" alt="">
                            <h3>Мы отправляем все ваши вещи Почтой России или СДЭКом</h3>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="description-item two">
                            <img src="img/calendar.svg" alt="">
                            <h3>Если вам нужна доставка к <b>определенной дате</b>  напишите нам заранее, учитывайте сроки изготовления</h3>
                        </div>  
                    </div>
                </div>            
            </div>
                        
            <table class="delivery-items">                
                <tr>
                    <th></th>
                    <th>Стоимость</th>
                    <th>Сроки</th>
                </tr>
                <tr>
                    <td>Доставка почтой первым классом</td>
                    <td>По всей России 300 рублей</td>
                    <td>От 3 до 10 дней</td>
                </tr>
                <tr>
                    <td>Доставка СДЭК</td>
                    <td>От 300 рублей</td>
                    <td>2-3 рабочих дня</td>
                </tr>                        
            </table>
            <p class="price-list-addon">*фактические цены и сроки могут отличаться от представленных в зависимости от товара и региона доставки</p>  
        </div>
    </section>
    <?php include('components/footer.php'); ?>
</body>
</html>