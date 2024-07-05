<?php

$productl = new ShopProduct("Каталог книг ", " ", " ", 0 ) ;
//Мы можем упростить этот код, предоставляя значения по умолчанию для аргументов:

class ShopProduct
{
    public function __construct(
        public $title,
        public $producerFirstName = " ",
        public $producerMainName = " ",
        public $price = 0
) {
}
}
?>