<?php 
include('inc/header.php');
 ?>
<title>Create Task</title>
  </head>
  <body>
    
  <div class="container">

<?php 
      include('inc/nav.php'); 
      ?>
      
    <form method="POST">
        <h1>CREATE A TASK</h1>
        <div>
            <label for="">Title</label>
            <input name="tname" type="text">

        </div>
        <div>
            <label for="">description</label>
          
            <textarea name="tdesc"> </textarea>
            
        </div>
        <div>
            <label for="">due_date</label>
            <input name="tduedate" type="text">
            
        </div>
        <div>
            <label for="">employee_id</label>
            <input name="empid" type="text">
            
        </div>
        <input type="submit" value="submit" name="submit">


    </form>
</div>
    
</body>
</html>



<?php 
include('inc/footer.php');
    ?>

<?php
include('config/db.php');

class Task {
    private $title; 
    private $descritption; 
    private $due_date; 
    private $employee_id; 

    public function __construct($title,$descritption,$due_date,$employee_id){
        $this -> title = $title; 
        $this -> descritption = $descritption;
        $this ->due_date  = $due_date;
        $this ->employee_id = $employee_id;

         

    }
}

    if(isset($_POST['submit'])){
        $title = $_POST['tname'];
        $description  = $_POST['tdesc'];
        $due_date     = $_POST['tduedate'];
        $employee_id  = $_POST['empid'];
//creating object 
        $task = new Task($title,$description,$due_date,$employee_id);
        
        $query ="INSERT INTO tasks (title, description, due_date, emp_id) VALUES 
              ('$title','$description', '$due_date','$employee_id')";

              if(mysqli_query($conn,$query)){
                header('Location:viewtask.php');
                echo "Task created";
              }
              else {
                echo "failed";
              }

              

    }








?>