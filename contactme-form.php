<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Replace with your actual email address
    $to = "vracarrosserie@gmail.com";  
    $subject = "New Contact Us Form Submission from " . $name;
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent!";
    } else {
        echo "Failed to send message.";
    }
}
?>
