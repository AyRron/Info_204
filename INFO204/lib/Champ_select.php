<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Champ_select</title>
  <link rel="stylesheet" href="../CSS/style_index.css">
</head>

<body>

<header>
<h1>Nom du site</h1>
</header>

<section>

<div class="top">
<h2>Toplane<img src="../image/top_lane-removebg-preview.png"/></h2>
<img id="Aatrox" class="image" src="../image/champions/Aatrox.webp"/>
<img id="Sett" class="image" src="../image/champions/Sett.webp"/>
</div>

<div class="jgl">
<h2>Jungle<img src="../image/jungle-removebg-preview.png"/></h2>
<img id="Kayn" class="image" src="../image/champions/Kayn.webp"/>
<img id="Lee_Sin" class="image" src="../image/champions/Lee_Sin.webp"/>
</div>

<div class="mid">
<h2>Midlane<img src="../image/mid_lane-removebg-preview.png"/></h2>
<img id="Vladimir" class="image" src="../image/champions/Vladimir.webp" />
<img id="Katarina" class="image" src="../image/champions/Katarina.webp" />
</div>

<div class="bot">
<h2>Botlane<img src="../image/bot_lane.webp"/></h2>
<img id="Jinx" class="image" src="../image/champions/Jinx.webp"/>
<img id="MissFortune" class="image" src="../image/champions/MissFortune.webp"/>
</div>

<div class="sup">
<h2>Support<img src="../image/support.png"/></h2>
<img id="Tresh" class="image" src="../image/champions/Tresh.webp"/>
<img id="Morgana" class="image" src="../image/champions/Morgana.webp"/>
</div>

</section>

<footer>
<a href="../index.php" >Retourner a l'acceuil</a>
</footer>

<script>
document.addEventListener('DOMContentLoaded', () => {
     
     
    const images = document.querySelectorAll('.image');
     
    images.forEach(image => (
        image.addEventListener('click', function(event) {
         
            const clickedImage = this;
            var nom = this.id;
            alert(nom);
             
        })
    ))
});

<?php
 
$variable_php = '<script type="text/javascript">document.write(nom);</script>';
echo($variable_php);
?>

</script>



</body>

</html>