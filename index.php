<?php

session_start();


 if (!isset($_SESSION['email'])) { echo "<script>window.open('login.php') </script>"; } ?>



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
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
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
		
	<?php include('includes/header.php');?>


		<!-- top-area Start -->
		<section class="top-area">
			<div class="header-area">
				<!-- Start Navigation -->
			    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

			        <div class="container">

			            <!-- Start Header Navigation -->
			            <div class="navbar-header">
			                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
			                    <i class="fa fa-bars"></i>
			                </button>
			                <a class="navbar-brand" href="index.php">list<span>race</span></a>

			            </div><!--/.navbar-header-->
			            <!-- End Header Navigation -->

			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
			                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
			                    <li class=" scroll active"><a href="#home">home</a></li>
			                    <li class="scroll"><a href="#works">how it works</a></li>
			                    <li class="scroll"><a href="#explore">explore</a></li>
			                    <li class="scroll"><a href="#reviews">review</a></li>
			                    <li class="scroll"><a href="#blog">blog</a></li>
			                    <li class="scroll"><a href="#contact">contact</a> </li>
			                </ul><!--/.nav -->
			            </div><!-- /.navbar-collapse -->
			        </div><!--/.container-->
			    </nav><!--/nav-->
			    <!-- End Navigation -->
			</div><!--/.header-area-->
		    <div class="clearfix"></div>

		</section><!-- /.top-area-->
		<!-- top-area End -->

		<!--welcome-hero start -->
		<section id="home" class="welcome-hero">
			<div class="container">
				<div class="welcome-hero-txt">
					<h2>best place to find and explore <br> that all you need </h2>
					<p>
						Find Best Place, Restaurant, Hotel, Real State and many more think in just One click 
					</p>
				</div>
				<div class="welcome-hero-serch-box">
					<div class="welcome-hero-form">
						<div class="single-welcome-hero-form">
							<h3>what?</h3>
							<form action="index.html">
								<input type="text" placeholder="Ex: palce, resturent, food, automobile" />
							</form>
							<div class="welcome-hero-form-icon">
								<i class="flaticon-list-with-dots"></i>
							</div>
						</div>
						<div class="single-welcome-hero-form">
							<h3>location</h3>
							<form action="index.html">
								<input type="text" placeholder="Ex: london, newyork, rome" />
							</form>
							<div class="welcome-hero-form-icon">
								<i class="flaticon-gps-fixed-indicator"></i>
							</div>
						</div>
					</div>
					<div class="welcome-hero-serch">
						<button class="welcome-hero-btn" onclick="window.location.href='#'">
							 search  <i data-feather="search"></i> 
						</button>
					</div>
				</div>
			</div>

		</section><!--/.welcome-hero-->
		<!--welcome-hero end -->

		<!--list-topics start -->
		<section id="list-topics" class="list-topics">
			<div class="container">
				<div class="list-topics-content">
					<ul>
						<?php 


						include('connect.php');
