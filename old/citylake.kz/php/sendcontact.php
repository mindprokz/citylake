<?php

require "mail_function.php";
require "validator.php";

if(!empty($_POST))
{
	$email = trim($_POST["email-contact"]);
	$name = htmlspecialchars($_POST["name-contact"]);
	$email = htmlspecialchars($_POST["email-contact"]);
	$text = htmlspecialchars($_POST["text"]);
	$error = null;
	if(empty($name)) {
		$error .= "Пожалуйста введите ваше имя.<br>";
	}

	if(!$email) {
		$error .= "Пожалуйста введите e-mail.<br>";
	}
	
	$validator = new Validator();

	if($email && !$validator::isValidEmail($email)) {
		$error .= "Введите корректный e-mail.<br>";
	}

	if(!$error) {
		$to = "sales@citylake.kz";
		$subject = "Оставшиеся вопросы";
		$body = 'Клиент <b>' . $name . '</b> (<a href="mailto:' . $email . '" target="_blank">' . $email.'")  ' .$text;
		$senderName = "no-reply";
		$senderEmail = "no-reply@citylake.kz";
		
		//$result = mail($to, $subject, $body);
		$result = send_mime_mail
					(
						$senderName, // имя отправителя
						$senderEmail, // email отправителя
						$name_to, // имя получателя
						$to, // email получателя
						"utf-8", // кодировка переданных данных
						"utf-8", // кодировка письма
						$subject, // тема письма
						$body, // текст письма
						$html = true, // письмо в виде html или обычного текста
						$reply_to = FALSE
					);
		
		if($result){
			echo "OK";
		}
		
	} else {
		echo '<div class="notification_error">'.$error.'</div>';
	}
}