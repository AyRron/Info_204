

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Build</title>
    <link rel="stylesheet" href="../CSS/style_index.css">
</head>
<body>
    

<?php
    include 'connect.php';
    include 'Build.crud.php';

    if(isset($_GET)){
        if(isset($_GET["id"])){
            $nom = $_GET['id'];
        }
    }
    
    $champ=champ_info_nom($conn, $nom);
    
    
    echo("<table>\n");
    echo("\t<tr>$nom</tr>\n");
    echo("</table>\n");


    echo("<table>\n");
    foreach($champ as $key => $value){
        if($key == "Rune_f" ){
            echo("\t<tr>\n");
            echo("\t<td>\n");
            echo("$value\n");
         
        } elseif($key == "F3" ){
            echo("$value");
            echo("\t</tr>\n");
            
        } elseif($key == "S1" || $key == "S2" ){
            if($key == "S1"){
                echo("\t<td>\n");
                echo("\t<tr>\n");
                echo("$value\n");
            }else{
                echo("$value\n");
                echo("\t</tr>\n");
            }

        } elseif($key == "S1" || $key == "S2" ){
            if($key == "sup1"){
                echo("\t<tr>\n");
                echo("$value\n");
            }elseif($key == "sup2"){
                echo("$value\n");
            }else{
                echo("$value\n");
                echo("\t</tr>\n");
                echo("\t</td>\n");
            }
        

        } elseif($key == "id" || $key == "Nom_Champ" ){
            
        } else{
            echo("$value\n");
        }
        
    } 


    include 'disconnect.php';
?>





<footer>
<p><a href="../index.php" >Retourner a l'acceuil</a></p>
<p><a href="./Champ_select.php" >Retourner a l'écran de sélection du champion</a></p>
</footer>

</body>

</html>