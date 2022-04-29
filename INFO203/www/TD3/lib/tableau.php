
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>tableau</title>
  <link rel="stylesheet" href="">
  <script src=""></script>
</head>


<header>
</header>


<body>
<?php

$colonne = ["A","B","C","D","E","F","G","H"];
$mysql_host="localhost";
$mysql_user="l2";
$mysql_pass="L2";
$mysql_db="Cyril";

$sql = "SELECT * FROM `mouvement` WHERE 1";

if (!$rs = mysqli_query($conn,$sql)){


} else { 

	echo("<table>");
	echo("<tr>");
	echo("<td>Coup</td><td>Pièce</td><td>Colonne</td><td>Ligne</td><td>Colonne</td><td>Ligne</td>");
	echo("</tr>\n");
	while($row = mysqli_fetch_array($rs)){
		echo("<tr>");
		$id = $row["id"];
		$piece = $row["pièce"];
		$xi = $row["xi"] + 1;
		$yi = $colonne[$row["yi"]];
		$xf = $row["xf"] + 1;
		$yf = $colonne[$row["yf"]];
		
		echo("<td>$id</td><td>$piece</td><td>$yi</td><td>$xi</td><td>$yf</td><td>$xf</td>");
		
		echo("</tr>\n");

	}

	echo("</table>");
}



    


?>
</body>


<footer>
</footer>
</html>













