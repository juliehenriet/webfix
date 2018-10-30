<?php
require_once(__DIR__.'/../partial/header.php');

  try{
$db = new PDO ('mysql:host=localhost;dbname=webfix', 'root', '', [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, // Active les erreurs SQL,
		// On récupère tous les résultats en tableau associatif
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	]);
}catch(Exeption $e){
  header ('Location : https://www.google.fr/search?q='.$e->getMessage());
}



 ?>
