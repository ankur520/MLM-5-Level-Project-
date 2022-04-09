
		<?php

		$aderror_array = array();

		if (isset($_POST['login_adbutton'])) {

			// echo "pressed";

			$ademail = strip_tags($_POST['login_ademail']);
			$ademail = str_replace(' ','', $ademail);
			$ademail = mysqli_real_escape_string($connection, $ademail);

			$adpassword = strip_tags($_POST['login_adpassword']);
			$adpassword = str_replace(' ', '', $adpassword);
			$adpassword = mysqli_real_escape_string($connection, $adpassword);

			echo $ademail . " " . $adpassword;

			$adminEmailSql = mysqli_query($connection, "SELECT * FROM admin_users WHERE admin_email='$ademail'");
			$adminfetch = mysqli_fetch_assoc($adminEmailSql);


			if (mysqli_num_rows($adminEmailSql) == 0) {
				
				array_push($aderror_array, '<div class="alert alert-danger center col-12 alert-dismissible fade show" role="alert">
			<strong>Email id Not Available</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

			}


			if (empty($aderror_array)) {
				
				if (password_verify($adpassword, $adminfetch['admin_password'])) {

					array_push($aderror_array, "Login Successfull");
					
					header('Location: admindashboard.php');

					$_SESSION['loggedin_Admin'] = true;
					$_SESSION['loggedin_AdminName']	= $adminfetch['admin_name'];
					$_SESSION['loggedin_AdminEmail']	= $adminfetch['admin_email'];
					$_SESSION['loggedin_AdminRole']	= $adminfetch['admin_role'];
					$_SESSION['loggedin_AdminDate']	= $adminfetch['admin_signupdate'];
				
// echo $_SESSION['loggedin_AdminName'];

				} else {

					array_push($aderror_array, '<div class="alert alert-danger center col-12 alert-dismissible fade show" role="alert">
			<strong>Password Wrong</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				
				}

			}

		}

	
		 ?>