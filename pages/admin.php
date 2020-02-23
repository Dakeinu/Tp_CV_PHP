<?php
require('partials/adminpage.php');
?>

<?php
session_start();
try {
	$db = new PDO('mysql:host=localhost;dbname=sitecv;charset=utf8', "root", '');
}
catch(Exception $e) {
	die('Erreur : '.$e->getMessage());
}

	$donnees = $db->query('SELECT username, password FROM admin');
	$login = $donnees->fetch();
	$nom_utilisateur = $login["username"]; 
	$motdepasse = $login["password"];
	$donnees->closeCursor();
	
	echo "Login : $motdepasse <br>";
	echo "Mdp : $nom_utilisateur <br>";
   
    if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
		die ('Entrez vos identifiants !');
	}


	if($nom_utilisateur == $_POST['username'] AND $motdepasse == $_POST['password']) {
		header("Location: admin/index.php");
	}





?>
