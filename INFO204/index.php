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
  <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="logo-lien">
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
<h2>Bienvenue sur BuildHub.</h2>
<p> BuildHub est un outil de guides rapides pour les joueurs de league of legends. Sa fonction principale est de fournir à la communauté league of legends les meilleurs build du moment.</p>
</span>

<video id="fond" src="image/Video_lol.webm" autoplay muted loop></video> 

<section>
	<div class="container">
		<div class="popup" id="popup">
			<h2>Connectez-vous</h2>
			<button type="button" onclick="connexion()" onclick="closePopup()">Se Connecter</button>
			<button type="button" onclick="creation()" onclick="closePopup()">Vous n'avez pas de compte ?</button>
		</div>
	</div>
</section>

<footer id="back3">
	<?php
	if (isset($_SESSION["admin"])){
  		echo('<a href="admin/index_admin.php" >Page admin</a>-');
	}
	?>
  <a href="index.php?action=disconnect">Deconnexion</a>
</footer>

</body>


<?php
if(isset($_SESSION["admin"]) || isset($_SESSION["user"])){
} else{
echo('<script>');
echo('let popup = document.getElementById("popup");');

echo('function openPopup(){');
echo('	popup.classList.add("open-popup");');
echo('	back1.classList.add("back");');
echo('	back2.classList.add("back");');
echo('	back3.classList.add("back");');
	
echo('}');

echo('function connexion(){');
echo('	window.location.href="http://localhost/INFO204/lib/Connexion.php"');
echo('}');


echo('function creation(){');
echo('	window.location.href="http://localhost/INFO204/lib/Connexion.php"');
echo('}');

echo('function closePopup(){');
echo('	popup.classList.remove("open-popup");');
echo('	back1.classList.remove("back");');
echo('	back2.classList.remove("back");');
echo('	back3.classList.remove("back");');
echo('}');
echo('</script>');
}
?>



<?php
include 'lib/disconnect.php';
?>


</html>