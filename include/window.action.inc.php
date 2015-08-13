<?php

$Date = date('d-M-Y');
$Time = date('H:i:s');

$sql = 'SELECT `FORM_ID,C,18` FROM `appl_status` WHERE `ASSIGN_TO_L1,C,30` = "'.$_SESSION['PAN_User_ID'].'" AND `FINAL_STATUS,N,1` = "3";';

if($result = mysqli_query($conn, $sql))
{

    if($row = mysqli_fetch_array($result))
    {

        $_SESSION['Level1_Form_ID'] = $row[0];
    }
    else 
    {
        $_SESSION['Level1_Form_ID'] = '';
    }

}
else
{
    mysqli_error($conn);
}

$sql = 'SELECT `FORM_ID,C,18` FROM `appl_status` WHERE `ASSIGN_TO_L2,C,30` = "'.$_SESSION['PAN_User_ID'].'" AND `FINAL_STATUS,N,1` = "5";';

if($result = mysqli_query($conn, $sql))
{

    if($row = mysqli_fetch_array($result))
    {

        $_SESSION['Level2_Form_ID'] = $row[0];
    }
    else 
    {
        $_SESSION['Level2_Form_ID'] = '';
    }

}
else
{
    mysqli_error($conn);
}


$sql = 'SELECT `FORM_ID,C,18` FROM `appl_status` WHERE `ASSIGN_TO_L1,C,30` = "'.$_SESSION['PAN_User_ID'].'" AND `FINAL_STATUS,N,1` = "7";';

if($result = mysqli_query($conn, $sql))
{

    if($row = mysqli_fetch_array($result))
    {

        $_SESSION['Compare_Form_ID'] = $row[0];
    }
    else 
    {
        $_SESSION['Compare_Form_ID'] = '';
    }

}
else
{
    mysqli_error($conn);
}

$sql = 'SELECT `FORM_ID,C,18` FROM `appl_status` WHERE `ASSIGN_TO_L2,C,30` = "'.$_SESSION['PAN_User_ID'].'" AND `FINAL_STATUS,N,1` = "9";';

if($result = mysqli_query($conn, $sql))
{

    if($row = mysqli_fetch_array($result))
    {

        $_SESSION['QC_Form_ID'] = $row[0];
        
    }
    else 
    {
        
        $_SESSION['QC_Form_ID'] = '';
        
    }

}
else
{
    mysqli_error($conn);
}

if(isset($_POST['pending_submit']))
{
    
    if(!empty($_SESSION['Level1_Form_ID']) || !empty($_SESSION['Level2_Form_ID']))
    {
        if(!empty($_SESSION['Level1_Form_ID']))
        {
          
            $sql = 'SELECT `APP_PATH,C,100` FROM `doc_path` WHERE `FORM_ID,C,18` = "'.$_SESSION['Level1_Form_ID'].'";';

            if($result = mysqli_query($conn, $sql))
            {

                if($row = mysqli_fetch_array($result))
                {
                    $_SESSION['Level1_Doc_Path'] = $row[0];
                }
            }
            else
            {
                mysqli_error($conn);
            }

            $Window_Name = '../include/separatewindowlevel1.php';
            Child_Window($Window_Name);
            
        }
        
        if(!empty($_SESSION['Level2_Form_ID']))
        {
           
            $sql = 'SELECT `APP_PATH,C,100` FROM `doc_path` WHERE `FORM_ID,C,18` = "'.$_SESSION['Level2_Form_ID'].'";';

            if($result = mysqli_query($conn, $sql))
            {
                while($row = mysqli_fetch_array($result))
                {
                    $_SESSION['Level2_Doc_Path'] = $row[0];
                }
            }

            $Window_Name = '../include/separatewindowlevel2.php';
            Child_Window($Window_Name);
            
         }
       
    }
    else 
    {

      echo '
        <script>
        alert("No Entry is Pending on your Account!");
        </script>';
    }

}


if(isset($_POST['level1_submit']))
{
    
    if(empty($_SESSION['Level1_Form_ID']) && empty($_SESSION['Level2_Form_ID']))
    {
    
        $sql = 'SELECT `FORM_ID,C,18` FROM `appl_status` WHERE `FINAL_STATUS,N,1` = "1";';

        if($result = mysqli_query($conn, $sql))
        {

            if($row = mysqli_fetch_array($result))
            {
                $_SESSION['Level1_Form_ID'] = $row[0];
                
                $sql = 'SELECT `APP_PATH,C,100` FROM `doc_path` WHERE `FORM_ID,C,18` = "'.$_SESSION['Level1_Form_ID'].'";';

                if($result = mysqli_query($conn, $sql))
                {

                    if($row = mysqli_fetch_array($result))
                    {
                        $_SESSION['Level1_Doc_Path'] = $row[0];
                    }
                    
                }
                else
                {
                    mysqli_error($conn);
                }
                
                $sql = 'UPDATE `appl_status` SET `ASSIGN_TO_L1,C,30` = "'.$_SESSION['PAN_User_ID'].'", `ASSIGN_DATE_L1,D` = "'.$Date.'", `ASSIGN_TIME_L1,C,8` = "'.$Time.'", `FINAL_STATUS,N,1` = "3"  WHERE `FORM_ID,C,18` = "'.$_SESSION['Level1_Form_ID'].'";';
                mysqli_query($conn, $sql);


               $Window_Name = '../include/separatewindowlevel1.php';
               Child_Window($Window_Name);
                
            }
            else 
            {
                
               echo '
                <script>
                alert("No Entry is pending for Level 1!");
                </script>';
                
            }

        }
        else
        {
            mysqli_error($conn);
        }

        
    
    }
    else
    {
       echo '
        <script>
        alert("One Previous Data Entry is pending on your account!");
        </script>';
    }

}

if(isset($_POST['level2_submit']))
{
    
    if(empty($_SESSION['Level1_Form_ID']) && empty($_SESSION['Level2_Form_ID']))
    {
    
        $sql = 'SELECT `FORM_ID,C,18` FROM `appl_status` WHERE `FINAL_STATUS,N,1` = "4";';

        if($result = mysqli_query($conn, $sql))
        {
            if($row = mysqli_fetch_array($result))
            {
                $_SESSION['Level2_Form_ID'] = $row[0];
                
                 $sql = 'SELECT `APP_PATH,C,100` FROM `doc_path` WHERE `FORM_ID,C,18` = "'.$_SESSION['Level2_Form_ID'].'";';

                if($result = mysqli_query($conn, $sql))
                {
                    while($row = mysqli_fetch_array($result))
                    {
                        $_SESSION['Level2_Doc_Path'] = $row[0];
                    }
                }
                
                $sql = 'UPDATE `appl_status` SET `ASSIGN_TO_L2,C,30` = "'.$_SESSION['PAN_User_ID'].'", `ASSIGN_DATE_L2,D` = "'.$Date.'", `ASSIGN_TIME_L2,C,8` = "'.$Time.'", `FINAL_STATUS,N,1` = "5"  WHERE `FORM_ID,C,18` = "'.$_SESSION['Level2_Form_ID'].'";';
                mysqli_query($conn, $sql);

                $Window_Name = '../include/separatewindowlevel2.php';
                Child_Window($Window_Name);

            }
            else 
            {
                
              echo '
                <script>
                alert("No Entry is pending for Level 2!");
                </script>';
                
            }

        }
 
    }
    else
    {
      echo '
        <script>
        alert("One Previous Data Entry is pending on your account!");
        </script>';
    }
    
}

