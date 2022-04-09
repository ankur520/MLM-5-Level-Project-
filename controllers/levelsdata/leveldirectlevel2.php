
<?php
// 56498

// sabse pehle mene apni id se sari direct id fetch kari 
// phir direct id fetch karke auske direct ki id nikali jo ki mere 2 level per


// $level_1_SQL = mysqli_query($connection, );

$level_1_SQL = $connection->prepare("SELECT * FROM users WHERE user_SignupSponserId=:myidno");
$level_1_SQL->bindParam(":myidno", $myidno);
$level1_SQL->execute();

while ($roww_Sql = $level1_SQL->fetchAll(PDO::FETCH_ASSOC)) {
      
      foreach ($roww_Sql as $key => $row_SQLL) {

        $L1_id_L2fetch_id = $row_SQLL['user_selfid'];
        $L1_id_L2fetch_name = $row_SQLL['user_signupFullName'];

         // echo $L1_id_L2fetch_id . " " . $L1_id_L2fetch_name;;
 // echo "<br>";

        $level2_SQL = $connection->prepare("SELECT * FROM users WHERE user_SignupSponserId=:L1_id_L2fetch_idd");
        $level2_SQL->bindParam(":L1_id_L2fetch_idd", $L1_id_L2fetch_id);
        $level2_SQL->execute();

        while ($rowdf = $level2_SQL->fetchAll(PDO::FETCH_ASSOC)) {
          
          foreach ($rowdf as $key => $row_data) {
              
                $L2id = $row_data['user_selfid'];
                $L2name = $row_data['user_signupFullName'];
                $L2email = $row_data['user_signupEmail'];
                $L2joiningdate = $row_data['user_signupUserDate'];
                $L2useractive = $row_data['user_active'];

                  echo 
              "
              <tr>
              <th scope='row'> </th>
              <td> $L2id </td>
              <td> $L2name </td>
              <td> $L2email </td>
              <td> $L1_id_L2fetch_name </td>
              <td> $L2joiningdate </td>
              <td> $L2useractive<br> </td>
              </tr>
              ";

          }

        }

      }


}

?>