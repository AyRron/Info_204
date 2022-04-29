

<?php


$chessboard =[
 ["1", "Rn" , "Nn" , "Bn" , "Qn" , "Kn" , "Bn" , "Nn" , "Rn" ] ,
 ["2", "n" , "n" , "n" , "n" , "n" , "n" , "n" , "n" ] ,
 ["3", " " , " " , " " , " " , " " , " " , " " , " " ] ,
 ["4", " " , " " , " " , " " , " " , " " , " " , " " ] ,
 ["5", " " , " " , " " , " " , " " , " " , " " , " " ] ,
 ["6", " " , " " , " " , " " , " " , " " , " " , " " ] ,
 ["7", "b" , "b" , "b" , "b" , "b" , "b" , "b" , "b" ] ,
 ["8", "Rb" , "Nb" , "Bb" , "Qb" , "Kb" , "Bb" , "Nb" , "Rb" ] ,
 ["", "A" , "B" , "C" , "D" , "E" , "F" , "G" , "H" ]
 ] ;






#---------------------------------------------------------Execrice -------------------------------------------------------------------





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







#---------------------------------------------------------Execrice -------------------------------------------------------------------



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
			if ( ($plateau[$i][$j] == "1") || ($plateau[$i][$j] == "2") || $plateau[$i][$j] == "3" || $plateau[$i][$j] == "4" || $plateau[$i][$j] == "5" || $plateau[$i][$j] == "6" || $plateau[$i][$j] == "7" || $plateau[$i][$j] == "8" || $plateau[$i][$j] == "" || $plateau[$i][$j] == "A" || $plateau[$i][$j] == "B" || $plateau[$i][$j] == "C" || $plateau[$i][$j] == "D" || $plateau[$i][$j] == "E" || $plateau[$i][$j] == "F" || $plateau[$i][$j] == "G" || $plateau[$i][$j] == "H" ) {
				$class = "autre";
				echo("\t<td class ='$class'></td>\n");
			} else{
			if (case_blanche($i, $j) == true) {
				$class = "orange";
			}

			else{
				$class = "gris";
			}
			if ($plateau[$i][$j] == "Bn" || $plateau[$i][$j] == "Bb" || $plateau[$i][$j] == "Nn" || $plateau[$i][$j] == "Nb" || $plateau[$i][$j] == "Kn" || $plateau[$i][$j] == "Kb" || $plateau[$i][$j] == "Qn" || $plateau[$i][$j] == "Qb" || $plateau[$i][$j] == "Rn" || $plateau[$i][$j] == "Rb" || $plateau[$i][$j] == "n" || $plateau[$i][$j] == "b"){
			echo("\t<td class ='$class'><img alt='Un pion' src='images/{$plateau[$i][$j]}.png'></td>\n");
			}
			else{
				echo("\t<td class ='$class'></td>\n");
			}
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


#---------------------------------------------------------Execrice -------------------------------------------------------------------



function deplace($plateau,$depart,$arrive){
	/**
	*Fonction qui déplace une pièce selectionné à un autre index
	*
	*pré : un tableau de tableau, deux tuples avec des entier dedans
	*post: un tableau de tableau
	*/

	$tempo = $plateau[$depart[1] + 1][$depart[0]];
	$plateau[$depart[1]][$depart[0]] = " ";
	$plateau[$arrive[1] ][$arrive[0]] = $tempo;

	tableau2(8,8,$plateau);
	return $plateau;
}








#---------------------------------------------------------Appels----------------------------------------------------------------------

echo("Exercice 2.3");
tableau2(8,8,$chessboard);

echo("Execrice 2.4");
$chessboard = deplace($chessboard,[0,0],[0,6]);
$chessboard = deplace($chessboard,[1,0],[2,2]);




?>

</body>







