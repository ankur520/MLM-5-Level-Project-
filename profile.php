	<?php  include 'includes/header.php' ?>

	<?php include 'includes/navigation.php' ?>


	<section role="main" class="content-body">

		<header class="page-header">

			<h2>Profile</h2>

			<div class="right-wrapper text-right">

			</div>

		</header>

		<!-- start: page -->
		<div class="panel card-sign col-lg-8">

			<div class="card-body">

				<form>

					<div class="mb-3">
						<label>Your Upline Id</label>
						<div class="input-group">

							<input name="" type="text" 
							value="<?php if ($_SESSION['userLoggedin']) {
								echo $_SESSION["uplineId"];
							} ?>"  
							disabled class="form-control form-control-lg" />

						</div>
					</div>

					<div class="mb-3">
						<label>Your Name</label>
						<div class="input-group">

							<input name="" type="text"
							value="<?php if ($_SESSION['userLoggedin']) {
								echo $_SESSION["loggedinName"];
							} ?>"
							class="form-control form-control-lg" disabled />

						</div>
					</div>


					<div class="mb-3">
						<label>Email Id</label>
						<div class="input-group">


							<input name="" type="text"
							value="<?php if ($_SESSION['userLoggedin']) {
								echo $_SESSION["loggedinEmail"];
							} ?>" disabled
							class="form-control form-control-lg" />

						</div>
					</div>


					<div class="mb-3">
						<label>User Id</label>
						<div class="input-group">


							<input name="" type="text"
							value="<?php if ($_SESSION['userLoggedin']) {
								echo $_SESSION["loggedin_selfid"];
							} ?>" disabled
							class="form-control form-control-lg" />

						</div>
					</div>


					<div class="mb-3">
						<label>Date of Joining</label>
						<div class="input-group">


							<input name="" type="text"
							value="<?php if ($_SESSION['userLoggedin']) {
								echo $_SESSION["loggedin_signupdate"];
							} ?>" disabled
							class="form-control form-control-lg" />

						</div>
					</div>

					<div class="mb-3">
						<label>USDT Address</label>
						<div class="input-group">


							<input name="" type="text"
							value="<?php if ($_SESSION['userLoggedin']) {
								echo $_SESSION["loggedin_signupdate"];
							} ?>" disabled
							class="form-control form-control-lg" />

						</div>
					</div>

					<br>
					<br>

					<p class="text-center " style="font-size: 25px" >Nominee Detail</p>
					<hr>
					<div class="mb-3">
						<label>Nominee Name</label>
						<div class="input-group">


							<input name="" type="text"
							disabled
							class="form-control form-control-lg" />

						</div>
					</div>

					<div class="mb-3">
						<label>Relation With Nominee</label>
						<div class="input-group">


							<input name="" type="text"
							disabled
							class="form-control form-control-lg" />

						</div>
					</div>

				</form>
			</div>

			<!-- end: page -->
		</section>









		<?php  include 'includes/footer.php' ?>
