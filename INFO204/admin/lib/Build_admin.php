<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Build_admin</title>
  <link rel="stylesheet" href="../CSS/style_index.css">
</head>

<body>
<header>
    <?php
    include '../../lib/connect_uwamp.php'
    ?>
    <h1>Tous les Builds : </h1>
</header>


<form method="post" action="Build_admin.php">
	Ajouter un nouveau Build :  
	<table>
		<tr>
			<td>Nom : </td>
			<td><input type="str" name="nom"></td>
		</tr>
		<tr>
			<td>Runes Fondamentales : </td>
			<td><input type="str" name="Rune_f"></td>
			<td><input type="str" name="F1"></td>
			<td><input type="str" name="F2"></td>
			<td><input type="str" name="F3"></td>
		</tr>
		<tr>
			<td>Runes Secondaires : </td>
			<td><input type="str" name="S1"></td>
			<td><input type="str" name="S2"></td>
		</tr>
		<tr>
			<td>Ajustements : </td>
			<td><input type="int" name="sup1"></td>
			<td><input type="str" name="sup2"></td>
			<td><input type="str" name="sup3"></td>
		</tr>
	</table>

	<input type="submit" value="Créer">
	</form>



	<?php
	include 'Build.crud.php';

	if (isset($_POST["nom"])) {

		$nom = $_POST["nom"];
		$rune = $_POST["Rune_f"];
		$f1 = $_POST["F1"];
		$f2 = $_POST["F2"];
		$f3 = $_POST["F3"];
		$s1 = $_POST["S1"];
		$s2 = $_POST["S2"];
		$sup1 = $_POST["sup1"];
		$sup2 = $_POST["sup2"];
		$sup3 = $_POST["sup3"];

		create_build($conn, $nom, $rune, $f1, $f2, $f3, $s1, $s2, $sup1, $sup2, $sup3);
		}

	$result=mysqli_query($conn,"SELECT * FROM `build`");
		
		echo("<table>");
		echo("<tr>");
		echo("<td>Nom Du Champion : </td>");
		echo("<td>Runes Fondamentales : </td>");
		echo("<td>Runes Secondaires : </td>");
		echo("<td>Ajustements : </td>");
		echo("</tr>");
		
		while($row = mysqli_fetch_assoc($result)){
			echo("<tr>");
			echo("<td>$row[Nom_Champ] </td>");
			echo("<td>$row[Rune_f] $row[F1] $row[F2] $row[F3]</td>");
			echo("<td>$row[S1] $row[S2]</td>");
			echo("<td>$row[sup1] $row[sup2] $row[sup3]</td>");
			echo("</tr>");
		}
		echo("</table>");
	?>
</body>

</html>