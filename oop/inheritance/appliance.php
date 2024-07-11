<?php
class Appliance {
    public $brand;
    public $power;

    public function __construct($brand, $power) {
        $this->brand = $brand;
        $this->power = $power;
    }
    public function turnOn() {
        echo "<br>The appliance is turned on.<br>";
    }

    public function turnOff() {
        echo "<br>The appliance is turned off.<br>";
    }
}
class WashingMachine extends Appliance {

    public function __construct($brand, $power) {
        parent::__construct($brand, $power);

    }


    public function displayInfo() {
        echo "Washing Machine <br> Brand: " . $this->brand . " <br> Power: " . $this->power;
    }
}


class Refrigerator extends Appliance {

    public function __construct($brand, $power) {
        parent::__construct($brand, $power);
    }

    public function displayInfo() {
        echo "<br>Refrigerator <br> Brand: " . $this->brand . "<br> Power: " . $this->power;
    }
}

class Microwave extends Appliance {

    public function __construct($brand, $power) {
        parent::__construct($brand, $power);
    }

    public function displayInfo() {
        echo "<br> Microwave <br> Brand: " . $this->brand . "<br> Power: " . $this->power;
    }
}


$washing = new WashingMachine("Samsung", "800 W");
$washing->displayInfo();
$washing->turnOff();

$fridge = new Refrigerator("LG", "500 W");
$fridge->displayInfo();
$fridge->turnOn();

$microwave = new Microwave("Maytag", "700 W");
$microwave->displayInfo();
$microwave->turnOn();
?>