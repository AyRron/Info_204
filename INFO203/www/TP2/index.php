<?php
  include 'lib/db_connect.php';

  session_start() ; 
  if(isset($_GET["action"])){
    $action=$_GET["action"] ;
    if($action=="disconnect"){
      unset($_SESSION["action"]);
      unset($_SESSION["admin"]);
    }
  }

?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>index</title>
  <link rel="stylesheet" href="CSS/style_index.css">
  <script src=""></script>
</head>


<header>
</header>


<body>
  <?php
    $mysql_host="localhost";
    $mysql_user="l2";
    $mysql_pass="L2";
    $mysql_db="Cyril";

    $conn=mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db);

    if ($conn){
      mysqli_set_charset($conn, "utf8");

    } else {
      
      die("Erreur de connexion: $mysql_db");
    }
    ?>

    <h2> Les Parties : </h2>
    <?php
    include 'lib/partie.php';
    ?>

    <h2> Les Coups : </h2>
    <?php
    include 'lib/tableau.php';
    ?>

    <h2> Les Joueurs : </h2>
    <?php
    include 'lib/utilisateur.php';
    ?>

    <h2> Insérer un nouveau coup : </h2>
    <?php
    include 'lib/formulaire.php';
    ?>



  <h2>Question 1 : </h2>
  <p>
    certains fichiers (images, styles, fonctions PHP…) peuvent être partagés par la partie publique et la partie privée. Où les mettriez-vous et pourquoi ?</br>
  </br>
    Je mettrais ces fichiers dans la partie publique car si on les met dans la partie privée, l'utilisateur standard ne pourra pas y acceder </br>
  </p>
  </br>

  <h2>Question 2 : </h2>
  <p>
    quelles modifications proposeriez-vous pour que les coups soient « reliés » à une
    partie ? Pour que les joueurs apparaissant dans la table parties soient « reliés » aux joueurs
    de la table joueurs.</br>
  </br>
    Je mettrais ces fichiers dans la partie publique car si on les met dans la partie privée, l'utilisateur standard ne pourra pas y acceder </br>
  </p>
  </br>

  <a href="admin/index_admin.php" >Page admin</a></br>
</body>


<footer>
</footer>
</html>


<?php
  include 'lib/db_disconnect.php';
?>