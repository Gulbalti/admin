<?php 

include('includes/connect.php');


if (isset($_GET['photo'])) {

$getphoto = $_GET['photo'];

$upload = 'removed';

	$select = "UPDATE  profiles SET photo='$upload' WHERE profile_id='$getphoto'";

	$run = mysqli_query($con, $select);
	if ($run ) {
		

		echo "<script> window.open('users-profile.php?photo=has been removed','_self')</script>";



	}else{

				echo "<script> alert('Photo have not been deleted')</script>";


	}
	
}

?>