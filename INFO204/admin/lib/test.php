<?php
include 'connect_uwamp.php';
include 'Build.crud.php';
?>

<?php
var_dump(champ_id($conn, 'Vladimir'));
?>
<br>
<br>

<?php
$id=champ_id($conn, $nom)['id']
?>
<br>
<br>


<?php
var_dump(select_all_build($conn))
?>
<br>
<br>


<?php
var_dump(select_build($conn, 2))
?>
<br>
<br>


<?php
include 'disconnect.php';
?>

