<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Ma super page">
	<title>Mon titre</title>
</head>
<body>
	<header>
		<h1>Ma première page</h1>
		<nav>
			
		</nav>
	</header>
	<section>

		<?php 

		//Commentaire PHP sur une ligne
		/*
		Sur plusieurs lignes
		*/


		/*
			Une variable commence par un $
			Respect du camel case
			En anglais
			La logique du nom
		*/
		
		$myFirstname = "Yves";

		/*
		Types : 
			- Integer
			- String
			- Boolean
			- Float
			- Null
		*/
			/*

		$age = 19;
		
		if($age<18){
			echo "Mineur";
		}else if($age>18){
			echo "Majeur";
		}else{
			echo "Tout juste majeur";
		}


		$scope = "Autre";

		
		switch ($scope) {
			case 'Admin':
				echo "Créer";
			case 'Editeur':
				echo "Modifier";
			default:
				echo "Afficher";
				break;
		}




		// ternaire
		// Action (condition)?vrai:faux;

		$adulte = true;
		if($adulte){
			echo "Majeur";
		}else{
			echo "Mineur";
		}

		echo ($adulte)?"Majeur":"Mineur";


		//Null Coalescent 
		$firstname = "Yves";

		if(!is_null($firstname)){
			echo $firstname;
		}else{
			echo "Anonyme";
		}

		echo $firstname??"Anonyme";
		*/

		/*
			Boucles :
			- FOR : nb ittération connu
			- WHILE : nb ittération inconnu
			- DO WHILE : au moins 1 ittération
			- FOREACH : Tableaux
		

		$cpt = 0;
		$cpt += 1;
		$cpt = $cpt + 1;
		$cpt++; //Post incrémentation
		++$cpt; // Pré incrémentation


		$cpt = 0;
		echo $cpt; //0
		echo $cpt++; //0
		echo ++$cpt; //2
		echo $cpt-1;//1
		echo $cpt; //2
		echo $cpt = $cpt+1; //3
		echo --$cpt;//2

		*/

		/*

		for ( $cpt = 0 ;  $cpt < 10 ; $cpt++ ){
			echo $cpt;
		}


		
		$dice = rand(1,6000);
		$try = 1;

		while ($dice != 6) {
			$try++;
			$dice = rand(1,6000);

		}

		echo "Il y a eu ".$try. " tentative(s)";


		$try = 0;

		do{
			$dice = rand(1,6000);
			$try++;

		}while($dice != 6);

		echo "Il y a eu ".$try. " tentative(s)";





		$adult = 1;

		//if($adult){
		//if($adult == 1){
		//if($adult == 2){
		//if($adult == "fddffd"){
		if($adult === true){
			echo "majeur";
		}else{
			echo "mineur";
		}
		*/


		//$myArray = array();
		$myArray = ["HALIFA", "Axel"];

		echo "<pre>";
		//var_dump($myArray);
		//print_r($myArray);
		echo "</pre>";

		//Ajout d'une valeur
		$myArray[] = 21;

		//Modification d'une valeur
		$myArray[1] = "Lucien";

		//Afficher : Lucien a 21 ans
		//echo $myArray[1]." a ".$myArray[2]." ans";


		$student = [0=>"Pierre", 1=>"Michel", 2=>32];

		//Afficher Prénom Nom a age ans
		//echo $student[0]." ".$student[1]." a ".$student[2]." ans";

		$student = ["lastname"=>"Pierre", "firstname"=>"Michel", "age"=>32];
		//Afficher Prénom Nom a age ans
		//echo $student["firstname"]." ".$student["lastname"]." a ".$student["age"]." ans";
		$student["average"]=16;
		//print_r($student);



		$myArray = []; // 1Dim
		$myArray = [[]]; // 2Dim
		$myArray = [
						[],
						[]
					]; // 2Dim
		$myArray = [
						[],
						[
							[]
						]
					]; // 3Dim



		$esgi = [ 
					"IW"=>[
						0=>["HALIFA", "Axel"],
						1=>[0=>"LEE", 1=>"Eunji"],
					], 
					"SRC"=>[] 
				];


		//echo $esgi["IW"][1][1];

		$esgi["IW"][0][]=10;	
		

		echo "<pre>";
		print_r($esgi);
		echo "</pre>";	




		foreach ($esgi as $key => $value) {
			
		}


		foreach ($variable as  $value) {
			
		}

		?>




		
	</section>
	<footer>
		©Yves SKRZYPCZYK
	</footer>

</body>
</html>