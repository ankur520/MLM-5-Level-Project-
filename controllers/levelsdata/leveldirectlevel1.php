



  <?php 


  $level1_SQL = $connection->prepare("SELECT * FROM users WHERE user_SignupSponserId=:myidno");
  $level1_SQL->bindParam(":myidno", $myidno);
  $level1_SQL->execute();

  
            while ($row_SQLdataaa = $level1_SQL->fetchAll(PDO::FETCH_ASSOC)) {


              foreach ($row_SQLdataaa as $key => $row_SQLdata) {
                  
                  
              $L1name = $row_SQLdata['user_signupFullName'];
              $L1email = $row_SQLdata['user_signupEmail'];
              $L1joiningDate = $row_SQLdata['user_signupUserDate'];
              $L1userActive = $row_SQLdata['user_active'];
              $L1useridno = $row_SQLdata['user_selfid'];

              echo 
              "
              <tr>
            
              <td> $L1useridno </td>
              <td> $L1name </td>
              <td> $L1email </td>
              <td> $L1joiningDate </td>
              <td> $L1userActive </td>
              </tr>
              ";

              }

            }
            ?>