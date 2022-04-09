<?php include 'includes/header.php' ?>


<?php include 'includes/navigation.php' ?>


<section role="main" class="content-body">

		<header class="page-header">

			<h2>Request to activate Subscription</h2>

			<div class="right-wrapper text-right">

			</div>

		</header>

		<?php 

		 $email =  $_SESSION['loggedinEmail'];
		
		$sql = mysqli_query($connection, "SELECT User_USDT FROM users WHERE user_signupEmail = '$email'");
		
		$sql_fetch = mysqli_fetch_assoc($sql);

		 
		 $subErrorArray = array();

		if (isset($_POST["sendSubscription"])) {


			$request_id = rand(1000000000, 9999999999);

			$User_USDT =  $sql_fetch['User_USDT'];


	 $uplineId = $_SESSION["uplineId"]; 
	 $loggedinname = $_SESSION["loggedinName"]; 
	 $loggedinemail = $_SESSION["loggedinEmail"]; 
	 $loggedinselfid = $_SESSION["loggedin_selfid"]; 
	 $loggedinsignupdate = $_SESSION["loggedin_signupdate"];
		 $subscriptionAmount = 150;

			$sendReqSql = "INSERT INTO subscription_users(subscription_User_id, subscription_name, subscription_email, subscription_Date, subscription_Request_id, subscription_Amount)";

			$sendReqSql .= "VALUES('$loggedinselfid', '$loggedinname', '$loggedinemail', '$loggedinsignupdate', '$request_id', '$subscriptionAmount')";

			// echo $sendReqSql;

			$sendReqSqlQuery = mysqli_query($connection, $sendReqSql);

			if ($sendReqSqlQuery) {
			
				array_push($subErrorArray, '<div class="alert alert-danger center col-12 alert-dismissible fade show" role="alert">
				<strong>Subscription Request Send Successfully We will activate your Subscription soon</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

			} else {
				echo "string";
			}

		}
	


		?>


		<?php 

		if (in_array('<div class="alert alert-danger center col-12 alert-dismissible fade show" role="alert">
				<strong>Subscription Request Send Successfully We will activate your Subscription soon</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>', $subErrorArray)) {
			echo '<div class="alert alert-success center col-8 alert-dismissible fade show" role="alert">
				<strong>Subscription Request Send Successfully We will activate your Subscription soon</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';

				
		}

		?>


		<!-- start: page -->
		<div class="panel card-sign col-lg-8">

			<div class="card-body">

				<form method="post">

					<div class="form-group mb-3">
						<label>Receiving USDT Address</label>
						<div class="input-group">

							<input name="" type="text" value ="0x1ad7dd9ba2060bd4b21eeddd9cb14bd575deb945" 
							  
							 class="form-control form-control-lg" disabled />

						</div>
					</div>


					<div class="form-group mb-3">
						<label>Amount</label>
						<div class="input-group">

							<input name="" type="text" value="$ 150" 
							
							class="form-control form-control-lg" disabled />

						</div>
					</div>

					<div class="form-group mb-3">
						<label>Send From this USDT Address</label>
						<div class="input-group">

							<input name="" type="text" value="<?php echo $sql_fetch['User_USDT'] ?>" disabled 
							
							class="form-control form-control-lg"  />

						</div>
					</div>

				

					<p><strong> Please Send 150 Dollars to the above Address then send us a Request to Activate </strong> </p>

					<p><strong> Please Transfer the Amount with the Registered Address Only we will not responsible for any Loss</strong> </p>

					<button name="sendSubscription" class="mb-1 mt-1 mr-1 btn btn-success">Send Request</button>					

					
				</form>
			</div>

			<!-- end: page -->

			
		</section>






