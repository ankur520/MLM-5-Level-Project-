<?php 

include('../db.php');

if (isset($_POST['varuplineId'])) {

	$uplineids = $_POST['varuplineId'];

	// $query = mysqli_query($connection, "SELECT * FROM users WHERE user_selfid='$uplineids'");

	// $query = $connection->prepare("SELECT * FROM users WHERE user_selfid=:uplineidss");
	$query = $connection->prepare("SELECT * FROM users WHERE user_selfid=:uplineidss");

	$query->bindParam(":uplineidss", $uplineids);
	$query->execute();


	if ($query->rowCount() > 0) {
		
		$row = $query->fetchALL(PDO::FETCH_ASSOC);

		foreach ($row as $key => $row1) {

			$uplineName = $row1['user_signupFullName'];
			
			echo "<p>  $uplineName </p>"; 
		}

	} else  {
		echo '<img  src="img/icons/25.gif" style="width="25px", height="25px" ">' . " " . " Checking ". $uplineids ." if it is Wrong Name won't show";
	} 

	




}




?>
