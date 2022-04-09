<?php include 'includes/header.php' ?>


<?php include 'includes/navigation.php' ?>





<section role="main" class="content-body">

		<header class="page-header">

			<h2>My Direct</h2>

			<div class="right-wrapper text-right">

			</div>

		</header>


<?php 

$myidno = $_SESSION["loggedin_selfid"];

 // $level1_SQL = mysqli_query($connection, "SELECT * FROM users WHERE user_SignupSponserId='$myidno'");

$level1_SQL = $connection->prepare("SELECT * FROM users WHERE user_SignupSponserId=:myidnooo");
$level1_SQL->bindParam(":myidnooo", $myidno);
$level1_SQL->execute();


?>

		<!-- start: page -->
<div class="panel card-sign ">

      <div class="card-body">

<div class="table-responsive"> 
<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">S. No</th>
      <th scope="col">Id No</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
      <th scope="col">Joining Date</th>
      <th scope="col">Active</th>
    </tr>
  </thead>

    
 <tbody>



    <?php 



     while ($level1_row = $level1_SQL->fetchAll(PDO::FETCH_ASSOC)) {

      foreach ($level1_row as $level1_SQLdata) {
      $L1name = $level1_SQLdata['user_signupFullName'];
$L1email = $level1_SQLdata['user_signupEmail'];
$L1joiningDate = $level1_SQLdata['user_signupUserDate'];
$L1userActive = $level1_SQLdata['user_active'];
$L1useridno = $level1_SQLdata['user_selfid'];


 echo 
    "
    <tr>
    <th scope='row'> </th>
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
     
</tbody>
  
</table>

</div>


</div>
</div>
		
</section>


<?php include 'includes/footer.php' ?>s