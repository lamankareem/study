<?php
class Trip {
    public $destination;
    public $startDate;
    public $endDate; 
     
    public function __construct($destination, $startDate, $endDate) {
        $this->destination = $destination;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }
    public function displayInfo() {
        echo "The trip destination: " . $this->destination . "<br>";
        echo "The Start date: " . $this->startDate . " November.". "<br>";
        echo "The End date: " . $this->endDate  . " November."."<br>";

    }
    public function extendTrip($days) {
        $this-> endDate +=$days;
        echo "The trip was extended by $days days. New end date: ". $this->endDate
        . " November.". "<br>";
    }
}
 
$trip1 = new Trip("Los Angeles", 10, 17);
$trip1-> displayInfo();
$trip1 -> extendTrip(5)
?>
