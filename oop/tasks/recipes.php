<?php
class Recipe {
    public $name;
    public $ingredients = [];
    public $instructions;


    public function __construct($name, $instructions) {
        $this->name = $name;
        $this->instructions = $instructions;
    }


    public function displayInfo() {
        echo "The name of the dish: " . $this->name . "<br>";
        echo "Ingredients: <br>";
        foreach ($this->ingredients as $ingredient) {
            echo "- " . $ingredient . "<br>";
        }
        echo "Instructions: " . $this->instructions . "<br>";
    }


    public function addIngredient($ingredient) {
        $this->ingredients[] = $ingredient;
    }
}

$recipe1 = new Recipe("Chocolate Cake", "Preheat oven to 175°C. Mix ingredients in a shaped bowl and bake for 30 minutes.");
$recipe1->addIngredient("Flour");
$recipe1->addIngredient("Sugar");
$recipe1->addIngredient("Cocoa");
$recipe1->addIngredient("Eggs");
$recipe1->addIngredient("Milk");
$recipe1->displayInfo();
?>