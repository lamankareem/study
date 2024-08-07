<?php
class Device {
    public $brand;
    public $model;

    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }
    public function turnOn() {
        echo "<br>The device is turned on.<br>";
    }

    public function turnOff() {
        echo "<br>The device is turned off.<br>";
    }
}
class Phone extends Device {

    public function __construct($brand, $model) {
        parent::__construct($brand, $model);

    }


    public function displayInfo() {
        echo "Phone <br> Brand: " . $this->brand . " <br> Model: " . $this->model ;
    }
}


class Laptop extends Device {

    public function __construct($brand, $model) {
        parent::__construct($brand, $model);
    }

    public function displayInfo() {
        echo "<br>Laptop <br> Brand: " . $this->brand . "<br> Model: " . $this->model;
    }
}

class Tablet extends Device {

    public function __construct($brand, $model) {
        parent::__construct($brand, $model);
    }

    public function displayInfo() {
        echo "<br> Tablet <br> Brand: " . $this->brand . "<br> Model: " . $this->model;
    }
}


$phone = new Phone("Apple", "Iphone 13");
$phone->displayInfo();
$phone->turnOn();

$laptop = new Laptop("Apple", "MacBook Pro");
$laptop->displayInfo();
$laptop->turnOff();

$tablet = new Tablet("Apple", "Ipad Pro");
$tablet->displayInfo();
$tablet->turnOn();
?>