
<!--header-top start -->
		<header id="header-top" class="header-top">
			<ul>
				<li>
					<div class="header-top-left">
						<ul>
							<li class="select-opt">
								<select name="language" id="language">
									<option value="default">EN</option>
									<option value="Bangla">BN</option>
									<option value="Arabic">AB</option>
								</select>
							</li>
							<li class="select-opt">
								<select name="currency" id="currency">
									<option value="usd">USD</option>
									<option value="euro">Euro</option>
									<option value="bdt">BDT</option>
								</select>
							</li>
							<li class="select-opt">
								<a href="#"><span class="lnr lnr-magnifier"></span></a>
							</li>
						</ul>
					</div>
				</li>
				<li class="head-responsive-right pull-right">
					<div class="header-top-right">
						<ul>


							<?php 

							session_start();

							if (!isset($_SESSION['email'])) {
								

								echo '<li class="header-top-contact">
								+92322-3859433
							</li>
							<li class="header-top-contact">
			                    <a href="login.php">my account</a>
							</li>
							<li class="header-top-contact">
								<a href="/register.php">register</a>
							</li>';
							}else{ ?>

								<li class="header-top-contact">
			                    <?php echo $_SESSION['email']; ?>
							</li>
						



						
							<li class="header-top-contact">
			                    <a href="logout.php">Logout</a>
							</li>
						

						<?php } ?>
						</ul>
					</div>
				</li>
			</ul>
					
		</header><!--/.header-top-->
		<!--header-top end -->
