<?php

require "mail_function.php";

if(!empty($_POST))
{
	$email = trim($_POST["mail-trigger"]);
	$name = htmlspecialchars($_POST["name-trigger"]);
	$email = htmlspecialchars($_POST["mail-trigger"]);
	$tel = htmlspecialchars($_POST["phone-trigger"]);
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
		$subject = "Обратный звонок";
		$body = 'Клиент <b>' . $name . '</b> (<a href="mailto:' . $email . '" target="_blank">' . $email . '</a>, <i>' . $tel . '</i>) оставил заявку на обратный звонок';
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