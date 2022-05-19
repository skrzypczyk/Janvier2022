<?php
namespace App\Controller;

use App\Core\View;

class Main{

	public function index(): void
	{
		$v = new View("Page/Home", "Front");
	}

	public function login(): void
	{
		echo "Afficher login";
	}
}