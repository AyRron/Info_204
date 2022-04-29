<?php
/*---------------------------------------
CRUD: Gestion de l'entité partie
---------------------------------------*/


/*
	CR: créé un nouvel enregistrement  
	suppose un id auto-incrementé
*/
function create_par($conn, $blanc, $noir, $rb, $rn, $annee){
	$sql="INSERT INTO `partie`(`blanc`, `noir`, `rb`, `rn`, `annee`) values('$blanc', '$noir', $rb, $rn, $annee)";
	$ret=mysqli_query($conn, $sql) ;
	return $ret ; 	
}

/*
	U: met à jour les valeurs de l'enregistrement 
*/
function update_par($conn, $id, $blanc, $noir, $rb, $rn, $annee){
	$sql="UPDATE `partie` set `blanc`='$blanc', `noir`='$noir', `rb`='$rb', `rn`='$rn', `annee`='$annee' WHERE `id`=$id" ;
	$ret=mysqli_query($conn, $sql) ;
    return $ret ; 
}


/*
	D: supprime l'enregistrement 
*/
function delete_par($conn, $id){
	$sql="DELETE FROM `partie` WHERE `id`=$id" ;
	$ret=mysqli_query($conn, $sql) ;
	return $ret ; 
}

/*
	S: selectionne une partie 
*/
function select_par($conn, $id){
	$sql="SELECT * FROM `partie` WHERE `id`=$id" ;
	if($ret=mysqli_query($conn, $sql)){
		$ret=mysqli_fetch_assoc($ret);
	}
	return $ret ;
}

?>
