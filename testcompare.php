<?php

include 'conn.inc.php';

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
    ap1.`FORM_ID,C,18`=cad.`FORM_ID,C,18` where ap1.`FORM_ID,C,18`='1';";

if($result =mysqli_query($conn, $sql))
{
	while($row=mysqli_fetch_array($result))
	{
            //level 1 sessions
            //appl
            echo $_SESSION['2-1-1'] = $row[0];
            echo $_SESSION['4-1-1'] = $row[1];
            echo $_SESSION['3-1-1'] = $row[2];
            
            echo $_SESSION['2-1-2'] = $row[3];
            echo $_SESSION['4-1-2'] = $row[4];
            echo $_SESSION['3-1-2'] = $row[5];
            
            echo $_SESSION['2-1-3'] = $row[6];
            echo $_SESSION['4-1-3'] = $row[7];
            echo $_SESSION['3-1-3'] = $row[8];
            
            echo $_SESSION['2-1-4'] = $row[9];
            echo $_SESSION['4-1-4'] = $row[10];
            echo $_SESSION['3-1-4'] = $row[11];
            
            //personal
            echo $_SESSION['2-2-1'] = $row[12];
            echo $_SESSION['4-2-1'] = $row[13];
            echo $_SESSION['3-2-1'] = $row[14];
            
            echo $_SESSION['2-2-2'] = $row[15];
            echo $_SESSION['4-2-2'] = $row[16];
            echo $_SESSION['3-2-2'] = $row[17];
            
            echo $_SESSION['2-2-3'] = $row[18];
            echo $_SESSION['4-2-3'] = $row[19];
            echo $_SESSION['3-2-3'] = $row[20];
            
            echo $_SESSION['2-2-4'] = $row[21];
            echo $_SESSION['4-2-4'] = $row[22];
            echo $_SESSION['3-2-4'] = $row[23];
            
            echo $_SESSION['2-2-5'] = $row[24];
            echo $_SESSION['4-2-5'] = $row[25];
            echo $_SESSION['3-2-5'] = $row[26];
            
            echo $_SESSION['2-2-13'] = $row[27];
            echo $_SESSION['4-2-6'] = $row[28];
            echo $_SESSION['3-2-6'] = $row[29];
            
            echo $_SESSION['2-2-14'] = $row[30];
            echo $_SESSION['4-2-7'] = $row[31];
            echo $_SESSION['3-2-7'] = $row[32];
            
            echo $_SESSION['2-2-15'] = $row[33];
            echo $_SESSION['4-2-8'] = $row[34];
            echo $_SESSION['3-2-8'] = $row[35];
            
            echo $_SESSION['2-2-11'] = $row[36];
            echo $_SESSION['4-2-9'] = $row[37];
            echo $_SESSION['3-2-9'] = $row[38];
            
            echo $_SESSION['2-2-12'] = $row[39];
            echo $_SESSION['4-2-10'] = $row[40];
            echo $_SESSION['3-2-10'] = $row[41];
            
            //address
            echo $_SESSION['2-3-1'] = $row[42];
            echo $_SESSION['4-3-1'] = $row[43];
            echo $_SESSION['3-3-1'] = $row[44];
            
            echo $_SESSION['2-3-2'] = $row[45];
            echo $_SESSION['4-3-2'] = $row[46];
            echo $_SESSION['3-3-2'] = $row[47];
            
            echo $_SESSION['2-3-3'] = $row[48];
            echo $_SESSION['4-3-3'] = $row[49];
            echo $_SESSION['3-3-3'] = $row[50];
            
            echo $_SESSION['2-3-4'] = $row[51];
            echo $_SESSION['4-3-4'] = $row[52];
            echo $_SESSION['3-3-4'] = $row[53];
            
            echo $_SESSION['2-3-5'] = $row[54];
            echo $_SESSION['4-3-5'] = $row[55];
            echo $_SESSION['3-3-5'] = $row[56];
            
            echo $_SESSION['2-3-6'] = $row[57];
            echo $_SESSION['4-3-6'] = $row[58];
            echo $_SESSION['3-3-6'] = $row[59];
            
            echo $_SESSION['2-3-7'] = $row[60];
            echo $_SESSION['4-3-7'] = $row[61];
            echo $_SESSION['3-3-7'] = $row[62];
            
            echo $_SESSION['2-3-8'] = $row[63];
            echo $_SESSION['4-3-8'] = $row[64];
            echo $_SESSION['3-3-8'] = $row[65];
            
            echo $_SESSION['2-3-9'] = $row[66];
            echo $_SESSION['4-3-9'] = $row[67];
            echo $_SESSION['3-3-9'] = $row[68];
            
            echo $_SESSION['2-3-10'] = $row[69];
            echo $_SESSION['4-3-10'] = $row[70];
            echo $_SESSION['3-3-10'] = $row[71];
            
            echo $_SESSION['2-3-11'] = $row[72];
            echo $_SESSION['4-3-11'] = $row[73];
            echo $_SESSION['2-3-11'] = $row[74];
            
            echo $_SESSION['2-3-12'] = $row[75];
            echo $_SESSION['4-3-12'] = $row[76];
            echo $_SESSION['3-3-12'] = $row[77];
            
            echo $_SESSION['2-3-13'] = $row[78];
            echo $_SESSION['4-3-13'] = $row[79];
            echo $_SESSION['3-3-13'] = $row[80];
            
            echo $_SESSION['2-3-14'] = $row[81];
            echo $_SESSION['4-3-14'] = $row[82];
            echo $_SESSION['3-3-14'] = $row[83];
            
            echo $_SESSION['2-3-15'] = $row[84];
            echo $_SESSION['4-3-15'] = $row[85];
            echo $_SESSION['3-3-15'] = $row[86];
            
            echo $_SESSION['2-3-16'] = $row[87];
            echo $_SESSION['4-3-16'] = $row[88];
            echo $_SESSION['3-3-16'] = $row[89];
            
            echo $_SESSION['2-3-17'] = $row[90];
            echo $_SESSION['4-3-17'] = $row[91];
            echo $_SESSION['3-3-17'] = $row[92];
            
            echo $_SESSION['2-3-18'] = $row[93];
            echo $_SESSION['4-3-18'] = $row[94];
            echo $_SESSION['3-3-18'] = $row[95];
           
            
        }
}

?>