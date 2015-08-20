<?php
session_start();
require '../conn.inc.php';

if(isset($_GET['RCountry']))
{

        
	$search = $_GET['RCountry'];
        
	if(!empty($search)){
	
	$sql="SELECT `ISD,C,3` from `isd_code` 
		
		WHERE  `COUNTRY,C,45` = '$search';"; 
        
	$result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)>0){
		
			 
		while($row=mysqli_fetch_array($result))
                        {
			
			echo $row[0];
				
                        }
                    }
	}else{?>
	<script>
	alert("Please Provide Employee First Name OR Employee Id in  Search Field");
	</script>
		<?php }
}

?>
