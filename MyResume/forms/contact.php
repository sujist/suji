<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $to = "tharmalingamsujana@gmail.com"; // Replace with your email address
  $headers = "From: $email \r\n";
  $headers .= "Reply-To: $email \r\n";

  $mailBody = "Name: $name\nEmail: $email\n\n$message";

  if (mail($to, $subject, $mailBody, $headers)) {
    echo "success";
  } else {
    echo "error";
  }
}
?>
