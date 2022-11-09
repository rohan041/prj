<?php
// Required if your environment does not handle autoloading
require  'SMS/vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'ACd9290ebb5878b407f56a9ca74a288fb7';
$token = '92d028f675d35036b21e642b4bf8401c';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+919374536586',
    [
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+19034379650',
        // the body of the text message you'd like to send
        'body' => 'Hey Jenny! Good luck on the bar exam!'
    ]
);