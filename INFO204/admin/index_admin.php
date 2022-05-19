<?php
include '../lib/connect.php';
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
  <link rel="stylesheet" href="CSS/style_index_admin.css">
  <link rel="icon" href="image/league.png">
</head>


<header>
	<?php
		include 'lib/connexion.php';
	?>
</header>

<body>
<nav>
      <ul>
        <li>
          <a href="lib/Rune_admin.php">Runes</a>
          <span></span><span></span><span></span><span></span>
        </li>
        <li>
          <a href="lib/Build_admin.php">Build</a>
          <span></span><span></span><span></span><span></span>
        </li>
        <li>
          <a href="lib/Items_admin.php">Items</a>
          <span></span><span></span><span></span><span></span>
        </li>
        <li>
          <a href="lib/Sort_admin.php">Sorts</a>
          <span></span><span></span><span></span><span></span>
        </li>
      </ul>
    </nav>
</body>

<footer>
  <a href="index_admin.php?action=disconnect">Deconnexion</a>
  <a href="../index.php" >Retourner à l'accueil</a>
</footer>
</html>


<?php
include '../lib/disconnect.php';
?>