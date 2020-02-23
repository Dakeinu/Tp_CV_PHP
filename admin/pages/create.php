<?php
require('partials/form.php');
?>

<?php

try {
	$bdd = new PDO('mysql:host=localhost;dbname=sitecv;charset=utf8', "root", '');
}
catch(Exception $e) {
	die('Erreur : '.$e->getMessage());
}


if(isset($_POST['valider'])){
	$req = $bdd->prepare('INSERT INTO :table(email, commentaire) VALUES(:email, :commentaire)');
	if(!$req){
		print_r($bdd->errorInfo());	
	}


if (!$req->execute(array(
		'email' => $_POST['email'],
		'commentaire' => $_POST['commentaire'],	
	))) {
	print_r($req->errorInfo());
}
	

	echo 'Le message a bien été envoyé !';
}
?>