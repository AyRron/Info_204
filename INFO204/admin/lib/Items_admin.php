<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Build_admin</title>
  <link rel="stylesheet" href="../CSS/style_index.css">
  <link rel="icon" href="../image/league.png">
</head>

<body>
<header>
	<a href="../index_admin.php?action=disconnect">Deconnexion</a>
	<a href="admin.php">Retour à la page d'accueil</a>
    <?php
    include '../../lib/connect.php';
	include 'Build.crud.php';
    ?>
	<h1>Tous les items :</h1>
</header>