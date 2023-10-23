<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h2>Exercice 1</h2>
    <?php
        $dep = 18000;
        while ($dep <= 18999) {
            echo $dep." ";
            $dep++;
        }
    ?>

<h2>Exercice 2</h2>
    <?php
        $n = 5;
        for ($i = 1; $i <= 10; $i++) {
            echo $n.' x '.$i.' = '.($n * $i).'<br>';
        }

        /*
        // AUTRE SOLUTION
        $chiffre = 5;
        echo "Table de multiplication du chiffre $chiffre : <br><br>";

        for ($i=0; $i<=10; $i++) {
            $result = $chiffre * $i;
            echo "$chiffre x $i = $result <br>";
        }
        */
    ?>

<h2>Exercice 3</h2>
    <?php
        for ($i=1; $i<=5; $i++) {
            for ($k=1; $k<=$i; $k++) {
                echo "$i <br>";
            }
        }
    ?>

<h2>Exercice 4</h2>
    <?php
        $var = 0;
        while($var<=20){
            echo $var."<br>";
            $var=$var+2;
        }
    ?>
</body>
</html>