

<?php

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

