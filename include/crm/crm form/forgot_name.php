<?php
session_start();
require 'conn.inc.php';

if(isset($_GET['name']))
{
	
        
	$search = $_GET['name'];
	if(!empty($search)){
	
	$sql="SELECT `UserID`,`UserName`, `UserRole` from `system_user_info` 
		
		WHERE  `UserName` LIKE '$search%';"; 
        
	$result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)>0){
		echo "<table class='blue'>

			<thead>
			
					<th>UserID</th>
					<th>User Name</th>
					<th>User Role</th>
					<th>Operations</th>
			</thead>
			
			<tbody>
				
				
			";
			 
		while($row=mysqli_fetch_array($result)){?>
			
			<tr>
				<td><?php echo $row[0];?></td>
				<td>
				<?php echo ucwords($row[1]);?>
				</td>
				<td><?php echo $row[2];?></td>
				
					<td>
					
					<form name="frm1" action="forgot_responce.php" method="post" style="margin:3% 15%;">
					
					<input type="hidden" name="fetch_empid" value="<?php echo $row[0];?>" />
					
					<!--<button  type="submit" class="fetch" name="empinfo" onclick="details1();">Detail</button>-->
					
					<button class="fetch" type="submit" name="fetch" onclick="update2();">Update</button>
					
					</form>
					</td>	
				</tr>
			
		<?php
		
		}
	echo "
	</tbody>
	</table>
	";
								}
	}else{?>
	<script>
	alert("Please Provide Employee First Name OR Employee Id in  Search Field");
	</script>
		<?php }
}

?>