<?php

/*
	Maison : toit, porte, murs, fenetre, fondation

	Plan d'une maison = une class
	Les éléments d'une maison = Attributs, Propriétés
*/

//PascalCase
class Maison {

	public $roof = 1;
	public $wall = 4;
	public $door = 1;
	public $window = 1;
	public $fundation = 1;
	public $floor = 0;


	public function addFloor(){
		//Modifie la propriete de l'objet courant
		$this->floor += 1;
		$this->wall += 4;
		$this->window += 1;
	}

}

//Création d'une maison => l'instance d'une class => un objet(maison)
echo "<pre>";

$maMaison = new Maison();
var_dump($maMaison);


$maMaisonCustom = new Maison();
$maMaisonCustom->addFloor();
$maMaisonCustom->addFloor();
/*
$maMaisonCustom->floor = 1;
$maMaisonCustom->wall += 4;
$maMaisonCustom->window += 1;
$maMaisonCustom->floor += 1;
$maMaisonCustom->wall += 4;
$maMaisonCustom->window += 1;
*/

var_dump($maMaisonCustom);







