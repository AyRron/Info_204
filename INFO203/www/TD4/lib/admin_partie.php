<?php
session_start() ;

if(!$_SESSION["admin"]){
	header("Location: admin_form_partie.php") ; 
} 
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Admin_partie</title>
  <link rel="stylesheet" href="../CSS/style_index.css">
  <script src=""></script>
</head>


<header>
	<?php
		include 'connexion.php';
	?>
</header>



<body>
	<h2>Page d'admin des Parties</h2>


	<form method="post" action="admin_partie.php">
	déplacer la pièce : 
	<table>
		<tr>
			<td>Blanc</td>
			<td><input type="str" name="blanc"></td>
		</tr>
		<tr>
			<td>Noir</td>
			<td><input type="str" name="noir"></td>
		</tr>
		<tr>
			<td>Score Blanc</td>
			<td><input type="int" name="rb"></td>
		</tr>
		<tr>
			<td>Score Noir</td>
			<td><input type="int" name="rn"></td>
		</tr>
		<tr>
			<td>Année</td>
			<td><input type="int" name="annee"></td>
		</tr>
	</table>

	<input type="submit" value="Créer">
	</form>


	<?php
		include 'partie.crud.php';

		if (isset($_POST["blanc"])) {

		$blanc = $_POST["blanc"];
		$noir = $_POST["noir"];
		$rb = $_POST["rb"];
		$rn = $_POST["rn"];
		$annee = $_POST["annee"];

		create_par($conn, $blanc, $noir, $rb, $rn, $annee);
		}

		
    /*2−Executiondelarequete*/
    $result=mysqli_query($conn,"SELECT * FROM `partie`");

    /*3−Iterationsurlesresultats*/
    echo("<table>");
    echo("<tr>");
    echo("<td>Partie #</td>");
    echo("<td>Blancs</td>");
    echo("<td>Résultat</td>");
    echo("<td>Noirs</td>");
    echo("<td>Commentaire</td>");
    echo("</tr>");
    echo("\n");

    while($row = mysqli_fetch_assoc($result)){
        echo("<tr>");
        echo("<td>$row[id]</td>");
        echo("<td>$row[blanc]</td>");

        if ($row['rn'] == $row['rb']){
            echo("<td>½ - ½</td>");
            echo("<td>$row[noir]</td>");
            echo("<td>Partie nulle</td>");

        } else if ($row['rn'] > $row['rb']) {
            echo("<td>$row[rb] - $row[rn]</td>");
            echo("<td>$row[noir]</td>");
            echo("<td>$row[noir] a gagné la partie</td>");

        } else {
            echo("<td>$row[rb] - $row[rn]</td>");
            echo("<td>$row[noir]</td>");
            echo("<td>$row[blanc] a gagné la partie</td>");
        }
        
        echo("</tr>");
        echo("\n");
        }

    echo("</table>");
	?>	
</body>

<footer>
	<a href="../index.php?action=disconnect">
	Deconnexion
	</a>
</footer>

</html>

