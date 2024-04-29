<?php
error_reporting(-1);
//var_dump($_POST);
//var_dump($_GET);
$email = $_GET['email'];
//
$to      = 'chibo-k@yandex.ru';
$subject = 'the subject';
$message = 'Привет PRIVET';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
//if(mail("chibo-k@yandex.ru", '','Привет PRIVET')){
   // echo ('Письмо успешно отправлено!');

//}else{
  //  echo ('Письмо не отправлено! Ошибка');
//}



