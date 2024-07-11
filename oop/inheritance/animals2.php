<?php
class Animal {
    protected $sound;

    public function __construct($sound) {
        $this->sound = $sound;
    }
}
class Lion extends Animal {

    public function __construct($sound) {
        parent::__construct($sound);
    }

    public function makeSound() {
        echo "Lion's sound: " . $this->sound;
    }
}


class Elephant extends Animal {

    public function __construct($sound) {
        parent::__construct($sound);
    }

    public function makeSound() {
        echo "<br>Elephant's sound: " . $this->sound;
    }
}

class Monkey extends Animal {

    public function __construct($sound) {
        parent::__construct($sound);
    }

    public function makeSound() {
        echo "<br>Monkey's sound: " . $this->sound;
    }
}


$lion = new Lion("Rawr");
$lion->makeSound();

$elephant = new Elephant("Squeak");
$elephant->makeSound();

$monkey = new Monkey("Hoo Haa");
$monkey->makeSound();
?>