<?php
interface Messenger
{
    function send($message);
}
function sendMessage(Messenger $messenger, $text)
{
    $messenger->send($text);
}
 
class EmailMessenger implements Messenger 
{
    function send($message)
    {
        echo "Отправка сообщения на email: $message";
    }
}
$outlook = new EmailMessenger();
sendMessage($outlook, "Hello World");
?>