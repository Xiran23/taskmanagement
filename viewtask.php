<!-- view task -->
<?php 
require('config/db.php');

//fetch query 

$query = 'SELECT *FROM tasks ';

$result = mysqli_query($conn,$query);

$tasks = mysqli_fetch_all($result, MYSQLI_ASSOC);
//  print_r($tasks);
mysqli_free_result($result);
mysqli_close($conn);

?>



<?php 
include('inc/header.php');
 ?>
<title>View Task</title>
  </head>
  <body>
    <!-- **************************************************** -->
  <div class="container">

<?php 
      include('inc/nav.php'); 
      ?>
<!-- ******************************************** -->
<div>
    <h1> Creating TASKS</h1>
 
    <?php foreach($tasks  as $task ): ?>

        
        <div >
            <h3><?php echo $task['title']; ?></h3>
                
                <?php echo $task['task_id'] ?>

                <h1>Description</h1>
                <?php echo $task['description']; ?>

                <h4>SUBMITTION DATE</h4>
                <?php echo $task['due_date']; ?>

                <button>UPDATE</button>
                
                <button>DELETE</button>
        </div>


</div>
<?php endforeach; ?>
</div>

<?php 
include('inc/footer.php');
    ?>