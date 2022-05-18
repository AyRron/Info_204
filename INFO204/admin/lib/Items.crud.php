<?php

/*
	Créé un nouveau Champion avec ses items 
	suppose un id auto-incrementé
*/
function create_items($conn, $nom, $starting_item, $mythique, $bottes, $core1, $core2, $option1, $option2, $option3){
	$sql="INSERT INTO `item`( `nom`,`starting_item`, `mythique`, `bottes`, `core1`, `core2`, `option1`, `option2`, `option3`) values( '$nom', '$starting_item', '$mythique', '$bottes', '$core1', '$core2', '$option1', '$option2', '$option3')";
	$ret=mysqli_query($conn, $sql) ;
	return $ret ; 	
}

/*
	Met à jour les valeurs du Build
*/
function update_items($conn,$id, $nom, $starting_item, $mythique, $bottes, $core1, $core2, $option1, $option2, $option3){
	$sql="UPDATE `item` set `nom`='$nom', `starting_item`='$starting_item', `mythique`='$mythique', `bottes`='$bottes', `core1`='$core1', `core2`='$core2', `option1`='$option1', `option2`='$option2', `option3`='$option3' WHERE `id`='$id'" ;
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
	if($ret=mysqli_query($conn, $sql)){
		$ret=mysqli_fetch_assoc($ret);
	} else{
		echo("Les items de ce personages n'existent pas");
	}
	return $ret ; 
}

?>
