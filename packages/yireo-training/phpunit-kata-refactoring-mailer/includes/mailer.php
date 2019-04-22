<?php
class Mailer
{
    function sendMessage($message, $email, $subject) {
        $headers = "From: johndoe@example.com\r\n";
        $headers .= "To: $email\r\n";
        $headers .= "Reply-To: johndoe@example.com\r\n";
        $headers .= "CC: johndoe@example.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text; charset=UTF-8\r\n";

        mail($email, $subject, $message, $headers);
    }
}
