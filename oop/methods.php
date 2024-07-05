<?php
class Person
{ 
    public $name, $age;
      
    function hello()
    {
        echo "Hello!<br>";
    }
}
$tom = new Person();
$tom->name = "Tom"; // установка свойства $name
$tom->age = 36; // установка свойства $age
$personName = $tom->name;    // получение значения свойства $name

echo "Имя пользователя: " . $personName . "<br>";
$tom->hello(); // вызов метода hello()
print_r($tom);
?>