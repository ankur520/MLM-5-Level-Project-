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

				 if ($_SESSION['loggedin_Admin']) {
					echo $_SESSION["loggedin_AdminName"];
				} 

				?>

			</span>
			<span class="role">
				<?php
				if ($_SESSION['loggedin_Admin']) {
				 	echo $_SESSION["loggedin_AdminRole"];
				 } 
				?>
			</span>
		</div>

		<i class="fa custom-caret"></i>
	</a>

	<div class="dropdown-menu">
		<ul class="list-unstyled mb-2">
			<li class="divider"></li>

			<p class="center">	<?php if ($_SESSION['loggedin_Admin']) {
				echo $_SESSION["loggedin_AdminEmail"];
			} ?></p>

	

			<p class="center">	<?php if ($_SESSION['loggedin_Admin']) {
				echo $_SESSION["loggedin_AdminDate"];
			} ?></p>

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
				<?php 

				// if ($_SESSION['userLoggedin']) {
				// 	echo $_SESSION["loggedinName"];
				// } 
				?>

				<?php
				//  if ($_SESSION['userLoggedin']) {
				// 	echo $_SESSION["loggedin_selfid"];
				// }
				 ?>

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
							<a class="nav-link" href="index.php">
								<i class="bx bx-home-alt" aria-hidden="true"></i>
								<span>Home</span>
							</a>                        
						</li>				    
					</li>








					<li class="nav-parent">

						<a class="nav-link" href="#">
							<i class="bx bx-file" aria-hidden="true"></i>
							<span>All Pages</span>
						</a>

						<ul class="nav nav-children">

							<li>
								<a class="nav-link" href="profile.php">
									Home Page
								</a>
							</li>

							<li>
								<a class="nav-link" href="#">
									User Sign Up Page
								</a>
							</li>

							<li>
								<a class="nav-link" href="signup.php">
									User Sign In Page
								</a>
							</li>
							
							<li>
								<a class="nav-link" href="passchange.php">
									User panel Page
								</a>
							</li>
							<li>
								<a class="nav-link" href="#">
									User Password Change page
								</a>
							</li>

							<li>
								<a class="nav-link" href="#">
									User Profile page
								</a>
							</li>

							<li>
								<a class="nav-link" href="#">
									User Direct Page
								</a>
							</li>

							<li>
								<a class="nav-link" href="#">
									User Level Direct Page
								</a>
							</li>

							<li>
								<a class="nav-link" href="#">
									User Member Count Page
								</a>
							</li>



						</ul>
					</li>




					<li class="nav-parent">
						<a class="nav-link" href="#">
							<i class="bx bx-detail" aria-hidden="true"></i>
							<span>Users Subscription</span>
						</a>


						<ul class="nav nav-children">
							<li>
								<a class="nav-link" href="activesubscription.php">
									Activate Subscription
								</a>
							</li>

								<li>
								<a class="nav-link" href="nonactivesubscription.php">
									NoN Active Subscription Users
								</a>
							</li>

						</ul>

							

					</li>



					


					<li class="nav-parent">
						<a class="nav-link" href="#">
							<i class="bx bx-table" aria-hidden="true"></i>
							<span>Funds</span>
						</a>
						<ul class="nav nav-children">
							<li>
								<a class="nav-link" href="depositfundreport.php">
									Total Fund Deposit Report
								</a>
							</li>
							<li>
								<a class="nav-link" href="withrawfundreport.php">
									Total Fund Withdraw Report
								</a>
							</li>

						</ul>
					</li>



					<li class="nav-parent">
						<a class="nav-link" href="#">
							<i class="bx bx-table" aria-hidden="true"></i>
							<span>Admin Users</span>
						</a>
						<ul class="nav nav-children">
							<li>
								<a class="nav-link" href="adminsignup.php">
									Add New Admin User
								</a>
							</li>
							<li>
								<a class="nav-link" href="withrawfundreport.php">
									List all Admin Users
								</a>
							</li>

						</ul>
					</li>


					


					<li class="nav-parent">
						<a class="nav-link" href="#">
							<i class="bx bx-table" aria-hidden="true"></i>
							<span>Support</span>
						</a>
						<ul class="nav nav-children">
							<li>
								<a class="nav-link" href="support.php">
									Support
								</a>
							</li>

						</ul>
					</li>


					<li>
						<a class="nav-link" href="controllers/logout.php">
							<i class="bx bx-window-alt" aria-hidden="true"></i>

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
