<?php
include 'lib/connect.php';
session_start() ; 
if(isset($_GET["action"])){
	$action=$_GET["action"] ;
	if($action=="disconnect"){
		unset($_SESSION["action"]);
		unset($_SESSION["admin"]);
    unset($_SESSION["user"]);
    header("Location: ../index.php?action=disconnect");
	} elseif(!$_SESSION["admin"]){
    header("Location: ../index.php?action=disconnect"); 
  } 
}

?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Admin</title>
  <link rel="stylesheet" href="CSS/style_index.css">
  <link rel="icon" href="image/league.png">
</head>


<header>
	<?php
		include 'connexion.php';
	?>
</header>



<body>

	<h2>Page des Runes </h2>

	<a href="lib/Rune_admin.php"> Modifier les Runes </a>


	<h2>Page de Build </h2>

	<a href="lib/Build_admin.php"> Modifier le Build </a>
	<a href="lib/Items_admin.php"> Modifier les items </a>




</body>

<footer>
  <a href="Admin.php?action=disconnect">Deconnexion</a>
  <a href="../index.php" >Retourner à l'accueil</a>
</footer>
</html>


<?php
include 'lib/db_disconnect.php';
?>