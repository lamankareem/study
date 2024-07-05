<?php
class ShopProduct
{
    public $title = "Стандартный товар";
    public $producerMainName= "Фамилия автора";
    public $producerFirstName = "Имя автора";
    public $price= 0;
}
$productl = new ShopProduct();
print $productl->title;

?>