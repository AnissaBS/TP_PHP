<?php

foreach($_POST as $name => $value){
    echo $name.' '.$value.' </br>';
}

var_dump($_POST).'<br>';

$f = fopen("Sauvegarde.txt","a");
fwrite($f, $_POST['Nom']."\n");
fwrite($f, $_POST['Prenom']." - ");
fwrite($f, $_POST['Adresse']."\n");
fwrite($f, $_POST['Ville']."\n");
fwrite($f, $_POST['CP']."\n");

$f = fclose($f);
?>