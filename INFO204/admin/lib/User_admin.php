<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>User_admin</title>
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

<section id="newUser">
	<div class="container">
		<div class="title">
			<h3>Créer un nouvel Utilisateur :</h3>
		</div>
		<form method="post" action="User_admin.php">
			<div class="form_create">
				<input type="text" name="pseudo_create" placeholder="Pseudo...">
				<input type="text" name="mdp_create" placeholder="Mot de passe:">
				<input type="number" name="droit_create" placeholder="Les droit ( 1 pour admin et 0 pour un simple user )">
			</div>
			
			<div class="creat">
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


<section id="updateUser">
	<div class="container">
		<div class="title">
			<h3>Modifier un Utilisateur :</h3>
		</div>
		<form method="post" action="User_admin.php">
        <div class="form_update">
                <input type="number" name="id_update" placeholder="identifiant:">
				<input type="text" name="pseudo_update" placeholder="Pseudo...">
				<input type="text" name="mdp_update" placeholder="Mot de passe:">
				<input type="number" name="droit_update" placeholder="Les droit ( 1 pour admin et 0 pour un simple user )">
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


<section id="deleteUser">
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


<section id="searchUser">
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
			echo("<tr>");
			echo("<td>Id : </td>");
			echo("<td>Pseudo : </td>");
			echo("<td>Mot de passe : </td>");
			echo("<td>Droit : </td>");
			echo("</tr>");

			while($row = mysqli_fetch_assoc($info)){
				echo("<tr>");
				echo("<td>$row[id]</td>");
				echo("<td>$row[Pseudo]</td>");
				echo("<td>$row[Mdp]</td>");
				echo("<td>$row[Droit]</td>");
				echo("</tr>");
			}
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
        echo("<td>Id : </td>");
        echo("<td>Pseudo : </td>");
        echo("<td>Mot de passe : </td>");
        echo("<td>Droit : </td>");
		echo("</tr>");
		echo("</thead>");
		echo("<tbody>");
		
		while($row = mysqli_fetch_assoc($result)){
			echo("<tr>");
            echo("<td>$row[id]</td>");
            echo("<td>$row[Pseudo]</td>");
            echo("<td>$row[Mdp]</td>");
            echo("<td>$row[Droit]</td>");
			echo("</tr>");
		}
		echo("</tbody>");
		echo("</table>");
	?>
</body>


<footer>
	
</footer>

</html>