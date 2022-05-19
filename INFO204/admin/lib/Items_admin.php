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
	<a href="../index_admin.php">Retour à la page d'accueil</a>
    <?php
    include '../../lib/connect.php';
	include 'Items.crud.php';
    ?>
	<h1>Tous les items :</h1>
</header>

<section id="newitem">
      <div class="container">
        <div class="title">
          <h3>Créer un nouveau build d'items :</h3>
        </div>
        <form method="post" action="Items_admin.php">
          <div class="nom">
            <input type="text" name="nom_create" placeholder="Nom..." />
          </div>
          
          <div class="start">
            <input type="text" name="starting_item_create" placeholder="Item de départ:" />
            <input type="text" name="Mythique_create" placeholder="Item mythique:" />
            <input type="text" name="Bottes_create" placeholder="Bottes:" />
          </div>

          <div class="core">
            <input type="text" name="Core1_create" placeholder="Core item 1:" />
            <input type="text" name="Core2_create" placeholder="Core item 2:" />
          </div>

          <div class="option">
            <input type="text" name="Option1_create" placeholder="Item secondaire 1:" />
            <input type="text" name="Option2_create" placeholder="Item secondaire 2:" />
            <input type="text" name="Option3_create" placeholder="Item secondaire 3:" />
          </div>

          <div class="create">
            <input type="submit" value="Créer" />
          </div>
        </form>
      </div>
</section>

	<?php
	if (isset($_POST["nom_create"])) {

		$nom = $_POST["nom_create"];
		$starting_item = $_POST["starting_item_create"];
		$mythique = $_POST["Mythique_create"];
		$bottes = $_POST["Bottes_create"];
		$core1 = $_POST["Core1_create"];
		$core2 = $_POST["Core2_create"];
		$option1 = $_POST["Option1_create"];
		$option2 = $_POST["Option2_create"];
		$option3 = $_POST["Option3_create"];		

		create_items($conn, $nom, $starting_item, $mythique, $bottes, $core1, $core2, $option1, $option2, $option3);
		}
	?>
	



<section id="updateitem">
	<div class="container">
		<div class="title">
			<h3>Modifier un Build :</h3>
		</div>
		<form method="post" action="Items_admin.php">
			<div class="idnom">
				<input type="number" name="id_mod">
				<input type="text" name="nom_mod">
			</div>

			<div class="start">
            <input type="text" name="starting_item_create" placeholder="Item de départ:" />
            <input type="text" name="Mythique_create" placeholder="Item mythique:" />
            <input type="text" name="Bottes_create" placeholder="Bottes:" />
          </div>

          <div class="core">
            <input type="text" name="Core1_create" placeholder="Core item 1:" />
            <input type="text" name="Core2_create" placeholder="Core item 2:" />
          </div>

          <div class="option">
            <input type="text" name="Option1_create" placeholder="Item secondaire 1:" />
            <input type="text" name="Option2_create" placeholder="Item secondaire 2:" />
            <input type="text" name="Option3_create" placeholder="Item secondaire 3:" />
          </div>
		<div class="update">
			<input type="submit" value="Modifier">
		</div>
	</form>
	</div>
</section>





	<?php
	if (isset($_POST["id_mod"])) {
		$id =$_POST["id_mod"];
		$nom = $_POST["nom_mod"];
		$starting_item = $_POST["starting_item_mod"];
		$mythique = $_POST["Mythique_mod"];
		$bottes = $_POST["Bottes_mod"];
		$core1 = $_POST["core1_mod"];
		$core2 = $_POST["core2_mod"];
		$option1 = $_POST["option1_mod"];
		$option2 = $_POST["option2_mod"];
		$option3 = $_POST["option3_mod"];
		update_items($conn, $id, $nom, $starting_item, $mythique, $bottes, $core1, $core2, $option1, $option2, $option3);

		}
	?>



<form method="post" action="Items_admin.php">
	Supprimer un Build :
	<table>
		<tr>
			<td>ID du build : </td>
			<td><input type="text" name="nom_sup"></td>
		</tr>
	</table>

	<input type="submit" value="Supprimer">
	</form>
	<?php
	if (isset($_POST["nom_sup"])) {
		$nom = $_POST["nom_sup"];
		delete_item_id($conn, $nom);
		}
	?>



<section id="searchItem">
	<div class="container">
		<div class="title">
			<h3>Chercher un Item :</h3>
		</div>
		<form method="post" action="Items_admin.php">
			<div class="nom">
				<input type="text" name="nom_search" placeholder="Nom...">
			</div>

			<div class="search">
			<input type="submit" value="Chercher">
			</div>
		</form>
	</div>
</section>


	<?php
	if (isset($_POST["nom_search"])) {
		$nom = $_POST["nom_search"];
		$info=mysqli_query($conn,"SELECT * FROM `item` WHERE `nom`='$nom'");

		if(mysqli_num_rows($info)>0){ 
			echo("<table>");
			echo("<tr>");
			echo("<td>Id des Items : </td>");
			echo("<td>Nom Du Champion : </td>");
			echo("<td>Objet de départ : </td>");
			echo("<td>Bottes : </td>");
			echo("<td>Objet Mythique : </td>");
			echo("<td>Items principales : </td>");
			echo("<td>Items Situationnelles : </td>");
			echo("</tr>");

			while($row = mysqli_fetch_assoc($info)){
				echo("<tr>");
				echo("<td>$row[id]</td>");
				echo("<td>$row[nom] </td>");
				echo("<td>$row[starting_item]</td>");
				echo("<td>$row[bottes]</td>");
				echo("<td>$row[mythique]</td>");
				echo("<td>$row[core1] $row[core2]</td>");
				echo("<td>$row[option1] $row[option2] $row[option3]</td>");
				echo("</tr>");
			}
			echo("</table>");
		} else{
			echo("Items non trouvé");
		}
		
		}
	?>
















	<?php

	$result=mysqli_query($conn,"SELECT * FROM `item`");
		
		echo("<table>");
		echo("<tr>");
		echo("<td>Id du Champion : </td>");
		echo("<td>Nom Du Champion : </td>");
		echo("<td>Item de départ : </td>");
		echo("<td>Item mythique : </td>");
		echo("<td>Core items : </td>");
		echo("<td>Bottes: </td>");
		echo("<td>Items secondaires : </td>");
		echo("</tr>");
		
		while($row = mysqli_fetch_assoc($result)){
			echo("<tr>");
			echo("<td>$row[id]</td>");
			echo("<td>$row[nom] </td>");
			echo("<td>$row[starting_item] </td>");
			echo("<td>$row[mythique] </td>");
			echo("<td>$row[core1] / $row[core2]</td>");
			echo("<td>$row[bottes]</td>"); 
			echo("<td>$row[option1] / $row[option2] / $row[option3]</td>");
			echo("</tr>");
		}
		echo("</table>");
	?>	
</body>



<footer>
	
</footer>

</html>