<?php

/*
	Créé un nouveau Champion avec ses items 
	suppose un id auto-incrementé
*/
function create_sort($conn, $nom, $a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m, $n, $o,$p, $q, $r){
	$sql="INSERT INTO `sort`( `Nom`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`) values( '$nom', '$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$n', '$o', '$p', '$q', '$r')";
	$ret=mysqli_query($conn, $sql) ;
	return $ret ; 	
}

/*
	Met à jour les valeurs du Build
*/
function update_sort($conn, $id, $nom, $a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m, $n, $o,$p, $q, $r){
	$sql="UPDATE `sort` set `Nom`='$nom', `1`='$a', `2`='$b', `3`='$c', `4`='$d', `5`='$e', `6`='$f', `7`='$g', `8`='$h', `9`='$i', `10`='$j', `11`='$k', `12`='$l', `13`='$m', `14`='$n', `15`='$o', `16`='$p', `17`='$q', `18`='$r' WHERE `id`='$id'" ;
	$ret=mysqli_query($conn, $sql) ;
    return $ret ; 
}

/*
	Supprime le Champion avec l'id 
*/
function delete_sort($conn, $id){
	$sql="DELETE FROM `sort` WHERE `id`='$id'" ;
	$ret=mysqli_query($conn, $sql) ;
	return $ret ; 
}

/*
	Affiche les sorts à améliorer quand on lui donne le nom du Champion
*/
function affiche_sort($conn, $nom){
	$sql="SELECT * FROM `sort` WHERE `nom`='$nom'" ;
	if($ret=mysqli_query($conn, $sql)){
		$ret=mysqli_fetch_assoc($ret);
	} else{
		echo("Les sort de ce personages n'existent pas");
	}
	return $ret ; 
}

?>
