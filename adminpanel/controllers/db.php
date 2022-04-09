<?php 

// session_start();

 if(!isset($_SESSION)) { 
        session_start(); 
    }  

$host = "localhost";
$root = "root";
$dbpass = "";
$dbname = "myproject"; 


global $connection;



$connection = mysqli_connect($host, $root, $dbpass, $dbname);


if (!$connection) {

	echo "database didn't connected Please report to developers";

}

echo "admin";

//  else {

// 	echo '<h3 class="text-success">Database Connection Successfull</h3>';

// }



?>