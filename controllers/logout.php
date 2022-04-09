<?php



session_start();
session_destroy();

$_SESSION["uplineId"] = null;
$_SESSION["loggedinName"] = null;
$_SESSION["loggedinEmail"] = null;
$_SESSION["loggedin_selfid"] = null;
$_SESSION["loggedin_signupdate"] = null;

echo "Logged Out Successfull";

header("Location: ../index.php");

?>