<?php
$email = $_POST['email'];

$email = htmlspecialchars($email);
$email = urldecode($email);
$email = trim($email);
if (mail("rustamelutingol@gmail.com,ponomarevgeorge@yandex.ru,tukatukawork@mail.ru", "Подпись на рассылку", ". E-mail: ".$email ,"From: info@tukatuka.ru \r\n"))
 { echo "
<html>
  <head>
   <meta http-equiv='Refresh' content='0; URL=".$_SERVER['HTTP_REFERER']."'>
  </head>
</html>";
} else { 
    echo "при отправке сообщения возникли ошибки";
}?>
