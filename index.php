<?php
/**
 * User: Angelo
 * Date: 16/04/2017
 * Time: 19:46
 */
$botToken = "320851235:AAEHICWmJV8wLCtt5nOWsfVG9hUNnj88DEg";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);

$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];
#$telegramUsername = $update["message"]["from"]["username"];
#$message_id = $update["message"]["message_id"];
#$message_name = $update["message"]["chat"]["first_name"];

#Funzioni base
switch ($message){
    default:
        welcomeMessage($chatId);
        break;
}

function welcomeMessage($chatId){

}

function sendMessage($chatId, $message){
    $url = "$GLOBALS[website]/sendMessage?chat_id=$chatId&text=$message";
    file_get_contents($url);
}

?>
