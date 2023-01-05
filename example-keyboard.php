<?php

require 'Nano.php';

$bot = new Nano('token', 'username');

// Nano keyboard
$bot->chat('/ok', function(){
    $text = "Select a keyboard";
    $key = Nano::keyboard('
    [yes] [no]
    ');
    $options = [
        'reply' => true,
        'parse_mode' => 'html',
        'reply_markup' => $key
    ];
    return Nano::sendMessage($text, $options)
});

// send messages
$bot->chat('yes', 'Hello Nano');
$bot->chat('no', 'Bye Bye');


$bot->run();
