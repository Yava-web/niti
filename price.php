<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/price.css">
    <title>Цены</title>
</head>
<body>
    <main>
        <?php 
            include('components/header-menu.php');        
        ?> 
    </main>
    <section class="price">
        <div class="container">
            <div class="row">
                <div class="col-12 justify-content-center">
                    <div class="section-title">
                        <h2>Прайс-лист</h2>
                    </div>
                </div>
                    
                <div class="col-12">
                    <table class="price-list">
                        <tr>
                            <th></th>
                            <th>Футболка</th>
                            <th>Худи</th>
                        </tr>
                        <tr>
                            <td>Надпись</td>
                            <td>от 700 ₽</td>
                            <td>от 1350 ₽</td>
                        </tr>
                        <tr>
                            <td>Рисунок</td>
                            <td>от 650 ₽</td>
                            <td>от 1300 ₽</td>
                        </tr>
                        <tr>
                            <td>Добавить надпись/рисунок <br> с обратной стороны</td>
                            <td>от 150 ₽</td>
                            <td>от 150 ₽</td>
                        </tr>
                    </table>
                    <p class="price-list-addon">*цены представлены без учета акций, скидок и спецпредложений</p>
                </div>

                <div class="col-12 description">
                    <p>Помните, что для расчета точной стоимости необходимо <a href="#">оставить заявку</a>, выбрать эскиз 
                        в разделе <a href="catalog.php">"эскизы"</a>,<a href="index.php#feedback-form-section"> написать </a> или <a href="#">позвонить нам</a>. 
                        Цены могут отличаться от представленных в зависимости от сложности работы и срока изготовления.
                        Мы перезвоним вам и скажем фиксированную цену, после чего она остается неизменной.
                    </p>
                    <p>
                        У вас также всегда есть возможность связаться с нами в социальных сетях: <br>
                        <a href="https://www.instagram.com/niti.alplhk" class="social-btn inst">Инст</a>
                        <a href="https://vk.com/nitialplhk" class="social-btn vk">Вк</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <?php include('components/footer.php'); ?>
</body>
</html>