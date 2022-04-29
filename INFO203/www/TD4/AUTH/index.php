<?php
session_start() ; 
if(isset($_GET["action"])){
	$action=$_GET["action"] ;
	if($action=="disconnect"){
		unset($_SESSION["action"]);
		unset($_SESSION["admin"]);
	}
}
?>
<html>
	<head>
	<meta charset="UTF-8">
	</head>

	<body>
	<a href="admin.php" >Page admin</a>
	</body>
</html>

