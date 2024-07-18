<?php
class Library {
    const MAX_BOOKS = 1000;
    const LATE_FEE = 0.50;

    public static function calculateLateFee($daysLate) {
        return $daysLate * self::LATE_FEE;
    }

    public static function checkBookLimit($currentBooks) {
        if ($currentBooks <= self::MAX_BOOKS) {
            echo "Book limit check: ". $currentBooks. " Approved";
            return true;
        } else {
            echo "Book limit check: ". $currentBooks . " Disapproved";
            return false;
        }
    }
}

echo "Library <br>";
echo "Late fee for 5 days: " . Library::calculateLateFee(5) . "<br>";  
Library::checkBookLimit(1500)

?>