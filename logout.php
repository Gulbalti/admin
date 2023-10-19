<?php

session_start();

session_destroy();


$_SESSION['email']=$email;

echo "<script>alert('logout successfully') </script>";

echo "<script> window.open('login.php','_self')</script>";


 ?>