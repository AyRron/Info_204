
<?php

/*2−Executiondelarequete*/
$result=mysqli_query($conn,"SELECT * FROM `utilisateur`");

/*3−Iterationsurlesresultats*/
echo("<table>");
echo("<tr>");
echo("<td>Nom</td>");
echo("<td>Prénom</td>");
echo("<td>Pays</td>");
echo("<td>Rang</td>");
echo("</tr>");
echo("\n");

while($row = mysqli_fetch_assoc($result)){
    echo("<tr>");
    echo("<td>$row[nom]</td>");
    echo("<td>$row[prenom]</td>");
    echo("<td>$row[pays]</td>");
    echo("<td>$row[rang]</td>");
    
    echo("</tr>");
    echo("\n");
    }

echo("</table>");
?>
