<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Build</title>
    <link rel="stylesheet" href="../CSS/style_index.css">
    <link rel="icon" href="../image/league.png">
</head>
<body>
    

<?php
    include 'connect_uwamp.php';
    include 'Build.crud.php';

    if(isset($_GET)){
        if(isset($_GET["id"])){
            $nom = $_GET['id'];
        }
    }
    
    $champ=champ_info_nom($conn, $nom);
    
    
    echo("<table>\n");
    echo("<tr>\n");
    echo("$nom\n");
    echo("</tr>\n");
    echo("</table>\n");


    echo("<table>\n");
    foreach($champ as $key => $value){
        if($key == "Rune_f" ){
            echo("<tr>\n");
            echo("<th rowspan='2'>\n");
            echo("$value\n");
         
        } elseif($key == "F3" ){
            echo("$value\n");
            echo("</th>\n");
            
            
        } elseif($key == "S1" || $key == "S2" ){
            if($key == "S1"){
                echo("<td>\n");
                echo("$value\n");
            }else{
                echo("$value\n");
                echo("</td>\n");
                echo("</tr>\n");
            }

        } elseif($key == "sup1" || $key == "sup3" ){
            if($key == "sup1"){
                echo("<tr>\n");
                echo("<td>\n");
                echo("$value\n");
            }else{
                echo("$value\n");
                echo("</td>\n");
                echo("</tr>\n");
            }
        

        } elseif($key == "id" || $key == "Nom_Champ" ){
            
        } else{
            echo("$value\n");
        }
        
    } 
    echo("</table>");


    include 'disconnect.php';
?>





<footer>
<p><a href="../index.php" >Retourner a l'acceuil</a></p>
<p><a href="./Champ_select.php" >Retourner a l'écran de sélection du champion</a></p>
</footer>

</body>

</html>