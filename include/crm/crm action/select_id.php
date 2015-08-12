<?php
include '../conn.inc.php';
function select_id($ID, $TabelName ,$ColumnName, $Condition)
{
        global $conn;
	global $ID;
	global $TabelName;
	global $Condition;
    
    $sql = "select `$ID` from `$TabelName` where `$ColumnName` = '$Condition';";
    if($result =mysqli_query($conn,$sql))
    {
        while($row=mysqli_fetch_array($result))
        {
            $QID = $row[0];
            return $QID;
        }
    }
    
    
}

?>