<?php


class User{
	private $id;
	private $password;
	private $email;
	private $firstname;
	private $lastname;


	public function __construct(String $firstname = null,String  $lastname = null,String  $email = null,String  $password = null )
	{
		$this->setFirstname($firstname);
		$this->setLastname($lastname);
		$this->setEmail($email);
		$this->setPassword($password);
	}

	//SETTERS
	public function setFirstname(string $firstname): void
	{
		$this->firstname = ucwords(mb_strtolower(trim($firstname)));
	}

	public function setLastname(string $lastname): void
	{
		$this->lastname = mb_strtoupper(trim($lastname));
	}

	public function setEmail(string $email): void
	{
		$this->email = mb_strtolower(trim($email));
	}

	public function setPassword(string $password): void
	{
		//MD5 surtout pas
		//SHA1 surtout pas
		$this->password = password_hash($password, PASSWORD_DEFAULT);
	}


	//GETTER
	public function getFirstname(): ?string
	{
		return $this->firstname;
	}

	public function getLastname(): ?string
	{
		return $this->lastname;
	}

}




//$user = new User();
//Afficher Bonjour Yves
//echo "Bonjour ".$user->getFirstname();



/*
$user->password = "Test1234";
$user->firstname = "YVEs";
$user->lastname = "SKRzyPCZyk ";
$user->email = "    Y.SKRzyPCZyk@gmail.com ";

$user->setFirstname("YVEs");
$user->setLastname("SKRzyPCZyk ");
$user->setEmail("    Y.SKRzyPCZyk@gmail.com ");
$user->setPassword("Test1234");
*/


$user = new User("YVEs" ,"SKRzyPCZyk " ,"    Y.SKRzyPCZyk@gmail.com " , "Test1234");
$user = new User();
echo "<pre>";
print_r($user);


/*
class UserStudent extends User{
	private $average;
	private $absence;
	private $class;
}

class UserTeacher extends User{
	private $skills;
	private $price;
}


$student = new UserStudent();
$student->absence =+ 1;
print_r($student);

*/





