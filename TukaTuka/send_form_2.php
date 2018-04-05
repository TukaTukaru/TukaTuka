<?php 
function show_form()
{
?>
 
<?
}
function complete_mail() {
require 'class.phpmailer.php';
 
$mail = new PHPMailer();
$mail->From = 'info@tuaktuka.ru'; // от кого, например электронный адрес вашего сайт
$mail->FromName = 'form'; // от кого, имя.
$mail->AddAddress('tukatukawork@mail.ru', 'Имя'); // кому? Ваша почта, Имя
$mail->IsHTML(true); // формат письма HTML
$mail->Subject = "Тема письма"; // тема письма
 
// если есть файл, то прикрепляем его к письму
 
if(isset($_FILES['img'])) {
    if($_FILES['img']['error'] == 0){
        $mail->AddAttachment($_FILES['img']['tmp_name'], $_FILES['img']['name']);
        }
    }
 
$mail->Body = $mess;
// отправляем наше письмо
$mail->Send();
?>