<?php

if($_POST["submit"]) {
    $recipient="rcb.landscapers@gmail.com";
    $subject="Message for your website";
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
}
?>
