<?php

require "mail_function.php";

if(!empty($_POST))
{
	$email = trim($_POST["mail-info"]);
	$name = htmlspecialchars($_POST["name-info"]);
	$email = htmlspecialchars($_POST["mail-info"]);
	$tel = htmlspecialchars($_POST["phone-info"]);
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
		$subject = "Узнать больше о ЖК «CITYLAKE»";
		$body = 'Клиент <b>' . $name . '</b> (<a href="mailto:' . $email . '" target="_blank">' . $email . '</a>, <i>' . $tel . '</i>)  хочет узнать больше о ЖК «CITYLAKE»';
		$senderName = "no-reply";
		$senderEmail = "no-reply@citylake.kz";
		
		//$result = mail($to, $subject, $body);
		foreach ($to as $key => $value) {
			$result = send_mime_mail
				(
					$senderName, // èìÿ îòïðàâèòåëÿ
					$senderEmail, // email îòïðàâèòåëÿ
					$name_to, // èìÿ ïîëó÷àòåëÿ
					$value, // email ïîëó÷àòåëÿ
					"utf-8", // êîäèðîâêà ïåðåäàííûõ äàííûõ
					"utf-8", // êîäèðîâêà ïèñüìà
					$subject, // òåìà ïèñüìà
					$body, // òåêñò ïèñüìà
					$html = true, // ïèñüìî â âèäå html èëè îáû÷íîãî òåêñòà
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