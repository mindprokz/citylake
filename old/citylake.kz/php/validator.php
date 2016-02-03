<?php

class Validator {

	public static function isValidEmail($email) {
		if(empty($email)) {
			return false;
		} else {
			$regex = "/^([a-zA-Z0-9])+([\.a-zA-Z0-9_-])*@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-]+)*\.([a-zA-Z]{2,6})$/";
			$string = preg_replace($regex, "", $email);
			return empty($string);
		}
	}

}