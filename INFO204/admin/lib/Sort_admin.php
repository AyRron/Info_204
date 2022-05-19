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
</header>


<section id="newsort">
      <div class="container">
        <div class="title">
          <h3>Créer un nouvel ordre de Sort : </h3>
        </div>
        <form method="post" action="Sort_admin.php">
            <div class="nom">
                <input type="text" name="nom_create" placeholder="Nom...">
            </div>
            <div class="ordre1">
            <input type="text" name="a" placeholder="1er">
            <input type="text" name="b" placeholder="2ème">
            <input type="text" name="c" placeholder="3ème">
            <input type="text" name="d" placeholder="4ème">
            </div>
            <div class="ordre2">
            <input type="text" name="e" placeholder="5ème">
            <input type="text" name="f" placeholder="6ème">
            <input type="text" name="g" placeholder="7ème">
            <input type="text" name="h" placeholder="8ème">
            </div>
            <div class="ordre3">
            <input type="text" name="i" placeholder="9ème">
            <input type="text" name="j" placeholder="10ème">
            <input type="text" name="k" placeholder="11ème">
            <input type="text" name="l" placeholder="12ème">
            </div>
            <div class="ordre4">
            <input type="text" name="m" placeholder="13ème">
            <input type="text" name="n" placeholder="14ème">
            <input type="text" name="o" placeholder="15ème">
            <input type="text" name="p" placeholder="16ème">
            </div>
            <div class="ordre5">
            <input type="text" name="q" placeholder="17ème">
            <input type="text" name="r" placeholder="18ème">
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
			  <input type="number" name="id_mod" placeholder="id">
			  <input type="text" name="nom_mod" placeholder="Nom...">
      </div>
        <div class="ordre1">
          <input type="text" name="a" placeholder="1er">
          <input type="text" name="b" placeholder="2ème">
          <input type="text" name="c" placeholder="3ème">
          <input type="text" name="d" placeholder="4ème">
        </div>
        <div class="ordre2">
          <input type="text" name="e" placeholder="5ème">
          <input type="text" name="f" placeholder="6ème">
          <input type="text" name="g" placeholder="7ème">
          <input type="text" name="h" placeholder="8ème">
        </div>
        <div class="ordre3">
          <input type="text" name="i" placeholder="9ème">
          <input type="text" name="j" placeholder="10ème">
          <input type="text" name="k" placeholder="11ème">
          <input type="text" name="l" placeholder="12ème">
        </div>
        <div class="ordre4">
          <input type="text" name="m" placeholder="13ème">
          <input type="text" name="n" placeholder="14ème">
          <input type="text" name="o" placeholder="15ème">
          <input type="text" name="p" placeholder="16ème">
        </div>
        <div class="ordre5">
          <input type="text" name="q" placeholder="17ème">
          <input type="text" name="r" placeholder="18ème">
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
			<h3>Chercher un ordre de Sort :</h3>
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
			echo("<td>$row[1]$row[2]$row[3]$row[4]$row[5]$row[6]$row[7]$row[8]$row[9]$row[10]$row[11]$row[12]$row[13]$row[14]$row[15]$row[16]$row[17]$row[18]</td>");
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