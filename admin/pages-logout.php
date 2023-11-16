<?php 

include('includes/connect.php');


    session_start(); 

    if (isset($_SESSION['name'])) {
       
       $name=$_SESSION['name'];

      $login=" INSERT INTO login_status (name,status) VALUES ('$name','inactive')";
      $run_status = mysqli_query($con, $login);
      if ($run_status) {

 session_destroy();

header('location:pages-login.php?logout has been successfuly');
                    }

                     }
?>