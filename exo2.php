<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleExo.css">
    <title>Document</title>
</head>
<body>

<h1>Exercice 2 :</h1>
<div class="ex2">
    <?php
        $a = 16;
        $b = 5;
        $calcul;

        $a = $a + $b;
        $calcul = "Addition :";
        echo $calcul." ".$a;
        echo "<br>";

        $a = $a - $b;
        $calcul = "Soustraction :";
        echo $calcul." ".$a;
        echo "<br>";

        $a = $a * $b;
        $calcul = "Multiplication :";
        echo $calcul." ".$a;
        echo "<br>";

        $a = $a / $b;
        $calcul = "Division :";
        echo $calcul." ".$a;
        echo "<br>";
    ?>
</div>

<button class="retour1"><a href="index.php">Retour</a></button>


</body>
</html>