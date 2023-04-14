<?php
use PHPMailer\PHPMailer\PHPMailer;

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$message = $_POST['message'];

require_once "Mailer/PHPMailer.php";
require_once "Mailer/SMTP.php";
require_once "Mailer/Exception.php";

$mail = new PHPMailer();

$mail->CharSet = "utf8";
$mail->isSMTP();
$mail->Host = "smtp.mail.ru";
$mail->SMTPAuth = true;
$mail->Username ="";
$mail->Password = "";
$mail->SMTPSecure = "ssl";
$mail->Port = 465;

$mail->setFrom('podradulkin@mail.ru', 'Mailer');
$mail->addAddress('dogola1062@pubpng.com', 'Joe User');

$mail->isHTML(true);
$mail->Subject = 'Письмо с тестового сайта';
$mail->Body = "Имя: ". $firstName.'<br>Фамилия: '. $lastName .'<br>Mail: ' . $email . '<br>Телефон: '. $tel . '<br>Сообщение: '. $message;
$mail->AltBody = 'Письмо без HTML';

$mail->send();
?>