if(isset($_POST['compare_entry']))
{
    if(empty($_SESSION['Compare_Form_ID']))
    {
    
        $Compare_Form_ID = $_POST['compare_hidden'];
        $_SESSION['Compare_Form_ID'] = $Compare_Form_ID;

        $sql = 'SELECT `APP_PATH,C,100` FROM `doc_path` WHERE `FORM_ID,C,18` = "'.$Compare_Form_ID.'";';

        if($result = mysqli_query($conn, $sql))
        {
            if($row = mysqli_fetch_array($result))
            {
                $_SESSION['Compare_Doc_Path'] = $row[0];

                $sql = 'UPDATE `appl_status` SET `COMPARE_BY,C,30` = "'.$_SESSION['PAN_User_ID'].'", `COMPARE_DATE,D` = "'.$Date.'", `COMPARE_S_TIME,C,8` = "'.$Time.'", `FINAL_STATUS,N,1` = "7"  WHERE `FORM_ID,C,18` = "'.$Compare_Form_ID.'";';
                mysqli_query($conn, $sql);

                Compare_Fetch($Compare_Form_ID);

            }
        }

    }
    else
    {
        echo '<script>';
        echo 'alert("One Previous Compare Entry is Pending On Your Account! Please Complete it First!")';
        echo '</script>';
        
        $Compare_Form_ID = $_SESSION['$Compare_Form_ID'];
        
        $sql = 'SELECT `APP_PATH,C,100` FROM `doc_path` WHERE `FORM_ID,C,18` = "'.$Compare_Form_ID.'";';

        if($result = mysqli_query($conn, $sql))
        {
            if($row = mysqli_fetch_array($result))
            {
                $_SESSION['Compare_Doc_Path'] = $row[0];

                Compare_Fetch($Compare_Form_ID);

            }
        }

    }
  
}

if(isset($_POST['qc_entry']))
{
    
    if(empty($_SESSION['QC_Form_ID']))
    {
        $QC_From_ID = $_POST['qc_hidden'];
        
        $_SESSION['QC_Form_ID'] = $QC_From_ID;

        $sql = 'SELECT `APP_PATH,C,100` FROM `doc_path` WHERE `FORM_ID,C,18` = "'.$QC_From_ID.'";';

        if($result = mysqli_query($conn, $sql))
        {
            if($row = mysqli_fetch_array($result))
            {
                $_SESSION['QC_Doc_Path'] = $row[0];
            }
        }

        $sql = 'SELECT `FINAL_STATUS,N,1`, `BATCH_ID,N,11` FROM `appl_status` WHERE `FORM_ID,C,18` = "'.$QC_From_ID.'";';

        if($result = mysqli_query($conn, $sql))
        {
            if($row = mysqli_fetch_array($result))
            {

                $QC_Form_Status = $row[0];
                $Batch_ID = $row[1];

                $sql = "SELECT `PCC_CODE,C,8`, `BATCH_NO,C,20`, `BATCH_TYPE,C,25`, `BATCH_DATE,D`, `DATE_OF_RECEIPT,D`, `PDC_CODE,C,3`, `AGENCY_CD,C,5` 
                    `DOE_AT_AGENCY,D`, `DOR_AT_PDC,D` FROM `batch_info` WHERE `SR_NO,N,11` = '$Batch_ID';";
                
                if($result = mysqli_query($conn, $sql))
                {
                    if($row = mysqli_fetch_array($result))
                    {
                        
                       $_SESSION['PCC_Code'] = $row[0];
                       $_SESSION['Batch_No'] = $row[1];
                       $_SESSION['Batch_Type'] = $row[2];
                       $_SESSION['Batch_Date'] = $row[3];
                       $_SESSION['DOR1'] = $row[4];
                       $_SESSION['PDC_Code'] = $row[5];
                       $_SESSION['Agency_Code'] = $row[6];
                       $DOE = $row[7];
                       $DOR = $row[8];
                       
                       $DOE = explode('/', $DOE);

                       $DOE = $DOE[2].'/'.$DOE[1].'/'.$DOE[0];

                       $DOE = date("Ymd", strtotime($DOE));
                       
                       $DOR = explode('/', $DOR);

                       $DOR = $DOR[2].'/'.$DOR[1].'/'.$DOR[0];

                       $DOR = date("Ymd", strtotime($DOR));
                       
                       $_SESSION['DOE'] = $DOE;
                       $_SESSION['DOR'] = $DOR;
                        
                    }
                }
                
                $sql = 'UPDATE `appl_status` SET `QC_BY,C,30` = "'.$_SESSION['PAN_User_ID'].'", `QC_DATE,D` = "'.$Date.'", `QC_S_TIME,C,8` = "'.$Time.'", `FINAL_STATUS,N,1` = "9"  WHERE `FORM_ID,C,18` = "'.$QC_From_ID.'";';
                mysqli_query($conn, $sql);

                if($QC_Form_Status == '11')
                {
                    
                    QC_Fetch_11($QC_From_ID);

                }

                if($QC_Form_Status == '8')
                {

                    QC_Fetch_8($QC_From_ID);

                }

            }
        }
    
    }
    else
    {
        echo '<script>';
        echo 'alert("One Previous QC Entry is Pending On Your Account! Please Complete it First!")';
        echo '</script>';
        
        $QC_From_ID = $_SESSION['$QC_From_ID'];
        
        $sql = 'SELECT `APP_PATH,C,100` FROM `doc_path` WHERE `FORM_ID,C,18` = "'.$QC_From_ID.'";';

        if($result = mysqli_query($conn, $sql))
        {
            if($row = mysqli_fetch_array($result))
            {
                $_SESSION['QC_Doc_Path'] = $row[0];
            }
        }

        $sql = 'SELECT `FINAL_STATUS,N,1` FROM `appl_status` WHERE `FORM_ID,C,18` = "'.$QC_From_ID.'";';

        if($result = mysqli_query($conn, $sql))
        {
            if($row = mysqli_fetch_array($result))
            {

                $QC_Form_Status = $row[0];

                if($QC_Form_Status == '11')
                {

                    QC_Fetch_11($QC_From_ID);

                }

                if($QC_Form_Status == '8')
                {

                    QC_Fetch_8($QC_From_ID);

                }

            }
        }
    }

}

