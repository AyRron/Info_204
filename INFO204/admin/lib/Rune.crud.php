<?php
session_start() ;
var_dump($_SESSION);
if(!$_SESSION["admin"]){
	header("Location: admin_form.php") ; 
} 

/*---------------------------------------
CRUD: Gestion des Builds
---------------------------------------*/


/*
	Créé une nouvelle Rune
*/
function create_rune($conn, $nom, $description){
	$sql="INSERT INTO `rune`(`Nom`, `Description`) VALUES ('$nom','$description')";
	$ret=mysqli_query($conn, $sql) ;
	return $ret ; 	
}

/*
	Met à jour les valeurs d'une Rune
*/
function update_rune($conn, $id, $nom, $description){
	$sql="UPDATE `rune` set `Nom`='$nom', `Description`='$description' WHERE `id`='$id'" ;
	$ret=mysqli_query($conn, $sql) ;
    return $ret ; 
}


/*
	Supprime une Rune
*/
function delete_rune_nom($conn, $nom){
	$sql="DELETE FROM `rune` WHERE `Nom`='$nom'" ;
	$ret=mysqli_query($conn, $sql) ;
	return $ret ; 
}

/*
	Supprime la Rune avec l'id 
*/
function delete_rune_id($conn, $id){
	$sql="DELETE FROM `rune` WHERE `id`='$id'" ;
	$ret=mysqli_query($conn, $sql) ;
	return $ret ; 
}



/*
	Selectionne une Rune avec son id
*/
function select_rune($conn, $id){
	$sql="SELECT * FROM `rune` WHERE `id`='$id'" ;
	if($ret=mysqli_query($conn, $sql)){
		echo($sql);
		$ret=mysqli_fetch_assoc($ret);
	}
	return $ret ;
}


/*
	Selectionne toutes les Runes
*/
function select_all_rune($conn){
	$sql="SELECT * FROM `rune`" ;
	if($ret=mysqli_query($conn, $sql)){
		$ret=mysqli_fetch_assoc($ret);
	}
	return $ret ;
}



/*
	Trouve l'id d'une Rune à partir de son nom
*/
function rune_id($conn, $nom){
	$sql="SELECT `id` FROM `rune` WHERE `Nom`='$nom'" ;
	if($ret=mysqli_query($conn, $sql)){
		$ret=mysqli_fetch_assoc($ret);
	} else{
		echo("Cette Rune n'existe pas");
	}
	return $ret ;
}


/*
	Envoie la description d'une Rune à partir de son nom
*/
function rune_info_nom($conn, $nom){
	$sql="SELECT * FROM `rune` WHERE `Nom`='$nom'" ;
	if($ret=mysqli_query($conn, $sql)){
		$ret=mysqli_fetch_assoc($ret);
	} else{
		echo("Cette Rune n'existe pas");
	}
	return $ret ;
}


?>
