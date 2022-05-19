<?php

namespace App\Controller;

use App\Core\View;

class User{

	public function register(): void
	{

		//template => front

		$user = new User();
		$user->setFirstname("Yves");
		$user->setLastname("SKRZYPCZYK");
		$user->setEmail("y.skrzypczyk@gmail.com");
		$user->setPwd("Test1234");
		$user->save();

		
		$v = new View("Auth/Register", "Front");
		

	}


	public function edit(): void
	{
		echo "Afficher edit user";
	}




	public function list(): void
	{
		$v = new View("User/List", "Back");
	}

}




