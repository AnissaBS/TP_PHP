<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        
        body{
            color: white;
            background-color: rgb(145,110,120);
            padding : 10px;
        }

        h1{
            text-align: center;
            text-decoration: underline;
            margin-bottom: 50px;
        }

        h2{
            text-decoration: underline;
            margin-bottom: 20px;
        }

    </style>
</head>
<body>

    <h1>TP Tableaux</h1>

    <h2>Exercice 1 :</h2>
    <?php
    // echo "Question 1 :<br>";
        $fruit[1]= "Mangue";
        $fruit[2]= "Pastèque";
        $fruit[3]= "Melon";
        $fruit[4]= "Ananas";
        $fruit[5]= "Papaye";

    echo "Q2 :<br>";
        echo "Voici le deuxième fruit : ".$fruit[2].".";
        echo "<br><br>";

    echo "Q3 :<br>";
        $fruit[6]= "Noix de coco";
        echo $fruit[6];
        echo "<br><br>";

    echo "Q4 :<br>";
        echo "Voici la taille totale du tableau : ".count($fruit);
        echo "<br><br>";

    echo "Q5 :<br>";
        for($i=1; $i<7; $i++){
            echo $fruit[$i]."<br>";
        }
        echo "<br><br>";

    ?>
    
    <h2>Exercice 2 :</h2>
    <?php
        $etud= array(
            'Alice' => 18;
            'Bob' => 15;
        )
    ?>

</body>
</html>