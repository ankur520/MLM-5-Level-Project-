<?php



session_start();
session_destroy();


$_SESSION["loggedin_AdminName"] = null;
$_SESSION["loggedin_AdminEmail"] = null;
$_SESSION["loggedin_AdminRole"] = null;
$_SESSION["loggedin_AdminDate"] = null;


echo "Logged Out Successfull";

header("Location: ../index.php");

?>