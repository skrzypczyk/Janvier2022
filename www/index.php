<?php

namespace App;

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

require "Core/Routing.class.php";
$routing = new Core\Routing();
$routing->setAction($uri);
$routing->run();


echo $routing->getUri("Admin", "dashboard");


