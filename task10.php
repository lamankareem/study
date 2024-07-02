<?php
$people = array(
        "Laman" => array("Full Name" => "Laman Karimli", 
                    "Age" => "17",
                    "Student Status" => "Sophomore"),
        "Jamal" => array("Full Name" => "Jamal Karimli", 
                    "Age" => "18",
                    "Student Status" => "Sophomore"));
foreach ($people as $person => $data)
{
    echo "<h3>$person</h3>";
    foreach ($data as $key => $value)
    {
        echo "<li>$key : $value</li>";
    }
}
?>