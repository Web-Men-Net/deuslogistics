<?php

if($_POST["submit"]) {
    $recipient="info@deuslogistics.ph";
    $subject="Requested Quote";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
	$senderNumber=$_POST["senderNumber"];
    $serviceType=$_POST["serviceType"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n Number: $senderNumber\n Service Type: $serviceType";
	
	 mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

	header('Location: index.html');
	
			

}

?>

