<?php
require 'conn.inc.php';

if(isset($_POST['log_in']))
{
	
	if(isset($_POST['user_name']) && isset($_POST['password']))
	{
		
		$user_ID = $_POST['user_name'];
		$password = $_POST['password'];
		$pass_hash = md5($password);
		
		if(!empty($user_ID) && !empty($password))	
		{
			$sql_Login = "SELECT `UserID`, `UserName`, `UserBranch`, `UserDepartment`, `UserRole`, `UserPass` FROM `system_user_info` WHERE `UserID`='$user_ID' AND `UserPass`='$pass_hash';";
			if($result_Login = mysqli_query($conn, $sql_Login))
			{
				$row_Count = mysqli_num_rows($result_Login);
				
				if($row_Count == 1)
				{
					//echo 'You are logged in!';

					while($row = mysqli_fetch_array($result_Login))
					{
                                                $UserID = $row['UserID'];
						$user_Name = $row['UserName'];
						$user_Role = $row['UserRole'];
						$user_Branch = $row['UserBranch'];
						$user_Department = $row['UserDepartment'];
					}
					
					
					$_SESSION['PAN_User_ID'] = $UserID;
					
					$_SESSION['si_time'] = time();
					
					$_SESSION['PAN_User_Name'] = ucwords($user_Name);
					
					$_SESSION['PAN_User_Role'] = $user_Role;
					
					$_SESSION['PAN_User_Branch'] = $user_Branch;
					
					
					//sign in 
					$sql = "SELECT `Date1` FROM `$UserID` WHERE `Date1` = '$Date';";
					
					if($result = mysqli_query($conn, $sql))
					{
						$row_Count = mysqli_num_rows($result);
						
						$CheckINP = date('H:i a');
						
						if($row_Count == 1)
						{
							
							$sql = "INSERT INTO `si_so_logs` (`EmpID`, `EmpName`, `LogTime`, `LogDate`, `LogStatus`) 
									VALUES ('$UserID', '$_SESSION[user_name]', '$CheckINP', '$Date', 'Login');";
									
							mysqli_query($conn, $sql);
						}
						else
						{
							
							$sql = "INSERT INTO `$UserID` (`Date1`, `CheckINP`) 
									VALUES ('$Date', '$CheckINP');";
									
							mysqli_query($conn, $sql);
							
							$sql = "INSERT INTO `si_so_logs` (`EmpID`, `EmpName`, `LogTime`, `LogDate`, `LogStatus`) 
									VALUES ('$UserID', '$_SESSION[user_name]', '$CheckINP', '$Date', 'Login');";
									
							mysqli_query($conn, $sql);
							
						}
						
					}
					
					
				}
				else
				{
					
					echo '<script>
		
							alert("Invalid User Name and Password Combination!");
		
						</script>';
					
				}
				
				mysqli_free_result($result_Login);
			}
			else
			{
				die('Error: ' . mysqli_error($conn));
			}
			
		}
		else
		{
			
			echo '<script>
		
						alert("please enter User Name and Password!");
		
				</script>';
			
		}
		
	}
	
}

	if($_SESSION['PAN_User_Role'] == '4')
	{
		
		header('Location:4/4.home.php');
		
	}
                
	
                elseif($_SESSION['PAN_User_Role'] == '2')
	{
		
		header('Location:2/2.home.php');
		
	}
                /*
	elseif($_SESSION['pas_user_role'] == 'dee')
	{
		
		header('Location:dee/dee_home.php');
		
	}
	elseif($_SESSION['pas_user_role'] == 'verifier')
	{
		
		header('Location:verifier/verifier_home.php');
		
	}
	elseif($_SESSION['pas_user_role'] == 'boe')
	{
		
		header('Location:boe/boe_home.php');
		
	}
	elseif($_SESSION['pas_user_role'] == 'acc')
	{
		
		header('Location:acc/acc_home.php');
		
	}
	elseif($_SESSION['pas_user_role'] == 'cust')
	{
		
		header('Location:cust/cust_home.php');
		
	}
	elseif($_SESSION['pas_user_role'] == 'gm')
	{
		
		header('Location:gm/gm_home.php');
		
	}
	elseif($_SESSION['pas_user_role'] == 'it')
	{
		
		header('Location:it/it_home.php');
		
	}
	*/
	


?>