<?php
  echo("This is an echo!");
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL); 
  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'esuc.ucla.webmaster@gmail.com';

  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

	$email_from = 'mailing_form.esuc@ucla.edu';

	$email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message".
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $visitor_email \r\n";

$mail_sent = @mail($receiving_email_address, $subject, $message, $headers);
echo($mail_sent ? "Mail sent" : "Mail failed");
?>
