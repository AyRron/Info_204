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
    include 'connect.php';
    include 'Build.crud.php';
    include '../admin/'

    if(isset($_GET)){
        if(isset($_GET["id"])){
            $nom = $_GET['id'];
        }
    }
    
    $champ_build=champ_info_nom($conn, $nom);
    
    
    echo("<table>\n");
    echo("<tr>\n");
    echo("$nom\n");
    echo("</tr>\n");
    echo("</table>\n");


    echo("<table>\n");
    foreach($champ_build as $key => $value){
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
        

        } elseif($key == "id" || $key == "Nom_champ" ){
            
        } else{
            echo("$value\n");
        }
        
    } 
    echo("</table>");
	


















 echo("<table>\n");
    foreach($champ as $key => $value){
        if($key == "mythique" ){
            echo("<tr>\n");
            echo("<th rowspan='2'>\n");
            echo("$value\n");
         
        } elseif($key == "bottes" ){
            echo("$value\n");
            echo("</th>\n");
            
            
        } elseif($key == "core1" || $key == "core2" ){
            if($key == "core1"){
                echo("<td>\n");
                echo("$value\n");
            }else{
                echo("$value\n");
                echo("</td>\n");
                echo("</tr>\n");
            }

        } elseif($key == "option1" || $key == "option2" ){
            if($key == "option1	"){
                echo("<tr>\n");
                echo("<td>\n");
                echo("$value\n");
            }else{
                echo("$value\n");
                echo("</td>\n");
                echo("</tr>\n");
            }
    
    
            echo("</table>");

        } elseif($key == "id" || $key == "nom" ){
            
        } else{
            echo("$value\n");
        }

if ($nom=="Aatrox"){
	echo('<html><img class="sorts" src="../image/sorts/Aatrox.png"></html>');
}
elseif ($nom=="Cho_Gath"){
	echo('<html><img class="sorts" src="../image/sorts/Cho_gath.png"></html>');
}
elseif ($nom=="Garen"){
	echo('<html><img class="sorts" src="../image/sorts/Garen.png"></html>');
}
elseif ($nom=="Sett"){
	echo('<html><img class="sorts" src="../image/sorts/Sett.png"></html>');
}


elseif ($nom=="Kayn"){
	echo('<html><img class="sorts" src="../image/sorts/Kayn.png"></html>');
}
elseif ($nom=="Lee_Sin"){
	echo('<html><img class="sorts" src="../image/sorts/Lee_Sin.png"></html>');
}
elseif ($nom=="Graves"){
	echo('<html><img class="sorts" src="../image/sorts/Graves.png"></html>');
}
elseif ($nom=="Elise"){
	echo('<html><img class="sorts" src="../image/sorts/Elise.png"></html>');
}


elseif ($nom=="Aurelion_Sol"){
	echo('<html><img class="sorts" src="../image/sorts/Aurelion_Sol.png"></html>');
}
elseif ($nom=="Heimerdinger"){
	echo('<html><img class="sorts" src="../image/sorts/Heimerdinger.png"></html>');
}
elseif ($nom=="Katarina"){
	echo('<html><img class="sorts" src="../image/sorts/Katarina.png"></html>');
}
elseif ($nom=="Vladimir"){
	echo('<html><img class="sorts" src="../image/sorts/Vladimir.png"></html>');
}


elseif ($nom=="Ashe"){
	echo('<html><img class="sorts" src="../image/sorts/Ashe.png"></html>');
}
elseif ($nom=="Jinx"){
	echo('<html><img class="sorts" src="../image/sorts/Jinx.png"></html>');
}
elseif ($nom=="Kalista"){
	echo('<html><img class="sorts" src="../image/sorts/Kalista.png"></html>');
}
elseif ($nom=="Miss_Fortune"){
	echo('<html><img class="sorts" src="../image/sorts/Miss_Fortune.png"></html>');
}


elseif ($nom=="Brand"){
	echo('<html><img class="sorts" src="../image/sorts/Brand.png"></html>');
}
elseif ($nom=="Leona"){
	echo('<html><img class="sorts" src="../image/sorts/Leona.png"></html>');
}
elseif ($nom=="Morgana"){
	echo('<html><img class="sorts" src="../image/sorts/Morgana.png"></html>');
}
elseif ($nom=="Thresh"){
	echo('<html><img class="sorts" src="../image/sorts/Thresh.png"></html>');
}


    include 'disconnect.php';
?>



<footer>
<p><a href="../index.php">Retourner à l'accueil</a> - <a href="Champ_select.php">Retourner a l'écran de sélection du champion</a>
</footer>

</body>

</html>