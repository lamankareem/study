<?php
class Vehicle {
    public $speed;
    public $color;

    public function __construct($speed, $color) {
        $this->speed = $speed;
        $this->color = $color;
    }
}
class Bike extends Vehicle {

    public function __construct($speed, $color) {
        parent::__construct($speed, $color);
    }

    public function displayInfo() {
        echo "Bike <br> Speed: " . $this->speed . " <br> Color: " . $this->color ;
    }
}


class Airplane extends Vehicle {

    public function __construct($speed, $color) {
        parent::__construct($speed, $color);
    }

    public function displayInfo() {
        echo "<br>Airplane <br> Speed: " . $this->speed . "<br> Color: " . $this->color;
    }
}

class Car extends Vehicle {

    public function __construct($speed, $color) {
        parent::__construct($speed, $color);
    }

    public function displayInfo() {
        echo "<br> Car <br> Speed: " . $this->speed . "<br> Color: " . $this->color;
    }
}


$bike = new Bike(15, "Green");
$bike->displayInfo();

$airplane = new Airplane(600, "White");
$airplane->displayInfo();

$car = new Car(70, "Black");
$car->displayInfo();
?>