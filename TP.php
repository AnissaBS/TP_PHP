<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TP 1</h1>
        <?php
            $dateAct = date("Y-m-j H:i:s");
            echo  "Voici la date actuelle : $dateAct";
        ?>

        
    <h1>TP 2</h1>
        <?php
            $jourAng = strftime("%A")."<br>";
            echo "Voici le jour en Anglais : $jourAng";
            setLocale(LC_TIME, "french");
            $jourFr = strftime("%A")."<br>";
            echo "Voici le jour en Français : $jourFr";
        ?>


    <h1>TP 3</h1>
        <?php
            // Définir l'année de naissance de la personne
            $anneeDeNaissance = 1966;

            // Obtenir l'année actuelle
            $anneeAct = date("Y");

            // Calculer l'âge de la personne
            $age = $anneeAct - $anneeDeNaissance;

            // Afficher l'âge de la personne
            echo "L'âge de la personne est : " . $age . " ans";
        ?>


    <h1>TP 4</h1>
        <?php
            $date = "15/10/2023";
            echo date("Y-m-j");
        ?>
</body>
</html>