<?php
require_once(__DIR__.'/../webflix/partial/header.php');

$id = isset($_GET['id']) ? $_GET['id'] : 0;

$query = $db->query('SELECT * FROM movie');
$movie = $query->fetchAll();

 ?>

 <main class ="container">

   <div class="row align-items-start">
 <?php  foreach ($movie as $film) { ?>

     <div class="col" ><iframe width="1050" height="720" "<?php echo $film['video_link'] ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

      </br>
         <?php echo $film['description']; ?></br>

     </div>
   </div>
    <?php   }?>
</main>
