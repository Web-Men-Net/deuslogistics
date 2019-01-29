<?php

if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
	$phone = $_POST['company'];
	$subject = $_POST['website'];
    $message = $_POST['message'];

//send email
    mail("lslestercayabyab@gmail.com", "Message from" ."Name:" $name'\n', "Email:" $email '\n', "Phone:" $phone '\n', "Subject:" $subject '\n', "Message:" $message '\n');
}

?>