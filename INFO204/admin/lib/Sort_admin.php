<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Sort_admin</title>
  <link rel="stylesheet" href="../CSS/style_index.css">
  <link rel="icon" href="../image/league.png">
</head>

<body>
<header class="header_admin">
	<a href="../index_admin.php?action=disconnect">Deconnexion</a>
	<a href="../index_admin.php">Retour à la page d'accueil</a>
    <?php
    include '../../lib/connect.php';
	include 'Sort.crud.php';
    ?>
    <h1>Toutes les Runes : </h1>
</header>


<section id="newsort">
      <div class="container">
        <div class="title">
          <h3>Créer un nouvel ordre de Sort : </h3>
        </div>
        <form method="post" action="Sort_admin.php">
            <div class="nom">
                <input type="text" name="nom_create">
            </div>
            <div class="ordre">
            <input type="text" name="a">
            <input type="text" name="b">
            <input type="text" name="c">
            <input type="text" name="d">
            <input type="text" name="e">
            <input type="text" name="f">
            <input type="text" name="g">
            <input type="text" name="h">
            <input type="text" name="i">
            <input type="text" name="j">
            <input type="text" name="k">
            <input type="text" name="l">
            <input type="text" name="m">
            <input type="text" name="n">
            <input type="text" name="o">
            <input type="text" name="p">
            <input type="text" name="q">
            <input type="text" name="r">
          </div>
          <div class="create">
            <input type="submit" value="Créer" />
          </div>
          </form>
      </div>
</section>
			
	<?php
	if (isset($_POST["nom_create"])) {

		$nom = $_POST["nom_create"];
		$a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];
        $d = $_POST["d"];
        $e = $_POST["e"];
        $f = $_POST["f"];
        $g = $_POST["g"];
        $h = $_POST["h"];
        $i = $_POST["i"];
        $j = $_POST["j"];
        $k = $_POST["k"];
        $l = $_POST["l"];
        $m = $_POST["m"];
        $n = $_POST["n"];
        $o = $_POST["o"];
        $p = $_POST["p"];
        $q = $_POST["q"];
        $r = $_POST["r"];

		create_sort($conn, $nom, $a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m, $n, $o,$p, $q, $r);
		}
	?>


<section id="updatesort">
	<div class="container">
		<div class="title">
			<h3>Modifier ordre de Sort :</h3>
		</div>
		<form method="post" action="Sort_admin.php">
			<div class="idnom">
			<input type="number" name="id_mod">
			<input type="text" name="nom_mod">
			</div>

            <div class="ordre">
            <input type="text" name="a">
            <input type="text" name="b">
            <input type="text" name="c">
            <input type="text" name="d">
            <input type="text" name="e">
            <input type="text" name="f">
            <input type="text" name="g">
            <input type="text" name="h">
            <input type="text" name="i">
            <input type="text" name="j">
            <input type="text" name="k">
            <input type="text" name="l">
            <input type="text" name="m">
            <input type="text" name="n">
            <input type="text" name="o">
            <input type="text" name="p">
            <input type="text" name="q">
            <input type="text" name="r">
          </div>
		<div class="update">
			<input type="submit" value="Modifier">
		</div>
	</form>
	</div>
</section>

	<?php
	if (isset($_POST["id_mod"])) {
		$id =$_POST["id_mod"];
		$nom = $_POST["nom_mod"];
        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];
        $d = $_POST["d"];
        $e = $_POST["e"];
        $f = $_POST["f"];
        $g = $_POST["g"];
        $h = $_POST["h"];
        $i = $_POST["i"];
        $j = $_POST["j"];
        $k = $_POST["k"];
        $l = $_POST["l"];
        $m = $_POST["m"];
        $n = $_POST["n"];
        $o = $_POST["o"];
        $p = $_POST["p"];
        $q = $_POST["q"];
        $r = $_POST["r"];
		update_sort($conn, $id, $nom, $a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m, $n, $o,$p, $q, $r);
		}
	?>




<section id="deletesort">
	<div class="container">
		<div class="title">
			<h3>Supprimer un ordre de Sort :</h3>
		</div>
		<form method="post" action="Sort_admin.php">
			<div class="nom">
				<input type="text" name="nom_sup" placeholder="Nom...">
			</div>

        <div class="delete">
		<input type="submit" value="Supprimer">
		</div>
	</form>
	</div>
</section>



	<?php
	if (isset($_POST["nom_sup"])) {
		$nom = $_POST["nom_sup"];
		delete_sort($conn, $id);
		}
	?>

<section id="searchsort">
	<div class="container">
		<div class="title">
			<h3>Cherche un ordre de Sort ::</h3>
		</div>
		<form method="post" action="Sort_admin.php">
			<div class="nom">
				<input type="text" name="nom_search" placeholder="Nom...">
			</div>

			<div class="search">
			<input type="submit" value="Chercher">
			</div>
		</form>
	</div>
</section>

	<?php
	if (isset($_POST["nom_search"])) {
		$nom = $_POST["nom_search"];
        $result=mysqli_query($conn,"SELECT * FROM `sort` WHERE `nom`='$nom'");

        echo("<table>");
		echo("<tr>");
    	echo("<td>Id de l'Ordre des Sorts : </td>");
		echo("<td>Nom du Champion : </td>");
		echo("<td>Ordre des Sorts : </td>");
		echo("</tr>");
		
		while($row = mysqli_fetch_assoc($result)){
			echo("<tr>");
			echo("<td>$row[id]</td>");
			echo("<td>$row[Nom]</td>");
			echo("<td>$row[1] $row[2]$row[3]$row[4]$row[5]
                $row[6]$row[7]$row[8]$row[9]$row[10]
                $row[11]$row[12]$row[13]$row[14]$row[15]
                $row[16]$row[17]$row[18]</td>");
			echo("</tr>");
		}
		echo("</table>");


		}
	?>



	<?php

	$result=mysqli_query($conn,"SELECT * FROM `sort`");
		
		echo("<table>");
		echo("<tr>");
    	echo("<td>Id de l'Ordre des Sorts : </td>");
		echo("<td>Nom du Champion : </td>");
		echo("<td>Ordre des Sorts : </td>");
		echo("</tr>");
		
		while($row = mysqli_fetch_assoc($result)){
			echo("<tr>");
			echo("<td>$row[id]</td>");
			echo("<td>$row[Nom]</td>");
			echo("<td>$row[1] $row[2]$row[3]$row[4]$row[5]
                $row[6]$row[7]$row[8]$row[9]$row[10]
                $row[11]$row[12]$row[13]$row[14]$row[15]
                $row[16]$row[17]$row[18]</td>");
			echo("</tr>");
		}
		echo("</table>");
	?>
</body>


<footer>
	
</footer>
</html>