<?php

namespace App\Core;


abstract class DatabaseDriver
{

	abstract public function setId(Int $id);
	abstract public function getId();

	protected $pdo;
	protected $table;


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

		$CalledClassExploded = explode("\\", get_called_class());
		$this->table = strtolower("esgi_".end($CalledClassExploded));
	}


	//Insert et Update
	public function save() :void
	{

		$objectVars = get_object_vars($this);
		$classVars = get_class_vars(get_class());
		$columns = array_diff_key($objectVars, $classVars);


		if(is_null($this->getId())){
			// INSERT INTO esgi_user (firstname,lastname,email,pwd,status) VALUES (:firstname,:lastname,:email,:pwd,:status) ;
			$sql = "INSERT INTO ".$this->table. " (".implode(",", array_keys($columns) ) .") VALUES (:".implode(",:", array_keys($columns) ) .") ;";
		}else{

			foreach($columns as $column=>$value){
				$sqlUpdate[] = $column."=:".$column;
			}

			$sql = "UPDATE ".$this->table. " SET  ".implode(",",$sqlUpdate)."  WHERE id=".$this->getId();
		}

		$queryPrepared = $this->pdo->prepare($sql);
		$queryPrepared->execute($columns);



	}

}



