<?php
    $to = "praveenkumarsravi@gmail.com";
    $subject = "Message from your portfolio website";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/plain\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "<p>Thank you for your message! We will get back to you soon.</p>";
    } else {
        echo "<p>Sorry, there was an error sending your message. Please try again later.</p>";
    }
?>
