<?php
include 'lib/connect.php';
session_start() ; 
if(isset($_GET["action"])){
	$action=$_GET["action"] ;
	if($action=="disconnect"){
		unset($_SESSION["action"]);
		unset($_SESSION["admin"]);
	}
}

?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>index_admin</title>
  <link rel="stylesheet" href="CSS/style_index.css">
  <link rel="icon" href="image/league.png">
</head>


<header>
</header>


<body>
  <a href="lib/admin.php">Connexion en tant qu'administrateur</a></br>
</body>


<footer>
  <a href="../index.php" >Retourner à l'accueil</a>
</footer>
</html>


<?php
include 'lib/db_disconnect.php';
?>