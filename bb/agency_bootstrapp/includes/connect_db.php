<?php
// attention, il faut vérifier la configuration de php.ini 
// pour contrôler l'activation de "extension=php_pdo_mysql.dll"

include('def.php');

// afin de ne pas avoir le "login" et" mot de passe" affiché en dur si une erreur survenait 
// on va utiliser les fonctions try et catch afin de récupérer le message d'erreur lors de la tentative de connexion 
try
{
    $bdd = new PDO('mysql:host='.SDBSERVER.';dbname='.SDBBASE.'', SDBLOGIN);
    //ajouter SDBPASSWORD si mdp
//	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO_ERRMODE_EXCEPTION); // obligation pour la suite
}
catch (Exception $e)
{
    die('Erreur  : ' . $e->getMessage().' <br>Numéro erreur depuis connect_db.php : '.$e->getCode());
}

?>
