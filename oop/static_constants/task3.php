<?php

class Store {
    const TAX_RATE = 0.15;
    const DISCOUNT_RATE = 0.10;

    public static function calculateTax($price) {
        return $price + ($price* self::TAX_RATE);
    }

    public static function applyDiscount($price) {
        return ($price + ($price* self::TAX_RATE)) * self::DISCOUNT_RATE;
    }
}


echo "Price Calculation <br>";
$price1 = 1000;
echo "Price before tax: $price1 <br>";
$price1 = Store::calculateTax($price1);
echo "Price after tax: $price1 <br>";  
echo "Price before discount: $price1<br>"; 
$price1 = Store::applyDiscount($price1);
echo "Price after disount: $price1<br>";    
?>
