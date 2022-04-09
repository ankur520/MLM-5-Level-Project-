


<?php  include 'includes/header.php' ?>
<?php  include'controllers/formcontrollers/signin.php' ?>


<section class="body-sign">
	<div class="center-sign">


		<?php 

		if (in_array('<div class="alert alert-danger center col-12 alert-dismissible fade show" role="alert">
			<strong>Email id Not Available</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>', $aderror_array)) {

			echo '<div class="alert text-light bg-success center col-12 alert-dismissible fade show" role="alert">
			<strong>Email id not Available</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		}

		?>


		<?php 

		if (in_array('<div class="alert alert-danger center col-12 alert-dismissible fade show" role="alert">
			<strong>Password Wrong</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>', $aderror_array)) {
			echo '<div class="alert text-light bg-danger center col-12 alert-dismissible fade show" role="alert">
			<strong>Password Wrong</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		}

		?>

		<?php 

		// if (in_array('<div class="alert alert-danger center col-12 alert-dismissible fade show" role="alert">
		// 	<strong>Password Wrong</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>', $error_array)) {
		// 	echo '<div class="alert text-light bg-danger center col-12 alert-dismissible fade show" role="alert">
		// 	<strong>Password Wrong</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		// }

		?>



		<a href="/" class="logo float-left">
			<!-- <img src="img/logo.png" height="54" alt="Porto Admin" /> -->
		</a>

		<div class="panel card-sign">
			<div class="card-title-sign mt-3 text-right">
				<h2 class="title text-uppercase font-weight-bold m-0"><i class="bx bx-user-circle mr-1 text-6 position-relative top-5"></i> Admin Sign In </h2>
			</div>


			<div class="card-body">
				<form method="post">
					<div class="form-group mb-3">
						<label>Admin Email Id</label>
						<div class="input-group">

							<span class="input-group-append">
								<span class="input-group-text">
									<i class="bx bx-user text-4"></i>
								</span>
							</span>
							<input name="login_ademail" type="email" class="form-control form-control-lg" />
						</div>
					</div>



					<div class="form-group mb-3">
						<div class="clearfix">
							<label class="float-left">Password</label>
							<a href="pages-recover-password.html" class="float-right">Lost Password?</a>
						</div>
						<div class="input-group">
							<span class="input-group-append">
								<span class="input-group-text">
									<i class="bx bx-lock text-4"></i>
								</span>
							</span>
							<input name="login_adpassword" type="password" class="form-control form-control-lg" />
						</div>
					</div>

					<div class="row">

						<!-- <div class="col-sm-8">
							<div class="checkbox-custom checkbox-default">
								<input id="RememberMe" name="rememberme" type="checkbox"/>
								<label for="RememberMe">Remember Me</label>
							</div>
						</div> -->

						<div class="col-lg-6 text-right">
							<button type="submit" name="login_adbutton" class="btn btn-primary mt-3">Sign In</button>
						</div>

						<a href="admindashboard.php"> Admin Dashboard</a>
					</div>

				

	<!-- 	<div class="mb-1 text-center">
	<a class="btn btn-facebook mb-3 ml-1 mr-1" href="#">Connect with <i class="fab fa-facebook-f"></i></a>
	<a class="btn btn-twitter mb-3 ml-1 mr-1" href="#">Connect with <i class="fab fa-twitter"></i></a>
</div> -->


</form>
</div>
</div>

</div>
</section>








<?php  include 'includes/footer.php' ?>