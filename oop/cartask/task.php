<?php

interface VehicleInterface {
    public function startEngine();
    public function stopEngine();
    public function drive();
}

abstract class Vehicle implements VehicleInterface {
    protected $name;
    protected $model;
    protected $year;

    public function startEngine() {
        echo "Engine started.<br>";
    }

    public function stopEngine() {
        echo "Engine stopped.<br>";
    }

    abstract public function drive();

    public function __construct($name, $model, $year) {
        $this->name = $name;
        $this->model = $model;
        $this->year = $year;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getModel() {
        return $this->model;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getYear() {
        return $this->year;
    }

    public function setYear($year) {
        $this->year = $year;
    }
}

trait FuelConsumption {
    abstract public function calculateFuelConsumption($distance);
}

class Car extends Vehicle {
    use FuelConsumption;

    protected $numberOfDoors;

    public function __construct($name, $model, $year, $numberOfDoors) {
        parent::__construct($name, $model, $year);
        $this->numberOfDoors = $numberOfDoors;
    }

    public function getNumberOfDoors() {
        return $this->numberOfDoors;
    }

    public function setNumberOfDoors($numberOfDoors) {
        $this->numberOfDoors = $numberOfDoors;
    }

    public function drive() {
        echo "Car is being driven.<br>";
    }

    public function calculateFuelConsumption($distance) {
        $fuelConsumed = $distance / (100 * 10);
        echo "Fuel consumption for distance $distance km: " . $fuelConsumed . " gallons.<br>";
    }

    public function displayDetails() {
        echo "Name: " . $this->getName() . "<br>";
        echo "Model: " . $this->getModel() . "<br>";
        echo "Year: " . $this->getYear() . "<br>";
        echo "Number of Doors: " . $this->getNumberOfDoors() . "<br>";
    }
}

class ElectricCar extends Car {
    public function calculateFuelConsumption($distance) {
        $energyConsumed = $distance / (100 * 30);
        echo "Energy consumption for distance $distance km: " . $energyConsumed . " kWh.<br>";
    }
}


echo "Normal Car:<br>";
$car = new Car("Toyota", "Camry", 2023, 4);
$car->startEngine();
$car->drive();
$car->calculateFuelConsumption(100);
$car->stopEngine();
$car->displayDetails();

echo "<br>";

echo "Electric Car:<br>";
$electricCar = new ElectricCar("Porsche", "Taycan", 2019, 4);
$electricCar->startEngine();
$electricCar->drive();
$electricCar->calculateFuelConsumption(200);
$electricCar->stopEngine();
$electricCar->displayDetails();

?>