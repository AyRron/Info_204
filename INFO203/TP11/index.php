<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
<?php 

include("./lib/db_connect.php")

?>
<section>
<?php

include("./lib/chess.php");
affiche_partie();

?>
</section>
<?php

include("./lib/coup.php");
coups();
?>

<?php 

include("./lib/db_disconnect.php")


?>
</body>
</html>