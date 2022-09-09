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
    include 'connect_uwamp.php';
    include '../admin/lib/Build.crud.php';
    include '../admin/lib/Items.crud.php';
    include '../admin/lib/Sort.crud.php';

    if(isset($_GET)){
        if(isset($_GET["id"])){
            $nom = $_GET['id'];
        }
    }
?>

<div class="bld" id="runes">
<?php 
    $champ_build=champ_info_nom($conn, $nom);
    
    
    echo("<table>\n");
    echo("<tr>\n");
    echo("$nom\n");
    echo("</tr>\n");
    echo("</table>\n");


    echo("<table>");
    foreach($champ_build as $key => $value){
        if($key == "Rune_f" ){
            echo("<tr>");
            echo("<th rowspan='2'>");
            echo("<img src='../image/runes/$value.webp'>");
            $nom_item=str_replace("_", " ", $value);
            echo("<p>$nom_item</p>");
         
        } elseif($key == "F3" ){
            echo("<img src='../image/runes/$value.webp'>");
            $nom_item=str_replace("_", " ", $value);
            echo("<p>$nom_item</p>");
            echo("</th>");
            
            
        } elseif($key == "S1" || $key == "S2" ){
            if($key == "S1"){
                echo("<th>");
                echo("<img src='../image/runes/$value.webp'>");
                $nom_item=str_replace("_", " ", $value);
                echo("<p>$nom_item</p>");
            }else{
                echo("<img src='../image/runes/$value.webp'>");
                $nom_item=str_replace("_", " ", $value);
                echo("<p>$nom_item</p>");
                echo("</th>");
                echo("</tr>");
            }

        } elseif($key == "sup1" || $key == "sup2"|| $key == "sup3" ){
            if($key == "sup1"){
                echo("<tr>");
                echo("<th>");
                echo("<img class='petit' src='../image/runes/$value.webp'>");
                $nom_item=str_replace("_", " ", $value);
                echo("<p>$nom_item</p>");
            }elseif($key == "sup3"){
                echo("<img class='petit' src='../image/runes/$value.webp'>");
                $nom_item=str_replace("_", " ", $value);
                echo("<p>$nom_item</p>");
                echo("</th>");
                echo("</tr>");
			}else{
                echo("<img class='petit' src='../image/runes/$value.webp'>");
				$nom_item=str_replace("_", " ", $value);
				echo("<p>$nom_item</p>");
            }
        
        

        } elseif($key == "id" || $key == "Nom_champ" ){
            
        } else{
            echo("<img src='../image/runes/$value.webp'>");
            $nom_item=str_replace("_", " ", $value);
            echo("<p>$nom_item</p>");
        }
        
    } 
echo("</table>");
	
?>
</div>


<div class="bld" id="items">

<?php
$champ_item=affiche_item_nom($conn, $nom);

 echo("<table>");
    foreach($champ_item as $key => $value){

        if($key == "starting_item"){
            echo("<tr>");
            echo("<th>");
            echo("<img src='../image/items/starter_item/$value.webp'>");
            $nom_item=str_replace("_", " ", $value);
            echo("<p>$nom_item</p>");
            echo("</th>");
         
        } elseif($key == "bottes" ){
            echo("<th>");
            echo("<img src='../image/items/bottes/$value.webp'>");
            $nom_item=str_replace("_", " ", $value);
            echo("<p>$nom_item</p>");
            echo("</th>");
            echo("</tr>");
            
        } elseif($key == "mythique" || $key == "core1" || $key == "core2" ){
            if($key == "mythique"){
                echo("<tr>");
                echo("<th>");
                echo("<img src='../image/items/TOUT/$value.webp'>");
                $nom_item=str_replace("_", " ", $value);
                echo("<p>$nom_item</p>");
                echo("</th>");
            } elseif($key == "core1"){
                echo("<th>");
                echo("<img src='../image/items/TOUT/$value.webp'>");
                $nom_item=str_replace("_", " ", $value);
                echo("<p>$nom_item</p>");
                echo("</th>");               
            } else{
                echo("<th>");
                echo("<img src='../image/items/TOUT/$value.webp'>");
                $nom_item=str_replace("_", " ", $value);
                echo("<p>$nom_item</p>");
                echo("</th>"); 
				echo("</tr>");
            }

        } elseif($key == "option1" || $key == "option2" || $key == "option3" ){
            if($key == "option1	"){
                echo("<tr>");
                echo("<th>");
                echo("<img src='../image/items/TOUT/$value.webp'>");
                $nom_item=str_replace("_", " ", $value);
                echo("<p>$nom_item</p>");
                echo("</th>");
            } elseif($key == "option3"){
                echo("<th>");
                echo("<img src='../image/items/TOUT/$value.webp'>");
                $nom_item=str_replace("_", " ", $value);
                echo("<p>$nom_item</p>");
                echo("</th>");
                echo("</tr>");
            } else{
                echo("<th>\n");
                echo("<img src='../image/items/TOUT/$value.webp'>");
                $nom_item=str_replace("_", " ", $value);
                echo("<p>$nom_item</p>");
                echo("</th>");
            }
        }
    }
