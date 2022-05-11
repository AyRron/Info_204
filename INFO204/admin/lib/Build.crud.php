<?php
/*---------------------------------------
CRUD: Gestion des Builds
---------------------------------------*/


/*
	Créé un nouveau Champion avec son Build 
	suppose un id auto-incrementé
*/
function create_build($conn, $nom, $rune, $f1, $f2, $f3, $s1, $s2, $sup1, $sup2, $sup3){
	$sql="INSERT INTO `build`( `Nom_champ`, `Rune_f`, `F1`, `F2`, `F3`, `S1`, `S2`, `sup1`, `sup2`, `sup3`) values( '$nom', '$rune', '$f1', '$f2', '$f3', '$s1', '$s2', '$sup1', '$sup2', '$sup3')";
	$ret=mysqli_query($conn, $sql) ;
	return $ret ; 	
}

/*
	Met à jour les valeurs du Build
*/
function update_build($conn, $id, $nom, $rune, $f1, $f2, $f3, $s1, $s2, $sup1, $sup2, $sup3){
	$sql="UPDATE `build` set `Nom_champ`='$nom', `Rune_f`='$rune', `F1`='$f1', `F2`='$f2', `F3`='$f3', `S1`='$s1', `S2`='$s2', `sup1`='$sup1', `sup2`='$sup2', `sup3`='$sup3' WHERE `id`='$id'" ;
	$ret=mysqli_query($conn, $sql) ;
    return $ret ; 
}


/*
	Supprime le Champion avec son nom 
*/
function delete_build_nom($conn, $nom_champ){
	$sql="DELETE FROM `build` WHERE `Nom_champ`='$nom_champ'" ;
	$ret=mysqli_query($conn, $sql) ;
	return $ret ; 
}

/*
	Supprime le Champion avec l'id 
*/
function delete_build_id($conn, $id){
	$sql="DELETE FROM `build` WHERE `id`='$id'" ;
	$ret=mysqli_query($conn, $sql) ;
	return $ret ; 
}



/*
	Selectionne un Champion
*/
function select_build($conn, $id){
	$sql="SELECT * FROM `build` WHERE `id`='$id'" ;
	if($ret=mysqli_query($conn, $sql)){
		echo($sql);
		$ret=mysqli_fetch_assoc($ret);
	}
	return $ret ;
}


/*
	Selectionne tout les Champions
*/
function select_all_build($conn){
	$sql="SELECT * FROM `build`" ;
	if($ret=mysqli_query($conn, $sql)){
		$ret=mysqli_fetch_assoc($ret);
	}
	return $ret ;
}



/*
	Trouve l'id d'un Champion à partir de son nom
*/
function champ_id($conn, $nom_champ){
	$sql="SELECT `id` FROM `build` WHERE `Nom_champ`='$nom_champ'" ;
	if($ret=mysqli_query($conn, $sql)){
		$ret=mysqli_fetch_assoc($ret);
	} else{
		echo("Ce personnage n'existe pas");
	}
	return $ret ;
}


/*
	Envoie les informations d'un Champion à partir de son nom
*/
function champ_info_nom($conn, $nom_champ){
	$sql="SELECT * FROM `build` WHERE `Nom_champ`='$nom_champ'" ;
	if($ret=mysqli_query($conn, $sql)){
		$ret=mysqli_fetch_assoc($ret);
	} else{
		echo("Ce personnage n'existe pas");
	}
	return $ret ;
}


?>
