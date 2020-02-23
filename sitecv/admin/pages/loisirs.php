<?php 
try {
    $bdd = new PDO('mysql:host=localhost;dbname=sitecv;charset=utf8', "root", '');
}
catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT loisirs FROM loisirs');

while ($donnees = $reponse->fetch()) {
    echo $donnees["loisirs"] . '<br />';

}

$reponse->closeCursor();

?>
