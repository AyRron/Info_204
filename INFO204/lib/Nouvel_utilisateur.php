<?php
include 'connect.php';
?>


<form method="post" action="Nouvel_utilisateur.php">
    Veuillez entrer un pseudo et un mot de passe 
	<table>
		<tr>
			<td>Pseudo : </td>
			<td><input type="text" name="pseudo"></td>
		</tr>
		<tr>
			<td>Mot de passe : </td>
			<td><input type="password" name="mdp"></td>
		</tr>
	</table>

	<input type="submit" value="Création">
</form>
    
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