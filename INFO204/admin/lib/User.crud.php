<?php
/*---------------------------------------
CRUD: Gestion des Utilisateurs
---------------------------------------*/


/*
	Créé un nouvel Utilisateur
	suppose un id auto-incrementé
*/
function create_user($conn, $pseudo, $mdp, $droit){
	$sql="INSERT INTO `utilisateur`( `Pseudo`, `Mdp`, `Droit`) VALUES( '$pseudo', '$mdp', '$droit')";
	$ret=mysqli_query($conn, $sql) ;
	return $ret ; 	
}

/*
	Met à jour un Utilisateur
*/
function update_user($conn, $id, $pseudo, $mdp, $droit){
	$sql="UPDATE `utilisateur` set `Pseudo`='$pseudo', `Mdp`='$mdp', `Droit`='$droit' WHERE `id`='$id'" ;
	$ret=mysqli_query($conn, $sql) ;
    return $ret ; 
}


/*
	Supprime l'Utilisateur avec son nom 
*/
function delete_user_pseudo($conn, $pseudo){
	$sql="DELETE FROM `utilisateur` WHERE `Pseudo`='$pseudo'" ;
	$ret=mysqli_query($conn, $sql) ;
	return $ret ; 
}

/*
	Supprime l'Utilisateur avec l'id 
*/
function delete_user_id($conn, $id){
	$sql="DELETE FROM `utilisateur` WHERE `id`='$id'" ;
	$ret=mysqli_query($conn, $sql) ;
	return $ret ; 
}



/*
	Selectionne un Utilisateur
*/
function select_user($conn, $id){
	$sql="SELECT * FROM `utilisateur` WHERE `id`='$id'" ;
	if($ret=mysqli_query($conn, $sql)){
		echo($sql);
		$ret=mysqli_fetch_assoc($ret);
	} else{
		echo("Cet utilisateur n'existe pas");
    }
	return $ret ;
}


/*
	Selectionne tous les Utilisateurs
*/
function select_all_user($conn){
	$sql="SELECT * FROM `utilisateur`" ;
	$ret=mysqli_query($conn, $sql);
	return $ret ;
}



/*
	Trouve l'id d'un Utilisateur à partir de son nom
*/
function user_id($conn, $pseudo){
	$sql="SELECT `id` FROM `utilisateur` WHERE `Pseudo`='$pseudo'" ;
	if($ret=mysqli_query($conn, $sql)){
		$ret=mysqli_fetch_assoc($ret);
	} else{
		echo("Cet utilisateur n'existe pas");
	}
	return $ret ;
}


/*
	Envoie les informations d'un Champion à partir de son nom
*/
function user_info_pseudo($conn, $pseudo){
	$sql="SELECT * FROM `utilisateur` WHERE `Pseudo`='$pseudo'" ;
	$ret=mysqli_query($conn, $sql);
	return $ret ;
}




?>