if(isset($_POST['dbf_submit']))
{
    
    //settype($QC_Completed_Rows1, "integer");
    echo $QC_Completed_Rows1;
  
    header('location: ../include/export.script.php');
   
    
}

function Compare_Fetch($Compare_Form_ID)
{
    Global $conn;
   
    $sql = "SELECT
    (select `APPLN_NAME,C,10` FROM `application_type` WHERE `APPLN_ID,N,1`=ap1.`FORM_TYPE,C,1`)`FORM_TYPE,C,1`,
    (select `APPLN_NAME,C,10` FROM `application_type` WHERE `APPLN_ID,N,1`=cap.`FORM_TYPE,C,1`)`FORM_TYPE,C,1`,
    (select `APPLN_NAME,C,10` FROM `application_type` WHERE `APPLN_ID,N,1`=ap2.`FORM_TYPE,C,1`)`FORM_TYPE,C,1` ,
    
    ap1.`APPLN_NO,C,10`, cap.`APPLN_NO,C,10`, ap2.`APPLN_NO,C,10`,
    
    ap1.`INWARD_NO,N,10,0`, cap.`INWARD_NO,N,10,0`, ap2.`INWARD_NO,N,10,0`, 
    
    ap1.`COUPON_NO,C,10`, cap.`COUPON_NO,C,10`, ap2.`COUPON_NO,C,10`, 
    
    (SELECT  `TITLE,C,6` FROM `title` WHERE `SR_NO,N,1`=per1.`AS_TITLE,C,1`),
    (SELECT  `TITLE,C,6` FROM `title` WHERE `SR_NO,N,1`=cper.`AS_TITLE,C,1`),
    (SELECT  `TITLE,C,6` FROM `title` WHERE `SR_NO,N,1`=per2.`AS_TITLE,C,1`),
    
    per1.`AS_LAST,C,75`, cper.`AS_LAST,C,75`, per2.`AS_LAST,C,75`,
    
    per1.`AS_FIRST,C,25`, cper.`AS_FIRST,C,25`, per2.`AS_FIRST,C,25`,
    
    per1.`AS_MIDDLE,C,25`, cper.`AS_MIDDLE,C,25`, per2.`AS_MIDDLE,C,25`,
    
    per1.`PAN_NAME,C,85`, cper.`PAN_NAME,C,85`, per2.`PAN_NAME,C,85`,
    
    per1.`FTH_LAST,C,25`, cper.`FTH_LAST,C,25`, per2.`FTH_LAST,C,25`,
    
    per1.`FTH_FIRST,C,25`, cper.`FTH_FIRST,C,25`, per2.`FTH_FIRST,C,25`,
    
    per1.`FTH_MIDDLE,C,25`, cper.`FTH_MIDDLE,C,25`, per2.`FTH_MIDDLE,C,25`,
    
   (SELECT `SEX_NAME,C,6` FROM `sex` WHERE `SEX_ID,C,1`=per1.`SEX,C,1`),
   (SELECT `SEX_NAME,C,6` FROM `sex` WHERE `SEX_ID,C,1`=cper.`SEX,C,1`),
   (SELECT `SEX_NAME,C,6` FROM `sex` WHERE `SEX_ID,C,1`=per2.`SEX,C,1`),
    
   per1.`DOB,D`,cper.`DOB,D`,per2.`DOB,D`,
   
   (SELECT `ADDR_NAME,C,9` FROM `addr_flag` WHERE `ADDR_ID,C,1`=ad1.`ADDR_FLAG,C,1`),
   (SELECT `ADDR_NAME,C,9` FROM `addr_flag` WHERE `ADDR_ID,C,1`=cad.`ADDR_FLAG,C,1`),
   (SELECT `ADDR_NAME,C,9` FROM `addr_flag` WHERE `ADDR_ID,C,1`=ad2.`ADDR_FLAG,C,1`),
   
   ad1.`RES_ADDR1,C,25`,cad.`RES_ADDR1,C,25`, ad2.`RES_ADDR1,C,25`,
   ad1.`RES_ADDR2,C,25`,cad.`RES_ADDR2,C,25`, ad2.`RES_ADDR2,C,25`,
   
   ad1.`RES_ADDR3,C,25`,cad.`RES_ADDR3,C,25`,ad2.`RES_ADDR3,C,25`,
   ad1.`RES_ADDR4,C,25`,cad.`RES_ADDR4,C,25`,ad2.`RES_ADDR4,C,25`,
   ad1.`RES_DIST,C,25`,cad.`RES_DIST,C,25`,ad2.`RES_DIST,C,25`,
   
  
  (SELECT `ST_NAME,C,22` FROM `state` WHERE `ST_NO,N,2`=ad1.`RES_STATE,C,2`),
  (SELECT `ST_NAME,C,22` FROM `state` WHERE `ST_NO,N,2`=cad.`RES_STATE,C,2`),
  (SELECT `ST_NAME,C,22` FROM `state` WHERE `ST_NO,N,2`=ad2.`RES_STATE,C,2`),
  
  ad1.`RES_PIN,C,6`, cad.`RES_PIN,C,6`,ad2.`RES_PIN,C,6`,
  
  (SELECT `CNT_NAME,C,45` FROM `country` WHERE `CNT_NO,N,3`=ad1.`RES_CNTRY,C,3`),
  (SELECT `CNT_NAME,C,45` FROM `country` WHERE `CNT_NO,N,3`=cad.`RES_CNTRY,C,3`),
  (SELECT `CNT_NAME,C,45` FROM `country` WHERE `CNT_NO,N,3`=ad2.`RES_CNTRY,C,3`), 
  
  ad1.`OFF_NAME,C,75`,cad.`OFF_NAME,C,75`,ad2. `OFF_NAME,C,75`,
  ad1.`OFF_ADDR1,C,25`,cad.`OFF_ADDR1,C,25`,ad2.`OFF_ADDR1,C,25`, 
  ad1.`OFF_ADDR2,C,25`,cad.`OFF_ADDR2,C,25`,ad2.`OFF_ADDR2,C,25`,
  
  ad1.`OFF_ADDR3,C,25`, cad.`OFF_ADDR3,C,25`, ad2.`OFF_ADDR3,C,25`, 
  ad1.`OFF_ADDR4,C,25`,cad.`OFF_ADDR4,C,25`, ad2.`OFF_ADDR4,C,25`,
  ad1.`OFF_DIST,C,25`,cad.`OFF_DIST,C,25`,ad2.`OFF_DIST,C,25`,
  
  (SELECT `ST_NAME,C,22` FROM `state` WHERE `ST_NO,N,2`=ad1.`OFF_STATE,C,2`),
  (SELECT `ST_NAME,C,22` FROM `state` WHERE `ST_NO,N,2`=cad.`OFF_STATE,C,2`),
  (SELECT `ST_NAME,C,22` FROM `state` WHERE `ST_NO,N,2`=ad2.`OFF_STATE,C,2`),
  
  ad1.`OFF_PIN,C,6`, cad.`OFF_PIN,C,6`,ad2.`OFF_PIN,C,6`,
  
  (SELECT `CNT_NAME,C,45` FROM `country` WHERE `CNT_NO,N,3`=ad1.`OFF_CNTRY,C,3`),
  (SELECT `CNT_NAME,C,45` FROM `country` WHERE `CNT_NO,N,3`=cad.`OFF_CNTRY,C,3`),
  (SELECT `CNT_NAME,C,45` FROM `country` WHERE `CNT_NO,N,3`=ad2.`OFF_CNTRY,C,3`)
  
    FROM
    
    `cust_appl_info_l1` ap1 inner join `cust_personal_info_l1` per1 on 
    ap1.`FORM_ID,C,18`=per1.`FORM_ID,C,18` inner join `cust_address_info_l1` ad1 on 
    ap1.`FORM_ID,C,18`=ad1.`FORM_ID,C,18` inner join `cust_appl_info_l2` ap2 on 
    ap1.`FORM_ID,C,18`=ap2.`FORM_ID,C,18` inner join `cust_personal_info_l2` per2 on
    ap1.`FORM_ID,C,18`=per2.`FORM_ID,C,18` inner join `cust_address_info_l2` ad2 on
    ap1.`FORM_ID,C,18`=ad2.`FORM_ID,C,18` inner join  `cust_compare_appl_info` cap on 
    ap1.`FORM_ID,C,18`=cap.`FORM_ID,C,18` inner join  `cust_compare_personal_info` cper on 
    ap1.`FORM_ID,C,18`=cper.`FORM_ID,C,18` inner join  `cust_compare_address_info` cad on
    ap1.`FORM_ID,C,18`=cad.`FORM_ID,C,18` where ap1.`FORM_ID,C,18`='$Compare_Form_ID';";

    if($result =mysqli_query($conn, $sql))
    {
        while($row=mysqli_fetch_array($result))
        {
            //level 1 sessions
            //appl
            $_SESSION['2-1-1'] = $row[0];
            $_SESSION['4-1-1'] = $row[1];
            $_SESSION['3-1-1'] = $row[2];

            $_SESSION['2-1-2'] = $row[3];
            $_SESSION['4-1-2'] = $row[4];
            $_SESSION['3-1-2'] = $row[5];

            $_SESSION['2-1-3'] = $row[6];
            $_SESSION['4-1-3'] = $row[7];
            $_SESSION['3-1-3'] = $row[8];

            $_SESSION['2-1-4'] = $row[9];
            $_SESSION['4-1-4'] = $row[10];
            $_SESSION['3-1-4'] = $row[11];

            //personal
            $_SESSION['2-2-1'] = $row[12];
            $_SESSION['4-2-1'] = $row[13];
            $_SESSION['3-2-1'] = $row[14];

            $_SESSION['2-2-2'] = $row[15];
            $_SESSION['4-2-2'] = $row[16];
            $_SESSION['3-2-2'] = $row[17];

            $_SESSION['2-2-3'] = $row[18];
            $_SESSION['4-2-3'] = $row[19];
            $_SESSION['3-2-3'] = $row[20];

            $_SESSION['2-2-4'] = $row[21];
            $_SESSION['4-2-4'] = $row[22];
            $_SESSION['3-2-4'] = $row[23];

            $_SESSION['2-2-5'] = $row[24];
            $_SESSION['4-2-5'] = $row[25];
            $_SESSION['3-2-5'] = $row[26];

            $_SESSION['2-2-13'] = $row[27];
            $_SESSION['4-2-6'] = $row[28];
            $_SESSION['3-2-6'] = $row[29];

            $_SESSION['2-2-14'] = $row[30];
            $_SESSION['4-2-7'] = $row[31];
            $_SESSION['3-2-7'] = $row[32];

            $_SESSION['2-2-15'] = $row[33];
            $_SESSION['4-2-8'] = $row[34];
            $_SESSION['3-2-8'] = $row[35];

            $_SESSION['2-2-11'] = $row[36];
            $_SESSION['4-2-9'] = $row[37];
            $_SESSION['3-2-9'] = $row[38];

            $_SESSION['2-2-12'] = $row[39];
            $_SESSION['4-2-10'] = $row[40];
            $_SESSION['3-2-10'] = $row[41];

            //address
            $_SESSION['2-3-1'] = $row[42];
            $_SESSION['4-3-1'] = $row[43];
            $_SESSION['3-3-1'] = $row[44];

            $_SESSION['2-3-2'] = $row[45];
            $_SESSION['4-3-2'] = $row[46];
            $_SESSION['3-3-2'] = $row[47];

            $_SESSION['2-3-3'] = $row[48];
            $_SESSION['4-3-3'] = $row[49];
            $_SESSION['3-3-3'] = $row[50];

            $_SESSION['2-3-4'] = $row[51];
            $_SESSION['4-3-4'] = $row[52];
            $_SESSION['3-3-4'] = $row[53];

            $_SESSION['2-3-5'] = $row[54];
            $_SESSION['4-3-5'] = $row[55];
            $_SESSION['3-3-5'] = $row[56];

            $_SESSION['2-3-6'] = $row[57];
            $_SESSION['4-3-6'] = $row[58];
            $_SESSION['3-3-6'] = $row[59];

            $_SESSION['2-3-7'] = $row[60];
            $_SESSION['4-3-7'] = $row[61];
            $_SESSION['3-3-7'] = $row[62];

            $_SESSION['2-3-8'] = $row[63];
            $_SESSION['4-3-8'] = $row[64];
            $_SESSION['3-3-8'] = $row[65];

            $_SESSION['2-3-9'] = $row[66];
            $_SESSION['4-3-9'] = $row[67];
            $_SESSION['3-3-9'] = $row[68];

            $_SESSION['2-3-10'] = $row[69];
            $_SESSION['4-3-10'] = $row[70];
            $_SESSION['3-3-10'] = $row[71];

            $_SESSION['2-3-11'] = $row[72];
            $_SESSION['4-3-11'] = $row[73];
            $_SESSION['3-3-11'] = $row[74];

            $_SESSION['2-3-12'] = $row[75];
            $_SESSION['4-3-12'] = $row[76];
            $_SESSION['3-3-12'] = $row[77];

            $_SESSION['2-3-13'] = $row[78];
            $_SESSION['4-3-13'] = $row[79];
            $_SESSION['3-3-13'] = $row[80];

            $_SESSION['2-3-14'] = $row[81];
            $_SESSION['4-3-14'] = $row[82];
            $_SESSION['3-3-14'] = $row[83];

            $_SESSION['2-3-15'] = $row[84];
            $_SESSION['4-3-15'] = $row[85];
            $_SESSION['3-3-15'] = $row[86];

            $_SESSION['2-3-16'] = $row[87];
            $_SESSION['4-3-16'] = $row[88];
            $_SESSION['3-3-16'] = $row[89];

            $_SESSION['2-3-17'] = $row[90];
            $_SESSION['4-3-17'] = $row[91];
            $_SESSION['3-3-17'] = $row[92];

            $_SESSION['2-3-18'] = $row[93];
            $_SESSION['4-3-18'] = $row[94];
            $_SESSION['3-3-18'] = $row[95];

        }
        
   
        $Window_Name = '../include/comparewindow.php';
        Child_Window($Window_Name);
       
    }
    else 
    {
        echo mysqli_error($conn);
    }
        
        
}

