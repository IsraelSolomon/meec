<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $senderPhone = $_POST['phone'];
    $message = $_POST['message'];

    $mailTo = "keremellla@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $senderPhone, $txt,  $headers);
    header("Location: index.html?mailsent");
}
?>
