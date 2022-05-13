<?php
include 'lib/connect.php';
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

<section>
	<div class="container">
		<div class="popup" id="popup">
			<h2>Connectez-vous</h2>
			<button type="button" onclick="closePopup()">Se Connecter</button>
			<button type="button" onclick="closePopup()">Vous n'avez pas de compte ?</button>
		</div>
	</div>
</section>

<footer id="back3">
  <a href="admin/index_admin.php" >Page admin</a>
</footer>

</body>

<script>
let popup = document.getElementById("popup");

function openPopup(){
	popup.classList.add("open-popup");
	back1.classList.add("back");
	/*back2.classList.add("back");*/
	back3.classList.add("back");
	
}

function closePopup(){
	popup.classList.remove("open-popup");
	back1.classList.remove("back");
	/*back2.classList.remove("back");*/
	back3.classList.remove("back");
}
</script>




<?php
include 'lib/disconnect.php';
?>

</html>