<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Build_admin</title>
  <link rel="stylesheet" href="../CSS/style_index.css">
</head>


<header>
    <?php

    include 'connect_uwamp.php'

    ?>

    <h1>Les Builds : </h1>

</header>

<body>



</body>

<?php

include 'Build.crud.php';

select_all_bu($conn);


?>






</html>