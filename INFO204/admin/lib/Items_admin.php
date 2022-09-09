<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Build_admin</title>
  <link rel="stylesheet" href="../CSS/style_index.css">
  <link rel="icon" href="../image/league.png">
</head>
<body>
<header class="header_admin">
	<a href="../index_admin.php?action=disconnect">Deconnexion</a>
	<a href="../index_admin.php">Retour à la page d'accueil</a>
    <?php
    include '../../lib/connect_uwamp.php';
	include 'Items.crud.php';
    ?>
</header>

<section id="newitem">
      <div class="container">
        <div class="title">
          <h3>Créer un nouvel ensemble d'Items :</h3>
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
			<h3>Modifier un ensemble d'Items :</h3>
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


<section id="deleteitem">
	<div class="container">
		<div class="title">
			<h3>Supprimer un ensemble d'Items :</h3>
		</div>
		<form method="post" action="Items_admin.php">
			<div class="nom">
				<input type="text" name="nom_sup" placeholder="Nom...">
			</div>

        <div class="delete">
		<input type="submit" value="Supprimer">
		</div>
	</form>
	</div>
</section>

	<?php
	if (isset($_POST["nom_sup"])) {
		$nom = $_POST["nom_sup"];
		delete_item_id($conn, $nom);
		}
	?>



<section id="searchitem">
	<div class="container">
		<div class="title">
			<h3>Chercher un ensemble d'Items :</h3>
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
			echo("<thead>");
			echo("<tr>");
			echo("<th>Id des Items : </th>");
			echo("<th>Nom Du Champion : </th>");
			echo("<th>Objet de départ : </th>");
			echo("<th>Bottes : </th>");
			echo("<th>Objet Mythique : </th>");
			echo("<th>Items principales : </th>");
			echo("<th>Items Situationnelles : </th>");
			echo("</tr>");
			echo("</thead>");
			echo("<tbody>");

			while($row = mysqli_fetch_assoc($info)){
				echo("<tr>");
				echo("<td data-label='Id du Champion :'>$row[id]</td>");
				echo("<td data-label='Nom Du Champion :'>$row[nom] </td>");
				echo("<td data-label='Item de départ :'>$row[starting_item] </td>");
				echo("<td data-label='Item mythique :'>$row[mythique] </td>");
				echo("<td data-label='Core items :'>$row[core1] / $row[core2]</td>");
				echo("<td data-label='Bottes :'>$row[bottes]</td>"); 
				echo("<td data-label='Items secondaires :'>$row[option1] / $row[option2] / $row[option3]</td>");
				echo("</tr>");
			}
			echo("</tbody>");
			echo("</table>");
		} else{
			echo("Items non trouvé");
		}
		
		}
	?>

	<?php

	$result=mysqli_query($conn,"SELECT * FROM `item`");
		
		echo("<table id='tabitem'>");
		echo("<thead>");
		echo("<tr>");
		echo("<th>Id du Champion : </th>");
		echo("<th>Nom Du Champion : </th>");
		echo("<th>Item de départ : </th>");
		echo("<th>Item mythique : </th>");
		echo("<th>Core items : </th>");
		echo("<th>Bottes : </th>");
		echo("<th>Items secondaires : </th>");
		echo("</tr>");
		echo("</thead>");
		echo("<tbody>");
		
		while($row = mysqli_fetch_assoc($result)){
			echo("<tr>");
			echo("<td data-label='Id du Champion :'>$row[id]</td>");
			echo("<td data-label='Nom Du Champion :'>$row[nom] </td>");
			echo("<td data-label='Item de départ :'>$row[starting_item] </td>");
			echo("<td data-label='Item mythique :'>$row[mythique] </td>");
			echo("<td data-label='Core items :'>$row[core1] / $row[core2]</td>");
			echo("<td data-label='Bottes :'>$row[bottes]</td>"); 
			echo("<td data-label='Items secondaires :'>$row[option1] / $row[option2] / $row[option3]</td>");
			echo("</tr>");
		}
		echo("</tbody>");
		echo("</table>");
	?>	
</body>



<footer>
	
</footer>

</html>