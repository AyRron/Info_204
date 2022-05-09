<?php
session_start() ;

if(!$_SESSION["admin"]){
	header("Location: admin_form_joueur.php") ; 
} 
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Admin_joueur</title>
  <link rel="stylesheet" href="../CSS/style_index.css">
  <script src=""></script>
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




</body>

<footer>
	<a href="../index_admin.php?action=disconnect">
	Deconnexion
	</a>
</footer>
	
</html>

