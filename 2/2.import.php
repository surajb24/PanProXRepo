<link type="text/css" rel="stylesheet" href="../css/crm.table.css">
<?php

include 'include/2.header.inc.php';

include '../include/import.inc.php';

function agencyCode()
{
    global $conn;
    
    $sql = "select `AGC_CODE,C,3` from `agency_details`;";
    if($result = mysqli_query($conn,$sql))
    {
        while($row=mysqli_fetch_array($result))
        {
                echo "<option value='".$row[0]."'>";
                echo $row[0];
                echo "</option>";
        }
    }else{
		echo '<script>';
			echo 'alert("Error");';
		echo '</script>';
		
            }
}

?>

