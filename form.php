<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
        <input type="checkbox" name="fruit[]" value="Pomme">Pomme<br>
        <input type="checkbox" name="fruit[]" value="Orange">Orange<br>
        <input type="checkbox" name="fruit[]" value="Pamplemousse">Pamplemousse<br>
        <input type="checkbox" name="fruit[]" value="Banane">Banane<br>
        <input type="checkbox" name="fruit[]" value="Avocat">Avocat<br>
        <input type="checkbox" name="fruit[]" value="Fraise">Fraise<br><br>
        <input type="submit" valu="Envoyer">
    </form>

    <!-- Dans cet exemple, les cases à cocher ont le même nom 'fruit' -->

    <?php
        if(isset($_POST["fruit"])){
            // Parcourir le tableau
            foreach($_POST ["fruit"] as $value){
                echo "<br>".$value;
            }
        }
    ?>

</body>
</html>