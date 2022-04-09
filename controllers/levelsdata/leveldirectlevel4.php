<?php 

$level_1__SQLLLLL = $connection->prepare("SELECT * FROM users WHERE user_SignupSponserId=:myidno5");
$level_1__SQLLLLL->bindParam(":myidno5", $myidno);
$level_1__SQLLLLL->execute();

while ($row58 = $level_1__SQLLLLL->fetchAll(PDO::FETCH_ASSOC)) {

  foreach ($row58 as $key => $row_SQLLLLL) {
      
      $L1_id_L2fetch_idds = $row_SQLLLLL['user_selfid'];
      $L1_id_L2fetch_namees = $row_SQLLLLL['user_signupFullName'];

       // echo $L1_id_L2fetch_idds . " " . $L1_id_L2fetch_namees;
                  // echo "<br>";



  // here we are trying to level 2 id
      $level2_SQLLs = $connection->prepare("SELECT * FROM users WHERE user_SignupSponserId=:L1_id_L2fetch_iddss");
      $level2_SQLLs->bindParam(":L1_id_L2fetch_iddss", $L1_id_L2fetch_idds);
      $level2_SQLLs->execute();



      while ($row568 = $level2_SQLLs->fetchAll(PDO::FETCH_ASSOC)) {

        foreach ($row568 as $key => $row_dataas) {

          $L2idds = $row_dataas['user_selfid'];
            $L2namees = $row_dataas['user_signupFullName'];

                   // echo $L2idds . " " . $L2namees . " ";
                   // echo "<br>";


// here we are trying for level 3
          $level3_SQLs = $connection->prepare("SELECT * FROM users WHERE user_SignupSponserId=:L2iddss");
          $level3_SQLs->bindParam(':L2iddss', $L2idds);
          $level3_SQLs->execute();

          while ($row69 = $level3_SQLs->fetchAll(PDO::FETCH_ASSOC)) {
            
            foreach ($row69 as $key => $rows_dataaaas) {
                 $L3id = $rows_dataaaas['user_selfid'];
                 $L3names = $rows_dataaaas['user_signupFullName'];

                   //   echo $L3id . " " . $L3names . " ";
                   // echo "<br>";


// here we are trying for level 4
                      $level4_SQL = $connection->prepare("SELECT * FROM users WHERE user_SignupSponserId=:L3idd");
                      $level4_SQL->bindParam(":L3idd", $L3id);
                      $level4_SQL->execute();

                      while ($row23 = $level4_SQL->fetchAll(PDO::FETCH_ASSOC)) {
                        foreach ($row23 as $key => $level4row) {
                          
                           $L4id = $level4row['user_selfid'];
                        $L4name = $level4row['user_signupFullName'];
                        $L4email = $level4row['user_signupEmail'];
                        $L4joiningdate = $level4row['user_signupUserDate'];
                        $L4useractive = $level4row['user_active'];


                        echo  "
                  <tr>
                  <th scope='row'> </th>
                  <td> $L4id </td>
                  <td> $L4name </td>
                  <td> $L4email </td>
                  <td> $L3names </td>
                  <td> $L4joiningdate </td>
                  <td> $L4useractive<br> </td>
                  </tr>
                  ";

                        }
                      }
            }

          }

        }

            
        
      }


  
  }
  
}

?>





