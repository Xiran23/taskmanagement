<!-- view task -->
<?php 
require('config/db.php');

//fetch query 

$query = 'SELECT *FROM tasks ';

$result = mysqli_query($conn,$query);

$tasks = mysqli_fetch_all($result, MYSQLI_ASSOC);
//  print_r($tasks);
mysqli_free_result($result);


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styledash.css" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="swiper/swiper-bundle.min.css" />

    <title>Dashbord</title>
  </head>
  <body>


    
    <?php 
      include('inc/header.php');
      ?>
    <div class="container">
      
      
      
      
      <div class="Section">
        <!-- ******************************** -->
        
        
    <h1 style="text-align: center;"> TASKS LIST</h1>
 
    
    
    <!-- ******************************** -->
    <?php foreach($tasks  as $task ): ?>
    <section class="tasks">

          <div class="t-card">

            <h2 class="task-no"><?php echo $task['title'];?></h2>
            <div class="text-button">
              <p class="t-description">
              <?php echo $task['description']; ?>
              </p>
              <button class="button-small">Edit</button>
              <button class="button-small">Update</button>
              <button class="button-small">Delete</button>
            </div>
          </div>
         </section>
         <?php endforeach; ?>
  
        
        
</div>

<!-- ************************************************************************************************************************************************************* -->








</body>

<!-- Swiper JS -->

<script src="swiper/swiper-bundle.min.js"></script>
<script src="js/jquery-3.7.0.min.js"></script>
<script src="js/index.js"></script>
<script src="ajax/ajax.js"></script>

<!-- Initialize Swiper -->
</html>
