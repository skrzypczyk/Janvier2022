<?php

namespace App\Core;

class Routing{

	private $routeFile = "routes.yml";
	private $routes = [];
	private $controller;
	private $action;


	public function __construct()
	{
		if(!file_exists($this->routeFile)){
			die("Fichier ".$this->routeFile." introuvable");
		}
		$this->routes = yaml_parse_file($this->routeFile);
	}


	public function setAction(string $uri): array
	{
		if( empty($this->routes[$uri]) 
			|| empty($this->routes[$uri]["controller"])  
			|| empty($this->routes[$uri]["action"])){
			die("Page 404");
		}
		$this->controller = $this->routes[$uri]["controller"];//Main
		$this->action = $this->routes[$uri]["action"]; //index

		return [$this->controller,$this->action];
	}

	public function getUri(string $controller, string $action): ?string
	{
		foreach ($this->routes as $uri => $routing) {
			if($routing["controller"] == $controller && 
				$routing["action"] == $action )
				return $uri;
		}
		return null;
	}

	public function run(): void
	{

		if(!file_exists("Controller/".$this->controller.".class.php")){
			die("Le fichier Controller/".$this->controller.".class.php nexiste pas");
		}
		include "Controller/".$this->controller.".class.php";

		$controller = "\\App\\Controller\\".$this->controller;

		if(!class_exists($controller)){
			die("Le controller ".$controller." n'existe pas");
		}
		$object = new $controller();

		$action = $this->action;

		if(!method_exists($object, $action)){
			die("L'action ".$action." n'existe pas");
		}
		$object->$action();
	}

}