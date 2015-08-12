<!doctype html>
<head>

	<link rel="stylesheet" href="css/menu.css" type="text/css" media="screen" />  
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" /> 
	<link rel='stylesheet' href='css/tabstyle.css'>
	<script src="jq/lib/jquery.min.js"></script>
	<style>
	.content{height:430px;}
	
	.reg-buttons{margin-top:6%;}
	</style>
	
</head>

<body>

<!--Header Division Starts-->		
		<div class="header">

			<div class="logo">

				<span class="span3">CloudZia</span> <span class="span2">PAS</span>

			</div>

		</div>

<?php
include 'conn.inc.php';

if(isset($_POST['submit']))
{	
	$answer = $_POST['answer'];
	
	if($answer == $_SESSION['uanswer'])
	{
		
		$sql="update `system_user_info` set `Forgot_Status`='1' where `UserID` = '$_SESSION[uid]';";
		if(mysqli_query($conn,$sql))
		{
			//echo 'ok';
		}else{
			echo 'error'.mysqli_error($conn);
		}
			echo "
			<script>
			$(document).ready(function(){
			alert('Reset Password Request Has Been Sent Successfully!');
			});
			window.location.href='index.php';
			</script>";
		}else{
		echo "
			<script>
			$(document).ready(function(){
			alert('Wrong Answer!');
			});
			</script>";
		}
}

if(isset($_POST['fetch']))
{
	$search = $_POST['fetch_empid'];
	$sql="SELECT * from `system_user_info` 
			WHERE  `UserID` = '$search';";
	if($result=mysqli_query($conn,$sql))
	{
		while($row=mysqli_fetch_array($result))
		{
			$_SESSION['uid']=$row[1];
			$_SESSION['uname']=$row[3];
			$_SESSION['uquestion']=$row[9];
			$_SESSION['uanswer']=$row[10];
			
		}
			
		
	}
	
	
	
}
		

?>
		
		
<!--Header Division Ends-->		

<div class="clear" style="border-bottom:1px solid #ddc;"></div>


<center>



<div class="form-container">

 	<div id="page-wrap">
		
		<div class="tabs">

<!--Personal info-->	
		
		   <div class="tab">
		   
			   
			   <label for="tab-1"><h3>Forgot Password</h3></label>
			   
			   <div class="content" >
				<form name="personal" action="" method="post">
				
				<div class="table2-cont">
				<div class="imp">
				<center>
				<table class="table2">
					<tr>
						<th>UserID</th>
						<td>
						<input type="text" name="uid" id="uid" value="<?php echo $_SESSION['uid'];?>" placeholder="First Name" pattern="[a-zA-Z]{2,}"
						title="white space or special character or numbers are not allowed!" required disabled />
						</td>
					</tr>
					<tr>
						<th>User Name</th>
					<td>
						<input type="text" name="uname" id="uname" value="<?php echo $_SESSION['uname'];?>" placeholder="Last Name" pattern="[a-zA-Z]{3,}"
					title="white space or special character or numbers are not allowed!" required disabled />
					</td>
					</tr>
					
					<tr>
						<th>Security question:</th>
						<td>
						<?php
						echo $_SESSION['uquestion']."<br>";
						?>
						</td>
					</tr>
					
					<tr>
						<th>Answer</th>
						<td><input type="text" name="answer" value=""  required /></td>
					</tr>
				</table>
				</center>
				</div>
				</div>
				
					<div align="center" class="reg-buttons">
					
						<button type="submit" id="personalsubmit" name="submit">Submit</button>
						
						<a href="security_check.php"><button type="button">Cancel</button></a>
						
						<a href="index.php"><button type="button">login Page</button></a>
					
					</div>
				
				</form>
			   </div> 
		   </div>
		</div>
	</div>
</div>
</body>
</html>