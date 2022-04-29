<?php 

/* connection a la base */
$conn = mysqli_connect ( "localhost" , "l2","L2","meziere_203");
mysqli_set_charset($conn , "utf8");

$result = mysqli_query($conn,"select * from mouvement");

function stock($result){
	$tab=[];
	while($row = mysqli_fetch_assoc($result)){
		array_push($tab,$row);
	};
	return $tab ; 
}

$tab = stock($result);
?>