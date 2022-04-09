<?php  include 'includes/header.php' ?>

<?php include 'includes/navigation.php' ?>




<?php include 'controllers/levelsdata/membercountlevel1.php' ?>
<?php include 'controllers/levelsdata/membercountlevel2.php' ?>
<?php include 'controllers/levelsdata/membercountlevel3.php' ?>
<?php include 'controllers/levelsdata/membercountlevel4.php' ?>






<section role="main" class="content-body">

	<header class="page-header">

		<h2>Dashboard</h2>

		<div class="right-wrapper text-right">

		</div>

	</header>

	<!-- start: page -->
	<div class="row">

		<div class="col-lg-12">

			<div class="row mb-3">

				<div class="col-xl-6">

					<section class="card card-featured-left card-featured-primary mb-3">

						<div class="card-body">

							<div class="widget-summary">

								<div class="widget-summary-col widget-summary-col-icon">
									<div class="summary-icon bg-primary">
										<i class="fas fa-users"></i>
									</div>
								</div>

								<div class="widget-summary-col">
									<div class="summary">
										<h4 class="title">My Direct Active</h4>
										<div class="info">
											<strong class="amount"><?php echo $L1active ?></strong>
											<!-- <span class="text-primary">(14 unread)</span> -->
										</div>
									</div>
									<div class="summary-footer">
										<a class="text-muted text-uppercase" href="mydirect.php">(view all)</a>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>

				<div class="col-xl-6">

					<section class="card card-featured-left card-featured-tertiary mb-3">
						<div class="card-body">
							<div class="widget-summary">
								<div class="widget-summary-col widget-summary-col-icon">
									<div class="summary-icon bg-tertiary">
										<i class="fas fa-shopping-cart"></i>
									</div>
								</div>

								<div class="widget-summary-col">
									<div class="summary">
										<h4 class="title">Total Active Team</h4>
										<div class="info">
											<strong class="amount">
												<?php echo $L1active + array_sum($L2total_active) + array_sum($totalL3_active) + array_sum($totalL4_active) ?>
											</strong>
										</div>
									</div>
									<div class="summary-footer">
										<a class="text-muted text-uppercase" href="membercourepo.php">(View All)</a>
									</div>
								</div>
							</div>
						</div>
					</section>

				</div>
			
			</div>


			<div class="row">
				<div class="col-xl-6">


					<section class="card card-featured-left card-featured-secondary">
						<div class="card-body">
							<div class="widget-summary">
								<div class="widget-summary-col widget-summary-col-icon">
									<div class="summary-icon bg-secondary">
										<i class="fas fa-dollar-sign"></i>
									</div>
								</div>
								<div class="widget-summary-col">
									<div class="summary">
										<h4 class="title">Total Direct Income</h4>
										<div class="info">
											<strong class="amount">
												<?php 
												echo $L1TotalIncome;
												?>
											</strong>
										</div>
									</div>
									<div class="summary-footer">
										<a class="text-muted text-uppercase" href="membercourepo.php">(View All)</a>
									</div>
								</div>
							</div>
						</div>
					</section>



				</div>
				<div class="col-xl-6">

					<section class="card card-featured-left card-featured-secondary">
						<div class="card-body">
							<div class="widget-summary">
								<div class="widget-summary-col widget-summary-col-icon">
									<div class="summary-icon bg-secondary">
										<i class="fas fa-dollar-sign"></i>
									</div>
								</div>
								<div class="widget-summary-col">
									<div class="summary">
										<h4 class="title">Total Team Income</h4>
										<div class="info">
											<strong class="amount">
												<?php 
												echo $L1TotalIncome + $L2TotalIncome + $L3TotalIncome +  $L4TotalIncome;
												?>
											</strong>
										</div>
									</div>
									<div class="summary-footer">
										<a class="text-muted text-uppercase" href="membercourepo.php">(View All)</a>
									</div>
								</div>
							</div>
						</div>
					</section>


				</div>
			</div>



		</div>



	</div>


	<!-- end: page -->
</section>





</div>

</section>

<?php  include 'includes/footer.php';   ?>





