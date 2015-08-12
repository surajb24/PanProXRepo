<?php

date_default_timezone_set("Asia/Kolkata");
$conn = mysqli_connect('localhost', 'root', 'abacusdb', 'cld_pan');

if(isset($_POST['batch_submit']))
{
    $Date = date('d-m-Y');
    $AG_Code = $_POST['ag_co']; 
    $DOR = $_POST['dor'];
    $PDC_Code = $_POST['pdc_co']; 
    $Batch_Type = $_POST['bat_type']; 
    
    
$flag = '0';
$year = date("Y");
$month = date("M");
$date1 = date('Y/m/d');
$time = date('h:i:s a');

$date = date("Y_d_m");
$desired_dir = "d.data/".$date;
					
if(is_dir("$desired_dir/")==false)
{

    mkdir("$desired_dir/", 0777);		// Create directory if it does not exist

}
					
$dir = "d.input/";

$dh  = opendir($dir);

while (false !== ($batchname = readdir($dh))) 
{
    $batches[] = $batchname;
}

foreach($batches as $batchkey)
{
    $batch_name = basename($batchkey);
    
    if($batch_name !== '.' && $batch_name !== '..' && $batch_name !== '.ftpquota')
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
            rename("$dir/".$batch_name, "$desired_dir/".$batch_name);
            $batch_path = "$desired_dir/".$batch_name;

            $query="INSERT INTO `batch_info` (`IMPORT_BY,C,30`, `IMPORT_DATE,D`, `IMPORT_TIME,C,8`, `STATUS,N,1`) 
                            VALUES('SURAJ', '$date1', '$time', '1');";
            if(mysqli_query($conn, $query))
            {

                $query = "SELECT MAX(`SR_NO,N,11`) FROM `batch_info`;";

                if($result = mysqli_query($conn, $query))
                {

                        if($row = mysqli_fetch_array($result))
                        {
                            $BatchID = $row[0];
                            
                            $Inword_Char = $AG_Code.'0'.$BatchID;
                            
                            $BatchNo = $batch_name.$BatchID;
                            
                            $query="UPDATE `batch_info` SET `PCC_CODE,C,8` = '$PCCID', `BATCH_NO,C,20` = '$BatchNo', `BATCH_TYPE,C,25` = '$Batch_Type', `PDC_CODE,C,3` = '$PDC_Code', `AGENCY_CD,C,5` = '$AG_Code', `DOE_AT_AG,D` = '$Date', `DOR_AT_PDC,D` = '$DOR'
                                    WHERE `SR_NO,N,11` = '$BatchID';";
                            mysqli_query($conn, $query);
                        }

                }

                $flag = '1';

                $batchkey = $batchkey;

                echo $batchkey.'<br/>';

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
    }

}
	
	
if($flag == '1')
{
    $batchdir = "d.data/$date/";

    $batchdh  = opendir($batchdir);

    while (false !== ($batchname = readdir($batchdh))) 
    {
            $batch[] = $batchname;
    }

    foreach($batch as $batchkey)
    {

        unset($files);	

        $batch_name = basename($batchkey);
        
        if($batch_name !== '.' && $batch_name !== '..')
        {

            $filedir = "d.data/$date/$batch_name/";

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

                    $file_path = "$filedir".$file_name;


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

                            $query = "INSERT INTO `appl_status` (`FORM_ID,C,18`, `BATCH_ID,N,11`, `FINAL_STATUS,N,1`) VALUES('$FormID', '$BatchID', '1'); ";
                            mysqli_query($conn, $query);

                            $query = "INSERT INTO `cust_appl_info_l1` (`FORM_ID,C,18`, `STATUS,N,1`) VALUES('$FormID', '1'); ";
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
    }

}


if($flag == '1')
{
    echo 'Above Batches have been successfully imported!<br/><br/>' ;

}

if($flag == '0')
{

    echo 'Nothing to import! Input folder is empty!';

}

}
?>