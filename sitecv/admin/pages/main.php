
<?php 
try {
    $bdd = new PDO('mysql:host=localhost;dbname=sitecv;charset=utf8', "root", '');
}
catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT nom,prenom,naissance,adresse,mail,tel,permis FROM id');

while ($donnees = $reponse->fetch()) {
    echo $donnees["nom"] . '<br />';
    echo $donnees["prenom"] . '<br />';
    echo $donnees["naissance"] . '<br />';
    echo $donnees["adresse"] . '<br />';
    echo $donnees["mail"] . '<br />';
    echo $donnees["tel"] . '<br />';
    echo $donnees["permis"] . '<br />';
}

$reponse->closeCursor();

?>
