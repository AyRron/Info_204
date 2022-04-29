<?php
session_start() ;

if(!$_SESSION["admin"]){
	header("Location: admin_form.php") ; 
} 
?>
<html>
	<head>
	<meta charset="UTF-8">
	</head>

	<body>
	<h2>Page d'admin</h2>
	<a href="index.php?action=disconnect">
	Deconnexion
	</a>
	</body>
</html>

