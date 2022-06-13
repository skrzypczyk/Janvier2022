<?php

namespace App\Controller;

use App\Core\View;
use App\Model\User as UserModel;
use App\Core\Verificator;


class User{

	public function register(): void
	{

		//template => front

		$user = new UserModel();
		$registerForm = $user->registerForm();
		

		if( !empty($_POST) )
		{
			$verificator = new Verificator($registerForm, $_POST);

			$configFormErrors = $verificator->getMsg();

			if(empty($configFormErrors)){
				$user->setFirstname($_POST['firstname']);
				$user->setLastname($_POST['lastname']);
				$user->setEmail($_POST['email']);
				$user->setPwd($_POST['pwd']);
				$user->setAddress($_POST['address']);
				$user->save();
			}

		}




		
		
		$v = new View("Auth/Register", "Front");
		$v->assign("configForm", $registerForm);
		$v->assign("configFormErrors", $configFormErrors??[]);
		

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




