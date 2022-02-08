<?php


require_once '../vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.mail.ru', 465, 'ssl'))
    ->setUsername('fox-race@mail.ru')
    ->setPassword('JX0HGuQqruNhucGBYJcG');

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Some Subject'))
    ->setFrom(['fox-race@mail.ru' => 'Nick'])
    ->setTo(['fox-race@mail.ru'])
    ->setBody('Here is the message itself');

// Send the message
$result = $mailer->send($message);
var_dump($result);