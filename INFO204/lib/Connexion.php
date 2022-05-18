<?php
include 'connect.php';

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
<html>
	<head>
	<meta charset="UTF-8">
	</head>

	<body>
	<form method="POST" action="Connexion.php">
	Login:	<input type="text" name="login">
	Password:	<input type="password" name="password">
		<input type="submit" value="Envoyer" >
	</form>
	</body>
</html>