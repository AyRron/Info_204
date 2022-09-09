<?php
include 'connect_uwamp.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/style_connexion.css">
    <title>Document</title>
</head>
<body>

<div class="container">
<form method="POST" action="Nouvel_utilisateur.php">
	<p>Créer un compte</p>
	<input type="text" name="pseudo" placeholder="Identifiant">
	<input type="password" name="mdp" placeholder="Mot de passe">
	<input type="submit" value="Création">
</form>

</body>
</html>
    
<?php

if (isset($_POST["pseudo"])) {

	$pseudo = $_POST["pseudo"];
	$mdp = $_POST["mdp"];

	$verif=mysqli_query($conn,"SELECT * FROM `utilisateur` WHERE `Pseudo`='$pseudo'");

	if(mysqli_num_rows($verif)>0){
		echo("Le pseudo est déjà utilisé");
	} else {
		$sql="INSERT INTO `utilisateur`(`Pseudo`, `Mdp`, `Droit`) VALUES ('$pseudo','$mdp','0')";
		mysqli_query($conn, $sql) ;
		echo($sql);
		header('Location:../index.php');
	}
}

include 'disconnect.php';
?>