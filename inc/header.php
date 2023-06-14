<?php
session_start();
// if(isset($_SESSION['uname'])){

  
  
// }else{
//   echo "<script> location.href='login.php'; </script>";

// }

?>
<header>



    <label>USER: <?php echo  $_SESSION['username']?></label>
        <label>Email:</label>
    
    </header>