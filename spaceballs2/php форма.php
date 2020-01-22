 <?php
	$fio = $_POST['fio'];
	$adres = $_POST['adres'];
	$fio = htmlspecialchars($fio);
	$adres = htmlspecialchars($adres); 
	$fio = urldecode($fio);
	$adres = urldecode($adres);
	$fio = trim($fio);
	$adres = trim($adres);

	$svyaz = $_POST['svyaz'];
	$nomer = $_POST['nomer'];
	$svyaz = htmlspecialchars($svyaz);
	$nomer = htmlspecialchars($nomer);
	$svyaz = urldecode($svyaz);
	$nomer = urldecode($nomer);
	$svyaz = trim($svyaz);
	$nomer = trim($nomer);

	//echo $fio;
	//echo "<br>";

	//echo $svyaz;
	//echo "<br>";
	//echo $email;
	if (gmail("Bryhel11@gmail.com", "Заявка с сайта", "ФИО:".$fio.". Адрес: ".$adres ,  "Связь:".$svyaz.", "Номер:".$nomer.", "From: Crazyfancy11@gmail.com \r\n"))
	 {     echo "сообщение успешно отправлено";
	} else {
	    echo "при отправке сообщения возникли ошибки";
	}?>
