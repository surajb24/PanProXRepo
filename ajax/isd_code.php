<?php
session_start();
require '../conn.inc.php';

if(isset($_GET['RCountry']))
{

        
	$search = $_GET['RCountry'];
        
	if(!empty($search)){
	
	$sql="SELECT `CNT_NO,N,3`,`CNT_NAME,C,45` from `country` 
		
		WHERE  `CNT_NAME,C,45` LIKE '$search%';"; 
        
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