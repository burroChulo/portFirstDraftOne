<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->SMTPDebug = SMTP::DEBUG_SERVER;


$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "fakeanime.fan69@gmail.com";
$mail->Password = "rwqs dodd rvea hzru";

$mail->setFrom($email, $name);
$mail->addAddress("ramonparachico4@gmail.com", "Ramon");

$mail->Subject = $subject ;
$mail->Body = "From: $email \n\n$message";

$mail->send();

header("Location: homePage.html");
