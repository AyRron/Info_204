<?php
session_start() ;
if(isset($_POST["login"])){
	if($_POST["login"]=="admin"
		&& $_POST["passwd"]=="admin"){
		
		/* session admin */
		$_SESSION["admin"]=time() ; 
	
		/* redirection */
		header("Location: admin.php") ; 
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
	Passwd:	<input type="text" name="passwd">
		<input type="submit">
	</form>
	</body>
</html>

