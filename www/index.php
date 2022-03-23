<?php

//récupérer ce que l'on a dans l'url
//exemple http://localhost/ajouter-utilisateur
//je dois récupérer "/ajout-utilisateur"
//attention j'ai http://localhost/modifier-utilisateur?id=4
//on doit récuperer : /modifier-utilisateur
$request = $_SERVER['REQUEST_URI'];
$requestExploded = explode("?", $request);
$uri = strtolower($requestExploded[0]); // /ajout-utilisateur

//A quoi correspond ajout-utilisateur
//un tableau association qui aura la clé ajout-utilisateur
// et contiendra le nom d'une classe et la methode à appeler
// exemple : ajout-utilisateur ->   class User() et method add()

if(!file_exists("routes.yml")){
	die("Fichier routes.yml introuvable");
}
$routes = yaml_parse_file("routes.yml");


if( empty($routes[$uri]) 
	|| empty($routes[$uri]["controller"])  
	|| empty($routes[$uri]["action"])){
	die("Page 404");
}

$controller = $routes[$uri]["controller"];//Main
$action = $routes[$uri]["action"]; //index

//Faites une instance du controller et appelez la bonne action
//au final on doit avoir le echo qui se lance


if(!file_exists("Controller/".$controller.".class.php")){
	die("Le fichier Controller/".$controller.".class.php nexiste pas");
}
include "Controller/".$controller.".class.php";



//Instance dynamique
if(!class_exists($controller)){
	die("Le controller ".$controller." n'existe pas");
}
$object = new $controller();


if(!method_exists($object, $action)){
	die("L'action ".$action." n'existe pas");
}
$object->$action();






