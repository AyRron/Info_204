<?php
include 'connect.php';
?>


<form method="post" action="../index.php">
    Veuillez entrer un pseudo et un mot de passe 
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

	<input type="submit" value="Création">
	</form>
    
	<?php
	if (isset($_POST["pseudo"])) {

		$pseudo = $_POST["pseudo"];
		$mdp = $_POST["mdp"];

		$sql="INSERT INTO `utilisateur`(`Pseudo`, `Mdp`, `Droit`) VALUES ('$pseudo','$mdp','0')";
	    $ret=mysqli_query($conn, $sql) ;
	    return $ret ;
		}


    include 'disconnect.php';
    ?>