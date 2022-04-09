<?php 

$level_1__SQL = $connection->prepare("SELECT * FROM users WHERE user_SignupSponserId=:myidno15");
$level_1__SQL->bindParam(":myidno15", $myidno);
$level_1__SQL->execute();

while ($row1 = $level_1__SQL->fetchAll(PDO::FETCH_ASSOC)) {
	
	foreach ($row1 as $key => $row_SQLLL) {
		
		 $L1_id_L2fetch_idd = $row_SQLLL['user_selfid'];
  		 $L1_id_L2fetch_namee = $row_SQLLL['user_signupFullName'];

  		 //   // echo $L1_id_L2fetch_idd . " " . $L1_id_L2fetch_namee;
		//   // echo "<br>";




//   // here we are trying to level 2 id

$level2_SQLL = $connection->prepare("SELECT * FROM users WHERE user_SignupSponserId=:L1_id_L2fetch_iddd");
$level2_SQLL->bindParam(":L1_id_L2fetch_iddd", $L1_id_L2fetch_idd);
$level2_SQLL->execute();


while ($row2 = $level2_SQLL->fetchAll(PDO::FETCH_ASSOC)) {

	foreach ($row2 as $key => $row_dataa) {
		
		$L2idd = $row_dataa['user_selfid'];
//     $L2namee = $row_dataa['user_signupFullName'];
//   // echo $L2idd . " " . $L2namee . " ";
//   // echo "<br>";

//   // here we are trying for level 3
		$level3_SQL = $connection->prepare("SELECT * FROM users WHERE user_SignupSponserId=:L2iddd LIMIT 1");
		$level3_SQL->bindParam(":L2iddd", $L2idd);
		$level3_SQL->execute();

		while ($row3 = $level3_SQL->fetchAll(PDO::FETCH_ASSOC)) {
			
			foreach ($row3 as $key => $rows_dataaaa) {
				 $L3id = $rows_dataaaa['user_selfid'];
//       $L3name = $rows_dataaaa['user_signupFullName'];

//   // echo $L3id . " " . $L3name;

				 $L3_sql = $connection->prepare("SELECT COUNT(*) as L3Totals FROM users WHERE user_SignupSponserId=:L2iidd");
				 $L3_sql->bindParam(":L2iidd", $L2idd);
				 $L3_sql->execute();
				 $resultL3_sql = $L3_sql->fetchAll(PDO::FETCH_ASSOC);
				 foreach ($resultL3_sql as $key => $L3_sql_data) {
				 	
				 	   $L3_result = $L3_sql_data['L3Totals'];
      				   $totalL3[] = $L3_result;

				 }


				 $L3_sql_active = $connection->prepare("SELECT COUNT(*) as L3Totals FROM users WHERE user_SignupSponserId=:L22idd AND user_active='Active'");
				 $L3_sql_active->bindParam(":L22idd", $L2idd);
				 $L3_sql_active->execute();
				 $resultL3_sql_active = $L3_sql_active->fetchAll(PDO::FETCH_ASSOC);

				  foreach ($resultL3_sql_active as $key => $L3_sql_data_active) {
				 	
				 	    $L3_result_active = $L3_sql_data_active['L3Totals'];
      					$totalL3_active[] = $L3_result_active;

				 }

			}

		}


	}
}


	}
}

  $amount = 150;
  $L3Bonuspercent = 10;
  $L3Percentage = ($L3Bonuspercent / 100) * $amount;
  $L3TotalIncome = $L3Percentage *  array_sum($totalL3_active);


?>



<?php



//   // sabse pehle mene apni id se sari direct id fetch kari 
//   // phir direct id fetch karke auske direct ki id nikali jo ki mere 2 level per

//   // LEVEL 1 id
// $level_1__SQL = mysqli_query($connection, "SELECT * FROM users WHERE user_SignupSponserId='$myidno'");

//   // echo $myidnooo;

// while ($row_SQLLL = mysqli_fetch_assoc($level_1__SQL)) {

//   $L1_id_L2fetch_idd = $row_SQLLL['user_selfid'];
//   $L1_id_L2fetch_namee = $row_SQLLL['user_signupFullName'];

//   // echo $L1_id_L2fetch_idd . " " . $L1_id_L2fetch_namee;
//   // echo "<br>";

//   // here we are trying to level 2 id
//   $level2_SQLL = mysqli_query($connection, "SELECT * FROM users WHERE user_SignupSponserId='$L1_id_L2fetch_idd'");

//   while($row_dataa = mysqli_fetch_assoc($level2_SQLL)) {

//     $L2idd = $row_dataa['user_selfid'];
//     $L2namee = $row_dataa['user_signupFullName'];

//   // echo $L2idd . " " . $L2namee . " ";
//   // echo "<br>";

//   // here we are trying for level 3
//     $level3_SQL = mysqli_query($connection, "SELECT * FROM users WHERE user_SignupSponserId='$L2idd' LIMIT 1");

//     while ($rows_dataaaa = mysqli_fetch_assoc($level3_SQL)) {
//       $L3id = $rows_dataaaa['user_selfid'];
//       $L3name = $rows_dataaaa['user_signupFullName'];

//   // echo $L3id . " " . $L3name;


//       $L3_result = array();
//       $L3_sql = mysqli_query($connection, "SELECT COUNT(*) as L3Totals FROM users WHERE user_SignupSponserId='$L2idd'");
//       $L3_sql_data = mysqli_fetch_array($L3_sql);
//       $L3_result = $L3_sql_data['L3Totals'];
//       $totalL3[] = $L3_result;


//       $L3_result_active = array();
//       $L3_sql_active = mysqli_query($connection, "SELECT COUNT(*) as L3Totals FROM users WHERE user_SignupSponserId='$L2idd' AND user_active='Active'");
//       $L3_sql_data_active = mysqli_fetch_array($L3_sql_active);
//       $L3_result_active = $L3_sql_data_active['L3Totals'];
//       $totalL3_active[] = $L3_result_active;

//   } // END $row_dataa while loop 3rd

//   } // END $row_dataa while loop 2nd

//   } // END $row_SQLLL while loop 1st


//   $amount = 150;
//   $L3Bonuspercent = 10;
//   $L3Percentage = ($L3Bonuspercent / 100) * $amount;
//   $L3TotalIncome = $L3Percentage *  array_sum($totalL3_active);

  ?>
