<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Champ_select</title>
  <link rel="stylesheet" href="../CSS/style_index.css">
</head>

<body>

<header>
<span class="logo"><h1>Build</h1><h1>hub</h1></span>
</header>

<section>

<div class="top">
<span class="title"><h2>Toplane<img src="../image/top_lane-removebg-preview.png"/></h2></span>
<span class="contenu">
<img id="Aatrox" class="image" src="../image/champions/Aatrox.webp"/>
<img id="Sett" class="image" src="../image/champions/Sett.webp"/>
<img id="Garen" class="image" src="../image/champions/Garen.webp"/>
</span>
</div>

<div class="jgl">
<span class="title"><h2>Jungle<img src="../image/jungle-removebg-preview.png"/></h2></span>
<span class="contenu">
<img id="Kayn" class="image" src="../image/champions/Kayn.webp"/>
<img id="Lee_Sin" class="image" src="../image/champions/Lee_Sin.webp"/>
<img id="Graves" class="image" src="../image/champions/Graves.webp"/>
</span>
</div>

<div class="mid">
<span class="title"><h2>Midlane<img src="../image/mid_lane-removebg-preview.png"/></h2></span>
<span class="contenu">
<img id="Vladimir" class="image" src="../image/champions/Vladimir.webp" />
<img id="Katarina" class="image" src="../image/champions/Katarina.webp" />
<img id="Heimerdinger" class="image" src="../image/champions/Heimerdinger.webp"/>
</span>
</div>

<div class="bot">
<span class="title"><h2>Botlane<img src="../image/bot_lane.webp"/></h2></span>
<span class="contenu">
<img id="Jinx" class="image" src="../image/champions/Jinx.webp"/>
<img id="MissFortune" class="image" src="../image/champions/MissFortune.webp"/>
<img id="Kalista" class="image" src="../image/champions/Kalista.webp"/>
</span>
</div>

<div class="sup">
<span class="title"><h2>Support<img src="../image/support-removebg-preview.png"/></h2></span>
<span class="contenu">
<img id="Tresh" class="image" src="../image/champions/Tresh.webp"/>
<img id="Morgana" class="image" src="../image/champions/Morgana.webp"/>
<img id="Leona" class="image" src="../image/champions/Leona.webp"/>
</span>
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
            window.location.replace("http://os-vps418.infomaniak.ch:1180/l1_info_3/www/lib/Build.php?id=" + nom);
             
        })
    ))
});


</script>

</body>

</html>