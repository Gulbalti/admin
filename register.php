<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        
        <!-- title of site -->
        <title>Directory Landing Page</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!--linear icon css-->
		<link rel="stylesheet" href="assets/css/linearicons.css">

		<!--animate.css-->
        <link rel="stylesheet" href="assets/css/animate.css">

		<!--flaticon.css-->
        <link rel="stylesheet" href="assets/css/flaticon.css">

		<!--slick.css-->
        <link rel="stylesheet" href="assets/css/slick.css">
		<link rel="stylesheet" href="assets/css/slick-theme.css">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="assets/css/responsive.css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
	
	<body>
		
		<?php include('header.php');?>
		

		<!--subscription strat -->
		<section id="contact"  class="subscription">
			<div class="container">
				<div class="subscribe-title text-center">
					<h2>
					            Register Your Profile
					</h2>
					<p>
						Complete Registration Form Below
					</p>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="subscription-input-group">
							<form action="register.php" method="post" enctype="multipart/form-data">
                            <table class="table table-sm">
                            	<tr>
									<td>First Name:</td>
									<td><input type="text" name="fname" class="form-control" placeholder="Enter First Name" required="required"></td>
								</tr>
								<tr>
									<td>Last Name:</td>
									<td><input type="text" name="lname" class="form-control" placeholder="Enter Last Name" required="required"></td>
								</tr>
									<tr>
									<td>Your Email:</td>
									<td><input type="email" name="email" class="form-control" placeholder="Enter Email Address" required="required"></td>
								</tr>
								<tr>
									<td>Password:</td>
									<td><input type="password" name="password" placeholder="Enter Password" class="form-control"></td>
								</tr>
								<tr>
									<td>Confirm Password:</td>
									<td><input type="password" name="repassword" placeholder="Enter Confirm Password" class="form-control"></td>
								</tr>
								<tr>
									<td>Upload Photo:</td>
									<td><input type="file" name="image" placeholder="Upload Photo"></td>
								</tr>
								<tr>
									<td>Gender:</td> <td>Male  <input type="radio" name="gender" value="male"> Female   <input type="radio" name="gender" value="female"></td>
								</tr>
								<tr>
									<td>Mobile No</td>
									<td><input type="text" class="form-control" name="mobile" placeholder="03**-*****-***" required="required"></td>
								</tr>
								<tr>
									
									<td colspan="5"><input type="submit" name="register" value="Register Now" class="btn btn-primary btn-sm"></td>
								</tr>
								</table>
							</form>
							<?php

							include ('connect.php');

							if (isset($_POST['register'])) {
								
								 $fname = $_POST['fname'];
								 $lname = $_POST['lname'];
								 $email = $_POST['email'];
								 $pass = $_POST['password'];
                                 $pwd = md5($pass);
								 $repass = $_POST['repassword'];
								 if ($pass !== $repass) {
								 	echo "Password not match";
								 }
								 if ($pass < 8) {
								 	echo "Please Use 8 words";
								 }
								 $gender = $_POST['gender'];
								 $mobile = $_POST['mobile'];


							if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"assets/images/profile/".$file_name);
         
         $insert =" INSERT INTO users(user_fname,user_lname,user_email,user_photo,user_password,user_mobile,user_gender) VALUES ('$fname','$lname','$email','$file_name','$pwd','$mobile','$gender')";

          $run = mysqli_query($con, $insert);
          if ($run) {
          	echo "<script>alert('Registration has been successfuly and login now') </script>";
          	echo "<script> window.open('login.php','_self')</script>";
          }
      }else{
         print_r($errors);
      }
   }
		

								}


							 ?>
						</div>
					</div>	
				</div>
			</div>

		</section><!--/subscription-->	
		<!--subscription end -->

		<?php include('includes/footer.php');?>
		
		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="assets/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

        <!--feather.min.js-->
        <script  src="assets/js/feather.min.js"></script>

        <!-- counter js -->
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>

        <!--slick.min.js-->
        <script src="assets/js/slick.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		     
        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>
        
    </body>
	
</html>