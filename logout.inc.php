<?php

require 'conn.inc.php';

//sign Out 
	
	$Date = date('Y-m-d');
	$_SESSION['so_time'] = time();
	
	$sql = "INSERT INTO `si_so_logs` (`EmpID`, `EmpName`, `LogTime`, `LogDate`, `LogStatus`) 
			VALUES ('$_SESSION[login_empid]', '$_SESSION[user_name]', '$CheckOUTP', '$Date', 'Logout');";
	mysqli_query($conn, $sql);

session_destroy();

header ('Location:index.php');

?>