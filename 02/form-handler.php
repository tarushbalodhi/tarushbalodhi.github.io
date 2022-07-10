<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$mesasge = $_POST['message'];

$email_from = 'website enquiry';
$email_sub = 'new form submission';
$email_body = "user name: $name.\n".
                "user email: $visitor_email.\n".
                "subject : $subject.\n".
                "user message : $message.\n";
        
$to = 'harringtonsteve61@gmail.com';

$headers = "from : $email_from \r\n";
$headers .= "reply-to : $visitor_email \r\n";
mail($to, $email_sub, $email_body,$headers);
header("location : contact.html");

?>