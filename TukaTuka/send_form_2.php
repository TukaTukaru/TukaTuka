<?php
require 'class.phpmailer.php';

$product = htmlspecialchars($_POST["product"]);
$descripiton = htmlspecialchars($_POST["description"]);
$choice = $_POST["choice"];
$address = htmlspecialchars($_POST["address"]);
$org_name = htmlspecialchars($_POST["org_name"]);
$FIO = htmlspecialchars($_POST["FIO"]);
$prof = htmlspecialchars($_POST["prof"]);
$contact = htmlspecialchars($_POST["contact"]);
$price = htmlspecialchars($_POST["price"]);
$volume = htmlspecialchars($_POST["volume"]);
$email = htmlspecialchars($_POST["email"]);

$mess = "Название продукта: $product <br>
Описание продукта: $descripiton <br>
Я хочу $choice <br>
Адрес фактический: $address <br>
Название организации: $org_name <br>
Ф.И.О представителя: $FIO <br>
Должность: $prof <br>
Контактный телефон: $contact <br>
Цена продукции: $price (рублей/кг) <br>
Объем продукции: $volume <br>
E-mail представителя: $email";


 
$mail = new PHPMailer();
$mail->From = 'info@tukatuka.ru'; // от кого, например электронный адрес вашего сайт
$mail->FromName = 'form'; // от кого, имя.
$mail->AddAddress('tukatukawork@mail.ru', 'Игорь'); // кому? Ваша почта, Имя
$mail->AddAddress('rustamelutingol@gmail.com', 'Рустам'); // кому? Ваша почта, Имя
$mail->AddAddress('ponomarevgeorge@yandex.ru', 'Георгий'); // кому? Ваша почта, Имя
$mail->IsHTML(true); // формат письма HTML
$mail->Subject = "Новое объявление"; // тема письма
 
// если есть файл, то прикрепляем его к письму
 
if(isset($_FILES['img'])) {
    if($_FILES['img']['error'] == 0){
        $mail->AddAttachment($_FILES['img']['tmp_name'], $_FILES['img']['name']);
        }
    }
    
$mail->Body = $mess;
// отправляем наше письмо
if ($mail->Send()) {
   echo "
<html>
  <head>
   <meta http-equiv='Refresh' content='0; URL=".$_SERVER['HTTP_REFERER']."'>
  </head>
</html>"; 
} else { 
    echo "при отправке сообщения возникли ошибки";
}?>