<?php

/*
	Créé un nouveau Champion avec ses items 
	suppose un id auto-incrementé
*/
function create_items($conn, $nom, $mythique, $bottes, $core1, $core2, $option1, $option2){
	$sql="INSERT INTO `item`( `nom`, `mythique`, `bottes`, `core1`, `core2`, `option1`, `option2`) values( '$nom', '$mythique', '$bottes', '$core1', '$core2', '$option1', '$option2')";
	$ret=mysqli_query($conn, $sql) ;
	return $ret ; 	
}

/*
	Met à jour les valeurs du Build
*/
function update_items($conn,$id, $nom, $mythique, $bottes, $core1, $core2, $option1, $option2){
	$sql="UPDATE `item` set `nom`='$nom', `mythique`='$mythique', `bottes`='$bottes', `core1`='$core1', `core2`='$core2', `option1`='$option1', `option2`='$option2' WHERE `id`='$id'" ;
	$ret=mysqli_query($conn, $sql) ;
    return $ret ; 
}

/*
	Supprime le Champion avec l'id 
*/
function delete_item_id($conn, $id){
	$sql="DELETE FROM `item` WHERE `id`='$id'" ;
	$ret=mysqli_query($conn, $sql) ;
	return $ret ; 
}

/*
	Supprime le Champion avec l'id 
*/
function affiche_item_nom($conn, $nom){
	$sql="SELECT * FROM `item` WHERE `nom`='$nom'" ;
	$ret=mysqli_query($conn, $sql) ;
	return $ret ; 
}

?>
