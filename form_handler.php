<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$suject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'anubhawgupta664@gmail.com'
$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n".
"User Email: $visitor_email.\n".
"User Subject: $suject.\n".
"User Message: $message.\n";
$to = 'anubhawgupta664@gmail.com';

$headers = "From: $email_from \r\n";
$headers .= "Reply to: $visitor_email\r\n";


mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");




?>