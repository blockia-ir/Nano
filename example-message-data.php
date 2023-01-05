<?php

require 'Nano.php';

$bot = new Nano('token', 'username');

$bot->photo(function(){ // text | video | document | and ...
    $json = json_encode(Nano::message(), JSON_PRETTY_PRINT);
    return Nano::sendMessage("$json");
});


$bot->run();
