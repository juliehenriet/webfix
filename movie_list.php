<?php
require_once(__DIR__.'/../webflix/partial/header.php');
var_dump ($db);

$query = $db->query('SELECT * FROM movie');
$movies = $query->fetchAll();

 ?>

<main class ="container">

  <div class="row align-items-start">
<?php  foreach ($movies as $movie) { ?>

    <div class="col" >
       <div class= "embed-responsive embed-responsive-16by9" > <iframe class= "embed-responsive-item" <?php echo $movie['video_link'];  ?> allowfullscreen ></iframe> </div>
     <div class ="titre"><h1><?php echo $movie['title'];  ?></h1>
        <?php echo $movie['description']; ?></br>

<a  class="btn btn-danger" href ="movie_single.php ?id=<?php echo $movie['id'];?>">voir le film</a>
    </div>
</div>

 <?php   }?>
</main>

   <?php  require_once(__DIR__.'/../webflix/partial/footer.php');  ?>
