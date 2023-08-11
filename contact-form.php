<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['message'];



$email_from='stdenisknightofthealtar1@gmail.com';


$email_subject="new form submission";

$email_body="user name: $name.\n".
"user Email:$visitor_email".\n"
"user message:$message".n\"

$to="gabrielemmanuelmary12345@gmail.com";
$headers ="from:$email_form\r\n"

$headers=.reply-TO:$visitor_email \r\n"
mail$($to,$email_subject,$email_body,$headers);

header("location:contact us.html");

?>