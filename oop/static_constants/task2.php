<?php

class Account {
    const MIN_BALANCE = 50;
    const SERVICE_FEE = 10;

    public static function applyServiceFee($balance) {
        if ($balance < self::MIN_BALANCE) {
            $balance -= self::SERVICE_FEE;
        }
        return $balance;
    }

    public static function isBalanceSufficient($balance) {
        if ($balance >= self::MIN_BALANCE) {
            echo "Balance sufficient?: Yes<br>";
            return true;
        } else {
            echo "Balance sufficient?: No<br>";
            return false;
        }
    }
}

echo "Account<br>";
$balance1 = 40;
echo "Balance before service fee: $balance1 <br>";
$balance1 = Account::applyServiceFee($balance1);
echo "Balance after service fee: $balance1 <br>"; 
Account::isBalanceSufficient($balance1);  
$balance2 = 100;
echo "Balance before service fee: $balance2<br>"; 
$balance2 = Account::applyServiceFee($balance2);
echo "Balance after service fee: $balance2<br>";  
Account::isBalanceSufficient($balance2);  
?>
