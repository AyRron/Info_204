<?php
/*---------------------------------------
CRUD: Gestion de l'entité étudiant
---------------------------------------*/


/*
	CR: créé un nouvel enregistrement  
	suppose un id auto-incrementé
*/
function create_bu($conn, $nom, $rune, $f1, $f2, $f3, $s1, $s2, $sup1, $sup2, $sup3){
	$sql="INSERT INTO `build`( `Nom_champ`, `Rune_f`, `F1`, `F2`, `F3`, `S1`, `S2`, `sup1`, `sup2`, `sup3`) values( '$nom', '$rune', '$f1', '$f2', '$f3', '$s1', '$s2', '$sup1', '$sup2', '$sup3')";
	$ret=mysqli_query($conn, $sql) ;
	return $ret ; 	
}

/*
	U: met à jour les valeurs de l'enregistrement 
*/
function update_bu($conn, $id, $nom, $prenom, $pays, $rang){
	$sql="UPDATE `build` set `nom`='$nom', `prenom`='$prenom', `pays`='$pays', `rang`=$rang WHERE `id`=$id" ;
	$ret=mysqli_query($conn, $sql) ;
    return $ret ; 
}


/*
	D: supprime l'enregistrement 
*/
function delete_bu($conn, $id){
	$sql="DELETE FROM `build` WHERE `id`=$id" ;
	$ret=mysqli_query($conn, $sql) ;
	return $ret ; 
}

/*
	S: selectionne un utilisateur
*/
function select_bu($conn, $id){
	$sql="SELECT * FROM `build` WHERE `id`=$id" ;
	if($ret=mysqli_query($conn, $sql)){
		echo($sql);
		$ret=mysqli_fetch_assoc($ret);
	}
	return $ret ;
}


/*
	S: selectionne un utilisateur
*/
function select_all_bu($conn){
	$sql="SELECT * FROM `build`" ;
	if($ret=mysqli_query($conn, $sql)){
		$ret=mysqli_fetch_assoc($ret);
	}
	return $ret ;
}


?>
