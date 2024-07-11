<?php
class Person {
    private $name;
    protected $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

class Employee extends Person {
    public $position;

    public function __construct($name, $age, $position) {
        parent::__construct($name, $age);
        $this->position = $position;
    }

    public function getDetails() {
        echo "Employee Information:<br>";
        echo "Name: $this->name<br>";
        echo "Age: $this->age<br>";
        echo "Position: $this->position";
    }
}

$employee = new Employee("Laman Karimli", 18, "Front Desk");
$employee->getDetails();
?>