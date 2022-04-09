<?php 

$error_array = array();

if (isset($_POST['signupSubmit'])) {

	// echo "button clicked";

	$signupUserDate = date("d / M / Y");
	$signupSelfid = rand(100000, 999999);


	$signupSponserId = $_POST['signupSponserId'];
	$signupFullName = $_POST['signupFullName'];
	$signupEmail = $_POST['signupEmail'];
	$signupPassword = $_POST['signupPassword'];


	$signupSponserId = strip_tags($_POST['signupSponserId']); // remove html tags 
	$signupSponserId = str_replace(' ', '', $signupSponserId); // remove spaces


	$signupFullName = strip_tags($_POST['signupFullName']); // remove html tags 
	$signupFullName = ucfirst(strtolower($signupFullName)); // uppercase first letter


	$signupEmail = strip_tags($_POST['signupEmail']); // remove html tags 
	$signupEmail = str_replace(' ', '', $signupEmail); // remove spaces


	$signupPassword = strip_tags($_POST['signupPassword']); // remove html tags 
	$signupPassword = str_replace(' ', '', $signupPassword); // remove spaces


	if (strlen($signupPassword) < 5 ||  (strlen($signupPassword) >  15)) {

		array_push($error_array, '<div class="alert alert-danger center col-12 alert-dismissible fade show" role="alert">
			<strong>Your password must between 5 and 15 Characters</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

	}


	$emailExist_sql = $connection->prepare("SELECT * FROM users WHERE user_signupEmail =:signupEmaill");
	$emailExist_sql->bindParam(":signupEmaill", $signupEmail);
	$emailExist_sql->execute();

	$NotAvailableSponserId = $connection->prepare("SELECT * FROM users WHERE user_selfid =:sponserid");
	$NotAvailableSponserId->bindParam(":sponserid", $signupSponserId);
	$NotAvailableSponserId->execute();

	if ($emailExist_sql->rowCount() >= 1) {

				array_push($error_array, '<div class="alert alert-danger center col-12 alert-dismissible fade show" role="alert">
			<strong>Email Already Exist</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		
	}


	if ($NotAvailableSponserId->rowCount() == 0) {
		
		array_push($error_array, '<div class="alert alert-danger center col-12 alert-dismissible fade show" role="alert">
			<strong>Invalid Sponser Id </strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	}


	if (empty($error_array)) {
		
				$signupPassword_Encrypt = password_hash($_POST['signupPassword'], PASSWORD_BCRYPT);

	// echo "<h5>$signupSponserId</h5>";
	// echo "<h5>$signupFullName</h5>";
	// echo "<h5>$signupEmail</h5>";
	// echo "<h5>$signupPassword_Encrypt</h5>";
	// echo "<h5>$signupUserDate</h5>";
	// echo "<h5>$signupSelfid</h5>";

	$signup_SQL = $connection->prepare("INSERT INTO users(user_SignupSponserId, user_signupFullName, user_signupEmail, user_signupPassword, user_selfid, user_signupUserDate) VALUES (:signupSponserIdd, :signupFullNamee, :signupEmaill, :signupPassword_Encryptt, :signupSelfidd, :signupUserDatee)");

	$signup_SQL->execute([
		':signupSponserIdd' => $signupSponserId, 
		':signupFullNamee' => $signupFullName,
		':signupEmaill' => $signupEmail,
		':signupPassword_Encryptt' => $signupPassword_Encrypt, 
		':signupSelfidd' => $signupSelfid, 
		':signupUserDatee' => $signupUserDate, 

	]);


	if ($signup_SQL) {

			header('Location: signin.php');


			array_push($error_array, '<div class="alert alert-danger center col-12 alert-dismissible fade show" role="alert">
				<strong>Registration Successfull</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		
	
	} else {
		echo "data insert failed";
	}


	}





}
?>

