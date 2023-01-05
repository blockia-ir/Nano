<?php

require 'Nano.php';

$bot = new Nano('token', 'username');

$bot->chat('/upload', function() {
    $path = "test.jpg"; // path or url
    $options = [
        'reply' => true,
        'caption' => "this is image"
    ];
    return Nano::sendPhoto($path, $options);
    // sendDocument | sendVideo | sendSticker | sendAudio | sendVoice
});

$bot->run();
