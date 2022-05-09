<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="root";
$mysql_db="projet";

$conn=mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db);

if ($conn){
  mysqli_set_charset($conn, "utf8");
  

} else {
  
  die("Erreur de connexion: $mysql_db");
}

?>