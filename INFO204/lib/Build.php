

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Build</title>
    <link rel="stylesheet" href="../CSS/style_index.css">
</head>
<body>
    
<div>
    <?php
        include 'connect.php';
        include 'Build.crud.php';

        if(isset($_GET)){
            if(isset($_GET["id"])){
                $nom = $_GET['id'];
                print_r($nom);
            }
        }
        
        champ_info_nom($conn, $nom);
        


        include 'disconnect.php';
    ?>



</div>


</body>
</html>