<?php
	$colonne = ['0'=> "A" , '1'=>"B", '2'=>"C" , '3'=>"D" , '4'=>"E" , '5'=>"F" , '6' => "G" , '7'=>"H"];
	$piece_entities=['Kb'=>"&#9812;",'Qb'=>"&#9813",'Bb'=>"&#9815;",'Nb'=>"&#9816;",'Rb'=>"&#9814;",'b'=>"&#9817;",
	'Kn'=>"&#9818;",'Qn'=>"&#9819;",'Bn'=>"&#9821;",'Nn'=>"&#9822;",'Rn'=>"&#9820;",'n'=>"&#9823;"];
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
	function paire($nb){
		$res = False;
		if(($nb % 2) == 0){
			$res = True;
		};
		return $res;
	};
	

			
	function chess($ligne, $colone, $tab){
		$html_code = "<table>\n\t<tr class='gris'>\n\t\t<td></td>\n\t\t<td>A</td>\n\t\t<td>B</td>\n\t\t<td>C</td>\n\t\t<td>D</td>\n\t\t<td>E</td>\n\t\t<td>F</td>\n\t\t<td>G</td>\n\t\t<td>H</td>\n\t\t";
		for( $i = 0 ; $i < $ligne ; $i++){
			$html_code .= "<tr><td =>$i</td>\n\t\t";
			for( $j = 0 ; $j < $colone ; $j++) {
				
				$tab_ligne = $tab[$i];
				
				if ( (paire($i) && paire($j)) || (!paire($i) && !paire($j))) {
					if ( $tab_ligne[$j] == " "){
						$html_code .= "<td class='blanc'></td>\n\t\t";
					}
					else{
						$html_code .= "<td class='blanc'><img src='./images/{$tab_ligne[$j]}.png'></td>\n\t\t";
					}
				}else{
					if ( $tab_ligne[$j] == " "){
						$html_code .= "<td class='noir'></td>\n\t\t";
					}
					else{
						$html_code .= "<td class='noir'><img src='./images/{$tab_ligne[$j]}.png'></td>\n\t\t";
					}
				};
			};
			$html_code .= "</tr>\n\t";
		};
		$html_code .= "</table>";
		return $html_code;
	};
	function mouvement($xi,$yi,$xf,$yf){
		global $chessboard ;
		$chessboard[$xf][$yf] = $chessboard[$xi][$yi] ;
		$chessboard[$xi][$yi] = " " ;
	};
	function affiche_partie(){
		global $tab , $chessboard;
		foreach($tab as $row){
			$xi=$row['xi'];
			$yi=$row['yi'];
			$xf=$row['xf'];
			$yf=$row['yf'];
			echo(chess(8,8,$chessboard));
			mouvement($yi,$xi,$yf,$xf);
		};
	};
?>