<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LES VARIABLES</title>
</head>
<body>
    
<?php
    // Définition insensible à la casse
    define("PI", 3.1415926535);

    // Utilisation
    echo "La contante PI vaut ", PI, "<br />";

    echo "PI arrondi à 3 chiffres après la virgule ".round(PI,3);

    $val = 10;
    $som = $val + PI;
    echo $som;

    echo "Addition de val + PI = ".$som;
    echo "<br>";

    $som1 = round($som,2);
    echo "Arrondi le résultat à 2 chifres après = ".$som1;

    echo "<br>";
    $ip = $_SERVER['REMOTE_ADDR'];
    $nv = $_SERVER['HTTP_USER_AGENT'];

    echo "Adresse IP du client ".$ip." Avec le navigateur : ".$nv;
    echo "<br>";

    $nom = "MARIE ROSE";
    echo strlen($nom);
?>

</body>
</html>