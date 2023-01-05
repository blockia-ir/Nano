<?php

require 'Nano.php';

$bot = new Nano('token', 'username');

// send to admin or group
$bot->photo(function(){
    $message = Nano::message();
    $name = $message['from']['first_name'];
    $last = $message['from']['first_name'];
    $userid = $message['from']['id'];
    $photo = $message['photo'][0]['file_id'];
    $username = $message['from']['username'];
    $caption = "
File Uploaded by $name $last

username : @$username
userid : $userid
    ";
    $options = [
        'chat_id' => -1001387001958,
        'caption' => $caption
    ];
    return Nano::sendPhoto($photo, $options);
});


$bot->run();
