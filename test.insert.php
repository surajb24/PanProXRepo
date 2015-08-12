<?php

include 'conn.inc.php';

$sql = "INSERT IGNORE INTO `pcc_info` (`PCC_CODE,C,8`) VALUES ('1MH0104')";

if($result = mysqli_query($conn, $sql))
{  
    
    $RowCount = mysql_affected_rows();
    
    if($RowCount == '0')
    {
        $sql = 'SELECT `SR_NO,N,1` FROM `pcc_info` WHERE `PCC_CODE,C,8` = "1MH0104";';
    
        if($result = mysqli_query($conn, $sql))
        {   
            if($row = mysqli_fetch_array($result))
            {
                echo $PCCID = $row[0];
            }
        }
    }
    else 
    {
        $query = "SELECT MAX(`SR_NO,N,1`) FROM `pcc_info`;";

        if($result = mysqli_query($conn, $query))
        {

            if($row = mysqli_fetch_array($result))
            {
                echo $PCCID = $row[0];
            }

        }
    }
    
    
}



?>
