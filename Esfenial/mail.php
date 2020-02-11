<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$tovar = $_POST['user_tovar'];
$name = $_POST['user_name'];
$adres = $_POST['user_adres'];
$svyaz = $_POST['user_svyaz'];
$nomer = $_POST['user_nomer'];
$pochta = $_POST['user_dostavka'];
$kol = $_POST['user_kol'];


//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'Crazyfancy11@gmail.com'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'Crazyfancy11'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('Crazyfancy11@gmail.com'); // от кого будет уходить письмо?
$mail->addAddress('Bryhel11@gmail.com');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'ESFENIAL';
$mail->Body    = '' .$tovar. ' - название товара, заказал ' .$name. '<br>адрес и почта: ' .$adres. ' а также ссылка для связи' .$svyaz. ' номер телефона: ' .$nomer. ' способ доставки: ' .$pochta. ' единиц товара: ' .$kol;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}
?>