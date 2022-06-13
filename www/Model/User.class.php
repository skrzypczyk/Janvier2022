<?php

namespace App\Model;

use App\Core\DatabaseDriver;

class User extends DatabaseDriver
{
	private $id = null;
	protected $firstname;
	protected $lastname;
	protected $email;
    protected $pwd;
    protected $address;
	protected $status = 0;
	private $date_created;
	private $date_updated;


	public function __construct()
	{
		parent::__construct();
	}


    /**
     * @return null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param null $id
     */
    //abstract public function setId($id);
    public function setId(Int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname(String $firstname): void
    {
        $this->firstname = ucwords(mb_strtolower(trim($firstname)));
    }

     /**
     * @return mixed
     */
    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname(String $lastname): void
    {
        $this->lastname = mb_strtoupper(trim($lastname));
    }




     /**
     * @return mixed
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress(String $address): void
    {
        $this->address = mb_strtolower(trim($address));
    }

    /**
     * @return mixed
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail(String $email): void
    {
        $this->email = mb_strtolower(trim($email));
    }

    /**
     * @return mixed
     */
    public function getPwd(): ?string
    {
        return $this->pwd;
    }

    /**
     * @param mixed $pwd
     */
    public function setPwd(String $pwd): void
    {
        $this->pwd = password_hash($pwd, PASSWORD_DEFAULT);

    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getDateCreated()
    {
        return $this->date_created;
    }

    /**
     * @return mixed
     */
    public function getDateUpdated()
    {
        return $this->date_updated;
    }



    public function registerForm(){

        return [
                "config" => [
                                "method"=>"POST",
                                "class"=>"form-register",
                                "reset"=>"RAZ",
                                "submit"=>"Nous rejoindre"
                            ],
                "inputs"=> [
                    "firstname"=>[
                                    "type"=>"text",
                                    "placeholder"=>"Votre prénom",
                                    "class"=>"input-text",
                                    "min"=>2,
                                    "max"=>25,
                                    "required"=>true,
                                    "error"=>"Votre prénom doit faire entre 2 et 25 caractères"
                                ],

                    "lastname"=>[
                                    "type"=>"text",
                                    "placeholder"=>"Votre nom",
                                    "class"=>"input-text",
                                    "min"=>2,
                                    "max"=>75,
                                    "required"=>true,
                                    "error"=>"Votre nom doit faire entre 2 et 75 caractères"
                                ],

                    "address"=>[
                                    "type"=>"text",
                                    "placeholder"=>"Votre adresse",
                                    "class"=>"input-text",
                                    "min"=>2,
                                    "max"=>255,
                                    "error"=>"Votre adresse doit faire plus de 2 caractères"
                                ],
                    "email"=>[
                                    "type"=>"email",
                                    "placeholder"=>"Votre email",
                                    "class"=>"input-email",
                                    "required"=>true,
                                    "error"=>"Votre email est incorrect"
                                ],
                    "pwd"=>[
                                    "type"=>"password",
                                    "placeholder"=>"Votre mot de passe",
                                    "class"=>"input-pwd",
                                    "required"=>true,
                                    "error"=>"Votre mot de passe doit faire plus de 8 caractères avec une minuscule une majuscule et un chiffre"
                                ],
                    "pwdconfirm"=>[
                                    "type"=>"password",
                                    "placeholder"=>"Confirmation",
                                    "class"=>"input-pwd",
                                    "required"=>true,
                                    "confirm"=>"pwd",
                                    "error"=>"Votre mot de passe de confirmation ne correspond pas"
                                ],

                ]
            ];

    }





}