<?php
require_once(__DIR__.'/../config/database.php');
 ?>

 <?php
 $query = $db->query('SELECT * FROM category');
 $categorys = $query->fetchAll();
  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Webflix</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/style.css">
  </head>
  <body>

<header>

  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Webflix</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="movie_list.php">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">connexion</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Inscription</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="movie_add.php">Ajouter un film</a>
      </li>

      <li class="nav-item dropdown">
      <select class="" name="">
        <?php foreach ($categorys as $category) {?>
      
      <option value="">  <a class="dropdown-item" href=" #"><?php echo $category['name']; ?></a></option>
      <?php  }  ?>
    </select>

        </div>
      </li>
    </ul>
  </div>
</nav>
</header>
