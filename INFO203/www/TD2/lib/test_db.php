
<?php

	/*1−Connexionalabase*/

	$conn=mysqli_connect("localhost","l2","L2","Cyril");
	mysqli_set_charset($conn,"utf8");

	/*2−Executiondelarequete*/
	$result=mysqli_query($conn,"SELECT * FROM `partie`");

	/*3−Iterationsurlesresultats*/
	echo("<pre>\n");
	while($row = mysqli_fetch_assoc($result)){
		print_r($row);
		}
	echo("</pre>\n");
	/*4−fermeturedelaconnexion*/
	mysqli_close($conn);



?>