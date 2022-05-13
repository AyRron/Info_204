<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Champ_select</title>
  <link rel="stylesheet" href="../CSS/style_index.css">
  <link rel="icon" href="../image/league.png">
</head>

<body>

<header>
<nav class="navigation">
  <a href="#home" class="logo-lien">
    <img src="../image/logo.png" alt="Logo" class="logo-image">
  </a>
  <div class="liens">
    <a href="Item.php" class="nav-lien">Items</a>
    <a href="Rune.php" class="nav-lien">Runes</a>
    <a href="Champ_select.php" class="nav-lien">Champions</a>
  </div>
</nav>
</header>

<main class="main">
<section class="select">

<div class="map">
<span class="title"><h2>Toplane<img src="../image/top_lane-removebg-preview.png"/></h2></span>
<span class="contenu">
<img id="Aatrox" class="image" src="../image/champions/Aatrox.webp"/>
<img id="Sett" class="image" src="../image/champions/Sett.webp"/>
<img id="Garen" class="image" src="../image/champions/Garen.webp"/>
<img id="Cho_Gath" class="image" src="../image/champions/Cho_Gath.webp"/>
</span>
</div>

<div class="map">
<span class="title"><h2>Jungle<img src="../image/jungle-removebg-preview.png"/></h2></span>
<span class="contenu">
<img id="Kayn" class="image" src="../image/champions/Kayn.webp"/>
<img id="Lee_Sin" class="image" src="../image/champions/Lee_Sin.webp"/>
<img id="Graves" class="image" src="../image/champions/Graves.webp"/>
<img id="Elise" class="image" src="../image/champions/Elise.webp"/>
</span>
</div>

<div class="map">
<span class="title"><h2>Midlane<img src="../image/mid_lane-removebg-preview.png"/></h2></span>
<span class="contenu">
<img id="Vladimir" class="image" src="../image/champions/Vladimir.webp" />
<img id="Katarina" class="image" src="../image/champions/Katarina.webp" />
<img id="Heimerdinger" class="image" src="../image/champions/Heimerdinger.webp"/>
<img id="Aurelion_Sol" class="image" src="../image/champions/Aurelion_Sol.webp"/>
</span>
</div>

<div class="map">
<span class="title"><h2>Botlane<img src="../image/bot_lane.webp"/></h2></span>
<span class="contenu">
<img id="Jinx" class="image" src="../image/champions/Jinx.webp"/>
<img id="MissFortune" class="image" src="../image/champions/MissFortune.webp"/>
<img id="Kalista" class="image" src="../image/champions/Kalista.webp"/>
<img id="Ashe" class="image" src="../image/champions/Ashe.webp"/>
</span>
</div>

<div class="map">
<span class="title"><h2>Support<img src="../image/support-removebg-preview.png"/></h2></span>
<span class="contenu">
<img id="Thresh" class="image" src="../image/champions/Thresh.webp"/>
<img id="Morgana" class="image" src="../image/champions/Morgana.webp"/>
<img id="Leona" class="image" src="../image/champions/Leona.webp"/>
<img id="Brand" class="image" src="../image/champions/Brand.webp"/>
</span>
</div>

</section>

<footer>
<a href="../index.php" >Retourner a l'accueil</a>
</footer>
</main>

<script>
document.addEventListener('DOMContentLoaded', () => {
     
     
    const images = document.querySelectorAll('.image');
     
    images.forEach(image => (
        image.addEventListener('click', function(event) {
         
            const clickedImage = this;
            var nom = this.id;
            window.location.replace("http://localhost/www_test_A/INFO204/lib/Build.php?id=" + nom);
             
        })
    ))
});


</script>

</body>

</html>