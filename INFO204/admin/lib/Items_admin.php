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
	<h1>Tous les items :</h1>
</header>

<section id="newitem">
	<div class="container">
		<div class="title">
			<h3>Créer un nouveau build d'items :</h3>
		</div>
		<form method="post" action="Items_admin.php">
			<input type="text" name="nom_create" placeholder="Nom...">

			<input type="text" name="Mythique_create" placeholder="Item mythique:">
			<input type="text" name="Bottes_create" placeholder="Bottes:">
			<input type="text" name="Core1_create" placeholder="Core item 1:">
			<input type="text" name="Core2_create" placeholder="Core item 2:">

			<input type="text" name="Option1_create" placeholder="Item secondaire 1:">
			<input type="text" name="Option2_create" placeholder="Item secondaire 2:">


			<input type="submit" value="Créer">
		</form>
	</div>

</section>

	<?php
	if (isset($_POST["nom_create"])) {

		$nom = $_POST["nom_create"];
		$mythique = $_POST["Mythique_create"];
		$bottes = $_POST["Bottes_create"];
		$core1 = $_POST["Core1_create"];
		$core2 = $_POST["Core2_create"];
		$option1 = $_POST["Option1_create"];
		$option2 = $_POST["Option2_create"];

		create_items($conn, $nom, $mythique, $bottes, $core1, $core2, $option1, $option2);
		}
	?>

	<?php

	$result=mysqli_query($conn,"SELECT * FROM `item`");
		
		echo("<table>");
		echo("<tr>");
		echo("<td>Id du Champion : </td>");
		echo("<td>Nom Du Champion : </td>");
		echo("<td>Item mythique : </td>");
		echo("<td>Bottes : </td>");
		echo("</tr>");
		
		while($row = mysqli_fetch_assoc($result)){
			echo("<tr>");
			echo("<td>$row[id]</td>");
			echo("<td>$row[nom] </td>");
			echo("<td>$row[mythique] $row[bottes] $row[core1] $row[core2]</td>");
			echo("<td>$row[option1] $row[option2]</td>");
			echo("</tr>");
		}
		echo("</table>");
	?>
</body>


<footer>
	
</footer>

</html>