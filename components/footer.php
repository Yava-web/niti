<section class="footer">
        <div class="container">
            <div class="footer-top">
                <div class="row align-items-center">
                    <div class="col-4">
                        <a href="index.php"><img src="img/logo.png" alt="" width="250px"></a>
                    </div>
                    <div class="col-5 offset-3 btn-right">
                        <a href="catalog.php" class="btn-page">Сделать заказ</a>
                    </div>
                </div>                
            </div>

            <div class="footer-middle clearfix">
                <div class="footer-menu">
                    <h3>Магазин</h3>
                    <ul>                                       
                        <li><a href="price.php">Цены</a></li>
                        <li><a href="ideas.php">Свой эскиз</a></li>
                        <li><a href="catalog.php">Каталог</a></li>
                        <li><a href="delivery.php">Доставка</a></li>
                    </ul>
                </div>

                <div class="footer-menu">
                    <h3>Отзывы</h3>
                    <ul>
                        <li><a href="reviews.php#reviews-list">Посмотреть отзывы</a></li>               
                        <li><a href="reviews.php">Оставить свой отзыв</a></li>
                    </ul>
                </div>

                <div class="footer-menu">
                    <h3>Контакты</h3>
                    <ul>
                        <li><a href="contacts.php">Адреса и телефоны</a></li>               
                        <li><a href="https://www.instagram.com/niti.alplhk">Мы в Instagram</a></li>  
                        <li><a href="https://vk.com/nitialplhk">Мы во Вконтакте</a></li>                                              
                    </ul>   
                </div>
            </div>
            

            <div class="footer-bottom clearfix">
                <div class="footer-social">
                    <b>Присоединяйтесь к нам!</b>
                    <a href="https://www.instagram.com/niti.alplhk" class="social-btn inst">Инст</a>
                    <a href="https://vk.com/nitialplhk" class="social-btn vk">Вк</a>
                </div>

                <div class="footer-copyright ">
                    <p>Designed by <a href="https://www.instagram.com/steveor_tven">steveor_tven</a>
                    <br> v1.0
                    </p>
                </div>
            </div>
        </div>
    </section>    

    <button class="up-button" type="button" title="Наверх"></button>
    
    <div class="dark-bg"> </div>
    <div class="modal-order"> 
            <h2>Заявка отправлена!</h2>
            <p>Ваши данные отправлены. Мы свяжемся с Вами в ближайшее время.</p>
            <a href="catalog.php"><button class="btn-page modal-btn">К эскизам</button></a>
            <button class="btn-page modal-btn" id="modal_btn_close">Закрыть</button>
        </div>
    <div class="cookies">
        <div class="container">
            <div class="cookies-block clearfix">
                <p>Сайт использует cookies-файлы для улучшения работоспособности и качества обслуживания. 
                    Продолжая использовать сайт, вы соглашаетесь на сбор куков. Подробнее в <a href="#">политике конфиденциальности</a>.</p>                
                <button class="ok">Хорошо</button>
            </div>
        </div>
    </div>

    <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>

    <script src="JS/onScrool.js"></script>
    <script src="JS/header-menu.js"></script>
    <script src="JS/review.js"></script>
    <script src="JS/mob_menu.js"></script>    
    <script src="JS/ajax_form.js"></script>
    <script src="JS/jquery.maskedinput.min.js"></script>
    <script src="JS/jquery.cookie.js"></script>
    <script>
        jQuery(function($){
        $("#tel").mask("+7 (999) 999-99-99"); 
        if (window.matchMedia('(max-width: 575px)').matches) {
            $("#tel").mask("+7 ");
        }          
        });
    </script>
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
    