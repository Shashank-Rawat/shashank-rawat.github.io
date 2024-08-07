<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Your email address
    $to = "shashank.rawat28@gmail.com";  // Replace with your actual email address
    $email_subject = "New Contact Form Submission: " . $subject;
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

    // Message body
    $body = "Name: " . $name . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Subject: " . $subject . "\n";
    $body .= "Message: " . $message . "\n";

    // Send email
    if (mail($to, $email_subject, $body, $headers)) {
        echo "Email successfully sent to $to";
    } else {
        echo "Failed to send email";
    }
}
?>
