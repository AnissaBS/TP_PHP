<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ex 1</h1>
        <?php
            $nom = "Anissa";
            $age = "22 ans";
            echo "Bonjour je m'apelle ".$nom." et j'ai ".$age.".";
        ?>
        
    <h1>Ex 2</h1>
        <?php
            $anneeDeNaissance = 1958;
            $ageCalcule = date("Y") - $anneeDeNaissance;
            echo "Né(e) en ".$anneeDeNaissance.", cette personne a ".$ageCalcule.".";
        ?>
</body>
</html>