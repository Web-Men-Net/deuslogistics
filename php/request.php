<?php

if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
	$phone = $_POST['senderNumber'];
	$service = $_POST['serviceType'];
    $message = $_POST['message'];

//send email
    mail("lslestercayabyab@gmail.com", "Message from" ."Name:" $name'\n', "Email:" $email '\n', "Phone:" $phone '\n', "Service:" $service '\n', "Message:" $message '\n');
}

?>