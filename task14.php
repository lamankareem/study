<?php

$words = ["b", "d", "c", "a", "e"];
asort($words, SORT_STRING);

foreach ($words as $word) {
    echo $word . "<br>";
}
?>