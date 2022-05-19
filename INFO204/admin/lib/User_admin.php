<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>User admin</title>
  <link rel="stylesheet" href="../CSS/style_index.css">
  <link rel="icon" href="../image/league.png">
</head>

<body>
<header>
	<a href="../index_admin.php?action=disconnect">Deconnexion</a>
	<a href="../index_admin.php">Retour à la page d'accueil</a>
    <?php
    include '../../lib/connect.php';
	include 'User.crud.php';
    ?>
</header>

<section id="newuser">
	<div class="container">
		<div class="title">
			<h3>Créer un nouvel Utilisateur :</h3>
		</div>
		<form method="post" action="User_admin.php">
			<div class="form_create">
				<input type="text" name="pseudo_create" placeholder="Pseudo...">
				<input type="text" name="mdp_create" placeholder="Mot de passe:">
				<input type="number" name="droit_create" placeholder="Les droits (1 admin/0 user)">
			</div>
			
			<div class="create">
				<input type="submit" value="Créer">
			</div>
		</form>
	</div>

</section>
	<?php
	if (isset($_POST["pseudo_create"])) {

		$pseudo = $_POST["pseudo_create"];
		$mdp = $_POST["mdp_create"];
		$droit = $_POST["droit_create"];

		create_user($conn, $pseudo, $mdp, $droit);
		}
	?>


<section id="updateuser">
	<div class="container">
		<div class="title">
			<h3>Modifier un Utilisateur :</h3>
		</div>
		<form method="post" action="User_admin.php">
        <div class="form_update">
                <input type="number" name="id_update" placeholder="identifiant:">
				<input type="text" name="pseudo_update" placeholder="Pseudo...">
				<input type="text" name="mdp_update" placeholder="Mot de passe:">
				<input type="number" name="droit_update" placeholder="Les droits (1 admin/0 user)">
			</div>

			<div class="update">
				<input type="submit" value="Modifier">
			</div>
		</form>
	</div>
</section>
	<?php
	if (isset($_POST["id_update"])) {
		$id =$_POST["id_update"];
		$pseudo = $_POST["pseudo_update"];
		$mdp = $_POST["mdp_update"];
		$droit = $_POST["droit_update"];

		update_user($conn, $id, $pseudo, $mdp, $droit);
		}
	?>


<section id="deleteuser">
	<div class="container">
		<div class="title">
			<h3>Supprimer un Build :</h3>
		</div>
		<form method="post" action="User_admin.php">
			<div class="form_delete">
				<input type="text" name="pseudo_sup" placeholder="Pseudo...">
			</div>

			<div class="delete">
				<input type="submit" value="Supprimer">
			</div>
		</form>
	</div>
</section>
	<?php
	if (isset($_POST["pseudo_sup"])) {
		$pseudo = $_POST["pseudo_sup"];
		delete_user_pseudo($conn, $pseudo);
		}
	?>


<section id="searchuser">
	<div class="container">
		<div class="title">
			<h3>Chercher un Utilisateur :</h3>
		</div>
		<form method="post" action="User_admin.php">
			<div class="form_search">
				<input type="text" name="pseudo_search" placeholder="Pseudo...">
			</div>

			<div class="search">
			<input type="submit" value="Chercher">
			</div>
		</form>
	</div>
</section>
	<?php
	if (isset($_POST["pseudo_search"])) {
		$pseudo = $_POST["pseudo_search"];
		$info=user_info_pseudo($conn, $pseudo);

		if(mysqli_num_rows($info)>0){ 
			echo("<table>");
			echo("<thead>");
			echo("<tr>");
			echo("<th>Id : </th>");
			echo("<th>Pseudo : </th>");
			echo("<th>Mot de passe : </th>");
			echo("<th>Droit : </th>");
			echo("</tr>");
			echo("</thead>");
			echo("<tbody>");

			while($row = mysqli_fetch_assoc($info)){
				echo("<tr>");
				echo("<td data-label='Id :'>$row[id]</td>");
				echo("<td data-label='Pseudo :'>$row[Pseudo]</td>");
				echo("<td data-label='Mot de passe :'>$row[Mdp]</td>");
				echo("<td data-label='Droit :'>$row[Droit]</td>");
				echo("</tr>");
			}
			echo("</tbody>");
			echo("</table>");
		} else{
			echo("Champion non trouvé");
		}
		
		}
	?>




	<?php

	$result=select_all_user($conn);
		
		echo("<table>");
		echo("<thead>");
		echo("<tr>");
        echo("<th>Id : </th>");
        echo("<th>Pseudo : </th>");
        echo("<th>Mot de passe : </th>");
        echo("<th>Droit : </th>");
		echo("</tr>");
		echo("</thead>");
		echo("<tbody>");
		
		while($row = mysqli_fetch_assoc($result)){
			echo("<tr>");
			echo("<td data-label='Id de l'Ordre des Sorts :'>$row[id]</td>");
			echo("<td data-label='Nom du Champion :'>$row[Nom]</td>");
			echo("<td data-label='Ordre des Sorts :'>$row[1]$row[2]$row[3]$row[4]$row[5]$row[6]$row[7]$row[8]$row[9]$row[10]$row[11]$row[12]$row[13]$row[14]$row[15]$row[16]$row[17]$row[18]</td>");
			echo("</tr>");
		}
		echo("</tbody>");
		echo("</table>");
	?>
</body>


<footer>
	
</footer>

</html>