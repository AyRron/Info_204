<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>index</title>
  <link rel="stylesheet" href="CSS/style.css">
  <script src=""></script>
</head>
<header>

  <div id="titre"><h1>&#9822 The chess database</h1></div>
  <div id="text"><p>
    Il y a plus de vingts ans, le champion du monde Garry Kasparov acceptait le<br>
    défi d'IBM et affrontait le super-ordinateur Deep Blue. C'était le match final<br>
    entre l'homme et la machine. Un grand moment de l'histoire des échecs, suivi<br>
    de très près aux quatre coin du monde par les joueurs, scientifiques,<br>
    informaticiens et badauds de tout poils. Kasparov,tenant du titre mondial,<br>
    représentait le dernier espoir de l'humanité face à une IA toujours plus<br>
    puissante
  </p>
  <img src="images/chess_logo.png" alt="image d'échec" height="300"></div>
</header>

<?php
  include 'lib/db_connect.php';
?>

<body>
  <div id="prem">Première partie en 1996</div>
  <div id="php"><?php

    include 'lib/corp.php';
  ?></div>
</body>


<?php
  include 'lib/db_disconnect.php';
?>


<footer>
  <div id="img2"><img src="images/logo_usmb_blanc.png" alt="image de l'usmb" height="50"></div>
  <div id="département"><p>Département informatique</p></div>

</footer>
</html>

