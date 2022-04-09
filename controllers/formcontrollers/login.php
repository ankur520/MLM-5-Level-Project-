
<?php 

$error_array = array();

if (isset($_POST['login_button'])) {

// echo "Clicked";

$login_email = $_POST['login_email'];
$login_password = $_POST['login_password'];

$login_email = strip_tags($_POST['login_email']);
$login_email = str_replace(' ','', $login_email);

$login_password = strip_tags($_POST['login_password']);
//$login_password = mysqli_real_escape_string($connection, $login_password);
$login_password = str_replace(' ','', $login_password);


$login_email_exist = $connection->prepare("SELECT * FROM users WHERE user_signupEmail=:login_emailll");
$login_email_exist->bindParam(":login_emailll", $login_email);
$login_email_exist->execute();
$detail = $login_email_exist->fetchAll(PDO::FETCH_ASSOC);
	
if ($login_email_exist->rowCount() == 0) {
	
	array_push($error_array, '<div class="alert alert-danger center col-12 alert-dismissible fade show" role="alert">
			<strong>You have to Sign Up First</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

} else {

	foreach ($detail as $value) {
	     // $value['user_signupPassword'];
	}

	if (password_verify($login_password, $value['user_signupPassword'])) {		

		$_SESSION["userLoggedin"] = true;
	echo	$_SESSION["uplineId"] = $value['user_SignupSponserId'];
	echo	$_SESSION["loggedinName"] = $value['user_signupFullName'];
	echo	$_SESSION["loggedinEmail"] = $value['user_signupEmail'];
	echo	$_SESSION["loggedin_selfid"] = $value['user_selfid'];
	echo	$_SESSION["loggedin_signupdate"] = $value['user_signupUserDate'];
	echo	$_SESSION["user_USDTAddress"] = $value['User_USDT'];

		echo '

		<div class="alert alert-success center col-8 alert-dismissible fade show" role="alert">
  <strong>Login Successfull</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

		header('Location: userdashboard.php');

	} else {

		array_push($error_array, '<div class="alert alert-danger center col-12 alert-dismissible fade show" role="alert">
			<strong>Password Wrong</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

	}

}

}

?>



<?php


/*
*
*	its a procedural PHP login system below 
*
*/ 

// echo $login_email;

// $login_email_exist = mysqli_query($connection, "SELECT * FROM users WHERE user_signupEmail='$login_email'");
	// $loggedin_user = mysqli_fetch_assoc($login_email_exist);




// if (mysqli_num_rows($login_email_exist) == 0) {

// 	array_push($error_array, '<div class="alert alert-danger center col-12 alert-dismissible fade show" role="alert">
// 			<strong>You have to Sign Up First</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

		
// }



//  else {

// 	// echo "<br>id available password verification<br>";


// 	if (password_verify($login_password, $loggedin_user['user_signupPassword'])) {

// 		$_SESSION["userLoggedin"] = true;
// 		$_SESSION["uplineId"] = $loggedin_user['user_SignupSponserId'];
// 		$_SESSION["loggedinName"] = $loggedin_user['user_signupFullName'];
// 		$_SESSION["loggedinEmail"] = $loggedin_user['user_signupEmail'];
// 		$_SESSION["loggedin_selfid"] = $loggedin_user['user_selfid'];
// 		$_SESSION["loggedin_signupdate"] = $loggedin_user['user_signupUserDate'];
// 		$_SESSION["user_USDTAddress"] = $loggedin_user['User_USDT'];


// 		// echo $_SESSION["uplineId"];

// 		echo '

// 		<div class="alert alert-success center col-8 alert-dismissible fade show" role="alert">
//   <strong>Login Successfull</strong> 
//   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//     <span aria-hidden="true">&times;</span>
//   </button>
// </div>';

// 		header('Location: userdashboard.php');
	
// 	} else {

// 		array_push($error_array, '<div class="alert alert-danger center col-12 alert-dismissible fade show" role="alert">
// 			<strong>Password Wrong</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

// 	}




// }





?>




