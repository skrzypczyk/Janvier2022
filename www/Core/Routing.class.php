<?php

namespace App\Core;

class Routing{

	private $routeFile = "routes.yml";
	private $routes = [];
	private $uri;
	private $controller;
	private $action;


	public function __construct()
	{
		$this->routes = yaml_parse_file($this->routeFile);
	}


	public function setAction(string $uri): array
	{

	}

	public function setUri(string $controller, string $action): string
	{

	}

	public function run(): void
	{

	}

}