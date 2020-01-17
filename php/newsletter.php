

<?php

// Connexion à la base de données

try
{
	$bdd = new PDO('mysql:host=db5000272867.hosting-data.io;dbname=dbs266333;charset=utf8', 'dbu34426','0A9cb367ed9#');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}



// Insertion du mail à l'aide d'une requête préparée

$req = $bdd->prepare('INSERT INTO newsletter (mail_user) VALUES(?)');
$req->execute(array($_POST['mail_user']));



?>