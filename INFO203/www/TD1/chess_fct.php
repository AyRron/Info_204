<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>chess</title>
  <link rel="stylesheet" href="style_chess.css"> 
  <script src=""></script>
</head>
<body>


<?php


$chessboard =[
 [ "Rn" , "Nn" , "Bn" , "Kn" , "Qn" , "Bn" , "Nn" , "Rn" ] ,
 [ "n" , "n" , "n" , "n" , "n" , "n" , "n" , "n" ] ,
 [ " " , " " , " " , " " , " " , " " , " " , " " ] ,
 [ " " , " " , " " , " " , " " , " " , " " , " " ] ,
 [ " " , " " , " " , " " , " " , " " , " " , " " ] ,
 [ " " , " " , " " , " " , " " , " " , " " , " " ] ,
 [ "b" , "b" , "b" , "b" , "b" , "b" , "b" , "b" ] ,
 [ "Rb" , "Nb" , "Bb" , "Kb" , "Qb" , "Bb" , "Nb" , "Rb" ]
 ] ;




#---------------------------------------------------------Execrice 2.1----------------------------------------------------------------





function tableau_test($ligne, $colonne){
	/**
	*Fonction qui crée un tableau de tableau 
	*
	*pré : deux entiers
	*post: un tableau de tableau
	*/
	echo("<table>\n");
	echo("<tr>\n");
	for($i = 0; $i <= $colonne; $i++){
		for($j = 0; $j <= $ligne; $j++){
			printf("<td> $i - $j </td>\n");
		}
	echo("</tr>\n");
	}
		
	echo("</table>");	
}





#---------------------------------------------------------Execrice 2.2----------------------------------------------------------------





function tableau($ligne, $colonne){
	/**
	*Fonction qui crée un tableau de tableau 
	*
	*pré : deux entiers
	*post: un tableau de tableau
	*/
	echo("<table>\n");
	for ($i = 0; $i <= $ligne; $i++){
		echo("\t<tr>\n");
		for($j = 0; $j <= $colonne; $j++){
			if (case_blanche($i, $j) == true) {
				$class = "gris";
			}

			else{
				$class = "orange";
			}
			
			echo("\t<td class ='$class'></td>\n");
			}

		echo("\t</tr>\n");
	}
	echo("</table>");	
}





#<img alt="Logo HTML 5" src="TDs/images/HTML5_Logo.png">


#---------------------------------------------------------Execrice 2.3----------------------------------------------------------------



function tableau2($ligne, $colonne, $plateau){
	/**
	*Fonction qui crée un plateau de jeux selon un tableau contenant les placement des pièces
	*
	*pré : deux entier, un tableau de tableau
	*post: un tableau de tableau 
	*/
	echo("<table>\n");
	for ($i = 0; $i <= $ligne; $i++){
		echo("\t<tr>\n");
		for($j = 0; $j <= $colonne; $j++){
			if (case_blanche($i, $j) == true) {
				$class = "orange";
			}

			else{
				$class = "gris";
			}
			if ($plateau[$i][$j] != " "){
			echo("\t<td class ='$class'><img alt='Un pion' src='IMG/{$plateau[$i][$j]}.png'></td>\n");
			}
			else{
				echo("\t<td class ='$class'></td>\n");
			}
		}

		echo("\t</tr>\n");
	}
	echo("</table>");	
}






function pair($x){
	/**
	*Fonction qui indique si un entier est paire 
	*
	*pré : un entier
	*post: un Bouléen
	*/
	if (($x % 2) == 0) {
		$res = true;
	} 
	else {
		$res = false;
	}
	return $res ;
}


function impair($x){
	/**
	*Fonction qui indique si un entier est impaire 
	*
	*pré : un entier
	*post: un Bouléen
	*/
	if (($x % 2) != 0) {
		$res = true;
	} 
	else {
		$res = false;
	}
	return $res ;
}

function case_blanche($x, $y){
	/**
	*Fonction qui indique si une case est une case blanche
	*
	*pré : deux entier
	*post: un Bouléen
	*/

	if (pair($x) == true && pair($y) == true) {
		$res = true;
	} 
	elseif (impair($x) == true && impair($y) == true){
		$res = true;
	}
	else{
		$res = false;
	}

	return $res ;

}


#---------------------------------------------------------Execrice 2.4----------------------------------------------------------------



function deplace($plateau,$depart,$arrive){
	/**
	*Fonction qui déplace une pièce selectionné à un autre index
	*
	*pré : un tableau de tableau, deux tuples avec des entier dedans
	*post: un tableau de tableau
	*/

	$tempo = $plateau[$depart[1]][$depart[0]];
	$plateau[$depart[1]][$depart[0]] = " ";
	$plateau[$arrive[1]][$arrive[0]] = $tempo;

	tableau2(7,7,$plateau);
	return $plateau;
}








#---------------------------------------------------------Appels----------------------------------------------------------------------


echo("Exercice 2.1");
tableau_test(7,7);

echo("Exercice 2.2");
tableau(7,7);

echo("Exercice 2.3");
tableau2(7,7,$chessboard);

echo("Execrice 2.4");
$chessboard = deplace($chessboard,[0,0],[0,6]);
$chessboard = deplace($chessboard,[1,0],[2,2]);




?>

</body>
</html>






