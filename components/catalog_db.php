<?php

$catalogItemData = [
    0 => [
        'imgUrl'=> '../img/catalog-items/item_1.png',
        'title'=> 'Название эскиза',
        'color_1'=> 'gray',
        'color_2'=> 'white',
        'color_3'=> '',
        'is_new'=> 1,
        'type'=> 't-shirt'   
    ],
    1 => [
        'imgUrl'=> '../img/catalog-items/item_2.jpg',
        'title'=> 'Название эскиза',
        'color_1'=> 'gray',
        'color_2'=> 'white',
        'color_3'=> 'black',
        'is_new'=> 0,
        'type'=> 'hoodie'        
    ],
    2 => [
        'imgUrl'=> '../img/catalog-items/item_3.png',
        'title'=> 'Название эскиза',
        'color_1'=> '',
        'color_2'=> 'white',
        'color_3'=> 'gray',
        'is_new'=> 0,
        'type'=> 't-shirt'        
    ],
  // 2 ряд
    3 => [
        'imgUrl'=> '../img/catalog-items/item_4.jpg',
        'title'=> 'Название эскиза',
        'color_1'=> 'black',
        'color_2'=> 'white',
        'color_3'=> 'gray',
        'is_new'=> 0,
        'type'=> 't-shirt'        
    ],
    4 => [
        'imgUrl'=> '../img/catalog-items/item_5.jpg',
        'title'=> 'Название эскиза',
        'color_1'=> 'black',
        'color_2'=> 'white',
        'color_3'=> 'gray',
        'is_new'=> 0,
        'type'=> 'hoodie'        
    ],
    5 => [
        'imgUrl'=> '../img/catalog-items/item_6.jpg',
        'title'=> 'Название эскиза',
        'color_1'=> 'black',
        'color_2'=> 'white',
        'color_3'=> 'gray',
        'is_new'=> 0,
        'type'=> 't-shirt'        
    ],
  // 3 ряд
    6 => [
        'imgUrl'=> '../img/catalog-items/item_7.jpg',
        'title'=> 'Название эскиза',
        'color_1'=> 'black',
        'color_2'=> 'white',
        'color_3'=> 'gray',
        'is_new'=> 0,
        'type'=> 'hoodie'        
    ],
    7 => [
        'imgUrl'=> '../img/catalog-items/item_8.jpg',
        'title'=> 'Название эскиза',
        'color_1'=> 'black',
        'color_2'=> 'white',
        'color_3'=> 'gray',
        'is_new'=> 0,
        'type'=> 'hoodie'        
    ],
    8 => [
        'imgUrl'=> '../img/catalog-items/item_9.jpg',
        'title'=> 'Название эскиза',
        'color_1'=> 'black',
        'color_2'=> 'white',
        'color_3'=> 'gray',
        'is_new'=> 0,
        'type'=> 't-shirt'        
    ],
  // 4 ряд
    9 => [
        'imgUrl'=> '../img/catalog-items/item_10.jpg',
        'title'=> 'Название эскиза',
        'color_1'=> 'black',
        'color_2'=> 'white',
        'color_3'=> 'gray',
        'is_new'=> 0,
        'type'=> 't-shirt'        
    ],
    10 => [
        'imgUrl'=> '../img/catalog-items/item_11.jpg',
        'title'=> 'Название эскиза',
        'color_1'=> 'black',
        'color_2'=> 'white',
        'color_3'=> 'gray',
        'is_new'=> 0,
        'type'=> 't-shirt'
    ],
    11 => [
        'imgUrl'=> '../img/catalog-items/item_12.jpg',
        'title'=> 'Название эскиза',
        'color_1'=> 'black',
        'color_2'=> 'white',
        'color_3'=> 'gray',
        'is_new'=> 0,
        'type'=> 't-shirt'        
    ],  
  // 5 ряд
    12 => [
        'imgUrl'=> '../img/catalog-items/item_13.jpg',
        'title'=> 'Название эскиза',
        'color_1'=> 'black',
        'color_2'=> 'white',
        'color_3'=> 'gray',
        'is_new'=> 0,
        'type'=> 't-shirt'       
    ],
    13 => [
        'imgUrl'=> '../img/catalog-items/item_14.jpg',
        'title'=> 'Название эскиза',
        'color_1'=> 'black',
        'color_2'=> 'white',
        'color_3'=> 'gray',
        'is_new'=> 0,
        'type'=> 't-shirt'        
    ],
    14 => [
        'imgUrl'=> '../img/catalog-items/item_15.jpg',
        'title'=> 'Название эскиза',
        'color_1'=> 'black',
        'color_2'=> 'white',
        'color_3'=> 'gray',
        'is_new'=> 0,
        'type'=> 't-shirt'        
    ],
  // 6 ряд
    15 => [
        'imgUrl'=> '../img/catalog-items/item_16.jpg',
        'title'=> 'Название эскиза',
        'color_1'=> 'black',
        'color_2'=> 'white',
        'color_3'=> 'gray',
        'is_new'=> 0,
        'type'=> 't-shirt'        
    ],
    16 => [
        'imgUrl'=> '../img/catalog-items/item_17.jpg',
        'title'=> 'Название эскиза',
        'color_1'=> 'black',
        'color_2'=> 'white',
        'color_3'=> 'gray',
        'is_new'=> 0,
        'type'=> 't-shirt'        
    ],
    17 => [
        'imgUrl'=> '../img/catalog-items/item_18.jpg',
        'title'=> 'Название эскиза',
        'color_1'=> 'black',
        'color_2'=> 'white',
        'color_3'=> 'gray',
        'is_new'=> 0,
        'type'=> 'hoodie'        
    ]
];

$filters_up = [
    0 => [
        'url' => 'all',
        'name' => 'Весь каталог'
    ],
    1 => [
        'url' => 'only_sketch',
        'name' => 'Только эскизы'
    ],
    2 => [
        'url' => 'only_done',
        'name' => 'Работы'
    ]
];
$filters_down = [
    0 => [
        'url' => 'only_done&type_done=all_done',
        'name' => 'Все работы'
    ],
    1 => [
        'url' => 'only_done&type_done=t-shirt',
        'name' => 'Футболки'
    ],
    2 => [
        'url' => 'only_done&type_done=hoodie',
        'name' => 'Худи/Свитшоты'
    ]
];


?>