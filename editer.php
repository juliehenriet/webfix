<?php
  require_once(__DIR__.'/../webflix/partial/header.php');

$id = isset($_GET['id']) ? $_GET['id'] : 0;

$query = $db->query('SELECT * FROM movie WHERE id = '.$id);
$movie = $query->fetch();

$query->bindValue(':id',  $id, PDO::PARAM_INT);
$query->execute();
$query = $db->query('SELECT * FROM category');
$categorys = $query->fetchAll();

$title = $movie['title'];
$description = $movie['description'];
$video_link = $movie['video_link'];
$category = $movie['category_id'];



if (!empty($_POST)){

   $title = $_POST['title'];
   $description = $_POST['description'];
   $video_link =  $_POST['video_link'];
   $category = $_POST['category'];

   $errors = [];

   if (empty($title)) {
     $errors['title'] = 'Le nom n\'est pas valide';
       echo 'le nom n est pas valide';
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

 $query = $db->prepare("UPDATE movie SET  title = :title, description = :description, category_id = :category_id, video_link = :video_link WHERE id = $id
 ");
 $query->bindValue(':title',  $title, PDO::PARAM_STR);
   $query->bindValue(':description',  $description, PDO::PARAM_STR);
     $query->bindValue(':category_id',  $category, PDO::PARAM_STR);
         $query->bindValue(':video_link',  $video_link, PDO::PARAM_STR);


if ($query->execute()){
echo 'succes';
}
}
}

 ?>

<div class="container">
<form action="#" method="post" enctype="multipart/form-data">

<input class="form-control form-control-lg" type="text" name="title"></input>

<div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">description</textarea>
  </div></br>

<input class="form-control form-control-lg" type="text" name ="video_link"/></br>

<select class="form-control form-control-lg" name="category" <?php echo isset($errors['category']) ? 'is-invalid' : null; ?>>

      <option>selectionnez la catégorie</option>
        <?php foreach ($categorys as $category) {?>
    

          <option  value="<?php echo $category['id'] ;?>"<?php echo ($categorys === $category) ? 'selected' : ''; ?>;> <?php echo $category['name'];?> </option>
  <?php  }  ?>

</select></br>
  <button type="submit" class="btn btn-danger">Submit</button>
</div>

 </form>
