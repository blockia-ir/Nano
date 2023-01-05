<?php

require 'Nano.php';

$bot = new Nano('token', 'username');

$inline_keyboard = Nano::inline_keyboard('
[Yes|You selected ok] [No|You selected no]
');

$options = [
    'reply' => true,
    'parse_mode' => 'html',
    'reply_markup' => $inline_keyboard,
    'disable_web_page_preview' => true
];

$bot->start('please select', $options);

$bot-callback_query(function(){
    $message = Nano::message();
    $data = $message['data'];

    return Nano::answerCallbackQuery("$data");
});


$bot->run();
