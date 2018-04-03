<?php
/* Осуществляем проверку вводимых данных и их защиту от враждебных 
скриптов */
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
$img = $_POST["img"];
/* Устанавливаем e-mail адресата */
$myemail = "rustamelutingol@gmail.com,ponomarevgeorge@yandex.ru,tukatukawork@mail.ru";
/* Создаем новую переменную, присвоив ей значение */
$message_to_myemail = "Новое объявление: 
Описание продукта: $descripiton 
Я хочу $choice
Адрес фактический: $address
Название организации: $org_name
Ф.И.О представителя: $FIO
Должность: $prof
Контактный телефон: $contact
Цена продукции: $price (рублей/кг)
Объем продукции: $volume
E-mail представителя: $email
Фото: $img"
/* Отправляем сообщение, используя mail() функцию */
mail($myemail, "Объявление", $message_to_myemail, "From: info@tukatuka.ru \r\n");
?>
<p>Ваше сообщение было успешно отправлено!</p>
<p>На <a href="index.php">Главную >>></a></p>