
<?php 

$level1_query = $connection->prepare("SELECT * FROM users WHERE user_SignupSponserId=:myidno1");
$level1_query->bindParam(":myidno1", $myidno);
$level1_query->execute();

while ($row1 = $level1_query->fetchAll(PDO::FETCH_ASSOC)) {
  
  foreach ($row1 as $key => $level1row) {
    
      $level1id = $level1row['user_selfid'];
        $name = $level1row['user_signupFullName'];

        $level2_query = $connection->prepare("SELECT * FROM users WHERE user_SignupSponserId=:level1id1 LIMIT 1");
        $level2_query->bindParam(":level1id1", $level1id);
        $level2_query->execute();

        while ($row2 = $level2_query->fetchAll(PDO::FETCH_ASSOC)) {

          foreach ($row2 as $key => $l2row) {
            
          $level2id = $l2row['user_selfid'];
          $level2name = $l2row['user_signupFullName'];

        // echo $level2id . " " . $level2name . "<br>";


        // total users in Level 2
          $L2count_query = $connection->prepare("SELECT COUNT(*) as L222222222 FROM users WHERE user_SignupSponserId=:level1idd");
                $L2count_query->bindParam(":level1idd", $level1id);
                $L2count_query->execute();
                $row1 = $L2count_query->fetchAll(PDO::FETCH_ASSOC);

                foreach ($row1 as $key => $L2count_row) {
                   $L2count_result = $L2count_row['L222222222'];
                   $L2total[] = $L2count_result;
                }


                $level1_query = $connection->prepare("SELECT COUNT(*) as L22 FROM users WHERE user_SignupSponserId=:level1id1 AND user_active='Active'");
                $level1_query->bindParam(":level1id1", $level1id);
                $level1_query->execute();
                $row2 = $level1_query->fetchAll(PDO::FETCH_ASSOC);

                foreach ($row2 as $key => $L2count_row_active) {
                  $L2count_result_active = $L2count_row_active['L22'];
                  $L2total_active[] = $L2count_result_active;
                }


          }
          
        }
  
  }
}


  $amount = 150;
  $L2Bonuspercent = 13;
  $L2Percentage = ($L2Bonuspercent / 100) * $amount;
  $L2TotalIncome = $L2Percentage *  array_sum($L2total_active);
  $L2subtract = array_sum($L2total) - array_sum($L2total_active)

?>



