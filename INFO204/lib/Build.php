

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Build</title>
    <link rel="stylesheet" href="../CSS/style_index.css">
</head>
<body>
    

    <?php
        include 'connect.php';
        include 'Build.crud.php';

        $nom = $_GET['id'];

        $id=champ_id($conn, $nom);





        include 'disconnect.php';
    ?>






</body>
</html>