<?php 

session_start();


    if (isset($_SESSION['name'])){

     $name = $_SESSION['name'];

      header('location:../pages-login.php');
    }


  ?>