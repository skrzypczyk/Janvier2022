<?php

namespace App\Core;


abstract class DatabaseDriver
{

	abstract public function setId(Int $id);
	abstract public function getId();

	protected $pdo;


	public function __construct()
	{
		//Connexion avec la bdd
		try{
			$this->pdo = new \PDO("mysql:host=database;dbname=mvcphp;port=3306" ,"mvcphp_user" ,"mvcphp_pwd" );

			$this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    		$this->pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);

		}catch(Exception $e){
			die("Erreur SQL ".$e->getMessage());
		}
		
	}


	//Insert et Update
	public function save() :void
	{
	}

}