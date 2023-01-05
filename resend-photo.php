<?php

require 'Nano.php';

$bot = new Nano('token', 'username');

// resend photo to user
$bot->photo(function(){
    $message = Nano::message();
    $photo = $message['photo'][0]['file_id'];

    return Nano::sendPhoto($photo);
});


$bot->run();
