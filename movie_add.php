<?php

  require_once(__DIR__.'/../webflix/partial/header.php');
  $query = $db->query('SELECT * FROM category');
  $categorys = $query->fetchAll();
 ?>

<div class="container">
<form action="movie_add.php" method="post" enctype="multipart/form-data">

<input class="form-control form-control-lg" type="text" name="name"></input>

<div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
  </div></br>

<input class="form-control form-control-lg" type="text" name ="video_link"/></br>

<select class="form-control form-control-lg" name="category">
    <?php foreach ($categorys as $category) {?>
  <option><?php echo $category['name']; ?></option>
    <?php  }  ?>
</select></br>
  <button type="submit" class="btn btn-danger">Submit</button>
</div>
 </form>

 <?php

$name = null;
$description = null;
$video_link = null;
$category = null;

if (!empty($_POST)){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $video_link =  $_POST['video_link'];
    $category = $_POST['category'];

    $errors = [];

    if (empty($name)) {
      $errors['name'] = 'Le nom n\'est pas valide';
        echo 'le nom n est pas valide';
  }


  if (empty($category) || !in_array($category, ['action', 'fantastique', 'comédie',])) {
      $errors['category'] = 'La catégorie n\'est pas valide';
      echo 'la categorie n est pas valide';
  }
  // Vérifier la description
  if (strlen($description) < 10) {
      $errors['description'] = 'La description n\'est pas valide';
      echo 'La description n\'est pas valide';
  }

  if (empty($video_link)) {
    $errors['video_link'] = 'Le nom n\'est pas valide';
    echo 'Le lien n\'est pas valide';
}



  if (empty($errors)) {
    $query = $db->prepare('
        INSERT INTO movie (`name`, `category`, `description`, `video_link`) VALUES (:name, :category, :description, :video_link)
    ');
    $query->bindValue(':name', $name, PDO::PARAM_STR);
    $query->bindValue(':category', $category, PDO::PARAM_STR);
    $query->bindValue(':description', $description, PDO::PARAM_STR);
    $query->bindValue(':video_link ',$video_link, PDO::PARAM_STR);

    if ($query->execute()) {
        $success = true;

    }
}
}


  ?>

 <?php
   require_once(__DIR__.'/../webflix/partial/footer.php');
  ?>
