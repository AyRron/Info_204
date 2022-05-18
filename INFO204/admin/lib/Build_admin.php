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
	<a href="../index_admin.php">Retour à la page d'accueil</a>
    <?php
    include '../../lib/connect.php';
	include 'Build.crud.php';
    ?>
    <h1>Tous les Builds : </h1>
</header>

<section id="newbuild">
	<div class="container">
		<div class="title">
			<h3>Créer un nouveau Build :</h3>
		</div>
		<form method="post" action="Build_admin.php">
			<div class="nom">
				<input class="nom" type="text" name="nom_create" placeholder="Nom...">
			</div>

			<div class="fondament">
				<input type="text" name="Rune_f_create" placeholder="rune fondamentale 1:">
				<input type="text" name="F1_create" placeholder="rune fondamentale 2:">
				<input type="text" name="F2_create" placeholder="rune fondamentale 3:">
				<input type="text" name="F3_create" placeholder="rune fondamentale 4:">
			</div>

			<div class="second">
				<input type="text" name="S1_create" placeholder="rune secondaire 1:">
				<input type="text" name="S2_create" placeholder="rune secondaire 2:">
			</div>

			<div class="ajust">
				<input type="text" name="sup1_create" placeholder="ajustement 1:">
				<input type="text" name="sup2_create" placeholder="ajustement 2:">
				<input type="text" name="sup3_create" placeholder="ajustement 3:">
			</div>
			
			<div class="creat">
				<input type="submit" value="Créer">
			</div>
		</form>
	</div>

</section>

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


<section id="updatebuild">
	<div class="container">
		<div class="title">
			<h3>Modifier un Build :</h3>
		</div>
		<form method="post" action="Build_admin.php">
			<div class="idnom">
				<input type="number" name="id_mod" placeholder="identifiant:">
				<input type="text" name="nom_mod" placeholder="Nom...">
			</div>

			<div class="fondament">
				<input type="text" name="Rune_f_mod" placeholder="rune fondamentale 1:">
				<input type="text" name="F1_mod" placeholder="rune fondamentale 2:">
				<input type="text" name="F2_mod" placeholder="rune fondamentale 3:">
				<input type="text" name="F3_mod" placeholder="rune fondamentale 4:">
			</div>

			<div class="second">
				<input type="text" name="S1_mod" placeholder="rune secondaire 1:">
				<input type="text" name="S2_mod" placeholder="rune secondaire 2:">
			</div>

			<div class="ajust">
				<input type="text" name="sup1_mod" placeholder="ajustement 1:">
				<input type="text" name="sup2_mod" placeholder="ajustement 2:">
				<input type="text" name="sup3_mod" placeholder="ajustement 3:">
			</div>

			<div class="creat">
				<input type="submit" value="Modifier">
			</div>
		</form>
	</div>
</section>

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


<section id="deletebuild">
	<div class="container">
		<div class="title">
			<h3>Supprimer un Build :</h3>
		</div>
		<form method="post" action="Build_admin.php">
			<div class="nom">
				<input type="text" name="nom_sup" placeholder="Nom...">
			</div>

			<div class="delete">
				<input type="submit" value="Supprimer">
			</div>
		</form>
	</div>
</section>

	<?php
	if (isset($_POST["nom_sup"])) {
		$nom = $_POST["nom_sup"];
		delete_build_nom($conn, $nom);
		}
	?>

<section id="searchbuild">
	<div class="container">
		<div class="title">
			<h3>Chercher un Build :</h3>
		</div>
		<form method="post" action="Build_admin.php">
			<div class="nom">
				<input type="text" name="nom_search" placeholder="Nom...">
			</div>

			<div class="search">
			<input type="submit" value="Chercher">
			</div>
		</form>
	</div>
</section>


	<?php
	if (isset($_POST["nom_search"])) {
		$nom = $_POST["nom_search"];
		$info=mysqli_query($conn,"SELECT * FROM `build` WHERE `Nom_champ`='$nom'");

		if(mysqli_num_rows($info)>0){ 
			echo("<table>");
			echo("<tr>");
			echo("<td>Id du Champion : </td>");
			echo("<td>Nom Du Champion : </td>");
			echo("<td>Runes Fondamentales : </td>");
			echo("<td>Runes Secondaires : </td>");
			echo("<td>Ajustements : </td>");
			echo("</tr>");

			while($row = mysqli_fetch_assoc($info)){
				echo("<tr>");
				echo("<td>$row[id]</td>");
				echo("<td>$row[Nom_champ] </td>");
				echo("<td>$row[Rune_f] $row[F1] $row[F2] $row[F3]</td>");
				echo("<td>$row[S1] $row[S2]</td>");
				echo("<td>$row[sup1] $row[sup2] $row[sup3]</td>");
				echo("</tr>");
			}
			echo("</table>");
		} else{
			echo("Champion non trouvé");
		}
		
		}
	?>




	<?php

	$result=mysqli_query($conn,"SELECT * FROM `build`");
		
		echo("<table>");
		echo("<thead>");
		echo("<tr>");
		echo("<td>Id du Champion : </td>");
		echo("<td>Nom Du Champion : </td>");
		echo("<td>Runes Fondamentales : </td>");
		echo("<td>Runes Secondaires : </td>");
		echo("<td>Ajustements : </td>");
		echo("</tr>");
		echo("</thead>");
		echo("<tbody>");
		
		while($row = mysqli_fetch_assoc($result)){
			echo("<tr>");
			echo("<td>$row[id]</td>");
			echo("<td>$row[Nom_champ] </td>");
			echo("<td>$row[Rune_f] $row[F1] $row[F2] $row[F3]</td>");
			echo("<td>$row[S1] $row[S2]</td>");
			echo("<td>$row[sup1] $row[sup2] $row[sup3]</td>");
			echo("</tr>");
		}
		echo("</tbody>");
		echo("</table>");
	?>
</body>


<footer>
	
</footer>

</html>