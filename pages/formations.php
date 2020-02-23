<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=sitecv;charset=utf8', "root", '');
}
catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT diplome,annee,etablissement,lieu FROM formations');

while ($donnees = $reponse->fetch()) {
    echo $donnees["diplome"] . '<br />';

    echo $donnees["annee"] . '<br />';
    echo $donnees["etablissement"] . '<br />';
    echo $donnees["lieu"] . '<br />';
    echo '<br />';

}

$reponse->closeCursor();