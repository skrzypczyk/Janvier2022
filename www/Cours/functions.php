<?php

/*
//syntaxe basic d'une fonction
function helloWorld(){
	echo "Bonjour tout le monde";
}

//Appel de la fonction
helloWorld();




//syntaxe d'une fonction
function helloWorld(): void
{
	echo "Bonjour tout le monde";
}

//Appel de la fonction
helloWorld();



$firstname = "Yves";

function helloYou(string $you = null): void
{
	//global $firstname;
	echo "Bonjour ".$you;
}

//helloYou($firstname);
helloYou();

*/


function cleanLastname(string &$lastname): void
{
	$lastname = mb_strtoupper(trim($lastname));
}



$lastname = "SkRZéypCZYk    ";
cleanLastname($lastname);
//echo $lastname;




$fruits = ["pomme", "banane", "cerise"];
/*
function sort(array &$array): bool
{
 	....
}

if(!sort($fruits)){
	echo "impossible de trier le tableau";
}else{
	print_r($fruits);	
}
*/









