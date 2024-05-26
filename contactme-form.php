<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "vracarrosserie@gmail.com"; // Replace with your email address
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";
    
    mail($to, $subject, $message, $headers);
    
    echo "Thank you for your message! We will get back to you soon.";
}
?>
