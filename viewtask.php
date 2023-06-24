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
      
      
      
      
      <div class="Section" style="overflow:auto">
      <!-- <h1>TRy1</h1> -->
        <!-- ******************************** -->
        <?php 
        // print_r($tasks);
        ?>
    <h1 style="text-align: center;"> TASKS LIST</h1>
    <div class="sort-buttons">
  <button style=" background-color:#ff9999;" id="sort-high">High Priority</button>
  <button style=" background-color:#ffffb3;" id="sort-medium">Medium Priority</button>
  <button style=" background-color:#b3ffb3;" id="sort-low">Low Priority</button>
  <button id="sort-all">All Tasks</button>
</div>

 
    
    
    <!-- ******************************** -->
    <?php foreach($tasks  as $task ): ?>
    <section class="tasks">

          <div class="t-card">

            <h2 class="task-no"><?php echo $task['title'];?></h2>
            <h2 class="task-no"><?php echo $task['emp_id'];?></h2>
            <h2 class="task-no" id="priority"><?php echo $task['task_priority'];?></h2>

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

<script>
  console.log("hey");

//   var priority = document.getElementById('priority').textContent;

// var taskList = document.getElementById('tasks');
// var taskBlocks = document.getElementsByClassName('t-card');

// console.log(taskBlocks.length);

// for(var i = 0 ; i < taskBlocks.length;i++){
//   var taskBlock =taskBlocks[i];


//   switch (priority) {
//     case '1':
//       taskBlock.classList.add('low-priority');
//       break;
//     case '2':
//       taskBlock.classList.add('medium-priority');
//       break;
//     case '3':
//       taskBlock.classList.add('high-priority');
//       break;
//     default:
//       break;
//   }
// }



// var priority = document.getElementById('priority').textContent;

var taskBlocks = document.getElementsByClassName('t-card');
for (var i = 0; i < taskBlocks.length; i++) {
  var taskBlock = taskBlocks[i];
  // var priority = taskBlock.getElementById('priority').textContent;
  var priority = taskBlock.querySelector('#priority').textContent;

  switch (priority) {
    case '1':
      taskBlock.classList.add('low-priority');
      break;
    case '2':
      taskBlock.classList.add('medium-priority');
      break;
    case '3':
      taskBlock.classList.add('high-priority');
      break;
    default:
      break;
  }
}

// taskBlocks.classList.add('task-blockrt');



  console.log(priority);


  function showAllTasks() {
    for (var i = 0; i < taskBlocks.length; i++) {
      var taskBlock = taskBlocks[i];
      taskBlock.style.display = 'block';
    }
  }
  

  function sortTasksByPriority(priority) {
    for (var i = 0; i < taskBlocks.length; i++) {
      var taskBlock = taskBlocks[i];
      var taskPriority = taskBlock.querySelector('#priority').textContent;

      if (taskPriority === priority) {
        taskBlock.style.display = 'block';
      } else {
        taskBlock.style.display = 'none';
      }
    }
  }

  var sortHighButton = document.getElementById('sort-high');
  sortHighButton.addEventListener('click', function() {
    sortTasksByPriority('3');
  });

  var sortMediumButton = document.getElementById('sort-medium');
  sortMediumButton.addEventListener('click', function() {
    sortTasksByPriority('2');
  });

  var sortLowButton = document.getElementById('sort-low');
  sortLowButton.addEventListener('click', function() {
    sortTasksByPriority('1');
  });

  var sortAllButton = document.getElementById('sort-all');
  sortAllButton.addEventListener('click', function() {
    showAllTasks();
  });
</script>

<!-- Swiper JS -->

<!-- <script src="swiper/swiper-bundle.min.js"></script>
<script src="js/jquery-3.7.0.min.js"></script>
<script src="js/index.js"></script>
<script src="ajax/ajax.js"></script> -->

<!-- Initialize Swiper -->


</html>
