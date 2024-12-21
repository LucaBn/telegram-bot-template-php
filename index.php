<?php
$token = 'secret_token';
$website = 'https://api.telegram.org/bot'.$token;
$rawUpdate = file_get_contents('php://input');
$update = json_decode($rawUpdate, TRUE);
$message = $update['message']['text'];

switch($message) {
    case '/start':
    case '/start@YourBotName':
        sendMessage($update['message']['chat']['id'], "Hello, I am {bot_name}!");
        break;
    case '/test':
    case '/test@YourBotName':
        sendMessage($update['message']['chat']['id'], "This is the 'test' command!");
        break;
    default:
        break;
}

function sendMessage($id, $text) {
    $url = $GLOBALS['website']."/sendMessage?chat_id=$id&parse_mode=HTML&text=".urlencode($text);
    file_get_contents($url);
}

function sendPhoto($id, $photo_id) {
    $url = $GLOBALS['website']."/sendPhoto?chat_id=$id&photo=".$photo_id;
    file_get_contents($url);
}

function sendVideo($id, $video_id) {
    $url = $GLOBALS['website']."/sendVideo?chat_id=$id&video=".$video_id;
    file_get_contents($url);
}
