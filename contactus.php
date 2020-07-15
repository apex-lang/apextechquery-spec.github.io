<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $emailFrom = $_POST['email'];
    $mobile = $_POST['number'];
    $message = $_POST['message'];

    $mailTo = "vukstamenkovic9@zohomail.eu";
    $headers = "From: ".$emailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsent");
}
?>