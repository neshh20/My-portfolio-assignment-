<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // You can perform further validation or processing of the form data here

  // Example: Sending an email with the form data
  $to = "ryannesh17@example.com";
  $subject = "New Contact Form Submission";
  $body = "Name: " . $name . "\n";
  $body .= "Email: " . $email . "\n";
  $body .= "Message: " . $message . "\n";

  if (mail($to, $subject, $body)) {
    echo "Thank you for your message. We will get back to you soon!";
  } else {
    echo "Sorry, there was an error sending your message. Please try again later.";
  }
}
?>
