<?php
abstract class Messenger
{
    protected $name;
    function __construct($name)
    { 
        $this->name = $name;
    }
    abstract function send($message);
    function close()
    {
        echo "Выход из мессенджера...";
    }
}
 
class EmailMessenger extends Messenger 
{
    function send($message)
    {
        echo "$this->name отправляет сообщение: $message<br>";
    }
}
$outlook = new EmailMessenger("Outlook");
$outlook->send("Hello PHP 8");
$outlook -> close();
?>