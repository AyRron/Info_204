<?php
session_start() ;

if(!$_SESSION["admin"]){
	header("Location: admin_form_joueur.php") ; 
} 
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Admin_joueur</title>
  <link rel="stylesheet" href="../CSS/style_index.css">
  <script src=""></script>
</head>


<header>
	<?php
		include 'connexion.php';
	?>
</header>



<body>
	<h2>Page d'admin des Joueurs</h2>


	<form method="post" action="admin_joueur.php">
	déplacer la pièce : 
	<table>
		<tr>
			<td>Nom</td>
			<td><input type="str" name="nom"></td>
		</tr>
		<tr>
			<td>Prénom</td>
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


	<?php
		include 'utilisateur.crud.php';

		if (isset($_POST["nom"])) {

		$nom = $_POST["nom"];
		$prenom = $_POST["prenom"];
		$pays = $_POST["pays"];
		$rang = $_POST["rang"];

		create_jou($conn, $nom, $prenom, $pays, $rang);
		}

		/*2−Executiondelarequete*/
		$result=mysqli_query($conn,"SELECT * FROM `utilisateur`");
		
		/*3−Iterationsurlesresultats*/
		echo("<table>");
		echo("<tr>");
		echo("<td>Nom</td>");
		echo("<td>Prénom</td>");
		echo("<td>Pays</td>");
		echo("<td>Rang</td>");
		echo("</tr>");
		echo("\n");
		
		while($row = mysqli_fetch_assoc($result)){
			echo("<tr>");
			echo("<td>$row[nom]</td>");
			echo("<td>$row[prenom]</td>");
			echo("<td>$row[pays]</td>");
			echo("<td>$row[rang]</td>");
			
			echo("</tr>");
			echo("\n");
			}
		
		echo("</table>");
	?>	
</body>

<footer>
	<a href="../index_admin.php?action=disconnect">
	Deconnexion
	</a>
</footer>
	
</html>

