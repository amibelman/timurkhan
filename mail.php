<?php
require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;

$mail->Charser = 'utf-8';
$name = $_POST['yourname'];
$tel = $_POST['yourtel'];
$email = $_POST['youremail'];
$comment = $_POST['comment'];


$mail->isSMPT();
$mail->Host = 'smtp.mail.ru';
$mail->SMPTAuth = true;
$mail->Username = 'bibaboa454_56@mail.ru';
$mail->Password = '1245byebyee';
$mail->SMTPSecure = 'ssl';
$mail->Port = 456;

$mail->setForm('bibaboa454_56@mail.ru');
$mail->addAddress('lena777631@gmail.com');
$mail->isHTML(true);

$mail->Subject = 'Заявка с сайта портфолио';
$mail->Body    = '' .$name . ' оставил заявку, его телефон ' .$tel ' его почта ' .$email ' его сообщение ' .$comment