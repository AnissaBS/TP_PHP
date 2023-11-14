<?php
// Exercice 1 :
/* Transformez une chaîne de caractères dans des casses différentes afin que chaque mot ait une initiale en majuscule. */

echo "<b><u>Exercice 1 :</u></b>";
echo "<br><br>";

$ch = "TrAnsFormez uNe ChaîNe De cAracTères écRite dAns des CaSes dIfFérentEs aFin quE cHaqUe moT Ait une iNitiaLe eN mAjusCule.";
echo ucwords(strtolower($ch));
echo "<br /><br /><br />";


// Exercice 2 :
/* En utilisant la fonction strlen(), écrivez une boucle qui affiche chaque lettre de la chaîne PHP MySQL sur une ligne différente. */


echo "<b><u>Exercice 2 :</u></b>";
echo "<br>";

$ch1 = "PHP MySQL";
for($i=0;$i<strlen($ch1);$i++){
    echo "<h3> $ch1[$i] </h3>";
}

    // Alternative :
        echo "<u><b>Alternative :</b></u>";
        echo "<br /><br />";

        $string2 = "PHP MySQL";
        echo "La chaîne à décomposer est la suivante : $string2 <br>";
        for($i=0;$i<strlen($string2);$i++){
            echo "La caractère n° ".$i." de la chaîne de caractères ".$string2. " est \"".substr($string2,$i,1)."\".<br>";
        }
        echo "<br /><br />";


// Exercice 3 :
/* Formatez l'affichage d'une suite de chaîne contenant des noms et prénoms en respectant les critères suivants : un prénom et un nom par ligne affichés sur 20 caractères, et toutes les initiales des mots doivent se superposer vertialement. */

echo "<b><u>Exercice 3 :</u></b>";
echo "<br><br>";

$nom1 = "Azerky";
$prenom1 = "Sophia";
echo sprintf("<code>%'_-20s %'_-20s </code> <br />", $nom1, $prenom1);

$nom2 = "Bazertudith";
$prenom2 = "Jean-Michel";
echo sprintf("<code>%'_-20s %'_-20s </code> <br />", $nom2, $prenom2);
echo "<br /><br />";


// Exercice 4 :
/* Utilisez les fonctions adéquates afin que la chaîne <form action="script.php"> soit affichée telle quelle et non comme du code HTML. */

echo "<b><u>Exercice 4 :</u></b>";
echo "<br><br>";

$ch2 = '<form action="script.php>';
echo htmlentities($ch2);
echo "<br /><br /><br />";


// Exercice 5 :
/* A partir de deux chaînes quelconques contenues dans des variables, effectuez une comparaison entre elles pour pouvoir les afficher en ordre alphabétique naturel. */

echo "<b><u>Exercice 5 :</u></b>";
echo "<br><br>";

$ch3 = "Alpha";
$ch4 = "Azéma";
if(strtolower($ch3)<strtolower($ch4)) echo $ch3." est avant ".$ch4;
else echo $ch4, " est avant ", $ch3;
echo "<br /><br /><br />";


// Exercice 6 :
/* Effectuer une censure sur un texte en affichant pas le mot "zut". */

echo "<b><u>Exercice 6 :</u></b>";
echo "<br><br>";

$mot = "Zut, je me suis trompée !";
$modele = "/Zut/i";
if(preg_match($modele, $mot)){
    echo "Un mot censuré <br>";
}else{
    echo $mot;
}

$modele1 = "Zut";
if (preg_match($modele, $mot))
    echo "Un mot censuré <br>";
else
    echo $mot;

echo "<br /><br />";

    /* Alternative 1 :

        $string6="\"Je ne l'ai pas dit, encore une fois! − Si, vous l'avez dit. − Non! − Si! − Zut! Vous m'embêtez à la fin!\"(Courteline, Ronds-de-cuir, 1893, p. 179)";
        $target= array("Zut","zUt","zuT","ZUt","zUT","ZuT","ZUT");
        $censorship="Censuré !";
        $censoredstring = str_replace($target,$censorship,$string6);
        
        echo "La Phrase non-censurée est la suivante :<br>".$string6;
        echo "<br>";
        echo "La Phrase censurée est la suivante :<br>".$censoredstring; */

    /* Alternative 2 :

        $a = "zut!! personne ne parle!";
        $mot = "zut";

        if (preg_match("/$mot/i", $a)) {
        echo "le mot censuré est : $mot";//on n'as pas besoin d'accolate si un seul ligne mais si deux ligne on met lacolate
        } else {
        echo $a;
        } */


