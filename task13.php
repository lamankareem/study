<?php
function product(...$numbers)
{
    $result = 1;
    foreach($numbers as $number) {
        $result *= $number;
    }
    echo "The product is: $result";
}
product(1,2,3,4);        
?>