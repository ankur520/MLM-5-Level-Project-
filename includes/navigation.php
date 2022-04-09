	<section class="body">

		<!-- start: header -->
		<header class="header">

			<div class="logo-container">

				<a href="../3.1.0" class="logo">
					trades 
				</a>
				<div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
					<i class="fas fa-bars" aria-label="Toggle sidebar"></i>
				</div>

			</div>

			<!-- start: search & user box -->
			<div class="header-right">

	<!-- <form action="pages-search-results.html" class="search nav-form">
	<div class="input-group">
	<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
	<span class="input-group-append">
	<button class="btn btn-default" type="submit"><i class="bx bx-search"></i></button>
	</span>
	</div>
</form> -->



<!-- <span class="separator"></span> -->



<!--  notification section       -->



<!-- end notification section -->



<?php include'controllers/formcontrollers/login.php' ?>






<!-- <span class="separator"></span> -->

<!--  user profile dropdown  -->

<div id="userbox" class="userbox">
	<a href="#" data-toggle="dropdown">
		<figure class="profile-picture">
			<img src="img/!logged-user.jpg" alt="Joseph Doe" class="rounded-circle" data-lock-picture="img/!logged-user.jpg" />
		</figure>
		<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
			<span class="name">

				<?php

				

				 if (isset($_SESSION["userLoggedin"])) {
					echo $_SESSION["loggedinName"];
				}

				 ?>

			</span>
			<span class="role"></span>
		</div>

		<i class="fa custom-caret"></i>
	</a>


	<div class="dropdown-menu">
		<ul class="list-unstyled mb-2">
			<li class="divider"></li>

			<p class="center"><small>Id - 	<?php 
			
				if (isset($_SESSION["userLoggedin"])) {
					echo $_SESSION["loggedin_selfid"];
				}

				?></small></p>

			<p class="center"><small>Email - </small>	<?php

			if (isset($_SESSION["userLoggedin"])) {
					echo $_SESSION["loggedinEmail"];
				}

			?></p>

			<p class="center"><small>Signup Date - </small>	<?php  

			if (isset($_SESSION["userLoggedin"])) {
				echo	 $_SESSION["loggedin_signupdate"];
				}


			?></p>

			<li>
				<a role="menuitem" tabindex="-1" href="profile.php"><i class="bx bx-user-circle"></i> My Profile</a>
			</li>


			<li>
				<a role="menuitem" tabindex="-1" href="controllers/logout.php"><i class="bx bx-power-off"></i> Logout</a>
			</li>
		</ul>
	</div>
</div>
</div>








<!-- end: search & user box -->
</header>
<!-- end: header -->







<div class="inner-wrapper">
	<!-- start: sidebar -->
	<aside id="sidebar-left" class="sidebar-left">

		<div class="sidebar-header">
			<div class="sidebar-title">
				<?php if ($_SESSION['userLoggedin']) {
					echo $_SESSION["loggedinName"];
				} ?>

				<?php if ($_SESSION['userLoggedin']) {
					echo $_SESSION["loggedin_selfid"];
				} ?>

			</div>
			<div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
				<i class="fas fa-bars" aria-label="Toggle sidebar"></i>
			</div>
		</div>

		<div class="nano">
			<div class="nano-content">
				<nav id="menu" class="nav-main" role="navigation">

					<ul class="nav nav-main">
						<li>
							<a class="nav-link" href="userdashboard.php">
								<i class="bx bx-home-alt" aria-hidden="true"></i>
								<span>Home</span>
							</a>                        
						</li>				    
					</li>








					<li class="nav-parent">

						<a class="nav-link" href="#">
							<i class="bx bxs-user-detail" aria-hidden="true"></i>
							<span>Profile</span>
						</a>

						<ul class="nav nav-children">

							<li>
								<a class="nav-link" href="#">
									Welcome Letter
								</a>
							</li>

							<li>
								<a class="nav-link" href="signup.php">
									New Registration
								</a>
							</li>
							<li>
								<a class="nav-link" href="profile.php">
									Profile
								</a>
							</li>
							<li>
								<a class="nav-link" href="passchange.php">
									Change Password
								</a>
							</li>
							<li>
								<a class="nav-link" href="#">
									Change Transaction Password
								</a>
							</li>



						</ul>
					</li>


					<li class="nav-parent">
						<a class="nav-link" href="#">
							<i class="bx bxs-user" aria-hidden="true"></i>
							<span>My Team</span>
						</a>
						<ul class="nav nav-children">
							<li>
								<a class="nav-link" href="mydirect.php">
									My Direct
								</a>
							</li>
							<li>
								<a class="nav-link" href="leveldirectrep.php">
									Level Direct Report
								</a>
							</li>
							<li>
								<a class="nav-link" href="membercourepo.php">
									Member Count Report
								</a>
							</li>


						</ul>
					</li>


					<li class="nav-parent">
						<a class="nav-link" href="#">
							<i class="bx bx-dollar" aria-hidden="true"></i>
							<span>Funds</span>
						</a>
						<ul class="nav nav-children">
							<li>
								<a class="nav-link" href="fundtransfer.php">
									Fund Transfer
								</a>
							</li>
							<li>
								<a class="nav-link" href="fundtransferdetail.php">
									Fund Transfer Details
								</a>
							</li>

						</ul>
					</li>


					<li class="nav-parent">
						<a class="nav-link" href="#">
							<i class="bx bx-table" aria-hidden="true"></i>
							<span>My Income</span>
						</a>
						<ul class="nav nav-children">
							<li>
								<a class="nav-link" href="tables-basic.html">
									Direct Income
								</a>
							</li>
							<li>
								<a class="nav-link" href="tables-advanced.html">
									Total Level Income
								</a>
							</li>

						</ul>
					</li>


					<li class="nav-parent">
						<a class="nav-link" href="#">
							<i class="bx bx-support" aria-hidden="true"></i>
							<span>Support</span>
						</a>
						<ul class="nav nav-children">

							<li>
								<a class="nav-link" href="subscriptionrequest.php">
									Subscription Request
								</a>
							</li>


							<li>
								<a class="nav-link" href="support.php">
									Support
								</a>
							</li>

						</ul>
					</li>

					<!-- <li>
						<a class="nav-link" href="http://themeforest.net/item/porto-responsive-html5-template/4106987?ref=Okler">
							<i class="bx bx-window-alt" aria-hidden="true"></i>
							<span>Front-End 
								<em class="not-included">(Not Included)</em>
							</span>
						</a>                        
					</li> -->

					<li>
						<a class="nav-link" href="controllers/logout.php">
							<i class="bx bx-log-out" aria-hidden="true"></i>

							<span>Logout
							</span>
						</a>                        
					</li>


				</ul>
			</nav>

			<hr class="separator" />


			<hr class="separator" />




		</div>




		<script>
	// Maintain Scroll Position
	if (typeof localStorage !== 'undefined') {
		if (localStorage.getItem('sidebar-left-position') !== null) {
			var initialPosition = localStorage.getItem('sidebar-left-position'),
			sidebarLeft = document.querySelector('#sidebar-left .nano-content');

			sidebarLeft.scrollTop = initialPosition;
		}
	}
</script>





</div>

</aside>
<!-- end: sidebar -->
