


<body>
<?php

$liste = array("n"=>"&#9823","b"=>"&#9817","Rn"=>"&#9820","Nn"=>"&#9822","Bn"=>"&#9821","Kn"=>"&#9818","Qn"=>"&#9819","Rb"=>"&#9814","Nb"=>"&#9816","Bb"=>"&#9815","Kb"=>"&#9812","Qb"=>"&#9813");

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
		$xi = 8 - $row["xi"];
		$yi = $colonne[$row["yi"]];
		$xf = 8 - $row["xf"];
		$yf = $colonne[$row["yf"]];
		
		echo("<td>$id</td><td>$liste[$piece]</td><td>$yi</td><td>$xi</td><td>$yf</td><td>$xf</td>");
		
		echo("</tr>\n");

	}

	echo("</table>");

	include 'chess_fct.php';

}



    


?>















