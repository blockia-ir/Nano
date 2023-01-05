<?php

require 'Nano.php';

$bot = new Nano('token', 'username');

// send 1
$bot-chat('/start', 'Hello Nano');

// send 2
$bot->chat('/test|test', function() {
    $text = "
<code>this is test text</code>
    ";
    $options = [
        'reply' => true,
        'parse_mode' => 'html'
    ];
    return Nano::sendMessage($text, $options);
});


$bot->run();
