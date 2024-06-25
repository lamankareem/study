<?php
// if//
$a = 4;
if($a>0){
    echo "Переменная a больше нуля";
}
echo "<br>конец выполнения программы";
?>
<?php
// else
$a = 4;
if($a > 0){
    echo "Переменная a больше нуля";
}
else{
    echo "Переменная a меньше нуля";
}
echo "<br>конец выполнения программы";
// elseif
$a = 5;
if($a>0){
    echo "Переменная a больше нуля";
}
elseif($a < 0){
    echo "Переменная a меньше нуля";
}
else{
    echo "Переменная a равна нулю";
}
// php and html //
<!DOCTYPE html>
<html>
<head>
<title>METANIT.COM</title>
<meta charset="utf-8" />
</head>
<body>
<?php 
$a = 5;
?>
 
<?php if ($a > 0) { ?>
<h2>Переменная a больше нуля</h2>
<?php } ?>
 
</body>
</html>
?>
