<?php
$name =$_Post['name'];
$visitor_email =$_Post['email'];
$subject =$_Post['subject'];
$message =$_Post['message'];




$email_from = 'ist.haldia@gmail.org';
$email_subject = 'New Form Submission';


$email_body = "User Name: $name. \n"
                "User Email: $visitor_email.\n"
                "Subject: $subject.\n".
                "User Message: $message .\n";


$to = 'munsirajesh304@gmail.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to, $email_subject, $email_body, $headers);
header ("Location: contact.html");



?>
