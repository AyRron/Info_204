<?php
include 'lib/db_connect.php';

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
  <title>index</title>
  <link rel="stylesheet" href="CSS/style_index.css">
  <script src=""></script>
</head>


<header>
</header>


<body>
  <a href="lib/admin_joueur.php">Page joueur</a></br>
  <a href="lib/admin_partie.php">Page partie</a></br>
</body>


<footer>
</footer>
</html>


<?php
include 'lib/db_disconnect.php';
?>