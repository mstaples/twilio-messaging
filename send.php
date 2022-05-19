<?php

require_once 'vendor/autoload.php';

use Twilio\Rest\Client;

$sid = getenv("TWILIO_ACCOUNT_SID");
$token = getenv("TWILIO_AUTH_TOKEN");
$from = getenv("TWILIO_PHONE_NUMBER");
$to = getenv("PERSONAL_PHONE_NUMBER");

$twilio = new Client($sid, $token);

$message = $twilio->messages
    ->create("+$to", // to
        ["from" => "+$from", "body" => "Hi there"]
    );

print($message->sid);
