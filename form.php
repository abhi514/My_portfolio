<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    $to = "abhinavramesh2529@gmail.com"; // Replace with your email address
    $headers = "From: $email";
    
    $mailBody = "Name: $name\nEmail: $email\nPhone: $phone\nSubject: $subject\nMessage: $message";
    
    if (mail($to, $subject, $mailBody, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message sending failed.";
    }
}
?>
