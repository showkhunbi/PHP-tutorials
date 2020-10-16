<?php
if (isset($_POST["submit"])) {
    $name = trim($_POST["name"]);
    $subject = $_POST["subject"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $file = fopen("messages.txt", "a");
    fwrite($file, "New message from " . $name . " " . $email . "\n\n");
    fwrite($file, "Subject: " . $subject .  "\n");
    fwrite($file, $message . "\n\n\n");
    fclose($file);
    header("Location: contact.php?sucessfullyuploaded");
    $myMail = "maximusjshokes@gmail.com";
    $header = "From : " . $email;
    $message2 = "You have received a message from " . $name . "\n\n";
    mail($myMail, $subject, $message, $header);
}
