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
            echo "Voici le jour actuel en Anglais : $jourAng";
            setLocale(LC_TIME, "french");
            $jourFr = strftime("%A")."<br>";
            echo "Voici le jour actuel en Français : $jourFr";
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
            echo "Né(e) en ".$anneeDeNaissance.", cette personne a ".$age.".";
            // ou : echo "Né(e) en $anneeDeNaissance, cette personne a $age.";
        ?>


    <h1>TP 4</h1>
        <?php
            $date = "15/10/2023";
            $timestamp = strtotime($date);
            $dateFormat = date("Y-m-d",$timestamp);
            echo "Date formatée : $dateFormat";

            echo "<br>";

            // Autre alternative :
            $d = "29/07/2018";
            $dt = DateTime::createFromFormat('d/m/Y',$d);
            $dateAF = $dt->format('Y-m-d');
            echo "Autre alternative : $dateAF";
        ?>
</body>
</html>