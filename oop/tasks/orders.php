<?php
class Order {
    public $orderId;
    public $customerName;
    public $totalAmount; 
     
    public function __construct($orderId, $customerName, $totalAmount) {
        $this->orderId = $orderId;
        $this->customerName = $customerName;
        $this->totalAmount = $totalAmount;
    }
    public function displayInfo() {
        echo "The order ID: " . $this->orderId . "<br>";
        echo "The customer name: " . $this->customerName . "<br>";
        echo "The total amount: " . $this->totalAmount . " $" . "<br>";

    }
    public function applyDiscount($percentage) {
        $discount = $this -> totalAmount * ($percentage/100);
        $this -> totalAmount -= $discount;
        echo "A discount of $percentage % was applied. The total order amount is now: ". $this->totalAmount
        . " $ <br>";
    }
}
 
$order1 = new Order("72", "Laman Karimli", 100);
$order1-> displayInfo();
$order1 -> applyDiscount(20)
?>
