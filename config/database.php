<?php
  require_once(__DIR__.'/partial/header.php');

  try{
$db = new PDO ('mysql:host=localhost;dbname=webfix', 'root', '');
}catch(Exeption $e){
  header ('Location : https://www.google.fr/search?q='.$e->getMessage());
}


 ?>
