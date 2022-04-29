

<form method="post" action="index.php">


	déplacer la pièce : 
	<table>
		<tr>
			<td>Pièce</td>
			<td><input type="int" name="piece"></td>
		</tr>
	</table>
	de :
	<table>
		<tr>
			<td>Colonne</td>
			<td><input type="int" name="xi"></td>
		</tr>
		<tr>
			<td>Ligne</td>
			<td><input type="int" name="yi"></td>
		</tr>
	</table>
	vers : 
	<table>
		<tr>
			<td>Colonne</td>
			<td><input type="int" name="xf"></td>
		</tr>
		<tr>
			<td>Ligne</td>
			<td><input type="int" name="yf"></td>
		</tr>
	</table>

	<input type="submit" value="Jouer">


</form>



<?php

include 'fct_mvt.php';

if (isset($_POST["piece"])) {
    
	$piece = $_POST["piece"];
	$xi = $_POST["xi"];
	$yi = $_POST["yi"];
	$xf = $_POST["xf"];
	$yf = $_POST["yf"];

	insert_mvt($conn, $piece, $xi, $yi, $xf, $yf);
}



?>