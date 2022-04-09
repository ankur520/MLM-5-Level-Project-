<?php 

$level_1__SQL = $connection->prepare("SELECT * FROM users WHERE user_SignupSponserId=:myidnoo");
$level_1__SQL->bindParam(":myidnoo", $myidno);
$level_1__SQL->execute();

while ($row548 = $level_1__SQL->fetchAll(PDO::FETCH_ASSOC)) {

  foreach ($row548 as $key => $row_SQLLL) {

    $L1_id_L2fetch_idd = $row_SQLLL['user_selfid'];
    $L1_id_L2fetch_namee = $row_SQLLL['user_signupFullName'];

     // echo $L1_id_L2fetch_idd . " " . $L1_id_L2fetch_namee;
                  // echo "<br>";


// here we are trying for level 2
    $level2_SQLL = $connection->prepare("SELECT * FROM users WHERE user_SignupSponserId=:L1_id_L2fetch_iddd");
    $level2_SQLL->bindParam(":L1_id_L2fetch_iddd", $L1_id_L2fetch_idd);
    $level2_SQLL->execute();

    while ($row689 = $level2_SQLL->fetchAll(PDO::FETCH_ASSOC)) {
      
          foreach ($row689 as $key => $row_dataa) {
            
                  $L2idd = $row_dataa['user_selfid'];
                  $L2namee = $row_dataa['user_signupFullName'];

                   // echo $L2idd . " " . $L2namee . " ";
                   // echo "<br>";

// here we are trying for level 3
      $level3_SQL = $connection->prepare("SELECT * FROM users WHERE user_SignupSponserId=:L2iddd");
      $level3_SQL->bindParam(":L2iddd", $L2idd);
      $level3_SQL->execute();

      while ($row235 = $level3_SQL->fetchAll(PDO::FETCH_ASSOC)) {

        foreach ($row235 as $key => $rows_dataaaa) {

                    $L3id = $rows_dataaaa['user_selfid'];
                    $L3name = $rows_dataaaa['user_signupFullName'];
                    $L3email = $rows_dataaaa['user_signupEmail'];
                    $L3joiningdate = $rows_dataaaa['user_signupUserDate'];
                    $L3useractive = $rows_dataaaa['user_active'];

                  echo 
                  "
                  <tr>
                  <th scope='row'> </th>
                  <td> $L3id </td>
                  <td> $L3name </td>
                  <td> $L3email </td>
                  <td> $L2namee </td>
                  <td> $L3joiningdate </td>
                  <td> $L3useractive<br> </td>
                  </tr>
                  ";
        }
      }

          }

    }



  }



}




?>
              
