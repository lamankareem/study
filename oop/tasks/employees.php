<?php
class Employee {
    public $name;
    public $age;
    public $salary; 
     
    public function __construct($name, $position, $salary) {
        $this->name = $name;
        $this->position = $position;
        $this->salary = $salary;
    }
    public function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Position: " . $this->position . "<br>";
        echo "Salary: " . $this->salary . "<br>";

    }
}
 
$employee1 = new Employee("Alex", "Manager", 60000);
$employee1 -> displayInfo();
?>
