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
      <?php echo $movie['video_link'];  ?></br>
        <?php echo $movie['description']; ?></br>

<button type="button" class="btn btn-danger"><a href ="movie_single.php ">voir le film</a></button>
    </div>
    <div class="col" >
      <?php echo $movie['video_link'];  ?></br>
        <?php echo $movie['description']; ?></br>

<button type="button" class="btn btn-danger"><a href ="movie_single.php ">voir le film</a></button>
    </div>
    <div class="col" >
      <?php echo $movie['video_link'];  ?></br>
        <?php echo $movie['description']; ?></br>

<button type="button" class="btn btn-danger"><a href ="movie_single.php ">voir le film</a></button>
    </div>

  </main>
    <main class ="container">

      <div class="row align-items-start">
    <div class="col" >
      <?php echo $movie['video_link'];  ?></br>
        <?php echo $movie['description']; ?></br>

<button type="button" class="btn btn-danger"><a href ="movie_single.php ">voir le film</a></button>
    </div>
    <div class="col" >
      <?php echo $movie['video_link'];  ?></br>
        <?php echo $movie['description']; ?></br>

<button type="button" class="btn btn-danger"><a href ="movie_single.php ">voir le film</a></button>
    </div>
    <div class="col" >
      <?php echo $movie['video_link'];  ?></br>
        <?php echo $movie['description']; ?></br>

<button type="button" class="btn btn-danger"><a href ="movie_single.php ">voir le film</a></button>
    </div>

 <?php   }?>
</main>

   <?php  require_once(__DIR__.'/../webflix/partial/footer.php');  ?>
