<?php
/***
ob_start();
error_reporting(0);

// server should keep session data for AT LEAST 1 hour
ini_set('session.gc_maxlifetime', 36000);

// each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(36000);

session_start();

date_default_timezone_set("Asia/Kolkata");

$host = "162.222.226.194";
$user = "cloudgwn_hrms01";
$password = "stymvjyt";
$db_Name = "cloudgwn_cld_hrms";

$current_File_Name = $_SERVER['SCRIPT_NAME'];

$conn = mysqli_connect($host, $user, $password, $db_Name);
	
if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
*****/
?>

<?php


ob_start();
error_reporting(0);

// server should keep session data for AT LEAST 1 hour
ini_set('session.gc_maxlifetime', 36000);

// each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(36000);

session_start();


header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");  



date_default_timezone_set("Asia/Kolkata");

$Host = "127.0.0.1";
$UserName = "root";
$Password = "abacusdb";
$DBName = "cld_pan";


$conn = mysqli_connect($Host, $UserName, $Password, $DBName);

	
if(mysqli_connect_errno()) 
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



?>
