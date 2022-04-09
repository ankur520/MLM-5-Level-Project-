



<?php 

$myidno = $_SESSION["loggedin_selfid"];


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


	// here we are trying for level 4

						$level4_SQL = $connection->prepare("SELECT * FROM users WHERE user_SignupSponserId=:L3id56");
						$level4_SQL->bindParam(":L3id56", $L3id);
						$level4_SQL->execute();

						while ($row848 = $level4_SQL->fetchAll(PDO::FETCH_ASSOC)) {

							foreach ($row848 as $key => $level4row) {

								$L4id = $level4row['user_selfid'];
	//         $L4name = $level4row['user_signupFullName'];

	// echo $L4id . " " . $L4name . "<br>";


								$L3_sql = $connection->prepare("SELECT COUNT(*) as L4Totals FROM users WHERE user_SignupSponserId=:L3id55");
								$L3_sql->bindParam(":L3id55", $L3id);
								$L3_sql->execute();
								$resultL3_sql = $L3_sql->fetchAll(PDO::FETCH_ASSOC);

								foreach ($resultL3_sql as $key => $L3_sql_data) {

									$L4_result = $L3_sql_data['L4Totals'];
									$totalL4[] = $L4_result;

								}

								$L3_sql_active = $connection->prepare("SELECT COUNT(*) as L4Totals FROM users WHERE user_SignupSponserId=:L22idd58 AND user_active='Active'");
								$L3_sql_active->bindParam(":L22idd58", $L3id);
								$L3_sql_active->execute();
								$resultL3_sql_active = $L3_sql_active->fetchAll(PDO::FETCH_ASSOC);

								foreach ($resultL3_sql_active as $key => $L3_sql_data_active) {

									$L4_result_active = $L3_sql_data_active['L4Totals'];
									$totalL4_active[] = $L4_result_active;

								}

							}

						}

					}

				}
			}
		}
	}
}



$amount = 150;
$L4Bonuspercent = 10;
$L4Percentage = ($L4Bonuspercent / 100) * $amount;
$L4TotalIncome = $L4Percentage *  array_sum($totalL4_active);

?>















<?php 

// $level_1__SQL = $connection->prepare("SELECT * FROM users WHERE user_SignupSponserId=:myidno15");
// $level_1__SQL->bindParam(":myidno15", $myidno);
// $level_1__SQL->execute();

// while ($row1 = $level_1__SQL->fetchAll(PDO::FETCH_ASSOC)) {

// 	foreach ($row1 as $key => $row_SQLLL) {

// 		$L1_id_L2fetch_idd = $row_SQLLL['user_selfid'];
// 		$L1_id_L2fetch_namee = $row_SQLLL['user_signupFullName'];

// 	//   // echo $L1_id_L2fetch_idd . " " . $L1_id_L2fetch_namee;
// 	//   // echo "<br>";




// 	//   // here we are trying to level 2 id

// 		$level2_SQLL = $connection->prepare("SELECT * FROM users WHERE user_SignupSponserId=:L1_id_L2fetch_iddd");
// 		$level2_SQLL->bindParam(":L1_id_L2fetch_iddd", $L1_id_L2fetch_idd);
// 		$level2_SQLL->execute();


// 		while ($row2 = $level2_SQLL->fetchAll(PDO::FETCH_ASSOC)) {

// 			foreach ($row2 as $key => $row_dataa) {

// 				$L2idd = $row_dataa['user_selfid'];
// 	//     $L2namee = $row_dataa['user_signupFullName'];
// 	//   // echo $L2idd . " " . $L2namee . " ";
// 	//   // echo "<br>";

// 	//   // here we are trying for level 3
// 				$level3_SQL = $connection->prepare("SELECT * FROM users WHERE user_SignupSponserId=:L2iddd LIMIT 1");
// 				$level3_SQL->bindParam(":L2iddd", $L2idd);
// 				$level3_SQL->execute();

// 				while ($row3 = $level3_SQL->fetchAll(PDO::FETCH_ASSOC)) {

// 					foreach ($row3 as $key => $rows_dataaaa) {
// 						$L3id = $rows_dataaaa['user_selfid'];
// 	//       $L3name = $rows_dataaaa['user_signupFullName'];

// 	//   // echo $L3id . " " . $L3name;


// 	// here we are trying for level 4

// 						$level4_SQL = $connection->prepare("SELECT * FROM users WHERE user_SignupSponserId=:L3id56");
// 						$level4_SQL->bindParam(":L3id56", $L3id);
// 						$level4_SQL->execute();

// 						while ($row848 = $level4_SQL->fetchAll(PDO::FETCH_ASSOC)) {

// 							foreach ($row848 as $key => $level4row) {

// 								$L4id = $level4row['user_selfid'];
// 	//         $L4name = $level4row['user_signupFullName'];

// 	// echo $L4id . " " . $L4name . "<br>";


// 								$L3_sql = $connection->prepare("SELECT COUNT(*) as L4Totals FROM users WHERE user_SignupSponserId=:L3id55");
// 								$L3_sql->bindParam(":L3id55", $L3id);
// 								$L3_sql->execute();
// 								$resultL3_sql = $L3_sql->fetchAll(PDO::FETCH_ASSOC);

// 								foreach ($resultL3_sql as $key => $L3_sql_data) {

// 									$L4_result = $L3_sql_data['L4Totals'];
// 									$totalL4[] = $L4_result;

// 								}

// 								$L3_sql_active = $connection->prepare("SELECT COUNT(*) as L4Totals FROM users WHERE user_SignupSponserId=:L22idd58 AND user_active='Active'");
// 								$L3_sql_active->bindParam(":L22idd58", $L3id);
// 								$L3_sql_active->execute();
// 								$resultL3_sql_active = $L3_sql_active->fetchAll(PDO::FETCH_ASSOC);

// 								foreach ($resultL3_sql_active as $key => $L3_sql_data_active) {

// 									$L4_result_active = $L3_sql_data_active['L4Totals'];
// 									$totalL4_active[] = $L4_result_active;

// 								}

// 							}

// 						}

// 					}

// 				}
// 			}
// 		}
// 	}
// }



// $amount = 150;
// $L4Bonuspercent = 10;
// $L4Percentage = ($L4Bonuspercent / 100) * $amount;
// $L4TotalIncome = $L4Percentage *  array_sum($totalL4_active);

?>

