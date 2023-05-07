<?php
$fam = $_POST['fam'];
$name = $_POST['name'];
$otch = $_POST['otch'];
$tel = $_POST['tel'];
$email = $_POST['email'];

$fio = htmlspecialchars($fio);
$name = htmlspecialchars($name);
$otch = htmlspecialchars($otch);
$tel = htmlspecialchars($tel);
$email = htmlspecialchars($email);

$fio = urldecode($fio);
$name = urldecode($name);
$otch = urldecode($otch);
$tel = urldecode($tel);
$email = urldecode($email);

$fio = trim($fio);
$name = trim($name);
$otch = trim($otch);
$tel = trim($tel);
$email = trim($email);

if (mail("aliyakat.jais@gmail.com", "Заявка с сайта", "Фамилия: ".$fam. "Имя: ".$name. "Отчество: ".$fio. "Телефон: ".$fio. "E-mail: ".$email , "From: $email \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>