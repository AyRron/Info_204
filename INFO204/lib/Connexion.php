<?php
include 'connect.php';
?>


<form method="post" action="Build_admin.php">
	Créer un nouveau Build :  
	<table>
		<tr>
			<td>Pseudo : </td>
			<td><input type="text" name="pseudo"></td>
		</tr>
		<tr>
			<td>Mot de passe : </td>
			<td><input type="text" name="mdp"></td>
		</tr>
	</table>

	<input type="submit" value="Connexion">
	</form>
    
	<?php
	if (isset($_POST["pseudo"])) {

		$pseudo = $_POST["pseudo"];
		$mdp = $_POST["mdp"];

		create_build($conn, $nom, $rune, $f1, $f2, $f3, $s1, $s2, $sup1, $sup2, $sup3);
		}


    include 'disconnect.php';
    ?>