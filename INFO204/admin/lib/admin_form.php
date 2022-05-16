<?php
session_start() ;
if(isset($_POST["login"])){
	if($_POST["login"]=="admin"	&& $_POST["password"]=="admin"){
		
		/* session admin */
		$_SESSION["admin"]=time() ; 
	
		/* redirection */
		header("Location: admin.php") ; 
	}else{
		echo("Mauvais login ou mot de passe");
	}
}	

?>
<html>
	<head>
	<meta charset="UTF-8">
	</head>

	<body>
	<form method="POST" action="admin_form.php">
	Login:	<input type="text" name="login">
	Password:	<input type="text" name="password">
		<input type="submit" value="Envoyer" >
	</form>
	</body>
</html>

