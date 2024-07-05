<?php
$a = 8 + 2; // 10, сложение
$a = 8 - 2; // 6, вычитание
$a = 8 * 2; // 16, умножение
$a = 8 / 2; // 4, деление
$a = 8 % 2; // 0, деление по модулю
$a = 8 ** 2; // 64, возведение в степень
// dekrement //
$a = 12;
$b = --$a; // $b равно 11
echo "a = $a   b = $b";
// result : a=11 b=11 //

// postfix dekrement //
$a = 12;
$b = $a--; // $b равно 12
echo "a = $a   b = $b";
// result : a=11 b=12 //
// dla obyedeneniya strok isp tocka //
$a="Привет, ";
$b=" мир";
echo $a . " " . $b . "!";   // Привет мир!


// operacii sravneniya //
// logiceskiye operacii //
$a = (true && false);   // false
// аналогично
$a = (true and false);  // false
 
$b = (true || false); // true
// аналогично следующей операции
$b = (true or false); // true
 
$c = !true;           // false
$a = (true xor true);   //  false
$b = (false xor true);  //  true
$c = (false xor false); //  false

// porazradniye operacii //
// logiceskoye umnojenie //
$a = 4; //100
$b = 5; //101
echo $a & $b; // равно 4 - 100

// slojenie //
$a = 4; //100
$b = 5; //101
echo $a | $b; // равно 5 - 101

// prisvaivanie
