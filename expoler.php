<!--explore start -->
		<section id="explore" class="explore">
			<div class="container">
				<div class="section-header">
					<h2>explore</h2>
					<p>Explore New place, food, culture around the world and many more</p>
				</div><!--/.section-header-->
				<div class="explore-content">
				<div class="row">

						<?php 


						include('connect.php');

						$get_explore = " SELECT * FROM explore ";

						$run_explore = mysqli_query($con, $get_explore);

						while($row = mysqli_fetch_array($run_explore)){ ?>

						<div class="col-md-4 col-sm-6">
							<div class="single-explore-item">
								<div class="single-explore-img">
									<img src="assets/images/explore/<?php echo $row['explore_image']; ?>" alt="explore image">
									<div class="single-explore-img-info">
										<button onclick="window.location.href='#'">featured</button>
										<div class="single-explore-image-icon-box">
											<ul>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-arrows-alt"></i>
													</div>
												</li>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-bookmark-o"></i>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="single-explore-txt bg-theme-2">
									<h2><a href="#"><?php echo $row['explore_title']; ?></a></h2>
									<p class="explore-rating-price">
										<span class="explore-rating"><?php echo $row['explore_rating']; ?></span>
										<a href="#"> 8 ratings</a> 
										<span class="explore-price-box">
											form
											<span class="explore-price"><?php echo $row['explore_price'];?>$</span>
										</span>
										 <a href="#"><?php echo $row['explore_resource']; ?></a>
									</p>
									<div class="explore-person">
										<div class="row">
											<div class="col-sm-2">
												<div class="explore-person-img">
													<a href="#">
														<img src="assets/images/explore/<?php echo $row['explore_by']; ?>" alt="explore person">
													</a>
												</div>
											</div>
											<div class="col-sm-10">
												<p>
													<?php echo $row['explore_description']; ?>
												</p>
											</div>
										</div>
									</div>
									<div class="explore-open-close-part">
										<div class="row">
											<div class="col-sm-5">
												<button class="close-btn open-btn" onclick="window.location.href='#'">open now</button>
											</div>
											<div class="col-sm-7">
												<div class="explore-map-icon">
													<a href="#"><i data-feather="map-pin"></i></a>
													<a href="#"><i data-feather="upload"></i></a>
													<a href="#"><i data-feather="heart"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						

<?php  } ?>


</div>
					
				</div>
			</div><!--/.container-->

		</section><!--/.explore-->
		<!--explore end -->