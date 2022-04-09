	<?php  include 'includes/header.php' ?>

	<?php include 'includes/navigation.php' ?>

	<section role="main" class="content-body">

		<header class="page-header">

			<h2>Activate Subscription</h2>

			<div class="right-wrapper text-right">

			</div>

		</header>

		<?php 

		$query = mysqli_query($connection, "SELECT * FROM subscription_users WHERE subscription_ActiveorNot='Not'");
		$query_fetch = mysqli_fetch_assoc($query);

		?>

		<div class="panel card-sign col-lg-12 w-100">
			<div class="card-body">


	
				<form class="row">

					

					<div class="col-2">
						<label>Amount </label>
						<div class="input-group">

							<input name="" type="text" disabled class="form-control form-control-lg" 
							value="<?php echo $query_fetch['subscription_Amount'] ?>" />

						</div>
					</div>

					<div class="col-4">
						<label>Receiving Address</label>
						<div class="input-group">

							<input name="" type="text" class="form-control form-control-lg" disabled />

						</div>
					</div>

					

					<div class="col-2">
						<label>Name</label>
						<div class="input-group">

							<input name="" type="text" disabled class="form-control form-control-lg"
							value="<?php echo $query_fetch['subscription_name'] ?>" />

						</div>
					</div>

					<div class="col-2">
						<label>Id No</label>
						<div class="input-group">

							<input name="" type="text" disabled class="form-control form-control-lg"
							value="<?php echo $query_fetch['subscription_User_id'] ?>" />

						</div>
					</div>

					<button type="button" class="mb mt-1 mr-1 btn btn-success col-1">Activate</button>

					</form>

				

				

			</div> <!-- END  card-body  -->
		</div> <!-- END  panel card-sign  -->

	</section>
	<?php  include 'includes/footer.php';   ?>