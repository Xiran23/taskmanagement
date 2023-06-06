 <?php include('../config/db.php') ?>


 
  <div id="divisions">
          
          <form method="POST" id="Createtask">
            <div>
              <h1>CREATE A TASK</h1>
            </div>
            <div>
              <label for="">Title</label>
              <input type="text" name="tname" type="text">
              
            </div>
            <div>
              <label for="">employee_id</label>
              <input name="empid" type="text">
              
            </div>
            <div>
              <label for="">due_date</label>
              <input type="date" name="tduedate" type="text">
                
            </div>
            <div>
              <label for="">submission_date</label>
              <input type="date" name="sduedate" type="text">
              
            </div>
            <div>
              <label for="">description</label>
              
              <textarea name="tdesc"> </textarea>
              
            </div>
            <input type="submit" value="submit" name="submit" id="submit">
            
            
          </form>
          
          
        </div>




 <?php
    

    class Task
    {
        private $title;
        private $descritption;
        private $due_date;
        private $employee_id;

        public function __construct($title, $descritption, $due_date, $employee_id)
        {
            $this->title = $title;
            $this->descritption = $descritption;
            $this->due_date  = $due_date;
            $this->employee_id = $employee_id;
        }
    }

    if (isset($_POST['submit'])) {
        echo "hey";
      
        $title = $_POST['tname'];
        $description  = $_POST['tdesc'];
        $due_date     = $_POST['tduedate'];
        $employee_id  = $_POST['empid'];
        //creating object 
        $task = new Task($title, $description, $due_date, $employee_id);

        $query = "INSERT INTO tasks (title, description, due_date, emp_id) VALUES 
              ('$title','$description', '$due_date','$employee_id')";

        if (mysqli_query($conn, $query)) {
            /*
                header('Location:<?php echo $_SERVER["PHP_SELF"]; ?>');
                */
            echo "<script> alert(1); </script>";
        } else {
            echo "failed";
        }
    }








    ?>