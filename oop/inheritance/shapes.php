<?php
class Shape {
    public function calculateArea() {
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return 3.14 * $this->radius * $this->radius;
    }
}

class Square extends Shape {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function calculateArea() {
        return $this->side * $this->side;
    }
}

class Triangle extends Shape {
    private $base;
    private $height;

    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    public function calculateArea() {
        return 0.5 * $this->base * $this->height;
    }
}


$circle = new Circle(5);
echo "Circle Area: " . $circle->calculateArea() . "<br>";

$square = new Square(4);
echo "Square Area: " . $square->calculateArea() . "<br>";

$triangle = new Triangle(3, 6);
echo "Triangle Area: " . $triangle->calculateArea() . "<br>";
?>