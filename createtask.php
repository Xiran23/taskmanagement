<?php include('config/db.php'); ?>
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
      <div class="createtask">

        <form method="POST">

          <div>
            <h1>CREATE A TASK</h1>
          </div>

          <div>
            <label for="">Title</label>
            <input type="text" name="tname" type="text">

          </div>

          <!-- <div>
              <label for="">employee_id</label>
              <input name="empid" type="text">
              
            </div> -->

          <div>
            <label for="emp">Employee</label>
            <select name="emp" onchange="populateInputField()" id="emp"> //multiple is removed

              <?php
              $employees = $conn->query("SELECT *FROM users");
              while ($employee = $employees->fetch_assoc()) {
                // var_dump($employee);
                // print_r($employee);
                $firstname = $employee['firstname'];
                $id = $employee['id'];
                // echo $firstname;
                echo "<option value='$id'>$firstname </option>";
              }
              ?>
            </select>
            <label for="emp">Employee_ID</label>
            <input name="empid" type="text" id="myInputField" readonly>
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

            <label for="">Priority </label>
            <select name="priority" id="">
              <option value="1">Low</option>
              <option value="2">Medium</option>
              <option value="3">High</option>
            </select>

          </div>
          <div>
            <label for="">description</label>

            <textarea name="tdesc"> </textarea>

          </div>
          <input type="submit" value="submit" name="submit" id="submit">


        </form>


      </div>


      <!-- ******************************** -->


    </div>

    <!-- ************************************************************************************************************************************************************* -->






  </div>

</body>

<!-- Swiper JS -->

<script src="swiper/swiper-bundle.min.js"></script>
<script src="js/jquery-3.7.0.min.js"></script>
<script src="js/index.js"></script>
<script src="ajax/ajax.js"></script>

<!-- Initialize Swiper -->

</html>
<?php
if (isset($_POST['submit'])) {
  echo "hey";

  $title = $_POST['tname'];
  $description  = $_POST['tdesc'];
  $due_date     = $_POST['tduedate'];
  $employee_id  = $_POST['empid'];
  $priority     = $_POST['priority'];
  //creating object 


  $query = "INSERT INTO tasks (title, description, due_date, emp_id,task_priority) VALUES 
              ('$title','$description', '$due_date','$employee_id','$priority')";

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

<script>
  function populateInputField() {
    var dropdown = document.getElementById("emp");
    var selectedOptions = Array.from(dropdown.selectedOptions).map(option => option.value);
    var inputField = document.getElementById("myInputField");
    inputField.value = selectedOptions.join(", ");
  }
</script>