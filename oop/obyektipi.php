<?php
class ShopProductWriter
{
    public function write($shopProduct)
    {
        $str = $shopProduct->title . ": "
        . $shopProduct->getProducer()
        . " (" . $shopProduct->price . ")\n";
    print $str;
    }
}
$productl = new ShopProduct("Собачье сердце",
"Михаил", "Булгаков", 5.99);
$writer = new ShopProductWriter();
$writer->write($productl);
