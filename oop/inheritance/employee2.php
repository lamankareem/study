<?php
class Employee {
    public function calculateSalary() {
    }
}

class Manager extends Employee {
    private $weekly;

    public function __construct($weekly) {
        $this->weekly = $weekly;
    }

    public function calculateSalary() {
        return 52 * $this->weekly;
    }
}

class Developer extends Employee {
    private $weekly2;

    public function __construct($weekly2) {
        $this->weekly2 = $weekly2;
    }

    public function calculateSalary() {
        return 52 * $this->weekly2;
    }
}


$manager = new Manager(600);
echo "Manager's yearly salary: " . $manager->calculateSalary() . "$ <br>";

$developer = new Developer(400);
echo "Developer's yearly salary: " . $developer->calculateSalary() . "$ <br>";
?>