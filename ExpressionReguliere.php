<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    /*
        Elles permettent de contrôler la bonee saisie dans un formulaire d'une page.
        Par exemple : un code postal ne contient que des chiffres, un nom propre ne peut pas contenir des caractères inhabituels, une adresse email doit obligatoirement posséder le signe @, une zone de texte doit obligatoirement être en majuscule, etc.

        A partir de HTML5, la balise input propose des contrôles intégrés qui surveillent les caractères, mais vous pouvez aussi tester les données dans un script PHP.

        Ces expressions sont appelés rationelles ou régulières (regular en anglais).

        Le principe est de définir un modèle de saisies dans une chaîne qui va servir à tester une autre chaîne de caractères par rapport à ce modèle. S'il n'y a pas de correspondance, on peut envoyer un message à l'utilisateur en indiquant qu'il y a une erreur.
    */

    // $modele = "/[A-Z]/";
    // if(preg_match($modele.$_POST["nom"])==false){
    //     // J'appelle la fonction et je passe le message à afficher
    //     echo ("Le nom doit comporter des majuscules");
    //     exit();
    // }

    // Le tableau ci-dessous montre quelques modèles employés dans le code PHP
    /*
        Modele          || Description
        "/[a-z]/"           Au moins un caractère contenant n'importe quelle lettre en minuscule.
        "/[A-Z]/"           Au moins un caractère contenant n'importe quelle lettre en MAJUSCULE.
        "/[0-9]/"           Au moins un chiffre entre 0 et 9.
        "/[[:alpha:]]/"     N'importe quel caractère en minuscule ou en MAJUSCULE.
        "/[[:alnum:]]/"     Pour les caractères alphanumériques.
        "/[[:blank:]]/"     Les espaces, les tabulations.
        "/[[:ctrl:]]/"      Les caractères de contrôle.
        "/[[:digit:]]/"     Tous les chiffres.

        "/Lyon/"
    */

    ?>

    <form action="" method="post">
        <fieldset>
            <legend><b>Vos coordonnées</b></legend>
            <label>Nom :</label>
            <input type="text" name="nom" size="40" /> <br></br>
            <label>Email :</label>
            <input type="mail" name= "mail"/> <br></br> <!-- pattern="(^[a-z0-9]+) @([a-z0-9])+(\.)([a-z]{2,4})" -->
            <label>Téléphone :</label>
            <input type="text" name="tel" pattern="(^0[0-9]{9}"/> <br></br>
            <label>Code :</label>
            <input type="password" name="code" maxlenght="6"/> <br></br>
            <label>Département :</label>
            <input type="number" name="departm" min="1" max="101"/> <br></br>
            <label>Né(e) le :</label>
            <input type="date" name="date" min="1960_01_01" max="2018_01_01"/> <br></br>
            <input type="radio" name="sexe" value="Femme">Femme</br></br>
            <input type="radio" name="sexe" value="Homme">Homme</br></br>
            <select name="pays" size="1">
                <option value="France">France</option>
                <option value="Belgique">Belgique</option>
                <option value="Suisse">Suisse</option>
                <option value="Canada">Canada</option>
            </select> </br></br>
            <input type="submit" value="Envoyer">

        </fieldset>
    </form>
    
</body>
</html>