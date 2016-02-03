<?php

require "mail_function.php";

if(!empty($_POST))
{
	$email = trim($_POST["mail-choose"]);
	$name = htmlspecialchars($_POST["name-choose"]);
	$email = htmlspecialchars($_POST["mail-choose"]);
	$tel = htmlspecialchars($_POST["phone-choose"]);
	$error = null;
	if(empty($name)) {
		$error .= "Пожалуйста введите ваше имя.<br>";
	}

	if(!$email) {
		$error .= "Пожалуйста введите e-mail.<br>";
	}
	
	if(!$tel) {
		$error .= "Пожалуйста введите телефон.<br>";
	} 

	if(!$error) {
		$to = ["citylake@bikom.kz", "nikitin@mindpro.kz"];
		$subject = "Выбор квартиры";
		$body = 'Клиент <b>' . $name . '</b> (<a href="mailto:' . $email . '" target="_blank">' . $email . '</a>, <i>' . $tel . '</i>)  Оставил заявку на консультацию по квартирам ЖК «CITYLAKE»';
		$senderName = "no-reply";
		$senderEmail = "no-reply@citylake.kz";
		
		//$result = mail($to, $subject, $body);
		foreach ($to as $key => $value) {
			$result = send_mime_mail
				(
					$senderName, // имя отправителя
					$senderEmail, // email отправителя
					$name_to, // имя получателя
					$value, // email получателя
					"utf-8", // кодировка переданных данных
					"utf-8", // кодировка письма
					$subject, // тема письма
					$body, // текст письма
					$html = true, // письмо в виде html или обычного текста
					$reply_to = FALSE
				);
		}
		
		
		if($result){
			echo "OK";
		}
		
	} else {
		echo '<div class="notification_error">'.$error.'</div>';
	}
}