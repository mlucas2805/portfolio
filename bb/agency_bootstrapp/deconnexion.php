<?php 	session_start();

$_SESSION['nom']		= '';
$_SESSION['email']		= '';

session_destroy();
header('location: index.php');

include ('pied.php');
?>