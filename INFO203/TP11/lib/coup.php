	<?php
	
	function coups(){
		echo("<pre>\n");
		echo("\t<table class='tableau'>\n\t\t<tr class='gris'>\n\t\t\t<td>Coups</td>\n\t\t\t<td>Piece</td>\n\t\t\t<td>Colonne</td>\n\t\t\t<td>Ligne</td>\n\t\t\t<td>Colonne</td>\n\t\t\t<td>Ligne</td>\n\t\t</tr>\n");
		
		global $tab , $piece_entities ;
		$colonne = ['0'=> "A" , '1'=>"B", '2'=>"C" , '3'=>"D" , '4'=>"E" , '5'=>"F" , '6' => "G" , '7'=>"H"];
		foreach($tab as $row){
			
			echo("\n\t\t<tr>");
			echo("\n\t\t\t<td>".$row['id']."</td>");
			echo("\n\t\t\t<td>".$piece_entities[$row['piece']]."</td>");
			echo("\n\t\t\t<td>".$colonne[$row['xi']]."</td>");
			echo("\n\t\t\t<td>".$row['yi']."</td>");
			echo("\n\t\t\t<td>".$colonne[$row['xf']]."</td>\n\t\t");
			echo("\n\t\t\t<td>".$row['yf']."</td>\n\t\t</tr>");
		};
		echo("</table>\n</pre>");
	};
	?>