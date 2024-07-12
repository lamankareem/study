<?php
class Data
{
    function print() { echo "Print from Data"; }
}
trait Printer
{
    function print() { echo "Print from Printer"; }
}
 
class Message extends Data
{
    use Printer;
}
$myMessage = new Message();
$myMessage->print();     // Print from Printer
?>