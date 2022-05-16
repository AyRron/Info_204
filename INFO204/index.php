<?php
include 'lib/connect.php';

session_start() ; 
if(isset($_GET["action"])){
	$action=$_GET["action"] ;
	if($action=="disconnect"){
		unset($_SESSION["action"]);
		unset($_SESSION["admin"]);
		unset($_SESSION["user"]);
	}
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Index</title>
  <link rel="stylesheet" href="CSS/style_index.css">
  <link rel="icon" href="../image/league.png">
</head>

<body onload="openPopup()">

<header id="back1">
<nav class="navigation">
  <a href="#home" class="logo-lien">
    <img src="image/logo.png" alt="Logo" class="logo-image">
  </a>
  <div class="liens">
    <a href="lib/Item.php" class="nav-lien">Items</a>
    <a href="lib/Rune.php" class="nav-lien">Runes</a>
    <a href="lib/Champ_select.php" class="nav-lien">Champions</a>
  </div>
</nav>
</header>

<span id="back2">
<h2> Bienvenue sur BuildHub.</h2>
<p> BuildHub est un outil de guides rapides pour les joueurs de league of legends. Sa fonction principale est de fournir à la communauté league of legends les meilleurs build du moment.</p>
</span>
	
<section>
	<div class="container">
		<div class="popup" id="popup">
			<h2>Connectez-vous</h2>
			<button type="button" onclick="connexion()" onclick="closePopup()">Se Connecter</button>
			<button type="button" onclick="creation()" onclick="closePopup()">Vous n'avez pas de compte ?</button>
			<button type="button" onclick="closePopup()">Fermer la Popup</button>
		</div>
	</div>
</section>

<footer id="back3">
  <a href="admin/index_admin.php" >Page admin</a>
  <a href="index.php?action=disconnect">Deconnexion</a>
</footer>

</body>

<script>
let popup = document.getElementById("popup");

function openPopup(){
	popup.classList.add("open-popup");
	back1.classList.add("back");
	back2.classList.add("back");
	back3.classList.add("back");
	
}

function connexion(){
	window.location.href="http://os-vps418.infomaniak.ch:1180/l1_info_3/www/lib/Connexion.php"
}


function creation(){
	window.location.href="http://os-vps418.infomaniak.ch:1180/l1_info_3/www/lib/Nouvel_utilisateur.php"
}

function closePopup(){
	popup.classList.remove("open-popup");
	back1.classList.remove("back");
	back2.classList.remove("back");
	back3.classList.remove("back");
}
</script>




<?php
include 'lib/disconnect.php';
?>

</html>