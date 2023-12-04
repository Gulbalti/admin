<?php 

include('includes/connect.php');


    session_start(); 

    if (isset($_SESSION['name'])) {
       
       $name = $_SESSION['name'];

         $login="UPDATE users SET status='active' WHERE name='$name'";
     $run_status = mysqli_query($con, $login);

      if ($run_status) {

 session_destroy();

header('location:pages-login.php?logout has been successfuly');
                    }

                     }
?>