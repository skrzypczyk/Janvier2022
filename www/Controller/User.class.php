<?php

namespace App\Controller;

use App\Core\View;

class User{

	public function register(): void
	{

		//template => front
		
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




