


<?php  include 'includes/header.php' ?>

<?php include 'controllers/formcontrollers/login.php' ?>

<section class="body-sign">
	<div class="center-sign">


		<?php 

		if (in_array('<div class="alert alert-danger center col-12 alert-dismissible fade show" role="alert">
			<strong>Registration Successfull</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>', $error_array)) {

			echo '<div class="alert text-light bg-success center col-12 alert-dismissible fade show" role="alert">
			<strong>Registration Successfull</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		}

		?>


		<?php 

		if (in_array('<div class="alert alert-danger center col-12 alert-dismissible fade show" role="alert">
			<strong>You have to Sign Up First</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>', $error_array)) {
			echo '<div class="alert text-light bg-danger center col-12 alert-dismissible fade show" role="alert">
			<strong>You have to Sign Up </strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		}

		?>

		<?php 

		if (in_array('<div class="alert alert-danger center col-12 alert-dismissible fade show" role="alert">
			<strong>Password Wrong</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>', $error_array)) {
			echo '<div class="alert text-light bg-danger center col-12 alert-dismissible fade show" role="alert">
			<strong>Password Wrong</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		}

		?>



		<a href="/" class="logo float-left">

			<!-- <img src="img/logo.png" height="54" alt="Porto Admin" /> -->

		</a>


		<div class="panel card-sign">
			<div class="card-title-sign mt-3 text-right">
				<h2 class="title text-uppercase font-weight-bold m-0"><i class="bx bx-user-circle mr-1 text-6 position-relative top-5"></i> Sign In</h2>
			</div>

			<div class="card-body">
				<form method="post">
					<div class="form-group mb-3">
						<label>Enter Email / User Id</label>
						<div class="input-group">

							<span class="input-group-append">
								<span class="input-group-text">
									<i class="bx bx-user text-4"></i>
								</span>
							</span>


							<input name="login_email" type="text" class="form-control form-control-lg" />



						</div>

					</div>







					<div class="form-group mb-3">
						<div class="clearfix">
							<label class="float-left">Password</label>
							<a href="pages-recover-password.html" class="float-right">Lost Password?</a>
						</div>
						<div class="input-group">

							<span class="input-group-append" style=" background: #1D2127;
    color: #fff;
    font-size: 20px; ">
								<span class="input-group-text">
									<i class="bx bx-lock text-4"></i>
								</span>
							</span>

							<input name="login_password" type="password" class="form-control form-control-lg" />

						</div>
					</div>

					<div class="row">
						<div class="col-sm-8">
							<div class="checkbox-custom checkbox-default">
								<input id="RememberMe" name="rememberme" type="checkbox"/>
								<label for="RememberMe">Remember Me</label>
							</div>
						</div>
						<div class="col-sm-4 text-right">
							<button
							style="background-color: #ffc50c; .btn-primaryyyyyy:hover {red}; " 
							 type="submit" name="login_button" class="btn btn-primaryyyyyy mt-2">Sign In</button>
						</div>
					</div>

					<span class="mt-3 mb-3 line-thru text-center text-uppercase">
						<span>or</span>
					</span>

	<!-- 	<div class="mb-1 text-center">
	<a class="btn btn-facebook mb-3 ml-1 mr-1" href="#">Connect with <i class="fab fa-facebook-f"></i></a>
	<a class="btn btn-twitter mb-3 ml-1 mr-1" href="#">Connect with <i class="fab fa-twitter"></i></a>
</div> -->

<p class="text-center">Don't have an account yet? <a href="signup.php">Sign Up!</a></p>

</form>
</div>
</div>

<p class="text-center text-muted mt-3 mb-3">&copy; Copyright 2021. All Rights Reserved.</p>
</div>
</section>








<?php  include 'includes/footer.php' ?>