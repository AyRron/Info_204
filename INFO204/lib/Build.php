

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Build</title>
    <link rel="stylesheet" href="../CSS/style_index.css">
</head>
<body>
    
<div>
    <?php
        include 'connect.php';
        include 'Build.crud.php';

        if(isset($_GET)){
            if(isset($_GET["id"])){
                $nom = $_GET['id'];
                print_r($nom);
            }
        }
        echo("\n");
        var_dump($champ=champ_info_nom($conn, $nom));

        echo($champ['Nom_Champ']);
        /*
        echo("<table>\n");
        
        foreach($champ as $key => $value){
            if($key == "Nom_Champ"){
                echo("\t<tr>$value</tr>\n");

            } elseif($key == "Rune_f" || $key == "S1"){
                echo("\t<tr>");
                if($key == "Rune_f"){
                    echo("<td>$value</td>");
                } else{
                    echo("<td>$value</td></tr>\n");
                }
            
            } elseif($key == "F1" || $key == "S2"){
                echo("\t<tr>");
                if($key == "F1"){
                    echo("<td>$value</td>");
                } else{
                    echo("<td>$value</td></tr>\n");
                }

            }elseif($key == "F2" || $key == "sup1")
            echo("<h2> clef : $key, valeur : $value</h2>\n");
        }
        */

        include 'disconnect.php';
    ?>



</div>

<footer>
<p><a href="../index.php" >Retourner a l'acceuil</a></p>
<p><a href="./Champ_select.php" >Retourner a l'écran de sélection du champion</a></p>
</footer>

</body>

</html>