<?php
session_start() ;
if(isset($_POST["login"])){
	if($_POST["login"]=="admin"
		&& $_POST["password"]=="joueur"){
		
		/* session admin */
		$_SESSION["admin"]=time() ; 
	
		/* redirection */
		header("Location: admin_joueur.php") ; 
	}
}	

?>
<html>
	<head>
	<meta charset="UTF-8">
	</head>

	<body>
	<form method="POST" action="admin_form_joueur.php">
	Login:	<input type="text" name="login">
	Password:	<input type="text" name="password">
		<input type="submit" value="Envoyer" >
	</form>
	</body>
</html>

