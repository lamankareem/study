<!DOCTYPE html>
<html>
<head>
<title>METANIT.COM</title>
<meta charset="utf-8" />
</head>
<body>
 
<?php
$num_1 = 11;
$num_2 = 35;
 
echo "num_1 = $num_1  num_2=$num_2";
?>
<?php
// Все числа в десятичной системе имеют значение 28
$num_10 = 28; // десятичное число
$num_2 = 0b11100; // двоичное число (28 в десятичной системе)
$num_8 = 034; // восьмеричное число (28 в десятичной)
$num_16 = 0x1C; // шестнадцатиричное число (28 в десятичной)
echo "num_10 = $num_10 <br>"; 
echo "num_2 = $num_2 <br>"; 
echo "num_8 = $num_8 <br>";  
echo "num_16 = $num_16";
?>
<?php
$a=10;
$b=5;
$result = "<br> $a+$b <br>";
echo $result;
$result = '$a+$b';
echo $result;
?>
<?php
$a = null;
echo "a = $a";
?>
<?php
$id = 123;
echo "<p>id = $id</p>";
$id = "jhveruuyeru";
echo "<p>id = $id</p>";
?>
<?php
$a = 12;
$b = ++$a; // $b равно 13
echo "a = $a   b = $b"
?>
<?php
$a="Привет, ";
$b=" мир";
echo $a . " " . $b . "!";   // Привет мир!
?>
<?php
$a = 5;
if($a>0){
    echo "Переменная a больше нуля";
}
elseif($a < 0){
    echo "Переменная a меньше нуля";
}
else{
    echo "Переменная a равна нулю";
}
?>
<?php
$a = 5; // alternative version of if/else
if($a > 0):
    echo "Переменная a больше нуля";
elseif($a < 0):
    echo "Переменная a меньше нуля";
else:
    echo "Переменная a равна нулю";
endif;
?>

<?php
/*
$a = 3; // odna konstruksiya
if($a==1)     echo "сложение";
elseif($a==2) echo "вычитание";
elseif($a==3) echo "умножение";
elseif($a==4) echo "деление";
?>
<?php
$a = 3; // s pomoshyu switch
switch($a)
{
    case 1: 
        echo "сложение";
        break;
    case 2: 
        echo "вычитание";
        break;
    case 3: 
        echo "умножение";
        break;
    default:
    case 4: 
        echo "деление";
        break;
endswitch
}
?>
<?php
$a = 2; // etot kod switch
switch($a)
{
    case 1: 
        $operation = "сложение";
        break;
    case 2: 
        $operation = "вычитание";
        break;
    default: 
        $operation = "действие по умолчанию";
        break;
}
echo $operation;
?>
<?php
$a = 2; // perepishem na match
$operation = match($a)
{
    1 => "сложение",
    2 => "вычитание",
    default => "действие по умолчанию",
};
echo $operation;
?>

<?php
$i = 0;
for (; $i < 10;)
{
    echo $i;
    $i += 2;
}
?>
</body>
</html>
*/
$i = 5;
for (; $i < 10; $i++)
{
    echo $i;
}
?>
<?php // for
for ($i = 1; $i < 10; $i++):
    echo "Квадрат числа $i равен " . $i * $i . "<br/>";
endfor;
?>
<?php
$counter = 1; // while
while($counter<10):
    echo $counter * $counter . "<br />";
    $counter++;
endwhile;
?>
<?php
$counter = 1; // do while , sperva vipolnayetsa blok cikla potom proverka uslovia
do
{
    echo $counter * $counter . "<br />";
    $counter++;
}
while($counter<10)
?>
<?php
for ($i = 1; $i < 10; $i++) //break
{
    $result = $i * $i;
    if($result>80)
    {
        break;
    }
    echo "Квадрат числа $i равен $result <br/>";
}
?>
<?php // continue
for ($i = 1; $i < 10; $i++)
{
    if($i==5)
    {
        continue;
    }
    echo "Квадрат числа $i равен " . $i * $i . "<br/>";
}
?>
<?php
$users = ["Tom", "Sam", "Bob", "Alice"]; // perebor massiva
$num = count($users);
for($i=0; $i < $num; $i++)
{
    echo "$users[$i] <br />";
}
?>
<?php // foreach yesli indexi v rucnuyu
$users = [1 => "Tom", 4 => "Sam", 5 => "Bob", 21 => "Alice"];
foreach($users as $element)
{
    echo "$element<br />";
}
?>
<?php //assorted massive
$countries = ["Germany" => "Berlin", "France" => "Paris", "Spain" => "Madrid"];
echo $countries["Spain"];   // Madrid
echo "<br />";
$countries["Spain"] = "Barcelona";
echo $countries["Spain"];   // Barcelona
?>
<?php // noviy element
$countries = ["Germany" => "Berlin", "France" => "Paris", "Spain" => "Madrid"];
$countries["Italy"] = "Rome";   // определяем новый элемент с ключом "Italy"
echo $countries["Italy"]; // Rome
?>
<?php
$words = ["red" => "красный", "blue" => "синий", "green" => "зеленый"]; //foreach perebor
 
foreach($words as $english => $russian)
{
    echo "$english : $russian<br />";
}
?>
<?php
$families = [["Tom", "Alice"], ["Bob", "Kate"]]; // tut 0 eto perviy spisok
print_r($families[0]);  // Array ( [0] => Tom [1] => Alice )
?>
<?php
$families = [["Tom", "Alice"], ["Bob", "Kate"]]; // v nacale spisok potom slovo
echo $families[0][0] . "<br />";  //Tom
echo $families[0][1] . "<br />";  //Alice
echo $families[1][0] . "<br />";  //Bob
echo $families[1][1];   //Kate
?>
<?php
$phones = array(
        "apple"=> array("iPhone 12", "iPhone X", "iPhone 12 Pro") , 
        "samsumg"=>array("Samsung Galaxy S20", "Samsung Galaxy S20 Ultra"),
        "nokia" => array("Nokia 8.3", "Nokia 3.4"));
foreach ($phones as $brand => $items)
{
    echo "<h3>$brand</h3>";
    echo "<ul>";
    foreach ($items as $key => $value)
    {
        echo "<li>$value</li>";
    }
    echo "</ul>";
}
?>

