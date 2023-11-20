<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Partie 1 : SQL</h2>
<p>( Inspecter la page )</p>
<php
echo = "TP1 :";
UPDATE Employees;
SET Nom = 'Alicia';
WHERE employeeID = 1;

echo = "TP2 :";
DELETE FROM Employees;
WHERE employeeID = 3;

echo = "TP3 :";
DROP TABLE Customers;

echo = "TP4 :";
ALTER TABLE Employees
ADD PhoneNumber VARCHAR(15);
?>


<br><br>
<h2>Partie 2 : HTML-CSS</h2>
<h4>Q1. Quelle balise HTML5 est utilisée pour définir le contenu principal d'un document web?</h4>
<p>La balise  < article ></p>

<h4>Q2. Qu'est ce que HTML 5 ?</h4>
<p>HyperText Markup Language 5</p>

<h4>Q3. Quelle balise HTML5 est utilisée pour définir le contenu principal d'un document HTML5 ?</h4>
<p>La balise  < main ></p>

<h4>Q4. Comment inclure une feuille de style externe dans une page HTML5 ?</h4>
<p>La balise  < link ></p>

<h4>Q5: Quelle balise est utilisée pour définir une liste ordonnée ?</h4>
<p>La balise  < ol ></p>

<h4>Q6. Quelle balise est utilisée pour insérer une image dans une page HTML5 ?</h4>
<p>La balise  < img ></p>


<br><br>
<h2>Partie 3 : JS</h2>
<script>
    document.write("Q1 : ");
    let x = 3;
    var y = 5;
    let multiplication = (x+y)*2;
    document.write("Voici la somme lorsque x = 3 et y = 5 : " + multiplication);

    document.write("<br><br>Q2 : ");
    let num = 15;
    if (num % 2 === 0) {
    console.log("Le nombre est pair.");
    document.write("Le nombre est pair.");
    }else {
    console.log("Le nombre est impair.");
    document.write("Le nombre est impair.");
    }

    document.write("<br><br>Q3 : ");
    let fruits = ["pomme", "orange", "banane"];
    fruits.push("raisin");
    document.write("Nouvelle longueur du tableau : " + fruits.length)

    document.write("<br><br>Q4 : ");
    function somme(x, y) {
    return x + y;
    }
    
    document.write("<br><br>Q5 : ");
    for (let i = 1; i <= 5; i++) {
    document.write(i);
    }

    document.write("<br><br>Q6 : ");
    let phrase = "Bonjour, comment ça va ?"; 
    document.write("Voici la phrase : " + phrase);
    document.write("<br> La longueur de la phrase est de : " + phrase.length);
    document.write("<br> Voici la phrase en majuscules : " + phrase.toUpperCase());

    document.write("<br><br>Q7 : ");
    let date = new Date();
    let jour = date.getDate();
    let mois = date.getMonth() + 1; // Les mois commencent à 0
    let annee = date.getFullYear();
    document.write("Voici la date actuelle : "+ jour + "/" + mois + "/" + annee);

    document.write("<br><br>Q8 : ");
    let numbers = [8, 15, 22, 30, 18];
    let nombresPairs = numbers.filter(number => number % 2 === 0);
    document.write(nombresPairs);

    let sommeNumbers = numbers.reduce((acc, curr) => acc + curr, 0);
    document.write("<br> La somme de tous les éléments du tableau est : " + sommeNumbers);
</script>

<br><br>
<h2>Partie 4 : PHP et POO</h2>


<br><br>
<h2>Partie 5 : PHP et MySQL</h2>

</body>
</html>