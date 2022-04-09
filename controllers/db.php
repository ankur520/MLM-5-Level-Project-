<?php 

 // session_start();

$host = "localhost";
$root = "root";
$dbpass = "";
$dbname = "myproject"; 

// global $connection;
// $connection = mysqli_connect($host, $root, $dbpass, $dbname);

// if (!$connection) {
// 	echo "database didn't connected Please report to developers";
// }

try {

	$connection = new PDO("mysql:host=$host;dbname=$dbname", $root, $dbpass);
	
} catch (PDOException $e) {
	echo $e->getMessage();
}


?>