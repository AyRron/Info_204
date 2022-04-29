<?php
/*---------------------------------------
CRUD: Gestion de l'entité étudiant
---------------------------------------*/


/*
	CR: créé un nouvel enregistrement  
	suppose un id auto-incrementé
*/
function create_jou($conn, $nom, $prenom, $pays, $rang){
	$sql="INSERT INTO `utilisateur`( `nom`, `prenom`, `pays`, `rang`) values( '$nom', '$prenom', '$pays', $rang)";
	$ret=mysqli_query($conn, $sql) ;
	return $ret ; 	
}

/*
	U: met à jour les valeurs de l'enregistrement 
*/
function update_jou($conn, $id, $nom, $prenom, $pays, $rang){
	$sql="UPDATE `utilisateur` set `nom`='$nom', `prenom`='$prenom', `pays`='$pays', `rang`=$rang WHERE `id`=$id" ;
	$ret=mysqli_query($conn, $sql) ;
    return $ret ; 
}


/*
	D: supprime l'enregistrement 
*/
function delete_jou($conn, $id){
	$sql="DELETE FROM `utilisateur` WHERE `id`=$id" ;
	$ret=mysqli_query($conn, $sql) ;
	return $ret ; 
}

/*
	S: selectionne un utilisateur
*/
function select_jou($conn, $id){
	$sql="SELECT * FROM `utilisateur` WHERE `id`=$id" ;
	if($ret=mysqli_query($conn, $sql)){
		echo($sql);
		$ret=mysqli_fetch_assoc($ret);
	}
	return $ret ;
}

?>
