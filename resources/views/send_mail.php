<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to_email = "titozakisaputro.work@gmail.com"; 

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $subject = "New Contact Form Submission";
    $body = "Name: " . $name . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Message: " . $message;

    if (mail($to_email, $subject, $body)) {
        echo "Email successfully sent.";
    } else {
        echo "Email sending failed.";
    }
}
?>