$category = " SELECT * FROM category ORDER BY   rand() LIMIT  5 ";
$run_cat = mysqli_query($con, $category);
while($row = mysqli_fetch_array($run_cat)){ ?>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<i class="<?php echo $row['cat_icon']; ?>"></i>
								</div>
								<h2><a href="#"><?php echo $row['cat_name']; ?></a></h2>
								<p><?php echo $row['cat_id'];?>  Listing</p>
							</div>
						</li>

					<?php } ?>
				
					</ul>
				</div>
			</div><!--/.container-->

		</section><!--/.list-topics-->
		<!--list-topics end-->

		<!--works start -->
		<section id="works" class="works">
			<div class="container">
				<div class="section-header">
					<h2>how it works</h2>
					<p>Learn More about how our website works</p>
				</div><!--/.section-header-->
				<div class="works-content">
					<div class="row">
						<?php 
						include('connect.php');

						$get_works = " SELECT * FROM works ORDER BY work_title DESC ";

						$run_works = mysqli_query($con, $get_works);

						while( $row = mysqli_fetch_array($run_works, MYSQLI_ASSOC )){ ?>
						<div class="col-md-4 col-sm-6">
							<div class="single-how-works">
								<div class="single-how-works-icon">
									<i class="flaticon-lightbulb-idea"></i>
								</div>
								<h2><a href="#">choose <span><?php echo $row['work_title']; ?> </span></a></h2>
								<p>
									<?php echo $row['work_description']; ?>
								</p>
								<button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#'">
									read more
								</button>
							</div>
						</div>

					<?php } ?>
					

					</div>
				</div>
			</div><!--/.container-->
		
		</section><!--/.works-->
		<!--works end -->

		<?php  include('expoler.php');?>

		<!--reviews start -->
		<section id="reviews" class="reviews">
			<div class="section-header">
				<h2>clients reviews</h2>
				<p>What our client say about us</p>
			</div><!--/.section-header-->
			<div class="reviews-content">
				<div class="testimonial-carousel">


					<?php 


					include('connect.php');

					$get = " SELECT * FROM clients_reviews";

					 $result = mysqli_query($con, $get);

					 while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
			          <div class="single-testimonial-box">

						<div class="testimonial-description">
							<div class="testimonial-info">
								<div class="testimonial-img">
									<img src="assets/images/clients/<?php echo $row['client_image'];?>" alt="clients">
								</div><!--/.testimonial-img-->
								<div class="testimonial-person">
									<h2><?php echo $row['client_name'];?></h2>
									<h4><?php echo $row['client_location'];?></h4>
									<div class="testimonial-person-star">
										<?php

										for ($x = 0; $x < $row['client_star']; $x++) {

										echo'<i class="fa fa-star"></i>';

									}
										?>
										
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
									<?php echo $row['client_message'];?>
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
										</div><!--/.single-testimonial-box-->

					<?php  
				  
	 }



					?> 

				</div>

			</div>

		</section><!--/.reviews-->
		<!--reviews end -->

		<!-- statistics strat -->
		<section id="statistics"  class="statistics">
			<div class="container">
				<div class="statistics-counter"> 
					<div class="col-md-3 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-content">
								<div class="counter">90 </div> <span>K+</span>
							</div><!--/.statistics-content-->
							<h3>listings</h3>
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
					<div class="col-md-3 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-content">
								<div class="counter">40</div> <span>k+</span>
							</div><!--/.statistics-content-->
							<h3>listing categories</h3>
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
					<div class="col-md-3 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-content">
								<div class="counter">65</div> <span>k+</span>
							</div><!--/.statistics-content-->
							<h3>visitors</h3>
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
					<div class="col-md-3 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-content">
								<div class="counter">50</div> <span>k+</span>
							</div><!--/.statistics-content-->
							<h3>happy clients</h3>
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
				</div><!--/.statistics-counter-->	
			</div><!--/.container-->

		</section><!--/.counter-->	
		<!-- statistics end -->

		<!--blog start -->
		<section id="blog" class="blog" >
			<div class="container">
				<div class="section-header">
					<h2>news and articles</h2>
					<p>Always upto date with our latest News and Articles </p>
				</div><!--/.section-header-->
				<div class="blog-content">
					<div class="row">
						<?php 

						include('connect.php ');

						$get_news = " SELECT * FROM news_and_articles ";
						$runs = mysqli_query($con, $get_news);
						while($rows = mysqli_fetch_array($runs)) { ?>
						<div class="col-md-4 col-sm-6">
							<div class="single-blog-item">
								<div class="single-blog-item-img">
									<img src="assets/images/blog/<?php echo $rows['news_image']; ?>" alt="blog image">
								</div>
								<div class="single-blog-item-txt">
									<h2><a href="#"><?php echo $rows['news_title']; ?></a></h2>
									<h4>posted <span>by</span> <a href="#"><?php echo $rows['news_by']; ?></a><?php echo $rows['news_date']; ?></h4>
									<p>
										<?php echo $rows['news_description'];  ?>
									</p>
								</div>
							</div>
						</div>

					<?php } ?>
					
					</div>
				</div>
			</div><!--/.container-->
			
		</section><!--/.blog-->
		<!--blog end -->

		<!--subscription strat -->
		<section id="contact"  class="subscription">
			<div class="container">
				<div class="subscribe-title text-center">
					<h2>
						do you want to add your business listing with us?
					</h2>
					<p>
						Listrace offer you to list your business with us and we very much able to promote your Business.
					</p>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="subscription-input-group">
							<form action="index.php" method="post">
								<input type="email" name="email" value="" class="subscription-input-form" placeholder="Enter your email here">
								<button  name="subscribe" class="appsLand-btn subscribe-btn" onclick="window.location.href='#'">
									creat account
								</button>
							</form>
							<?php

							include ('connect.php');

							if (isset($_POST['subscribe'])) {
								
								 $email = $_POST['email'];

								
                                   $insert =" INSERT INTO emails(`email`) VALUES ('$email')";
								 	$run = mysqli_query($con, $insert);
								 	if ($run ) {
								 		echo "<script> alert('Email has been submited')</script>";
								 	
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

