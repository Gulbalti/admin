<?php 

    session_start(); 

    if (isset($_SESSION['fullname'])) {
       $_SESSION['fullname'];
   

	session_destroy();
	header('location: pages-login.php?login Please');

}
?>