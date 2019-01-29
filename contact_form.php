<?php

if($_POST["submit"]) {
    $recipient="info@deuslogistics.ph";
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
	$senderPhone=$_POST["phone"];
    $subject=$_POST["subject"];
	$message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n Number: $senderPhone\n  Message: $message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
	header('Location: contact.html');
	
			
}

?>