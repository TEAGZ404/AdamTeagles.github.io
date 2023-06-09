<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Set up email content
$to = 'adamteagles01@gmail.com';  // Replace with your email address
$subject = 'New contact form submission';
$body = "Name: $name\nEmail: $email\nMessage: $message";

// Send the email
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$mail_sent = mail($to, $subject, $body, $headers);

// Check if the email was sent successfully
if ($mail_sent) {
    echo '<p>Thank you for your message. We will get back to you soon!</p>';
} else {
    echo '<p>Oops! Something went wrong. Please try again later.</p>';
}
?>
