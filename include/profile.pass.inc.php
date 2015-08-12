
<?php
//code for edit profile
//include '../cancel.inc.php';
                                include '../conn.inc.php';
		$sql="select `UserPass` from `system_user_info` where `UserID`='$_SESSION[pan_user_id]';";
		if($result = mysqli_query($conn, $sql))
		{
			
			while($row = mysqli_fetch_array($result))
			{
				$pass = $row[0]."<br>";
				
			}
		}
		else
		{
			echo "error".mysqli_error($conn);
		}
		
		$sql="select `MobNo`, `TelNo`, `EmailID` from `user_profile_info` 
				where `UserID`='$_SESSION[login_empid]';";
		if($result = mysqli_query($conn, $sql))
		{
			
			while($row = mysqli_fetch_array($result))
			{
				$_SESSION['UserMobNo'] = $row[0];
				$_SESSION['UserAltNo'] = $row[1];
				$_SESSION['UserEmailID'] = $row[2];
				
			}
		}
		else
		{
			echo "error".mysqli_error($conn);
		}
		
		

if(isset($_POST['EditProfile']))
{
	$CurrentPass = trim($_POST['CurrentPasswordOne']);
	$CurrentPass = md5($CurrentPass);
	
	$EditMobileNo = $_POST['EditMobileNo'];
	$_SESSION['UserMobNo'] = $_POST['EditMobileNo'];
	
	$EditAlternateNo = $_POST['EditAlternateNo'];
	$_SESSION['UserAltNo'] = $_POST['EditAlternateNo'];
	
	$EditEmailId = $_POST['EditEmailId'];
	$_SESSION['UserEmailID'] = $_POST['EditEmailId'];
	
	if(!empty($pass) && !empty($CurrentPass))	
	{
		$sql_Login = "SELECT `UserID` FROM `system_user_info`
		WHERE `UserID`= '$_SESSION[login_empid]' AND `UserPass`='$CurrentPass';";
		
		if($result_Login = mysqli_query($conn, $sql_Login))
		{
			$row_Count = mysqli_num_rows($result_Login);
					
			if($row_Count == 1)
			{
				$sql="update `user_profile_info` set 
				`MobNo` = '$EditMobileNo', `TelNo` = '$EditAlternateNo', 
				`EmailID` = '$EditEmailId' 
				where `UserID`= '$_SESSION[pas_user_id]';";
				
				if($result=mysqli_query($conn, $sql))
				{
						echo "<script>
							alert('User Profile Edited Successfully!');
						</script>";
				}
				else
				{
					echo "Error".mysqli_error($conn);
				}
			}
			else
			{
				echo "<script>
					alert('Incorrect Current Password!');
				</script>";
			}
		}
		else
			{
				echo "Error".mysqli_error($conn);
			}
	}
}


//code for change profile
	
	$sql="select `UserPass` from `system_user_info` where `UserID`='$_SESSION[login_empid]';";
		if($result = mysqli_query($conn, $sql))
		{
			
			while($row = mysqli_fetch_array($result))
			{
				$pass = $row[0]."<br>";
				
			}
		}
		else
		{
			echo "error".mysqli_error($conn);
		}


if(isset($_POST['ChangePass']))
{
	
	$CurrentPass = $_POST['CurrentPassword'];
	$CurrentPass = md5($CurrentPass);
	$NewPass = $_POST['NewPassword'];
	$NewPass1 = md5($NewPass);
	$ReEnterPass = $_POST['RePassword'];

	if(!empty($pass) && !empty($CurrentPass))	
	{
		
		$sql_Login = "SELECT `UserID` FROM `system_user_info` WHERE `UserID`= '$_SESSION[login_empid]' AND `UserPass`='$CurrentPass';";
		if($result_Login = mysqli_query($conn, $sql_Login))
		{
		
			$row_Count = mysqli_num_rows($result_Login);
					
			if($row_Count == 1)
			{
				$sql="update `system_user_info` set `UserPass`= '$NewPass1'
				where `UserID`= '$_SESSION[login_empid]';";
				if($result=mysqli_query($conn, $sql))
				{
					echo "<script>
						alert('Change User Password Successfully!');
						</script>";
				}
				else
				{
						echo "<script>
						alert(' Current Password Not Correct!');
						</script>";
				}
			}
			
		}
		else
			{
				echo "Error".mysqli_error($conn);
			}
	}

}