echo("</table>");   
?>
</div>

<div class="bld" id="sorts" >
<?php

$champ_sort=affiche_sort($conn,$nom);
echo("<table>");

echo("<tr>");
for ( $i = 1; $i < 19; $i++){
    echo("<th>nv°$i</th>");
}
echo("</tr>\n");

foreach($champ_sort as $key => $value){
    if($key == "Nom" ||$key == "id"){
    } else{
    echo("<th>$value</th>");
    }
}
echo("</table>");  

?>
</div>

<div id="matchups">
<?php
$counter_matchup=affiche_matchup_nom($conn, $nom);

 echo("<table>");	
    foreach($counter_matchup as $key => $value){
    
        if($key == "C1"){
			echo("<tr>");
            echo("<th>");
			echo("Pires matchups");
			echo("</th>");
			echo("<th>");
            echo("<img src='../image/champions/$value.webp'>");
            $nom_champ=str_replace("_", " ", $value);
            echo("<p>$nom_champ</p>");
            echo("</th>");
         
        } elseif($key == "C2" ){
            echo("<th>");
            echo("<img src='../image/champions/$value.webp'>");
            $nom_champ=str_replace("_", " ", $value);
            echo("<p>$nom_champ</p>");
            echo("</th>");
		
		} elseif($key == "C3" ){
            echo("<th>");
            echo("<img src='../image/champions/$value.webp'>");
            $nom_champ=str_replace("_", " ", $value);
            echo("<p>$nom_champ</p>");
			echo("</th>");
				
		} elseif($key == "M1" ){
            echo("<th>");
			echo("Meilleurs matchups");
			echo("</th>");
			echo("<th>");
            echo("<img src='../image/champions/$value.webp'>");
            $nom_champ=str_replace("_", " ", $value);
            echo("<p>$nom_champ</p>");
            echo("</th>");
			
		} elseif($key == "M2" ){
            echo("<th>");
            echo("<img src='../image/champions/$value.webp'>");
            $nom_champ=str_replace("_", " ", $value);
            echo("<p>$nom_champ</p>");
            echo("</th>");
			
		} elseif($key == "M3" ){
            echo("<th>");
            echo("<img src='../image/champions/$value.webp'>");
            $nom_champ=str_replace("_", " ", $value);
            echo("<p>$nom_champ</p>");
            echo("</th>");
			echo("</tr>");	
			}
		echo("</th>");
		}
		
echo("</table>");             
			
function affiche_matchup_nom($conn, $nom){
	$sql="SELECT * FROM `matchup` WHERE `nom`='$nom'" ;
	if($ret=mysqli_query($conn, $sql)){
		$ret=mysqli_fetch_assoc($ret);
	} else{
		echo("Les matchups de ce personages n'existent pas");
	}
	return $ret ; 
}
?>
</div>

<?php
include 'disconnect.php';
?>
</body>


<footer>
<p><a href="../index.php">Retourner à l'accueil</a> - <a href="Champ_select.php">Retourner a l'écran de sélection du champion</a></p>
</footer>



</html>