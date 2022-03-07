<?php

use Snipworks\Smtp\Email;

$mail = new Email('smtp.example.com', 587);
$mail->setProtocol(Email::TLS);
$mail->setLogin('sender@example.com', 'password');
$mail->addTo('recipient@example.com', 'Example Receiver');
$mail->setFrom('example@example.com', 'Example Sender');
$mail->setSubject('Example subject');
$mail->setHtmlMessage('<b>Example message</b>...');

if($mail->send()){
    echo 'Success!';
} else {
    echo 'An error occurred.';
}
