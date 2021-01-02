<?php

if(!isset($_POST['submit'])){
    // echo "Error; You need to submit the form";


$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

if(empty($name)||empty($visitor_email)||empty($message)){
    echo "All fields are mandatory";
    exit;
}

$email_from = 'akweongob@gmail.com';
$email_subject = 'New Client Message';
$email_body = 'You have received a new message from the user $name.Email: $visitor_email.Message: $message';

$to = 'akweongob@gmail.com';
$headers = 'From:$email_from\r\n';

mail($to,$email_subject,$email_body,$headers);
}
?>