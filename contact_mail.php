<?php
  $name = $_POST['contact_name'];
  $email = $_POST['contact_email'];
  $phone = $_POST['contact_number'];
  $message = $_POST['contact_message'];
  $formcontent="From: $name \n Message: $message";
  $recipient = "teamcharites@gmail.com";
  $subject = "Contact Form";
  $mailheader = "From: $email \r\n";
  mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
  echo "Thank you for contacting CharitesFinance!";
?>
