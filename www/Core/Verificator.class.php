<?php

namespace App\Core;

class Verificator
{
	private $msg = [];

	public function __construct($configForm, $data)
	{

		//Vérifier que l'on a autant de post ou get  que de inputs dans la config (Faille XSS)

		if( count($data) != count($configForm["inputs"])){
			$this->msg[]="Tentative de Hack";
		}


		foreach($configForm["inputs"] as $name=>$configInput){

			if(!empty($configInput["required"]) && empty($data[$name])){
				$this->msg[]="Le champs ".$name." est obligatoire";
			}

			if(!empty($configInput["min"]) && !self::checkMinLength($data[$name], $configInput["min"])){
				$this->msg[]=$configInput["error"];
			}

			if(!empty($configInput["min"]) && !self::checkMaxLength($data[$name], $configInput["max"])){
				$this->msg[]=$configInput["error"];
			}

			if($configInput["type"]=="email" && !empty($configInput["required"]) && !self::checkEmail($data[$name])){
				$this->msg[]=$configInput["error"];		
			}


			if(!empty($configInput["confirm"]) && !self::checkConfirm($data[$name], $data[$configInput["confirm"]]) ){
				$this->msg[]=$configInput["error"];		
			}
			else if($configInput["type"]=="password" && !empty($configInput["required"]) && !self::checkPassword($data[$name])){
				$this->msg[]=$configInput["error"];		
			}
		}

	}

	public function getMsg(): array
	{
		return $this->msg;
	}


	public static function checkMinLength(String $string, Int $min): bool
	{
		return strlen($string)>=$min;
	}


	public static function checkMaxLength(String $string, Int $max): bool
	{
		return strlen($string)<=$max;
	}

	public static function checkEmail(String $email): bool
	{
		return filter_var($email, FILTER_VALIDATE_EMAIL);
	}


	public static function checkPassword(String $pwd): bool
	{
		return strlen($pwd)>=8 && preg_match("/[a-z]/", $pwd)  && preg_match("/[A-Z]/", $pwd)  && preg_match("/[0-9]/", $pwd);
	}

	public static function checkConfirm(String $string, String $stringOrigin): bool
	{
		return $string == $stringOrigin;
	}

}