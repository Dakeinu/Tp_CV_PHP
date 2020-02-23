<input type="submit" name="delete1" value="Envoyer"/>
<?php

try {
	$bdd = new PDO('mysql:host=localhost;dbname=sitecv;charset=utf8', "root", '');
}
catch(Exception $e) {
	die('Erreur : '.$e->getMessage());
}


if(isset($_POST['delete1'])){
$sql = "DELETE FROM loisirs  WHERE id > 1";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
}

?>
