<?php

namespace App\Controller;

use App\Core\View;

class Admin{

	public function dashboard(): void
	{
		$v = new View("Dashboard/Home");
	}
}