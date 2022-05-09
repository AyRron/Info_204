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
<img id="Aatrox" src="../image/champions/Aatrox.webp"/>
<img id="Sett" src="../image/champions/Sett.webp"/>
<img id="Garen" src="../image/champions/Garen.webp"/>
</div>

<div class="jgl">
<h2>Jungle<img src="../image/jungle-removebg-preview.png"/></h2>
<img id="Kayn" src="../image/champions/Kayn.webp"/>
<img id="Lee_Sin" src="../image/champions/Lee_Sin.webp"/>
<img id="Graves" src="../image/champions/Graves.webp"/>
</div>

<div class="mid">
<h2>Midlane<img src="../image/mid_lane-removebg-preview.png"/></h2>
<img id="Vladimir" src="../image/champions/Vladimir.webp" />
<img id="Katarina" src="../image/champions/Katarina.webp" />
<img id="Heimerdinger" src="../image/champions/Heimerdinger.webp"/>
</div>

<div class="bot">
<h2>Botlane<img src="../image/bot_lane.webp"/></h2>
<img id="Jinx" src="../image/champions/Jinx.webp"/>
<img id="MissFortune" src="../image/champions/MissFortune.webp"/>
<img id="Kalista" src="../image/champions/Kalista.webp"/>
</div>

<div class="sup">
<h2>Support<img src="../image/support-removebg-preview.png"/></h2>
<img id="Tresh" src="../image/champions/Tresh.webp"/>
<img id="Morgana" src="../image/champions/Morgana.webp"/>
<img id="Leona" src="../image/champions/Leona.webp"/>
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
            window.open("http://os-vps418.infomaniak.ch:1180/l1_info_3/www_test_A/INFO204/lib/Build.php?id=nom");
             
        })
    ))
});


</script>

</body>

</html>