// Exercice 7 :
/* Créez une fonction de validation d'une adresse HTTP ou FTP en vous inspirant de l'exemple 4.
Le modèle doit répondre à la définition suivante :
1. Commencer par "www"
2. Suivi par des lettres puis éventuellement un point ou un tiret suivis d'un deuxième groupe de lettres
3. Se terminant par un point suivi de l'extension qui peut avoir de 2 à 4 caractères.
Par exemple, les adresses www.machin.com ou www.machintruc.uk sont valides. */

echo "<b><u>Exercice 7 :</u></b>";
echo "<br><br>";

// Création de la fonction
function validhttp($vald){
    $modeles = "/^(www)\.([a-z0-9]+)(\.|-)?([a-z0-9]*)\.([a-z]{2,4}$)/";
    $vald =  strtolower($vald);

    if(preg_match($modeles, $vald)){
        echo "$vald est une adresse valide <br />";
        return TRUE;
    }
    else{
        echo "$vald est un invalide <br />";
        return FALSE;
    }
}

// Utillisation de la fonction de validation
$url = "www.laposte2.info";
$url1 = "www.pierre-plus-loin-info";
$url2 = "www.magne.funphp.com";

validhttp($url);
validhttp($url1);
validhttp($url2);
echo "<br /><br />";

    /* Alternative  :

        $string6="\"Je ne l'ai pas dit, encore une fois! − Si, vous l'avez dit. − Non! − Si! − Zut! Vous m'embêtez à la fin!\"(Courteline, Ronds-de-cuir, 1893, p. 179)";
        $target= array("Zut","zUt","zuT","ZUt","zUT","ZuT","ZUT");
        $censorship="Censuré !";
        $censoredstring = str_replace($target,$censorship,$string6);
        
        echo "La Phrase non-censurée est la suivante :<br>".$string6;
        echo "<br>";
        echo "La Phrase censurée est la suivante :<br>".$censoredstring; */


// Exercice 8 :
/* Créez une expression régulière pour valider un âge inférieur à 100 ans. */

echo "<b><u>Exercice 8 :</u></b>";
echo "<br><br>";

$model = "/^[0-9]?([0-9]?)$/";
$age = "4";
if(preg_match($model, $age)){
    echo "$age est un âge valide <br />";
}else{
    echo "$age n'est pas un âge valide <br />";
 }
echo "<br />";

    // Alternative 1 :
        echo "<u><b>Alternative :</b></u>";
        echo "<br /><br />";

        function agetest($age){
            $pattern="/^[1-9][0-9]?$/";
            if(preg_match($pattern,$age)==true)
                echo "L'age renseigné $age est un age valide.<br>";
            else
                echo "L'age renseigné $age n'est pas un age valide.<br>";
        }

    // Alternative 2 :
        $agerand;

        for($i=0;$i<10;$i++){
            $agerand=rand(0,200);
            agetest($agerand);
        }
        echo "<br /><br />";


// Exercice 9 :
/* Dans la chaîne "PHP 5 \n est meilleur \n que ASP \n et JSP \n réunis", remplacez les caractères \n par <br /> en utilisant deux méthodes différentes (une fonction ou une expresson régulière). En utilisant la fonction nl2br() */

echo "<b><u>Exercice 9 :</u></b>";
echo "<br><br>";

$chaine = "PHP 5 \n est meilleur \n que ASP \n et JSP \n réunis";
echo "<p>", nl2br($chaine),"</p>";

// Utilisation d'une expression régulière
$model = "/\n/";
$nouveau = "<br />";
echo preg_replace("/\n/", "<br />", $chaine);

    // Alternative :
        $target9 = "\n";
        $remplace = "<br>";
        $newstring9 = str_replace($target9, $remplace, $chaine);
        echo $newstring9;



?>