<?php
session_start() ;
if(!$_SESSION["admin"]){
	header("Location: admin_form.php?action=disconnect") ; 
} 
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Admin</title>
  <link rel="stylesheet" href="../CSS/style_index.css">
  <link rel="icon" href="../image/league.png">
</head>


<header>
	<?php
		include 'connexion.php';
	?>
</header>



<body>

	<h2>Page des Runes </h2>

	<a href="Rune_admin.php"> Modifier les Runes </a>


	<h2>Page de Build </h2>

	<a href="Build_admin.php"> Modifier le Build </a>
	<a href="Items_admin.php"> Modifier les items </a>




</body>

<footer>
	<a href="../index_admin.php?action=disconnect">Deconnexion</a>
	<a href="../../index.php" >Retourner à l'accueil</a>
</footer>
	
</html>

