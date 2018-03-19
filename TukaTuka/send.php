<?php
$email = $_POST['email'];
$email = htmlspecialchars($email);
$email = urldecode($email);
$email = trim($email);
if (mail("rustamelutingol@gmail.com", "Подпись на рассылку", " E-mail: ".$email ,"From: info@tukatuka.ru \r\n"))
 {     echo "сообщение успешно отправлено"; 
} else { 
    echo "при отправке сообщения возникли ошибки";
}?>