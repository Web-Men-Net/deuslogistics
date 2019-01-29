<?php

if($_POST["submit"]) {
    $recipient="info@deuslogistics.ph";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
	$senderPhone=$_POST["senderNumber"];
	$subject=$_POST["Request"];
    $service=$_POST["serviceType"];
	$message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n Number: $senderPhone\n Service Type: $service\n  Message: $message";

    mail($recipient, $subject,  $mailBody, "From: $sender <$senderEmail>");
	header('Location: index.html');


	
	
}

?>