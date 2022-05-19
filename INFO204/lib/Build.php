<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Build</title>
    <link rel="stylesheet" href="../CSS/style_index.css">
    <link rel="icon" href="../image/league.png">
</head>


<header>
<nav class="navigation">
  <a href="../index.php" class="logo-lien">
    <img src="../image/logo.png" alt="Logo" class="logo-image">
  </a>
  <div class="liens">
    <a href="Item.php" class="nav-lien">Items</a>
    <a href="Rune.php" class="nav-lien">Runes</a>
    <a href="Champ_select.php" class="nav-lien">Champions</a>
  </div>
</nav>
</header>

<body>
<?php
    include 'connect.php';
    include '../admin/lib/Build.crud.php';
    include '../admin/lib/Items.crud.php';

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
            echo("<img src='../image/runes/$value.webp'>\n");
            $nom_item=str_replace("_", " ", $value);
            echo("<p>$nom_item</p>\n");
         
        } elseif($key == "F3" ){
            echo("<img src='../image/runes/$value.webp'>\n");
            $nom_item=str_replace("_", " ", $value);
            echo("<p>$nom_item</p>\n");
            echo("</th>\n");
            
            
        } elseif($key == "S1" || $key == "S2" ){
            if($key == "S1"){
                echo("<th>\n");
                echo("<img src='../image/runes/$value.webp'>\n");
                $nom_item=str_replace("_", " ", $value);
                echo("<p>$nom_item</p>\n");
            }else{
                echo("<img src='../image/runes/$value.webp'>\n");
                $nom_item=str_replace("_", " ", $value);
                echo("<p>$nom_item</p>\n");
                echo("</th>\n");
                echo("</tr>\n");
            }

        } elseif($key == "sup1" || $key == "sup2"|| $key == "sup3" ){
            if($key == "sup1"){
                echo("<tr>\n");
                echo("<th>\n");
                echo("<img class='petit' src='../image/runes/$value.webp'>\n");
                $nom_item=str_replace("_", " ", $value);
                echo("<p>$nom_item</p>\n");
            }elseif($key == "sup3"){
                echo("<img class='petit' src='../image/runes/$value.webp'>\n");
                $nom_item=str_replace("_", " ", $value);
                echo("<p>$nom_item</p>\n");
                echo("</th>\n");
                echo("</tr>\n");
			}else{
                echo("<img class='petit' src='../image/runes/$value.webp'>\n");
				$nom_item=str_replace("_", " ", $value);
				echo("<p>$nom_item</p>\n");
            }
        
        

        } elseif($key == "id" || $key == "Nom_champ" ){
            
        } else{
            echo("<img src='../image/runes/$value.webp'>\n");
            $nom_item=str_replace("_", " ", $value);
            echo("<p>$nom_item</p>\n");
        }
        
    } 
echo("</table>\n");
	














$champ_item=affiche_item_nom($conn, $nom);

 echo("<table>\n");
    foreach($champ_item as $key => $value){

        if($key == "starting_item"){
            echo("<tr>\n");
            echo("<th>\n");
            echo("<img src='../image/items/starter_item/$value.webp'>\n");
            $nom_item=str_replace("_", " ", $value);
            echo("<p>$nom_item</p>\n");
            echo("</th>\n");
         
        } elseif($key == "bottes" ){
            echo("<th>\n");
            echo("<img src='../image/items/bottes/$value.webp'>\n");
            $nom_item=str_replace("_", " ", $value);
            echo("<p>$nom_item</p>\n");
            echo("</th>\n");
            echo("</tr>\n");
            
        } elseif($key == "mythique" || $key == "core1" || $key == "core2" ){
            if($key == "mythique"){
                echo("<tr>\n");
                echo("<th>\n");
                echo("<img src='../image/items/TOUT/$value.webp'>\n");
                $nom_item=str_replace("_", " ", $value);
                echo("<p>$nom_item</p>\n");
                echo("</th>");
            } elseif($key == "core1"){
                echo("<th>\n");
                echo("<img src='../image/items/TOUT/$value.webp'>\n");
                $nom_item=str_replace("_", " ", $value);
                echo("<p>$nom_item</p>\n");
                echo("</th>\n");               
            } else{
                echo("<th>\n");
                echo("<img src='../image/items/TOUT/$value.webp'>\n");
                $nom_item=str_replace("_", " ", $value);
                echo("<p>$nom_item</p>\n");
                echo("</th>\n"); 
				echo("</tr>\n");
            }

        } elseif($key == "option1" || $key == "option2" || $key == "option3" ){
            if($key == "option1	"){
                echo("<tr>\n");
                echo("<th>\n");
                echo("<img src='../image/items/TOUT/$value.webp'>\n");
                $nom_item=str_replace("_", " ", $value);
                echo("<p>$nom_item</p>\n");
                echo("</th>\n");
            } elseif($key == "option3"){
                echo("<th>\n");
                echo("<img src='../image/items/TOUT/$value.webp'>\n");
                $nom_item=str_replace("_", " ", $value);
                echo("<p>$nom_item</p>\n");
                echo("</th>\n");
                echo("</tr>\n");
            } else{
                echo("<th>\n");
                echo("<img src='../image/items/TOUT/$value.webp'>\n");
                $nom_item=str_replace("_", " ", $value);
                echo("<p>$nom_item</p>\n");
                echo("</th>\n");
            }
        }
    }
echo("</table>\n");   

echo("<p><strong>Ordre des sorts à ameliorer : </strong></p>\n");
echo("<img class='sorts' src='../image/sorts/$nom.png'>\n");

include 'disconnect.php';

?>
</body>


<footer>
<p><a href="../index.php">Retourner à l'accueil</a> - <a href="Champ_select.php">Retourner a l'écran de sélection du champion</a></p>
</footer>



</html>