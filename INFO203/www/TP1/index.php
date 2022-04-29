<?php
include 'lib/db_connect.php';
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
  include 'lib/tableau.php';

} else {
  
  die("Erreur de connexion: $mysql_db");
}

?>
</body>


<footer>
</footer>
</html>


<?php
include 'lib/db_disconnect.php';
?>