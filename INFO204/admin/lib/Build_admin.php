<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Build_admin</title>
  <link rel="stylesheet" href="../CSS/style_index.css">
  <link rel="icon" href="../image/league.png">
</head>

<body>
<header>
	<a href="../index_admin.php?action=disconnect">Deconnexion</a>
	<a href="admin.php">Retour à la page d'accueil</a>
    <?php
    include '../../lib/connect.php';
	include 'Build.crud.php';
    ?>
    <h1>Tous les Builds : </h1>
</header>


<form method="post" action="Build_admin.php">
	Créer un nouveau Build :  
	<table>
		<tr>
			<td>Nom : </td>
			<td><input type="text" name="nom_create"></td>
		</tr>
		<tr>
			<td>Runes Fondamentales : </td>
			<td><input type="text" name="Rune_f_create"></td>
			<td><input type="text" name="F1_create"></td>
			<td><input type="text" name="F2_create"></td>
			<td><input type="text" name="F3_create"></td>
		</tr>
		<tr>
			<td>Runes Secondaires : </td>
			<td><input type="text" name="S1_create"></td>
			<td><input type="text" name="S2_create"></td>
		</tr>
		<tr>
			<td>Ajustements : </td>
			<td><input type="text" name="sup1_create"></td>
			<td><input type="text" name="sup2_create"></td>
			<td><input type="text" name="sup3_create"></td>
		</tr>
	</table>

	<input type="submit" value="Créer">
	</form>
	<?php
	if (isset($_POST["nom_create"])) {

		$nom = $_POST["nom_create"];
		$rune = $_POST["Rune_f_create"];
		$f1 = $_POST["F1_create"];
		$f2 = $_POST["F2_create"];
		$f3 = $_POST["F3_create"];
		$s1 = $_POST["S1_create"];
		$s2 = $_POST["S2_create"];
		$sup1 = $_POST["sup1_create"];
		$sup2 = $_POST["sup2_create"];
		$sup3 = $_POST["sup3_create"];

		create_build($conn, $nom, $rune, $f1, $f2, $f3, $s1, $s2, $sup1, $sup2, $sup3);
		}
	?>



	<form method="post" action="Build_admin.php">
	Modifier un Build :
	<table>
		<tr>
			<td>Id et Nom : </td>
			<td><input type="number" name="id_mod"></td>
			<td><input type="text" name="nom_mod"></td>
		</tr>
		<tr>
			<td>Runes Fondamentales : </td>
			<td><input type="text" name="Rune_f_mod"></td>
			<td><input type="text" name="F1_mod"></td>
			<td><input type="text" name="F2_mod"></td>
			<td><input type="text" name="F3_mod"></td>
		</tr>
		<tr>
			<td>Runes Secondaires : </td>
			<td><input type="text" name="S1_mod"></td>
			<td><input type="text" name="S2_mod"></td>
		</tr>
		<tr>
			<td>Ajustements : </td>
			<td><input type="text" name="sup1_mod"></td>
			<td><input type="text" name="sup2_mod"></td>
			<td><input type="text" name="sup3_mod"></td>
		</tr>
	</table>

	<input type="submit" value="Modifier">
	</form>
	<?php
	if (isset($_POST["id_mod"])) {
		$id =$_POST["id_mod"];
		$nom = $_POST["nom_mod"];
		$rune = $_POST["Rune_f_mod"];
		$f1 = $_POST["F1_mod"];
		$f2 = $_POST["F2_mod"];
		$f3 = $_POST["F3_mod"];
		$s1 = $_POST["S1_mod"];
		$s2 = $_POST["S2_mod"];
		$sup1 = $_POST["sup1_mod"];
		$sup2 = $_POST["sup2_mod"];
		$sup3 = $_POST["sup3_mod"];
		update_build($conn, $id, $nom, $rune, $f1, $f2, $f3, $s1, $s2, $sup1, $sup2, $sup3);
		}
	?>



<form method="post" action="Build_admin.php">
	Supprimer un Build :
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
		delete_build_nom($conn, $nom);
		}
	?>






	<?php

	$result=mysqli_query($conn,"SELECT * FROM `build`");
		
		echo("<table>");
		echo("<tr>");
		echo("<td>Id du Champion : </td>");
		echo("<td>Nom Du Champion : </td>");
		echo("<td>Runes Fondamentales : </td>");
		echo("<td>Runes Secondaires : </td>");
		echo("<td>Ajustements : </td>");
		echo("</tr>");
		
		while($row = mysqli_fetch_assoc($result)){
			echo("<tr>");
			echo("<td>$row[id]</td>");
			echo("<td>$row[Nom_champ] </td>");
			echo("<td>$row[Rune_f] $row[F1] $row[F2] $row[F3]</td>");
			echo("<td>$row[S1] $row[S2]</td>");
			echo("<td>$row[sup1] $row[sup2] $row[sup3]</td>");
			echo("</tr>");
		}
		echo("</table>");
	?>
</body>


<footer>
	
</footer>

</html>