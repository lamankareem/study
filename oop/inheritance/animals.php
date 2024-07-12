<?php
class Animal {
    protected $sound;

    public function __construct($sound) {
        $this->sound = $sound;
    }
}
class Dog extends Animal {

    public function __construct($sound) {
        parent::__construct($sound);
    }

    public function makeSound() {
        echo "Dog's sound: " . $this->sound;
    }
}


class Cat extends Animal {

    public function __construct($sound) {
        parent::__construct($sound);
    }

    public function makeSound() {
        echo "<br>Cat's sound: " . $this->sound;
    }
}

class Cow extends Animal {

    public function __construct($sound) {
        parent::__construct($sound);
    }

    public function makeSound() {
        echo "<br>Cow's sound: " . $this->sound;
    }
}


$dog = new Dog("Woof");
$dog->makeSound();

$cat = new Cat("Meow");
$cat->makeSound();

$cow = new Cow("Moo");
$cow->makeSound();
?>