function QC_Fetch_11($QC_From_ID)
{
    Global $conn;
   
    $sql = "select 
   
    (select `APPLN_NAME,C,10` FROM `application_type` WHERE `APPLN_ID,N,1`=ap.`FORM_TYPE,C,1`)`FORM_TYPE,C,1`,

    ap.`APPLN_NO,C,10`, ap.`INWARD_NO,N,10,0`, ap.`COUPON_NO,C,10`,ap.`AREA_CODE,C,3`, ap.`AO_TYPE,C,2`, 
    ap.`RANGE,C,3`, ap.`AO_CODE,C,2`, ap.`OLD_PAN,C,10`,
    
    (SELECT  `TITLE,C,6` FROM `title` WHERE `SR_NO,N,1`=per.`AS_TITLE,C,1`)`AS_TITLE,C,1`,
    per.`AS_LAST,C,75`, per.`AS_FIRST,C,25`, per.`AS_MIDDLE,C,25`, 
    
    per.`PAN_NAME,C,85`, per.`OTH_NM_FLG,C,1`, per.`OTH_TITLE,C,1`, per.`OTH_LAST,C,75`, per.`OTH_FIRST,C,25`, per.`OTH_MIDDLE,C,25`,
     
   (SELECT `SEX_NAME,C,6` FROM `sex` WHERE `SEX_ID,C,1`=per.`SEX,C,1`)`SEX,C,1`,
   per.`DOB,D`, per.`FTH_LAST,C,25`, per.`FTH_FIRST,C,25`, per.`FTH_MIDDLE,C,25`,per.`PM`, per.`SM`,
   
   (SELECT `ADDR_NAME,C,9` FROM `addr_flag` WHERE `ADDR_ID,C,1`=ad.`ADDR_FLAG,C,1`)`ADDR_FLAG,C,1`,
   
   ad.`RES_ADDR1,C,25`, ad.`RES_ADDR2,C,25`,ad.`RES_ADDR3,C,25`, ad.`RES_ADDR4,C,25`,ad.`RES_DIST,C,25`,
   (SELECT `ST_NAME,C,22` FROM `state` WHERE `ST_NO,N,2`=ad.`RES_STATE,C,2`)`RES_STATE,C,2`,
   ad.`RES_PIN,C,6`,
   
   (SELECT `CNT_NAME,C,45` FROM `country` WHERE `CNT_NO,N,3`= ad.`RES_CNTRY,C,3`)`RES_CNTRY,C,3`, 
   ad.`OFF_NAME,C,75`,ad.`OFF_ADDR1,C,25`, ad.`OFF_ADDR2,C,25`, ad.`OFF_ADDR3,C,25`, ad.`OFF_ADDR4,C,25`, ad.`OFF_DIST,C,25`,
    
   (SELECT `ST_NAME,C,22` FROM `state` WHERE `ST_NO,N,2`=ad.`OFF_STATE,C,2`)`OFF_STATE,C,2`,
   ad.`OFF_PIN,C,6`,
  (SELECT `CNT_NAME,C,45` FROM `country` WHERE `CNT_NO,N,3`= ad.`OFF_CNTRY,C,3`)`OFF_CNTRY,C,3`,
   ad.`TEL_ISD,C,7`, ad.`TEL_STD,C,7`, ad.`TEL_NO,C,13`,ad.`E_MAIL_ID,C,41`, 
  
   (SELECT  `STATUS,C,30` FROM `status` WHERE `STA_CODE,C,1`= co.`STATUS,C,2`)`STATUS,C,2`,
   co.`REGN_NO,C,30`,
   (SELECT `CNT_NAME,C,45` FROM `country` WHERE `CNT_NO,N,3`= co.`CONT_CIT,C,3`)`CONT_CIT,C,3`,
   co.`CONT_ISD,C,7`, co.`UID_NO,C,12`,

  co.`SR_INC1,C,1`, co.`SR_INC2,C,1`, co.`PROFESSION,C,2`, co.`SR_INC3,C,1`, co.`SR_INC4,C,1`, co.`SR_INC5,C,1`, 
  co.`NOINC,C,1`, co.`SR_INCED1,N,2,0`, co.`SR_INCED2,N,2,0`, co.`SR_INCED3,N,2,0`, co.`SR_INC1VAL,C,2`, 
  co.`OLD_PAN1,C,10`, co.`OLD_PAN2,C,10`, co.`OLD_PAN3,C,10`, co.`OLD_PAN4,C,10`, co.`UID_VER,C,1`, co.`UID_NAME,C,80`,
  co.`UID_YOB,C,4`, co.`UID_SEX,C,1`, 
    
    (SELECT  `TITLE,C,6` FROM `title` WHERE `SR_NO,N,1`=ra.`REP_TITLE,C,1`)`REP_TITLE,C,1`,
    ra.`REP_LAST,C,75`, ra.`REP_FIRST,C,25`, ra.`REP_MIDDLE,C,25`, 
    ra.`REP_ADDR1,C,25`, ra.`REP_ADDR2,C,25`, ra.`REP_ADDR3,C,25`, ra.`REP_ADDR4,C,25`, ra.`REP_DIST,C,25`, 
    
    (SELECT `ST_NAME,C,22` FROM `state` WHERE `ST_NO,N,2`=ra.`REP_STATE,C,2`)`REP_STATE,C,2`,
    ra.`REP_PIN,C,6`, ra.`REP_FLAG,C,1`,
    
    ver.`PHOTO_FLAG,C,1`, ver.`SIG_FLAG,C,1`, 
    (SELECT `IDENT_DOC_NAME,C,80` FROM `ident_doc` WHERE `IDENT_DOC_ID,N,2`=ver.`IDENT_DOC,C,2`)`IDENT_DOC,C,2`,
        
    (SELECT `RES_DOC_NAME,C,80` FROM `res_doc` WHERE `RES_DOC_ID,N,2`=ver.`RES_DOC,C,2`)`RES_DOC,C,2`,
    (SELECT  `DOB_DOC,C,2` FROM `dob_doc` WHERE `DOB_DOC_ID,N,2`=ver.`DOB_DOC,C,2`)`DOB_DOC,C,2`,
    ver.`NoOfDoc`, ver.`VER_NAME,C,75`,
    (SELECT `CAP_NAME,C,23` FROM `capacity` WHERE `CAP_NO,N,1`=ver.`VER_CAP,C,2`)`VER_CAP,C,2`,
    ver.`VER_PLACE,C,30`, ver.`DOA,D`
    
    from `cust_appl_info_l1` ap 
    inner join `cust_personal_info_l1` per on 
    ap.`FORM_ID,C,18`=per.`FORM_ID,C,18` inner join `cust_address_info_l1` ad on
    ap.`FORM_ID,C,18`=ad.`FORM_ID,C,18` inner join  `cust_other_info` co on
    ap.`FORM_ID,C,18`=co.`FORM_ID,C,18` inner join  `cust_ra_info` ra on
    ap.`FORM_ID,C,18`=ra.`FORM_ID,C,18` inner join  `cust_verification_info` ver on
    ap.`FORM_ID,C,18`=ver.`FORM_ID,C,18` where ap.`FORM_ID,C,18`='".$QC_From_ID."'";

    if($result = mysqli_query($conn, $sql))
    {
        
        while($row = mysqli_fetch_array($result))
        {
           
            //app2
            $_SESSION['5-1-1'] = $row[0];
            $_SESSION['5-1-2'] = $row[1];
            $_SESSION['5-1-3'] = $row[2];
            $_SESSION['5-1-4'] = $row[3];
            $_SESSION['5-1-5'] = $row[4];
            $_SESSION['5-1-6'] = $row[5];
            $_SESSION['5-1-7'] = $row[6];
            $_SESSION['5-1-8'] = $row[7];
            $_SESSION['5-1-9'] = $row[8];

            //per2
            $_SESSION['5-2-1'] = $row[9];
            $_SESSION['5-2-2'] = $row[10];
            $_SESSION['5-2-3'] = $row[11];
            $_SESSION['5-2-4'] = $row[12];
            $_SESSION['5-2-5'] = $row[13];
            $_SESSION['5-2-6'] = $row[14];
            $_SESSION['5-2-7'] = $row[15];
            $_SESSION['5-2-8'] = $row[16];
            $_SESSION['5-2-9'] = $row[17];
            $_SESSION['5-2-10'] = $row[18];
            $_SESSION['5-2-11'] = $row[19];
            $_SESSION['5-2-12'] = $row[20];
            $_SESSION['5-2-13'] = $row[21];
            $_SESSION['5-2-14'] = $row[22];
            $_SESSION['5-2-15'] = $row[23];
            $_SESSION['5-2-16'] = $row[24];
            $_SESSION['5-2-17'] = $row[25];

            //add2

            $_SESSION['5-3-1'] = $row[26];
            $_SESSION['5-3-2'] = $row[27];
            $_SESSION['5-3-3'] = $row[28];
            $_SESSION['5-3-4'] = $row[29];
            $_SESSION['5-3-5'] = $row[30];
            $_SESSION['5-3-6'] = $row[31];
            $_SESSION['5-3-7'] = $row[32];
            $_SESSION['5-3-8'] = $row[33];

            $_SESSION['5-3-9'] = $row[34];
            $_SESSION['5-3-10'] = $row[35];
            $_SESSION['5-3-11'] = $row[36];
            $_SESSION['5-3-12'] = $row[37];
            $_SESSION['5-3-13'] = $row[38];
            $_SESSION['5-3-14'] = $row[39];
            $_SESSION['5-3-15'] = $row[40];
            $_SESSION['5-3-16'] = $row[41];
            $_SESSION['5-3-17'] = $row[42];

            $_SESSION['5-3-18'] = $row[43];
            $_SESSION['5-3-19'] = $row[44];
            $_SESSION['5-3-20'] = $row[45];
            $_SESSION['5-3-21'] = $row[46];
            $_SESSION['5-3-22'] = $row[47];

            //other

            $_SESSION['5-4-1'] = $row[48];
            $_SESSION['5-4-2'] = $row[49];
            $_SESSION['5-4-3'] = $row[50];
            $_SESSION['5-4-4'] = $row[51];
            $_SESSION['5-4-5'] = $row[52];

            $_SESSION['5-4-6'] = $row[53];
            $_SESSION['5-4-10'] = $row[54];
            $_SESSION['5-4-11'] = $row[55];
            $_SESSION['5-4-9'] = $row[56];
            $_SESSION['5-4-8'] = $row[57];
            $_SESSION['5-4-7'] = $row[58];
            $_SESSION['5-4-12'] = $row[59];

            $_SESSION['5-4-13'] = $row[64];
            $_SESSION['5-4-14'] = $row[65];
            $_SESSION['5-4-15'] = $row[66];
            $_SESSION['5-4-16'] = $row[67];

            //ra
            $_SESSION['5-5-1'] = $row[72];
            $_SESSION['5-5-2'] = $row[73];
            $_SESSION['5-5-3'] = $row[74];
            $_SESSION['5-5-4'] = $row[75];
            $_SESSION['5-5-5'] = $row[76];
            $_SESSION['5-5-6'] = $row[77];
            $_SESSION['5-5-7'] = $row[78];
            $_SESSION['5-5-8'] = $row[79];
            $_SESSION['5-5-9'] = $row[80];
            $_SESSION['5-5-10'] = $row[81];
            $_SESSION['5-5-11'] = $row[82];
            $_SESSION['5-5-12'] = $row[83];
            //verification
            $_SESSION['5-6-1'] = $row[84];
            $_SESSION['5-6-2'] = $row[85];
            $_SESSION['5-6-3'] = $row[86];
            $_SESSION['5-6-4'] = $row[87];
            $_SESSION['5-6-5'] = $row[88];
            $_SESSION['5-6-6'] = $row[89];
            $_SESSION['5-6-7'] = $row[90];
            $_SESSION['5-6-8'] = $row[91];
            $_SESSION['5-6-9'] = $row[92];
            $_SESSION['5-6-10'] = $row[93];

           $Window_Name = '../include/qcwindow.php';
           Child_Window($Window_Name);

      }

    }
    else 
    {
        echo mysqli_error($conn);
    }
}

