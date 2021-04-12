<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/bootstrap.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/catalog.css">
    <title>Каталог</title>
</head>
<body>
    <main>
        <?php 
            require('header-menu.php');        
        ?>  
        <div class="row justify-content-center">
            <div class="col-12">
                <h1>Выбери свой эскиз</h1>
            </div>
        </div>
        

    </main>    
    <section class="catalog" id="catalog_section">
        <div class="container">
            <div class="row">
                <div class="col-12 justify-content-center">
                    <div class="title">
                        <p>Вы можете выбрать эскиз из ниже представленных или перейти в раздел <a href="ideas.php">идеи</a>
                        и предложить свой собственный.</p>
                    </div>
                </div>
            </div>

            <div class="row filter">
                <div class="col-6">
                    <h2>Каталог эскизов</h2>
                </div>
                <div class="col-6 view">
                    <h2>Вид:</h2>
                </div>
                <div class="col-md-8 col-12">
                    <ul>
                        <?php foreach($filters_up as $filter): ?>
                            <?php $filter_class = 'filter' ?>
                            <?php if($type === $filter['url']): {
	                             $filter_class = $filter_class . ' filter-current';
                                } ?>
                            <?php endif; ?>

                            <a class="<?= $filter_class ?>" href="catalog.php?items_type=<?= $filter['url'] ?>"><li><?= $filter['name'] ?></li></a>
                            
                        <?php endforeach; ?>
                    </ul>
                </div>                
                <div class="col-4 view">
                    <button class="big-view"><img src="img/big_view_icon.png" alt=""></button>
                    <button class="small-view"><img src="img/small_view_icon.png" alt=""></button>
                </div>
                <?php if($type == 'only_done'): ?>
                <div class="col-md-8 col-12">
                    <ul>
                        <?php foreach($filters_down as $filter): ?>
                            <?php $filter_class = 'filter' ?>
                            <?php $type = 'only_done&type_done='.$type_done;?>                            
                            <?php if($type === $filter['url']): {
	                             $filter_class = $filter_class . ' filter-current';
                                } ?>
                            <?php endif; ?>

                            <a class="<?= $filter_class ?>" href="catalog.php?items_type=<?= $filter['url'] ?>"><li><?= $filter['name'] ?></li></a>
                            
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>
            </div>

            <div class="row" id="catalog-items">
            <?php foreach($items_on_page as $data): ?> 
               
                <div class="col-md-4 col-6">
                    <div class="catalog-item">
                        
                        <img src="<?= $data['imgUrl'] ?>" alt="">
                        <button class="like" title="В избранное"> like </button>
                        <button class="zoom" title="Увеличить"> like </button>
                        
                        <div class="item-desription">
                            <h3><?= $ind++?>. <?=$data['title'] ?></h3> 
                            <?php if($data['is_new']):?>
                                <span>new</span> 
                            <?php endif; ?>
                        
                        <a href="sketch.php?id=<?=$data['id']?>&ind=<?=$ind-1?>" class="order">Заказать</a>
                        </div>
                    </div>
                </div>  
                
                <?php endforeach;?>              
            </div>
            <div class="page-buttons">
                <?php for ($i = 1; $i <= $pages; $i = $i + 1): ?>
                    <li>
                        <a href="catalog.php?page=<?= $i ?>&items_type=<?= $type ?>#catalog_section" class="<?= $i === $page ? 'current' : ''?>"> <?= $i ?> </a>
                    </li>
                <?php endfor; ?>
            </div>
            
        </div>
        
    </section>
    <?php require('footer.php'); ?>
    <div class="modal-photo">
        <img src="../img/catalog-items/item_1.png" alt="">
        <button class="close-but"></button>
    </div>
    <div class="dark-bg"> </div>
    <script src="../JS/catalog.js"></script>
    <script src="../JS/catalog_view.js"></script>
</body>
</html>