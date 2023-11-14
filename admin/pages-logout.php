<?php 

include('includes/connect.php');


    session_start(); 

    if (isset($_SESSION['fullname'])) {
       
       $fname=$_SESSION['fullname'];

      $login=" INSERT INTO login_status (fullname,status) VALUES ('$fname','inactive')";
      $run_status = mysqli_query($con, $login);
      if ($run_status) {

 session_destroy();

header('location:pages-login.php?logout has been successfuly');
                    }

                     }
?>