<?php
include 'connect_uwamp.php';

session_start() ;
if(isset($_POST["login"])){


	$pseudo=$_POST["login"];
	$sql="SELECT * FROM `utilisateur` WHERE `pseudo`='$pseudo'" ;

	if($ret=mysqli_query($conn, $sql)){
		$ret=mysqli_fetch_assoc($ret);
	
		
		if($_POST["password"] == $ret['Mdp'] && $ret['Droit'] == 1 ){
			$_SESSION["admin"] = $pseudo; 
			header("Location: ../index.php") ; 

		} elseif ($_POST["password"] == $ret['Mdp'] && $ret['Droit'] == 0 ){
			$_SESSION["user"] = $pseudo; 
			header("Location: ../index.php") ; 
		}
	} else{
		echo("Mauvais login ou mot de passe");
	}
	
}


include 'disconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="../CSS/style_connexion.css">
    <title>Connexion</title>
</head>

<body>

<div class="container">
<form method="POST" action="Connexion.php">
	<p>Connexion</p>
	<input type="text" name="login" placeholder="Identifiant">
	<input type="password" name="password" placeholder="Mot de passe">
	<input type="submit" value="Envoyer">
</form>


</body>
</html>