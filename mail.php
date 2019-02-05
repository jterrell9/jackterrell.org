<?php

$message = new stdClass();
$message->sender = htmlspecialchars($_POST['email']);
$message->subject = htmlspecialchars($_POST['subject']);
$message->body = htmlspecialchars($_POST['body']);

$jsonMessage = json_encode($message);

$jsonMessage = wordwrap($jsonMessage, 70);

$mailed = mail("jterrell@jackterrell.org","CONTACT FROM JACKTERRELL.ORG", $jsonMessage);

if(!$mailed) alert("mail sending failed");

echo

header("Location: https://www.jackterrell.org");
exit();

?>
