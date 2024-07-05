<?php
class Course {
    public $title;
    public $instructor;
    public $duration; 
     
    public function __construct($title, $instructor, $duration) {
        $this->title = $title;
        $this->instructor = $instructor;
        $this->duration = $duration;
    }
    public function displayInfo() {
        echo "Title: " . $this->title . "<br>";
        echo "Instructor: " . $this->instructor . "<br>";
        echo "Duration: " . $this->duration . " hours" . "<br>";

    }
    public function extendDuration($hours) {
        $this->duration+=$hours;
        echo "Course duration extended by $hours hours. New duration: ". $this->duration
        . " hours <br>";
    }
}
 
$course1 = new Course("Math", "Javier Valencia", 3);
$course1-> displayInfo();
$course1 -> extendDuration(5)
?>
