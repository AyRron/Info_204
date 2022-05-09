<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Build_admin</title>
  <link rel="stylesheet" href="../CSS/style_index.css">
</head>


<body>

<header>
    <?php

    include '../../lib/connect.php'

    ?>

    <h1>Tous les Builds : </h1>

</header>



<?php

include 'Build.crud.php';

$result=mysqli_query($conn,"SELECT * FROM `build`");
	
	echo("<table>");
	echo("<tr>");
	echo("<td>Nom Du Champion : </td>");
	echo("<td>Runes Fondamentales : </td>");
	echo("<td>Runes Secondaires : </td>");
	echo("<td>Ajustements : </td>");
	echo("</tr>");
	
	while($row = mysqli_fetch_assoc($result)){
		echo("<tr>");
		echo("<td>$row[Nom_champ] </td>");
		echo("<td>$row[Rune_f] $row[F1] $row[F2] $row[F3]</td>");
		echo("<td>$row[S1] $row[S2]</td>");
		echo("<td>$row[sup1] $row[sup2] $row[sup3]</td>");
		echo("</tr>");
		}
	
	echo("</table>");



?>

<form method="post" action="Build_admin.php">
	Ajouter un nouveau Build :  
	<table>
		<tr>
			<td>Nom</td>
			<td><input type="str" name="nom"></td>
		</tr>
		<tr>
			<td>Rune Fondamentale</td>
			<td><input type="str" name="prenom"></td>
		</tr>
		<tr>
			<td>Pays</td>
			<td><input type="str" name="pays"></td>
		</tr>
		<tr>
			<td>Rang</td>
			<td><input type="int" name="rang"></td>
		</tr>
	</table>

	<input type="submit" value="Créer">
	</form>


</body>

</html>