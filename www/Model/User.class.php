<?php

namespace App\Model;

use App\Core\DatabaseDriver;

class User extends DatabaseDriver
{
	private $id = null;
	private $firstname;
	private $lastname;
	private $email;
	private $pwd;
	private $status = 0;
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




}