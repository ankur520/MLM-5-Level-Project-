


<?php  include 'includes/header.php' ?>

<?php include 'controllers/db.php' ?>

<section class="body-sign">
	<div class="center-sign">


		<?php 

		// if (in_array('<div class="alert alert-danger center col-12 alert-dismissible fade show" role="alert">
		// 	<strong>Registration Successfull</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>', $error_array)) {

		// 	echo '<div class="alert text-light bg-success center col-12 alert-dismissible fade show" role="alert">
		// 	<strong>Registration Successfull</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		// }

		?>


		<?php 

		// if (in_array('<div class="alert alert-danger center col-12 alert-dismissible fade show" role="alert">
		// 	<strong>You have to Sign Up First</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>', $error_array)) {
		// 	echo '<div class="alert text-light bg-danger center col-12 alert-dismissible fade show" role="alert">
		// 	<strong>You have to Sign Up </strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		// }

		?>

		<?php 

		// if (in_array('<div class="alert alert-danger center col-12 alert-dismissible fade show" role="alert">
		// 	<strong>Password Wrong</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>', $error_array)) {
		// 	echo '<div class="alert text-light bg-danger center col-12 alert-dismissible fade show" role="alert">
		// 	<strong>Password Wrong</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		// }

		?>


	


		 <?php 

		 $adminSignuperror_array = array();

		 if (isset($_POST['adminsignup_button'])) {
		 	// echo "sign up button pressed";
		 	$adminsignup_Fullname = $_POST['adminsignup_fullname'];
		 	$adminsignup_Fullname = strip_tags($_POST['adminsignup_fullname']);
		 	$adminsignup_Fullname = str_replace(' ', '', $adminsignup_Fullname);
		 	$adminsignup_Fullname = mysqli_real_escape_string($connection, $adminsignup_Fullname);

	 		$adminsignup_Emailid = $_POST['adminsignup_emailid'];
		 	$adminsignup_Emailid = strip_tags($_POST['adminsignup_emailid']);
		 	$adminsignup_Emailid = str_replace(' ', '', $adminsignup_Emailid);
		 	$adminsignup_Emailid = mysqli_real_escape_string($connection, $adminsignup_Emailid);


			$adminsignup_Password = $_POST['adminsignup_password'];
		 	$adminsignup_Password = strip_tags($_POST['adminsignup_password']);
		 	$adminsignup_Password = str_replace(' ', '', $adminsignup_Password);
		 	$adminsignup_Password = mysqli_real_escape_string($connection, $adminsignup_Password);

		 	$adminsignupDate = date("d-M-Y");
		 	$adminRole = "Admin";


		 	// echo "$adminsignup_Fullname";
		 	// echo "$adminsignup_Emailid";
		 	// echo "$adminsignup_Password";

		 	$adminSignupEmail = mysqli_query($connection, "SELECT * FROM admin_users WHERE admin_email='$adminsignup_Emailid'" );

		 	// $emailfetch = mysqli_fetch_assoc($adminSignupEmail);

		 	if (mysqli_num_rows($adminSignupEmail) >= 1) {

		 		array_push($adminSignuperror_array, "Email already exist");

		 	} 


		 	if (empty($adminSignuperror_array)) {

		 		$encryptPassword = password_hash($_POST['adminsignup_password'], PASSWORD_BCRYPT);

		 		// echo $encryptPassword;

$adsignup_SQL = "INSERT INTO admin_users(admin_name, admin_email, admin_password, admin_role, admin_signupdate)";
$adsignup_SQL .= "VALUES('$adminsignup_Fullname', '$adminsignup_Emailid', '$encryptPassword', '$adminRole', '$adminsignupDate')";

echo $adsignup_SQL;


$adsignupResult = mysqli_query($connection, $adsignup_SQL);

if ($adsignupResult) {
	
	echo "Signup Successfull";
 
} else {
	echo "signup failed";
}

		 		
		 	}

		 		
		 




		 }





		 ?>


		 <?php 

		 if (in_array("Email already exist", $adminSignuperror_array)) {
		 	echo "Email already exist";
		 }


		 ?>

		<a href="/" class="logo float-left">
			<!-- <img src="img/logo.png" height="54" alt="Porto Admin" /> -->
		</a>

		<div class="panel card-sign">
			<div class="card-title-sign mt-3 text-right">
				<h2 class="title text-uppercase font-weight-bold m-0"><i class="bx bx-user-circle mr-1 text-6 position-relative top-5"></i> Admin Sign Up </h2>
			</div>


			<div class="card-body">

				<form method="post">

					<div class="form-group mb-3">
						<label>Admin Full Name</label>
						<div class="input-group">

							<span class="input-group-append">
								<span class="input-group-text">
									<i class="bx bx-user text-4"></i>
								</span>
							</span>
							<input name="adminsignup_fullname" type="text" class="form-control form-control-lg" />
						</div>
					</div>


					<div class="form-group mb-3">
						<label>Admin Email Id</label>
						<div class="input-group">

							<span class="input-group-append">
								<span class="input-group-text">
									<i class="bx bx-user text-4"></i>
								</span>
							</span>
							<input name="adminsignup_emailid" type="email" class="form-control form-control-lg" />
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
							<input name="adminsignup_password" type="password" class="form-control form-control-lg" />
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
							<button type="submit" name="adminsignup_button" class="btn btn-primary mt-3">Sign Up</button>
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