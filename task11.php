<?php
function sum(...$numbers)
{
    $result = 0;
    foreach($numbers as $number) {
        $result += $number;
    }
    echo "The sum is: $result";
}
sum(1, 2);
?>