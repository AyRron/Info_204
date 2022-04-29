

<?php




function insert_mvt($conn, $piece, $xi, $yi, $xf, $yf){

	$sql="INSERT INTO `mouvement`(`pièce`,`xi`,`yi`,`xf`,`yf`) values('$piece','$xi','$yi','$xf','$yf')";

	if(!$rs = mysqli_query($conn,$sql)){
	print("commande non valide");

	} else {

	}

	

}








?>