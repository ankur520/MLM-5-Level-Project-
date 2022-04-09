	<?php  include 'includes/header.php' ?>

	<?php include 'controllers/formcontrollers/register.php' ?>

	<section class="body-sign">
		<div class="center-sign">


			<?php 

			if (in_array('<div class="alert alert-danger center col-12 alert-dismissible fade show" role="alert">
			<strong>Invalid Sponser Id </strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>', $error_array)) {
				echo '<div class="alert text-light bg-danger center col-12 alert-dismissible fade show" role="alert">
				<strong>Invalid Sponser Id </strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
			}

			?>


			<?php 

			if (in_array('<div class="alert alert-danger center col-12 alert-dismissible fade show" role="alert">
			<strong>Email Already Exist</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>', $error_array)) {
				echo '<div class="alert text-light bg-danger center col-12 alert-dismissible fade show" role="alert">
				<strong>Email Already Exist</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
			}

			?>



			<?php 

			if (in_array('<div class="alert alert-danger center col-12 alert-dismissible fade show" role="alert">
			<strong>Your password must between 5 and 15 Characters</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>', $error_array)) {
				echo '<div class="alert text-light bg-danger center col-12 alert-dismissible fade show" role="alert">
				<strong>Your password must between 5 and 15 Characters</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
			}

			?>



			<a href="/" class="logo float-left">

				<!-- <img src="img/logo.png" height="54" alt="Porto Admin" /> -->
			</a>

			<div class="panel card-sign">
				<div class="card-title-sign mt-3 text-right">
					<h2 class="title text-uppercase font-weight-bold m-0"><i class="bx bx-user-circle mr-1 text-6 position-relative top-5"></i> Sign Up</h2>
				</div>




				<div class="card-body">

					<form method="POST">

						<div class="form-group mb-3">

							<label>Sponser Id</label> 
							<!-- <?php  echo $signupSponserId ?>  -->
							<input id="signupSponserId" name="signupSponserId" type="text" required class="form-control form-control-lg" />
							<br>
							<span id="signupSponserIdAJAX"></span>



						</div>







						<div class="form-group mb-3">
							<label>Full Name</label>
							<!-- <?php  echo $signupFullName ?>  -->
							<input name="signupFullName" type="text" required class="form-control form-control-lg" />
						</div>

						<div class="form-group mb-3">
							<label>E-mail Address</label> 
							<!-- <?php  echo $signupEmail ?>  -->

							<input name="signupEmail" type="email" required class="form-control form-control-lg" />

						</div>


						<div class="form-group mb-3">
							<label>Password</label>   

							<!-- <?php  echo $signupPassword ?>  -->



							<input name="signupPassword" type="password" required class="form-control form-control-lg" />

						</div>





						<div class="row">
							<div class="col-sm-8">
								<div class="checkbox-custom checkbox-default">
									<input id="AgreeTerms" name="agreeterms" type="checkbox"/>
									<label for="AgreeTerms">I agree with <a href="#">terms and condition</a></label>
								</div>
							</div>
							<div class="col-sm-4 text-right">
								<button type="submit" name="signupSubmit" class="btn btn-primary mt-2">Sign Up</button>
							</div>
						</div>

						<span class="mt-3 mb-3 line-thru text-center text-uppercase">
							<span>or</span>
						</span>

	<!-- <div class="mb-1 text-center">
	<a class="btn btn-facebook mb-3 ml-1 mr-1" href="#">Connect with <i class="fab fa-facebook-f"></i></a>
	<a class="btn btn-twitter mb-3 ml-1 mr-1" href="#">Connect with <i class="fab fa-twitter"></i></a>
</div> -->

<p class="text-center">Already have an account? <a href="signin.php">Sign In!</a></p>

</form>
</div>
</div>

<p class="text-center text-muted mt-3 mb-3">&copy; Copyright 2021. All Rights Reserved.</p>
</div>
</section>








<?php  include 'includes/footer.php' ?>

<script type="text/javascript">

	$(document).ready( function() {
		$("#signupSponserId").click(function() {
			var uplineId = $(this).val();

			console.log("working");
			console.log(uplineId);


			$.ajax({
				url: "controllers/ajax/signupUplineidAJAX.php",
				type: "POST",
				data: {varuplineId:uplineId},
				success: function(data) {
					$("#signupSponserIdAJAX").html(data);

				}
			})
		})
	});

	
</script>