?>

<div style="margin-top:0px; margin-right:40px; margin-left:40px;">
<div id="container">
<div id="tabbox">

<a href="#" id="EditProfile" class="tab Select">Edit Profile</a>
<a href="#" id="ChangePassword" class="tab cp">Change Password</a>

</div>
<div id="panel">
<center>
<div id="EditProfileI">	


	<form name="Edit Profile" action="" method="post">

					<table class="table2">

						<tr>
						
							<th>
							
								Your Current Password<i style="color:red">*</i>
								
							</th>
							
							<td>
								<input type="password" id="CurrentPasswordOne" class="CurrentPasswordOne" name="CurrentPasswordOne" Placeholder="Current Password" required/>
							</td>
							
						</tr>
						
						<tr>
						
							<th>Mobile No<i style="color:red">*</i>
							
							</th>
				  
							<td> 
							
								<input type="tel"  maxlength="10" onblur="validate_mobileno(this);"   name="EditMobileNo" id="EditMobileNo" class="EditMobileNo" Placeholder="Mobile No" value="<?php echo $_SESSION['UserMobNo'];?>" required  />
							</td>
						   
						</tr>
				
						<tr>
				   
						   <th>Alternate No</th>
				   
						   <td>
							   <input type="tel"   name="EditAlternateNo" id="EditAlternateNo" class="EditAlternateNo" Placeholder="Alternate No" maxlength="11" onblur="validate_mobileno(this);" value="<?php echo $_SESSION['UserAltNo'];?>" />
							</td>
						  
					   </tr>
					   
					   <tr>
							<th>Email ID</th>
							
						   <td>
								<input type="email" name="EditEmailId" id="EditEmailId" class="EditEmailId" Placeholder="Email ID"  onblur="validate_email(this);" value="<?php echo $_SESSION['UserEmailID'];?>" />
							</td>
							
					   </tr>

			 		</table>


            <div align="center" class="reg-buttons">
			
			<button  type="submit" name="EditProfile" >Update</button>
			<a href="<?php //cancel();?>">
			<button  type="button" >Cancel</button>
		    </a>
			<button type="button" id="personalpre"  name="personalpre">Previous</button>
			<button type="button" id="personalnext"  name="personalnext">Next</button>
            </div>
		        <br>
					 
		</form>


</div>

<div id="ChangePasswordI">

        <form name="Change Password" action="" method="post">
				
					<table class="table2">
						
						<tr>
						
							<th>
							
								Password Policy<i style="color:red">(Please follow the instruction)</i>
								
							</th>
							
							<td>
								<b style="color:red;">
								1. No Spaces Allowed.<br/>
								2. Password Should contain 4 Characters. 
								</b>
							
							</td>
							
						</tr>
						
						<tr>
						
							<th>
							
								Your Current Password<i style="color:red">*</i>
								
							</th>
							
							<td>
							
								<input type="password" id="CurrentPassword" class="CurrentPassword" name="CurrentPassword" placeholder="Current Password" required/>
								
							</td>
							
						</tr>
						
						<tr>
						
							<th>
							
								New Password<i style="color:red">*</i>
								
							</th>
							
							<td>
							
								<input type="password" id="NewPassword" class="NewPassword" name="NewPassword" placeholder="New Password" onblur="CheckPassword(this);"  required/>
								
							
							</td>
							
						</tr>
						
						<tr>
						
							<th>
							
								Re-Enter Password<i style="color:red">*</i>
								
							</th>
							
							<td>
							
								<input type="password" id="RePassword" class="RePassword" name="RePassword" placeholder="Re-Enter New Password" onblur="checkPass(); return false;" required />
							
							</td>
							
						</tr>

					</table>





             <div align="center" class="reg-buttons">
		     
		     
				<button  type="submit" name="ChangePass" >Change</button>
				<a href="<?php //cancel();?>">
				<button  type="button" >Cancel</button>
				</a>
				<button type="button" id="contactpre"  name="contactpre">Previous</button>
				<button type="button" id="contactnext"  name="contactnext">Next</button>
		     </div>

         	   <br>
					   
		</form>
</div>

</div>

</div>
</div>
</body>
</html>
