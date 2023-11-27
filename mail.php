<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$surname = $_POST['surname'];
$name = $_POST['name'];
$patronymic = $_POST['patronymic'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$mail->isSMTP(); 
$mail->Host = 'smtp.mail.ru'; 
$mail->SMTPAuth = true; 
$mail->Username = 'aliyakat.jais@gmail.com'; 
$mail->Password = 'turkataft4000'; 
$mail->Port = 465; 

$mail->setFrom('aliyakat.jais@gmail.com'); 
$mail->addAddress('alinasivko3@gmail.com'); 
$mail->isHTML(true); 

$mail->Subject = 'Заявка с сайта';
$mail->Body    = '' .$surname . '' .$name . '' .$patronymic . ' оставил заявку, его телефон ' .$phone. '<br>Почта этого пользователя: ' .$email;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}
?>