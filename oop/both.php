<?php
class Person
{ 
    public $name, $age;
    function displayInfo()
    {
        echo "Name: $this->name; Age: $this->age<br>";
    }
}
$tom = new Person();
$tom -> name = "Tom";
$tom -> age = 36;
 
$tomas = new Person();
$tomas -> name = "Tom";
$tomas -> age = 36;
 
if($tom == $tomas) echo "переменные tom и tomas равны<br>";
else echo "переменные tom и tomas НЕ равны<br>";
 
if($tom === $tomas) echo "переменные tom и tomas эквивалентны";
else echo "переменные tom и tomas НЕ эквивалентны";
?>