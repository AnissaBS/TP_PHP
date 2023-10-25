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

<h1>TP1 Tableaux </h1>

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

    // Correction :
    /*  
        // Création et accès au tableau
            $fruits = array("Pomme","Orange", "Fraise", "Banane", "Pêche");

        // Afficher le 2e élément du tableau
            echo "Le deuxième élément du tableau fruits est : ","<b>".$fruits[1],"</b><br>";

        // Ajout d'un élément
            $fruits[]="Kiwi";
            array_push ($fruits, "Kiwi");
        

        // Afficher taille totale du tableau
            echo "<br> La taille totale du tableau fruits est : ".count($fruits),"<br />";

        // Afficher chaque élément du tableau sur une nouvelle ligne
            foreach($fruits as $fruits){
                echo "Une nouvelle ligne pour le ou la : ".$fruits."<br>";
            }
    */

    ?>
    
    <h2>Exercice 2 :</h2>
        <?php
        $etud= array(
            "Alice" => 18,
            "Bob" => 15,
            "Eva" => 14,
            "Daniel" => 16,
            "Franck" => 19,
        );
        // Autre alternative pour la création du tableau :
        /*
            $etud = ['Alice' => 18, 'Bob' => 15, 'Eva' => 14, 'Daniel' => 16, 'Franck' => 19];
        */

        // Afficher la note de l'étudiante Alice
        echo "<br> La note de l'étudiante Alice est : ".$etud['Alice'].".<br><br>";

        // Modifier la note de Bob à 17
        $etud['Bob']=17;

        //Ajouter un nouvel étudiant du nom de Charlie eavec une note de 16
        echo "Ajout de l'étudiant Charlie : ".$etud['Charlie']=16,"<br><br>";

        $total_notes = array_sum($etud);
        echo "La somme totale des notes est : ".$total_notes."<br><br>";

        $nbr_etud = count($etud);
        echo "La somme totale des étudiants est : ".$nbr_etud."<br><br>";

        $moyenne = $total_notes / $nbr_etud;
        echo "La moyenne des notes est : ".$moyenne;

        echo "<br><br><br>";

        ?>

<h1>TP2 Tableaux</h1>

<h2>Exercice 1 :</h2>
    <?php
    // echo "<h4>Question 1</h4>";
    $personne = array(
        'Nom' => "Ben Saïd",
        'Prénom' => "Anissa",
        'Age' => 22
    );
    
    // echo "<h4>Question 2</h4>";
    $nombres = range(1,10);


    // echo "<h4>Question 3</h4>";
    $personne['Ville'] = "Orléans";


    // echo "<h4>Question 4</h4>";
    $nombres = array_merge($nombres, range(11, 20));


    echo "<h4>Question 5</h4>";
    if (in_array(15, $nombres)) {
        echo "Le tableau contient le nombre 15.<br><br>";
    } else {
        echo "Le tableau ne contient pas le nombre 15.<br><br>";
    }


    echo "<h4>Question 6</h4>";
    echo "Son nom est ".$personne['Nom']." ".$personne['Prénom']." et elle a ".$personne['Age']." ans.<br><br>";

    
    echo "<h4>Question 7</h4>";
    echo "Tableau 'Nombre' :<br>";
    foreach ($nombres as $nombre) {
        echo $nombre . " ";
    }
    echo "<br><br>";
    

    echo "<h4>Question 8</h4>";
    echo "Tableau 'Personne' :<br>";
    foreach ($personne as $personne => $donnees) {
        echo "$personne : $donnees<br>";
    }
    
    echo "<br><br>";
    ?>

</body>
</html>