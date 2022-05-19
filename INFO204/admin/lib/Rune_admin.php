<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Rune_admin</title>
  <link rel="stylesheet" href="../CSS/style_index.css">
  <link rel="icon" href="../image/league.png">
</head>
<body>
<header>
	<a href="../index_admin.php?action=disconnect">Deconnexion</a>
	<a href="../index_admin.php">Retour à la page d'accueil</a>
    <?php
    include '../../lib/connect.php';
	include 'Rune.crud.php';
    ?>
    <h1>Toutes les Runes : </h1>
</header>


<form method="post" action="Rune_admin.php">
	Créer une nouvelle Rune :  
	<table>
		<tr>
			<td>Nom : </td>
			<td><input type="text" name="nom_create"></td>
		</tr>
		<tr>
			<td>Description : </td>
			<td><input type="text" name="description_create"></td>
		</tr>
	</table>

	<input type="submit" value="Créer">
	</form>
	<?php
	if (isset($_POST["nom_create"])) {

		$nom = $_POST["nom_create"];
		$description = $_POST["description_create"];

		create_rune($conn, $nom, $description);
		}
	?>



	<form method="post" action="Rune_admin.php">
	Modifier une Rune :
	<table>
		<tr>
			<td>Id : </td>
			<td><input type="number" name="id_mod"></td>
		</tr>
    <tr>
			<td>Nom : </td>
			<td><input type="text" name="nom_mod"></td>
		</tr>
		<tr>
			<td>Runes Fondamentales : </td>
			<td><input type="text" name="description_mod"></td>
		</tr>
	</table>

	<input type="submit" value="Modifier">
	</form>
	<?php
	if (isset($_POST["id_mod"])) {
		$id =$_POST["id_mod"];
		$nom = $_POST["nom_mod"];
		$description = $_POST["description_mod"];
		update_rune($conn, $id, $nom, $description);
		}
	?>



<form method="post" action="Rune_admin.php">
	Supprimer une Rune :
	<table>
		<tr>
			<td>Nom : </td>
			<td><input type="text" name="nom_sup"></td>
		</tr>
	</table>

	<input type="submit" value="Supprimer">
	</form>
	<?php
	if (isset($_POST["nom_sup"])) {
		$nom = $_POST["nom_sup"];
		delete_rune_nom($conn, $nom);
		}
	?>






	<?php

	$result=mysqli_query($conn,"SELECT * FROM `rune`");
		
		echo("<table>");
		echo("<tr>");
    	echo("<td>Id de la Rune : </td>");
		echo("<td>Nom de la Rune : </td>");
		echo("<td>Description de la Rune : </td>");
		echo("</tr>");
		
		while($row = mysqli_fetch_assoc($result)){
			echo("<tr>");
			echo("<td>$row[id]</td>");
			echo("<td>$row[Nom]</td>");
			echo("<td>$row[Description]</td>");
			echo("</tr>");
		}
		echo("</table>");
	?>
</body>


<footer>
	
</footer>
</html>