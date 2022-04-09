<?php  include 'includes/header.php' ?>



<?php

echo $name = "AJay";
echo "<hr>";
echo $date = date("d-M-Y");
echo "<hr>";

$query = "INSERT INTO table(taable_name, taable_date)";
echo $query .= "VALUES($name, $date)";
$resultquery = mysqli_query($connection, $query);

if ($resultquery) {
	echo "works find";
} else {
	echo "fuck more";
}



?>











<?php  include 'includes/footer.php' ?>