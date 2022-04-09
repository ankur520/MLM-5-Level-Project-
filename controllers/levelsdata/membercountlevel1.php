<?php 

$myidno = $_SESSION["loggedin_selfid"];



$level1_totalSQL = $connection->prepare("SELECT COUNT(*) as L1total FROM users WHERE user_SignupSponserId=:myidno1");
$level1_totalSQL->bindParam(":myidno1", $myidno);
$level1_totalSQL->execute();


$row1 = $level1_totalSQL->fetchAll(PDO::FETCH_ASSOC);

foreach ($row1 as $key => $L1totaldata) {
	$L1total = $L1totaldata['L1total'];
}

$level1_activeSQL = $connection->prepare("SELECT COUNT(*) as L1totalactive FROM users WHERE user_SignupSponserId=:myidno2 AND user_active='Active'");
$level1_activeSQL->bindParam(":myidno2", $myidno);
$level1_activeSQL->execute();
$row2 = $level1_activeSQL->fetchAll(PDO::FETCH_ASSOC);

foreach ($row2 as $key => $L1totalactivee) {
	$L1active = $L1totalactivee['L1totalactive'];

}


$amount = 150;
$L1Bonuspercent = 27;

$L1subtract = $L1total - $L1active;
$L1Percentage = ($L1Bonuspercent / 100) * $amount;
$L1TotalIncome = $L1Percentage *  $L1active;

?>
