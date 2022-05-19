<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Sort_admin</title>
  <link rel="stylesheet" href="../CSS/style_index.css">
  <link rel="icon" href="../image/league.png">
</head>
<body>
<header>
	<a href="../index_admin.php?action=disconnect">Deconnexion</a>
	<a href="../index_admin.php">Retour à la page d'accueil</a>
    <?php
    include '../../lib/connect.php';
	include 'Sort.crud.php';
    ?>
    <h1>Toutes les Runes : </h1>
</header>


<form method="post" action="Sort_admin.php">
	Créer une nouvelle Rune :  
	<table>
		<tr>
			<td>Nom : </td>
			<td><input type="text" name="nom_create"></td>
		</tr>
		<tr>
			<td>Ordre_Sorts : </td>
			<td><input type="text" name="a"></td>
            <td><input type="text" name="b"></td>
            <td><input type="text" name="c"></td>
            <td><input type="text" name="d"></td>
            <td><input type="text" name="e"></td>
            <td><input type="text" name="f"></td>
            <td><input type="text" name="g"></td>
            <td><input type="text" name="h"></td>
            <td><input type="text" name="i"></td>
            <td><input type="text" name="j"></td>
            <td><input type="text" name="k"></td>
            <td><input type="text" name="l"></td>
            <td><input type="text" name="m"></td>
            <td><input type="text" name="n"></td>
            <td><input type="text" name="o"></td>
            <td><input type="text" name="p"></td>
            <td><input type="text" name="q"></td>
            <td><input type="text" name="r"></td>
		</tr>
	</table>

	<input type="submit" value="Créer">
	</form>
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



	<form method="post" action="Sort_admin.php">
	Modifier une Rune :
	<table>
		<tr>
			<td>Id et Nom : </td>
			<td><input type="number" name="id_mod"></td>
			<td><input type="text" name="nom_mod"></td>
		</tr>
        <tr>
			<td>Ordre_Sorts : </td>
			<td><input type="text" name="a"></td>
            <td><input type="text" name="b"></td>
            <td><input type="text" name="c"></td>
            <td><input type="text" name="d"></td>
            <td><input type="text" name="e"></td>
            <td><input type="text" name="f"></td>
            <td><input type="text" name="g"></td>
            <td><input type="text" name="h"></td>
            <td><input type="text" name="i"></td>
            <td><input type="text" name="j"></td>
            <td><input type="text" name="k"></td>
            <td><input type="text" name="l"></td>
            <td><input type="text" name="m"></td>
            <td><input type="text" name="n"></td>
            <td><input type="text" name="o"></td>
            <td><input type="text" name="p"></td>
            <td><input type="text" name="q"></td>
            <td><input type="text" name="r"></td>
		</tr>
	</table>

	<input type="submit" value="Modifier">
	</form>
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



<form method="post" action="Sort_admin.php">
	Supprimer un ordre de Sort :
	<table>
		<tr>
			<td>Nom : </td>
			<td><input type="text" name="nom_sup"></td>
		</tr>
	</table>

	<input type="submit" value="Supprimer">
	</form>
	<?php
	if (isset($_POST["nom_sup"])) {
		$nom = $_POST["nom_sup"];
		delete_sort($conn, $id);
		}
	?>




<form method="post" action="Sort_admin.php">
	Affiche un ordre de Sort :
	<table>
		<tr>
			<td>Nom : </td>
			<td><input type="text" name="nom_search"></td>
		</tr>
	</table>

	<input type="submit" value="Rechercher">
	</form>
	<?php
	if (isset($_POST["nom_search"])) {
		$nom = $_POST["nom_search"];
		affiche_sort($conn, $nom);
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