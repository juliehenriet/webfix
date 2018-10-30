<?php
require_once(__DIR__.'/../webflix/partial/header.php');

$id = isset($_GET['id']) ? $_GET['id'] : 0;

$query = $db->query('SELECT * FROM movie WHERE id = '.$id);
$movie = $query->fetchALL();

$query = $db->prepare('DELETE FROM movie WHERE movie. id = :id');
$query->bindValue(':id', $id, PDO::PARAM_INT);
$query->execute();  ?>
