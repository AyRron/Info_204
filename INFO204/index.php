<?php
include 'lib/connect_uwamp.php';
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
<h1>Build<span>hub</span></h1>
</header>

<nav id="back2">
  <ul>
    <li><a href="lib/Item.php" >Item</a></li>
    <li><a href="lib/Rune.php" >Rune</a></li>
    <li><a href="lib/Champ_select.php" >Champ_select</a></li>
  </ul>
</nav>

<section>
	<div class="container">
		<div class="popup" id="popup">
			<h2>Avez vous 18 ans?</h2>
			<p>BuildHub est un site reservé aux personnes majeures.</p>
			<p>Vous devez avoir 18 ans ou plus pour continuer.</p>
			<button type="button" onclick="closePopup()">J'ai 18 ans ou plus - Entrer</button>
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
	back2.classList.add("back");
	back3.classList.add("back");
	
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