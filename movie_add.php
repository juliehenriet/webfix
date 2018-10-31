<?php

  require_once(__DIR__.'/../webflix/partial/header.php');

  var_dump($_POST);

  $query = $db->query('SELECT * FROM category');
  $categorys = $query->fetchAll();

 ?>

<div class="container">
<form action ="movie_add.php"method="post" enctype="multipart/form-data">

<input class="form-control form-control-lg" type="text" name="title"></input>

<div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
  </div></br>

<input class="form-control form-control-lg" type="text" name ="video_link"/></br>

<select class="form-control form-control-lg" name="category">

      <option>selectionnez la catégorie</option>
<?php foreach ($categorys as $category) { ?>

<option  value="<?php echo $category['id']; ?>"<?php echo ($categorys === $category) ? 'selected' : ''; ?>> <?php echo $category['name'];?> </option>

<?php } ?>
</select></br>
  <button type="submit" class="btn btn-danger">Submit</button>
</div>
 </form>

 <?php

$title = null;
$description = null;
$video_link = null;
$category = null;

if (!empty($_POST)){

    $title = $_POST['title'];
    $description = $_POST['description'];
    $video_link =  $_POST['video_link'];
    $category = $_POST['category'];

    $errors = [];

    if (empty($title)) {
      $errors['name'] = 'Le nom n\'est pas valide';
        echo 'le nom n est pas valide';
  }


  // if (empty($category) || !in_array($category, ['action', 'fantastique', 'comédie', 'horreur', 'film d animation'])) {
  //     $errors['category'] = 'La catégorie n\'est pas valide';
  //     echo 'la categorie n est pas valide';
  // }
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
        INSERT INTO movie (`title`, `category_id`, `description`, `video_link`) VALUES (:title, :category_id, :description, :video_link)
    ');
    $query->bindValue(':title', $title, PDO::PARAM_STR);
      $query->bindValue(':category_id', $category, PDO::PARAM_INT);
    $query->bindValue(':description', $description, PDO::PARAM_STR);
    $query->bindValue(':video_link',$video_link, PDO::PARAM_STR);

if ($query->execute()){
  echo 'succes';
}
  }
}


  ?>

 <?php
   require_once(__DIR__.'/../webflix/partial/footer.php');
  ?>
