<?php

require 'Nano.php';

$bot = new Nano('token', 'username');

$bot->text(function(){
    $message = Nano::message();
    $name = $message['from']['first_name'];
    $last = $message['from']['last_name'];
    $userid = $message['from']['id'];
    $username = $message['from']['username'];
    $usertext = $message['text'];
    $text = "
Hello $name $last

username : @$username
userid : $userid

your text is :
$usertext
    ";
    return Nano::sendMessage($text);
});


$bot->run();
