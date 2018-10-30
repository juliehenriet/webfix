<?php
require_once(__DIR__.'/../webflix/partial/header.php');

$id = isset($_GET['id']) ? $_GET['id'] : 0;

$query = $db->query('SELECT * FROM movie WHERE id = '.$id);
$movie = $query->fetchALL();

 ?>

 <main class ="container">

   <div class="row align-items-start">
 <?php  foreach ($movie as $film) { ?>

     <div class="col" >

          <div class= "embed-responsive embed-responsive-16by9" > <iframe class= "embed-responsive-item" <?php echo $film['video_link'];  ?> allowfullscreen ></iframe> </div>
       <div class ="titre"><h1><?php echo $film['title'];  ?></h1>
      </br>
         <?php echo $film['description']; ?></br>
</div>
     </div>
   </div>
    <?php   }?>
</main>
