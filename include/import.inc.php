<style>
    
#wrapper
{
	width:103%;
	height:490px;
	
}

#tabbox
{
 height: 30px;
}

a
{
color: #000;
margin: 0;
padding: 0;
text-decoration: none;
}
#panel
{
	background-color:#FAFAFA;
	height:auto;
	border:1px solid #DDDDDD;
	border-radius:5px;
          margin-top: 1px;
}
.tab
{
background: #DDDDDD;
display: block;
line-height: 30px;
text-align: center;
width: 11%;
float: left;
/* font-weight: bold; */
-webkit-border-top-left-radius: 4px;
-webkit-border-top-right-radius: 4px;
-moz-border-radius: 4px 4px 0px 0;
FONT-SIZE: 75%;
margin-left:1%;
}


.select
{
	background-color:#FAFAFA;
	border-bottom:none;
	border-top:1px solid #DDDDDD;
	border-left:1px solid #DDDDDD;
	border-right:1px solid #DDDDDD;
	border-radius:3px;
}
#Tab11I
{
	height:auto;
	padding:10px;
}

</style>

<div style="margin-top:10px; margin-right:40px; margin-left:40px;">
    
<div id="wrapper">

    <div id="tabbox">

        <a href="#" id="Tab11" class="tab Select">Batch Details</a>

    </div>

<div id="panel" style="overflow:hidden;">

    <div id="Tab11I">
        
        <form action="" method="POST">
            
            <center>
            <table >
                
                <tr>
                    
                    <th>Agency Code:</th>

                    <td>	
                        <select name="ag_co" required="true">
                            <option value="">Select</option>
                            <?php agencyCode();?>
                        </select>
                    </td>
                
                </tr>
                
                <tr>
                    
                    <th>Batch Date: </th>

                    <td>

                        <input type="text" name="BatchDate" required="true" placeholder="dd/mm/yyyy">
                    </td>
                    
                </tr>
                
                <tr>
                    
                    <th>Date of Receipt at PDC: </th>

                    <td>

                        <input type="text" name="dor" required="true" placeholder="dd/mm/yyyy">
                    </td>
                    
                </tr>
                
                <tr>
                    
                    <th>PDC Code:</th>

                    <td>
                        
                        <select name="pdc_co" required="true" >
                            
                            <option value="">Select</option>>
                            <option value="001">001</option>
                            <option value="002">002</option>
                            <option value="003">003</option>
                            <option value="004">004</option>

                        </select>
                        
                    </td>
                    
                </tr>
                
                <tr>
                    
                    <th>Batch Type:</th>
                    
                    <td>
                        
                        <select name="bat_type" required="true" >
                            
                            <option value="">Select</option>>
                            <option value="N">Regular</option>
                            <option value="M">Marketing</option>
                            <option value="U">UTI AMC</option>
                            <option value="J">JM FIN. AMC</option>
                            <option value="I">ICICI PRUD. AMC</option>
                            <option value="p">PNB AMC</option>
                            <option value="L">LMF</option>
                            <option value="F">IDBI-FORTIES</option>

                        </select>

                    </td>
                    
                </tr> 
                
                <tr>
                    
                    <td colspan="2" style="text-align:right;">
                        <input type="submit" name="batch_submit" value="Import" >
                        <input type="reset" name="" value="Reset" >
                    </td>
                    
                </tr>
                
            </table>
            </center>
        </form>
        
    </div>
</div>
</div>
</div>

<?php