function QC_Fetch_8($QC_From_ID)
{
    Global $conn;
   
    $sql = "select 
 
    (select `APPLN_NAME,C,10` FROM `application_type` WHERE `APPLN_ID,N,1`=ap.`FORM_TYPE,C,1`)`FORM_TYPE,C,1`,
    ap.`APPLN_NO,C,10`, ap.`INWARD_NO,N,10,0`, ap.`COUPON_NO,C,10`,
    
    ap1.`AREA_CODE,C,3`, ap1.`AO_TYPE,C,2`, ap1.`RANGE,C,3`, ap1.`AO_CODE,C,2`, ap1.`OLD_PAN,C,10`,
    
   (SELECT  `TITLE,C,6` FROM `title` WHERE `SR_NO,N,1`=per.`AS_TITLE,C,1`)`AS_TITLE,C,1`, 
   
    per.`AS_LAST,C,75`, per.`AS_FIRST,C,25`, per.`AS_MIDDLE,C,25`, per.`PAN_NAME,C,85`,
    
    per1.`OTH_NM_FLG,C,1`,per1.`OTH_TITLE,C,1`, per1.`OTH_LAST,C,75`, per1.`OTH_FIRST,C,25`, per1.`OTH_MIDDLE,C,25`,
   
   (SELECT `SEX_NAME,C,6` FROM `sex` WHERE `SEX_ID,C,1`=per.`SEX,C,1`)`SEX,C,1`, per.`DOB,D`,
    per.`FTH_LAST,C,25`, per.`FTH_FIRST,C,25`, per.`FTH_MIDDLE,C,25`,per1.`PM`,per1.`SM`,
 
   (SELECT `ADDR_NAME,C,9` FROM `addr_flag` WHERE `ADDR_ID,C,1`=ad.`ADDR_FLAG,C,1`),
   ad.`RES_ADDR1,C,25`, ad.`RES_ADDR2,C,25`, ad.`RES_ADDR3,C,25`, ad.`RES_ADDR4,C,25`,
   ad.`RES_DIST,C,25`,(SELECT `ST_NAME,C,22` FROM `state` WHERE `ST_NO,N,2`=ad.`RES_STATE,C,2`)`RES_STATE,C,2`, ad.`RES_PIN,C,6`,
   
   (SELECT `CNT_NAME,C,45` FROM `country` WHERE `CNT_NO,N,3`= ad.`RES_CNTRY,C,3`)`RES_CNTRY,C,3`,
    ad.`OFF_NAME,C,75`,ad.`OFF_ADDR1,C,25`, ad.`OFF_ADDR2,C,25`, ad.`OFF_ADDR3,C,25`, 
    ad.`OFF_ADDR4,C,25`, ad.`OFF_DIST,C,25`,
    
    (SELECT `ST_NAME,C,22` FROM `state` WHERE `ST_NO,N,2`=ad.`OFF_STATE,C,2`), 
    ad.`OFF_PIN,C,6`,
    (SELECT `CNT_NAME,C,45` FROM `country` WHERE `CNT_NO,N,3`= ad.`OFF_CNTRY,C,3`),
    
    ad1.`TEL_ISD,C,7`, ad1.`TEL_STD,C,7`, ad1.`TEL_NO,C,13`, ad1.`E_MAIL_ID,C,41`, 
   
    (SELECT  `STATUS,C,30` FROM `status` WHERE `STA_CODE,C,1`= co.`STATUS,C,2`),
    
    co.`REGN_NO,C,30`, (SELECT `CNT_NAME,C,45` FROM `country` WHERE `CNT_NO,N,3`= co.`CONT_CIT,C,3`)`CONT_CIT,C,3`, co.`CONT_ISD,C,7`, co.`UID_NO,C,12`,
    co.`SR_INC1,C,1`, co.`SR_INC2,C,1`, co.`PROFESSION,C,2`, co.`SR_INC3,C,1`, co.`SR_INC4,C,1`, co.`SR_INC5,C,1`, 
    co.`NOINC,C,1`, co.`SR_INCED1,N,2,0`, co.`SR_INCED2,N,2,0`, co.`SR_INCED3,N,2,0`, co.`SR_INC1VAL,C,2`, 
    co.`OLD_PAN1,C,10`, co.`OLD_PAN2,C,10`, co.`OLD_PAN3,C,10`, co.`OLD_PAN4,C,10`, co.`UID_VER,C,1`, co.`UID_NAME,C,80`,
    co.`UID_YOB,C,4`, co.`UID_SEX,C,1`, 
    
    (SELECT  `TITLE,C,6` FROM `title` WHERE `SR_NO,N,1`=ra.`REP_TITLE,C,1`), 
    ra.`REP_LAST,C,75`, ra.`REP_FIRST,C,25`, ra.`REP_MIDDLE,C,25`, 
    ra.`REP_ADDR1,C,25`, ra.`REP_ADDR2,C,25`, ra.`REP_ADDR3,C,25`, ra.`REP_ADDR4,C,25`, ra.`REP_DIST,C,25`, 
    (SELECT `ST_NAME,C,22` FROM `state` WHERE `ST_NO,N,2`=ra.`REP_STATE,C,2`), 
    ra.`REP_PIN,C,6`, ra.`REP_FLAG,C,1`, 
    
    ver.`PHOTO_FLAG,C,1`, ver.`SIG_FLAG,C,1`,(SELECT `IDENT_DOC_NAME,C,80` FROM `ident_doc` WHERE `IDENT_DOC_ID,N,2`=ver.`IDENT_DOC,C,2`), 
    (SELECT `RES_DOC_NAME,C,80` FROM `res_doc` WHERE `RES_DOC_ID,N,2`=ver.`RES_DOC,C,2`),
    (SELECT  `DOB_DOC,C,2` FROM `dob_doc` WHERE `DOB_DOC_ID,N,2`=ver.`DOB_DOC,C,2`), 
    ver.`NoOfDoc`, ver.`VER_NAME,C,75`,(SELECT `CAP_NAME,C,23` FROM `capacity` WHERE `CAP_NO,N,1`=ver.`VER_CAP,C,2`), ver.`VER_PLACE,C,30`, ver.`DOA,D`


    from `cust_compare_appl_info` ap inner join `cust_compare_personal_info` per on 
    ap.`FORM_ID,C,18`=per.`FORM_ID,C,18` inner join `cust_compare_address_info` ad on
    ap.`FORM_ID,C,18`=ad.`FORM_ID,C,18` inner join  `cust_other_info` co on
    ap.`FORM_ID,C,18`=co.`FORM_ID,C,18` inner join  `cust_ra_info` ra on
    ap.`FORM_ID,C,18`=ra.`FORM_ID,C,18` inner join  `cust_verification_info` ver on
    ap.`FORM_ID,C,18`=ver.`FORM_ID,C,18` inner join `cust_appl_info_l1` ap1 on
    ap.`FORM_ID,C,18`=ap1.`FORM_ID,C,18` inner join `cust_personal_info_l1` per1 on
    ap.`FORM_ID,C,18`=per1.`FORM_ID,C,18` inner join `cust_address_info_l1` ad1 on
    ap.`FORM_ID,C,18`=ad1.`FORM_ID,C,18` where ap.`FORM_ID,C,18`='".$QC_From_ID."';";

    if($result =mysqli_query($conn, $sql))
    {
        if($row=mysqli_fetch_array($result))
        {


            //app
            $_SESSION['5-1-1'] = $row[0];
            $_SESSION['5-1-2'] = $row[1];
            $_SESSION['5-1-3'] = $row[2];
            $_SESSION['5-1-4'] = $row[3];
            $_SESSION['5-1-5'] = $row[4];
            $_SESSION['5-1-6'] = $row[5];
            $_SESSION['5-1-7'] = $row[6];
            $_SESSION['5-1-8'] = $row[7];
            $_SESSION['5-1-9'] = $row[8];

            //per
            $_SESSION['5-2-1'] = $row[9];
            $_SESSION['5-2-2'] = $row[10];
            $_SESSION['5-2-3'] = $row[11];
            $_SESSION['5-2-4'] = $row[12];
            $_SESSION['5-2-5'] = $row[13];
            $_SESSION['5-2-6'] = $row[14];
            $_SESSION['5-2-7'] = $row[15];
            $_SESSION['5-2-8'] = $row[16];
            $_SESSION['5-2-9'] = $row[17];
            $_SESSION['5-2-10'] = $row[18];
            $_SESSION['5-2-11'] = $row[19];
            $_SESSION['5-2-12'] = $row[20];
            $_SESSION['5-2-13'] = $row[21];
            $_SESSION['5-2-14'] = $row[22];
            $_SESSION['5-2-15'] = $row[23];
            $_SESSION['5-2-16'] = $row[24];
            $_SESSION['5-2-17'] = $row[25];

            //address
           $_SESSION['5-3-1'] = $row[26];
           $_SESSION['5-3-2'] = $row[27];
           $_SESSION['5-3-3'] = $row[28];
           $_SESSION['5-3-4'] = $row[29];
           $_SESSION['5-3-5'] = $row[30];
           $_SESSION['5-3-6'] = $row[31];
           $_SESSION['5-3-7'] = $row[32];
           $_SESSION['5-3-8'] = $row[33];
           $_SESSION['5-3-9'] = $row[34];
           $_SESSION['5-3-10'] = $row[35];
           $_SESSION['5-3-11'] = $row[36];
           $_SESSION['5-3-12'] = $row[37];
           $_SESSION['5-3-13'] = $row[38];
           $_SESSION['5-3-14'] = $row[39];
           $_SESSION['5-3-15'] = $row[40];
           $_SESSION['5-3-16'] = $row[41];
           $_SESSION['5-3-17'] = $row[42];
           $_SESSION['5-3-18'] = $row[43];
           $_SESSION['5-3-19'] = $row[44];
           $_SESSION['5-3-20'] = $row[45];
           $_SESSION['5-3-21'] = $row[46];
           $_SESSION['5-3-22'] = $row[47];

            //other
            $_SESSION['5-4-1'] = $row[48];
            $_SESSION['5-4-2'] = $row[49];
            $_SESSION['5-4-3'] = $row[50];
            $_SESSION['5-4-4'] = $row[51];
            $_SESSION['5-4-5'] = $row[52];
            $_SESSION['5-4-6'] = $row[53];
            $_SESSION['5-4-10'] = $row[54];
            $_SESSION['5-4-11'] = $row[55];
            $_SESSION['5-4-9'] = $row[56];
            $_SESSION['5-4-8'] = $row[57];
            $_SESSION['5-4-7'] = $row[58];
            $_SESSION['5-4-12'] = $row[59];
            $_SESSION['5-4-13'] = $row[64];
            $_SESSION['5-4-14'] = $row[65];
            $_SESSION['5-4-15'] = $row[66];
            $_SESSION['5-4-16'] = $row[67];


            //ra
            $_SESSION['5-5-1'] = $row[72];
            $_SESSION['5-5-2'] = $row[73];
            $_SESSION['5-5-3'] = $row[74];
            $_SESSION['5-5-4'] = $row[75];
            $_SESSION['5-5-5'] = $row[76];
            $_SESSION['5-5-6'] = $row[77];
            $_SESSION['5-5-7'] = $row[78];
            $_SESSION['5-5-8'] = $row[79];
            $_SESSION['5-5-9'] = $row[80];
            $_SESSION['5-5-10'] = $row[81];
            $_SESSION['5-5-11'] = $row[82];
            $_SESSION['5-5-12'] = $row[83];
            //verification
            $_SESSION['5-6-1'] = $row[84];
            $_SESSION['5-6-2'] = $row[85];
            $_SESSION['5-6-3'] = $row[86];
            $_SESSION['5-6-4'] = $row[87];
            $_SESSION['5-6-5'] = $row[88];
            $_SESSION['5-6-6'] = $row[89];
            $_SESSION['5-6-7'] = $row[90];
            $_SESSION['5-6-8'] = $row[91];
            $_SESSION['5-6-9'] = $row[92];
            $_SESSION['5-6-10'] = $row[93];


            $Window_Name = '../include/qcwindow.php';
            Child_Window($Window_Name);

        }
    }
    else 
    {
        echo mysqli_error($conn);
    }
}

function Child_Window($Window_Name)
{
   
    echo '
        <script>
        window.open(
           "'.$Window_Name.'",

        "DescriptiveWindowName",
        "fullscreen=yes,resizable=yes,scrollbars=yes,toolbar=0,height=690,width=1100"
                    );
        </script>';
    
}

?>