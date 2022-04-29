<?php

$mysql_host="localhost";
$mysql_user="l1_info_3";
$mysql_pass="E9hs";
$mysql_db="l1_info_3";

$conn=mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db);

if ($conn){
  mysqli_set_charset($conn, "utf8");
  

} else {
  
  die("Erreur de connexion: $mysql_db");
}

?>