if(isset($_POST['batch_submit']))
{
    
	
    $Date = date('d/m/Y');
    $AG_Code = $_POST['ag_co']; 
    $DOR = $_POST['dor'];
    $PDC_Code = $_POST['pdc_co']; 
    $Batch_Type = $_POST['bat_type']; 
    
    $flag = '0';
    $year = date("Y");
    $month = date("M");
    $date1 = date('Y/m/d');
    $time = date('h:i:s a');

    $sql = 'SELECT MAX(`SR_NO,N,11`) FROM `batch_info`';
    
    if($result = mysqli_query($conn, $sql))
    {
        
        if($row = mysqli_fetch_array($result))
        {

            $Max_BatchID = $row[0];
            $Max_BatchID1 = $row[0];
            $Max_BatchID2 = $row[0];

            $Max_BatchID = $Max_BatchID + 1;
            $Max_BatchID1 = $Max_BatchID1 + 1;
            $Max_BatchID2 = $Max_BatchID2 + 1;
        }
        
     
    }
    
    
    $date = date("Y_d_m");
    $desired_dir = "../d.data/".$date;

    if(is_dir("$desired_dir/")==false)
    {

        mkdir("$desired_dir/", 0777);		// Create directory if it does not exist

    }

    $dir = "../d.input/";

    $dh  = opendir($dir);

    while(false !== ($batchname = readdir($dh))) 
    {
        $batches[] = $batchname;
        if($batchname !== '.' && $batchname !== '..' && $batchname !== '.ftpquota'  && $batchname !== 'default03')
        {
	    
		
            $batch[] = $batchname.$Max_BatchID1;
            $Max_BatchID1++;
        }
         
    }

    foreach($batches as $batchkey)
    {
        $Max_BatchID;
        $batch_name = basename($batchkey);
        $batch_name1 = $batch_name.$Max_BatchID;
        $Inword_Char = $AG_Code.'0'.$Max_BatchID;
        $BatchNo = $batch_name.$Max_BatchID;
       
        if($batch_name !== '.' && $batch_name !== '..' && $batch_name !== '.ftpquota'  && $batch_name !== 'default03')
        {   
            
            
            $sql = "INSERT IGNORE INTO `pcc_info` (`PCC_CODE,C,8`) VALUES ('$batch_name')";

            if($result = mysqli_query($conn, $sql))
            {  

                $RowCount = mysql_affected_rows();

                if($RowCount == '0')
                {
                    $sql = "SELECT `SR_NO,N,1` FROM `pcc_info` WHERE `PCC_CODE,C,8` = '$batch_name';";

                    if($result = mysqli_query($conn, $sql))
                    {   
                        if($row = mysqli_fetch_array($result))
                        {
                            $PCCID = $row[0];
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
                            $PCCID = $row[0];
                        }

                    }
                }

            }

            if(is_dir("$desired_dir/".$batch_name)==false)
            {
		chmod("$dir/$batch_name", 0777);

                rename("$dir/$batch_name", "$desired_dir/$batch_name1");

		chmod("$desired_dir", 0777);

		chmod("$desired_dir/$batch_name1", 0777);

                $batch_path = "$desired_dir/".$batch_name1;

                $query = "INSERT INTO `batch_info` (`PCC_CODE,C,8`, `BATCH_NO,C,20`, `BATCH_TYPE,C,25`, `IMPORT_BY,C,30`, `IMPORT_DATE,D`, `IMPORT_TIME,C,8`, `PDC_CODE,C,3`, `AGENCY_CD,C,5`, `DOE_AT_AG,D`, `DOR_AT_PDC,D`, `STATUS,N,1`) 
                                VALUES('$PCCID', '$BatchNo', '$Batch_Type', '".$_SESSION["PAN_User_Name"]."', '$date1', '$time', '$PDC_Code', '$AG_Code', '$Date', '$DOR', '1');";
                
                if(mysqli_query($conn, $query))
                {
                  
                    $flag = '1';

                    $batchkey = $batchkey;
                   
                    $batchkey.'<br/>';

                }
                else
                {
                        echo 'Error: '.mysqli_error($conn);
                        $flag = '0';
                }
            }
            else
            {
            echo 'File already exist!';

            }
            
            $Max_BatchID++;
            
        }
   
    }



    if($flag == '1')
    {
	
        foreach($batch as $batchkey)
        {
         
            unset($files);	

            $batch_name = basename($batchkey);

            if($batch_name !== '.' && $batch_name !== '..')
            {
		
                $filedir = "../d.data/$date/$batch_name/";
                $filedir_path = "d.data/$date/$batch_name/";

                $filedh  = opendir($filedir);

                while (false !== ($filename = readdir($filedh))) 
                {
                        $files[] = $filename;
			
                }

                foreach($files as $filekey)
                {

                    $file_name = basename($filekey);
                    
                    if($file_name !== '.' && $file_name !== '..' && $file_name !== 'Thumbs.db')
                    {

                        $file_path = "$filedir_path".$file_name;


                        $query = "INSERT INTO `doc_path` (`APP_PATH,C,100`) VALUES('$file_path'); ";

                        if($result = mysqli_query($conn, $query))
                        {

                            $flag = '1';

                            $query = "SELECT `FORM_ID,C,18` FROM `doc_path` WHERE `APP_PATH,C,100` = '$file_path';";

                            if($result = mysqli_query($conn, $query))
                            {

                                while($row = mysqli_fetch_array($result))
                                {
                                    $FormID = $row[0];
                                }

                                $query = "INSERT INTO `appl_status` (`FORM_ID,C,18`, `BATCH_ID,N,11`, `FINAL_STATUS,N,1`) VALUES('$FormID', '$Max_BatchID2', '1'); ";
                                mysqli_query($conn, $query);

                                $query = "INSERT INTO `cust_appl_info_l1` (`FORM_ID,C,18`, `INWARD_NO,N,10,0`,  `STATUS,N,1`) VALUES('$FormID', '$FormID', '1'); ";
                                mysqli_query($conn, $query);

                                $query = "INSERT INTO `cust_personal_info_l1` (`FORM_ID,C,18`, `STATUS,N,1`) VALUES('$FormID', '1'); ";
                                mysqli_query($conn, $query);

                                $query = "INSERT INTO `cust_address_info_l1` (`FORM_ID,C,18`, `STATUS,N,1`) VALUES('$FormID', '1'); ";
                                mysqli_query($conn, $query);

                                $query = "INSERT INTO `cust_other_info` (`FORM_ID,C,18`, `STATUS,N,1`) VALUES('$FormID', '1'); ";
                                mysqli_query($conn, $query);

                                $query = "INSERT INTO `cust_ra_info` (`FORM_ID,C,18`, `STATUS,N,1`) VALUES('$FormID', '1'); ";
                                mysqli_query($conn, $query);

                                $query = "INSERT INTO `cust_verification_info` (`FORM_ID,C,18`, `STATUS,N,1`) VALUES('$FormID', '1'); ";
                                mysqli_query($conn, $query);
                                
                                $query = "INSERT INTO `cust_other_col` (`FORM_ID,C,18`, `STATUS,N,1`) VALUES('$FormID', '1'); ";
                                mysqli_query($conn, $query);

                            }

                        }
                        else
                        {
                                echo 'Error: '.mysqli_error($conn);
                                $flag = '0';
                        }

                    }
                }

            }
            
            $Max_BatchID2++;
        }

    }

    if($flag == '1')
    {   
        echo '<script>';
        echo "alert('Batches have been successfully imported!')";
        echo '</script>';
       
         
    }

    if($flag == '0')
    {
        echo '<script>';
        echo "alert('Nothing to import! Input folder is empty!')";
        echo '</script>';
    }



}
?>
