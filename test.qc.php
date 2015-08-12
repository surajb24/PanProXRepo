<?php

include 'conn.inc.php';

//if($Status == '11')
//{

/*

$sql = "
    select 
    
    
    (select `APPLN_NAME,C,10` FROM `application_type` WHERE `APPLN_ID,N,1`=ap.`FORM_TYPE,C,1`)`FORM_TYPE,C,1`,

    ap.`APPLN_NO,C,10`, ap.`INWARD_NO,N,10,0`, ap.`COUPON_NO,C,10`,ap.`AREA_CODE,C,3`, ap.`AO_TYPE,C,2`, 
    ap.`RANGE,C,3`, ap.`AO_CODE,C,2`, ap.`OLD_PAN,C,10`,
    (SELECT  `TITLE,C,6` FROM `title` WHERE `SR_NO,N,1`=per.`AS_TITLE,C,1`), 
    per.`AS_LAST,C,75`, per.`AS_FIRST,C,25`, per.`AS_MIDDLE,C,25`, 

    per.`PAN_NAME,C,85`,per.`OTH_NM_FLG,C,1`, per.`OTH_TITLE,C,1`, per.`OTH_LAST,C,75`, per.`OTH_FIRST,C,25`, per.`OTH_MIDDLE,C,25`,
     
   (SELECT `SEX_NAME,C,6` FROM `sex` WHERE `SEX_ID,C,1`=per.`SEX,C,1`),
    per.`DOB,D`, 
   per.`FTH_LAST,C,25`, per.`FTH_FIRST,C,25`, per.`FTH_MIDDLE,C,25`,per.`PM`, per.`SM`,
   (SELECT `ADDR_NAME,C,9` FROM `addr_flag` WHERE `ADDR_ID,C,1`=ad.`ADDR_FLAG,C,1`),
   ad.`RES_ADDR1,C,25`, ad.`RES_ADDR2,C,25`,ad.`RES_ADDR3,C,25`, ad.`RES_ADDR4,C,25`,ad.`RES_DIST,C,25`,
   (SELECT `ST_NAME,C,22` FROM `state` WHERE `ST_NO,N,2`=ad.`RES_STATE,C,2`),
   ad.`RES_PIN,C,6`,
   
   (SELECT `CNT_NAME,C,45` FROM `country` WHERE `CNT_NO,N,3`= ad.`RES_CNTRY,C,3`), 
   ad.`OFF_NAME,C,75`,ad.`OFF_ADDR1,C,25`, ad.`OFF_ADDR2,C,25`, ad.`OFF_ADDR3,C,25`, ad.`OFF_ADDR4,C,25`, ad.`OFF_DIST,C,25`,
    
   (SELECT `ST_NAME,C,22` FROM `state` WHERE `ST_NO,N,2`=ad.`OFF_STATE,C,2`),
   ad.`OFF_PIN,C,6`,
  (SELECT `CNT_NAME,C,45` FROM `country` WHERE `CNT_NO,N,3`= ad.`OFF_CNTRY,C,3`),
   ad.`TEL_ISD,C,7`, ad.`TEL_STD,C,7`, ad.`TEL_NO,C,13`,ad.`E_MAIL_ID,C,41`, 
  
   (SELECT  `STATUS,C,30` FROM `status` WHERE `STA_CODE,C,1`= co.`STATUS,C,2`), co.`REGN_NO,C,30`,
   (SELECT `CNT_NAME,C,45` FROM `country` WHERE `CNT_NO,N,3`= co.`CONT_CIT,C,3`), co.`CONT_ISD,C,7`, co.`UID_NO,C,12`,
   

    ap.`APPLN_NO,C,10`, ap.`INWARD_NO,N,10,0`, ap.`COUPON_NO,C,10`,
    (SELECT  `TITLE,C,6` FROM `title` WHERE `SR_NO,N,1`=per.`AS_TITLE,C,1`), per.`AS_LAST,C,75`, per.`AS_FIRST,C,25`, per.`AS_MIDDLE,C,25`, 

    per.`PAN_NAME,C,85`, per.`FTH_LAST,C,25`, per.`FTH_FIRST,C,25`, per.`FTH_MIDDLE,C,25`, 
   (SELECT `SEX_NAME,C,6` FROM `sex` WHERE `SEX_ID,C,1`=per.`SEX,C,1`), per.`DOB,D`, 
   (SELECT `ADDR_NAME,C,9` FROM `addr_flag` WHERE `ADDR_ID,C,1`=ad.`ADDR_FLAG,C,1`), ad.`RES_ADDR1,C,25`, ad.`RES_ADDR2,C,25`,
    ad.`RES_ADDR3,C,25`, ad.`RES_ADDR4,C,25`,ad.`RES_DIST,C,25`,(SELECT `ST_NAME,C,22` FROM `state` WHERE `ST_NO,N,2`=ad.`RES_STATE,C,2`),
    ad.`RES_PIN,C,6`,(SELECT `CNT_NAME,C,45` FROM `country` WHERE `CNT_NO,N,3`= ad.`RES_CNTRY,C,3`), ad.`OFF_NAME,C,75`, 
    ad.`OFF_ADDR1,C,25`, ad.`OFF_ADDR2,C,25`, ad.`OFF_ADDR3,C,25`, ad.`OFF_ADDR4,C,25`, ad.`OFF_DIST,C,25`,
    (SELECT `ST_NAME,C,22` FROM `state` WHERE `ST_NO,N,2`=ad.`OFF_STATE,C,2`), ad.`OFF_PIN,C,6`,
    (SELECT `CNT_NAME,C,45` FROM `country` WHERE `CNT_NO,N,3`= ad.`OFF_CNTRY,C,3`), ad.`TEL_ISD,C,7`, ad.`TEL_STD,C,7`, ad.`TEL_NO,C,13`,
    ad.`E_MAIL_ID,C,41`, co.`CATEGORY,C,2`,(SELECT  `STATUS,C,30` FROM `status` WHERE `STA_CODE,C,1`= co.`STATUS,C,2`), co.`REGN_NO,C,30`,
    (SELECT `CNT_NAME,C,45` FROM `country` WHERE `CNT_NO,N,3`= co.`CONT_CIT,C,3`), co.`CONT_ISD,C,7`, co.`UID_NO,C,12`,

    co.`SR_INC1,C,1`, co.`SR_INC2,C,1`, co.`PROFESSION,C,2`, co.`SR_INC3,C,1`, co.`SR_INC4,C,1`, co.`SR_INC5,C,1`, 
    co.`NOINC,C,1`, co.`SR_INCED1,N,2,0`, co.`SR_INCED2,N,2,0`, co.`SR_INCED3,N,2,0`, co.`SR_INC1VAL,C,2`, 
    co.`OLD_PAN1,C,10`, co.`OLD_PAN2,C,10`, co.`OLD_PAN3,C,10`, co.`OLD_PAN4,C,10`, co.`UID_VER,C,1`, co.`UID_NAME,C,80`,
    co.`UID_YOB,C,4`, co.`UID_SEX,C,1`, 
    
    (SELECT  `TITLE,C,6` FROM `title` WHERE `SR_NO,N,1`=ra.`REP_TITLE,C,1`),
    ra.`REP_LAST,C,75`, ra.`REP_FIRST,C,25`, ra.`REP_MIDDLE,C,25`, 
    ra.`REP_ADDR1,C,25`, ra.`REP_ADDR2,C,25`, ra.`REP_ADDR3,C,25`, ra.`REP_ADDR4,C,25`, ra.`REP_DIST,C,25`, 
    
    (SELECT `ST_NAME,C,22` FROM `state` WHERE `ST_NO,N,2`=ra.`REP_STATE,C,2`),
    ra.`REP_PIN,C,6`, ra.`REP_FLAG,C,1`,
    
    ver.`PHOTO_FLAG,C,1`, ver.`SIG_FLAG,C,1`, (SELECT `IDENT_DOC_NAME,C,80` FROM `ident_doc` WHERE `IDENT_DOC_ID,N,2`=ver.`IDENT_DOC,C,2`),
    
    (SELECT `RES_DOC_NAME,C,80` FROM `res_doc` WHERE `RES_DOC_ID,N,2`=ver.`RES_DOC,C,2`),(SELECT  `DOB_DOC,C,2` FROM `dob_doc` WHERE `DOB_DOC_ID,N,2`=ver.`DOB_DOC,C,2`),
    ver.`NoOfDoc`, ver.`VER_NAME,C,75`,(SELECT `CAP_NAME,C,23` FROM `capacity` WHERE `CAP_NO,N,1`=ver.`VER_CAP,C,2`), ver.`VER_PLACE,C,30`, ver.`DOA,D`
    
    from `cust_appl_info_l1` ap 
    inner join `cust_personal_info_l1` per on 
    ap.`FORM_ID,C,18`=per.`FORM_ID,C,18` inner join `cust_address_info_l1` ad on
    ap.`FORM_ID,C,18`=ad.`FORM_ID,C,18` inner join  `cust_other_info` co on
    ap.`FORM_ID,C,18`=co.`FORM_ID,C,18` inner join  `cust_ra_info` ra on
    ap.`FORM_ID,C,18`=ra.`FORM_ID,C,18` inner join  `cust_verification_info` ver on
    ap.`FORM_ID,C,18`=ver.`FORM_ID,C,18` where ap.`FORM_ID,C,18`='1';";

if($result =mysqli_query($conn, $sql))
{
        
	while($row=mysqli_fetch_array($result))
	{
            
           //app2
            echo $_SESSION['5-1-1'] = $row[0];
            echo $_SESSION['5-1-2'] = $row[1];
            echo $_SESSION['5-1-3'] = $row[2];
            echo $_SESSION['5-1-4'] = $row[3];
            echo $_SESSION['5-1-5'] = $row[4];
            echo $_SESSION['5-1-6'] = $row[5];
            echo $_SESSION['5-1-7'] = $row[6];
            echo $_SESSION['5-1-8'] = $row[7];
            echo $_SESSION['5-1-9'] = $row[8];
            
            //per2
            echo $_SESSION['5-2-1'] = $row[9];
            echo $_SESSION['5-2-2'] = $row[10];
            echo $_SESSION['5-2-3'] = $row[11];
            echo $_SESSION['5-2-4'] = $row[12];
            echo $_SESSION['5-2-5'] = $row[13];
            echo $_SESSION['5-2-6'] = $row[14];
            echo $_SESSION['5-2-7'] = $row[15];
            echo $_SESSION['5-2-8'] = $row[16];
            echo $_SESSION['5-2-9'] = $row[17];
            echo $_SESSION['5-2-10'] = $row[18];
            echo $_SESSION['5-2-11'] = $row[19];
            echo $_SESSION['5-2-12'] = $row[20];
            echo $_SESSION['5-2-13'] = $row[21];
            echo $_SESSION['5-2-14'] = $row[22];
            echo $_SESSION['5-2-15'] = $row[23];
            echo $_SESSION['5-2-16'] = $row[24];
            echo $_SESSION['5-2-17'] = $row[25];
            
            //add2
            
            echo $_SESSION['5-3-1'] = $row[26];
            echo $_SESSION['5-3-2'] = $row[27];
            echo $_SESSION['5-3-3'] = $row[28];
            echo $_SESSION['5-3-4'] = $row[29];
            echo $_SESSION['5-3-5'] = $row[30];
            echo $_SESSION['5-3-6'] = $row[31];
            echo $_SESSION['5-3-7'] = $row[32];
            echo $_SESSION['5-3-8'] = $row[33];
            
            echo $_SESSION['5-3-9'] = $row[34];
            echo $_SESSION['5-3-10'] = $row[35];
            echo $_SESSION['5-3-11'] = $row[36];
            echo $_SESSION['5-3-12'] = $row[37];
            echo $_SESSION['5-3-13'] = $row[38];
            echo $_SESSION['5-3-14'] = $row[39];
            echo $_SESSION['5-3-15'] = $row[40];
            echo $_SESSION['5-3-16'] = $row[41];
            echo $_SESSION['5-3-17'] = $row[42];
            
            echo $_SESSION['5-3-18'] = $row[43];
            echo $_SESSION['5-3-19'] = $row[44];
            echo $_SESSION['5-3-20'] = $row[45];
            echo $_SESSION['5-3-21'] = $row[46];
            echo $_SESSION['5-3-22'] = $row[47];
            
            //other
            
            echo $_SESSION['5-4-1'] = $row[48];
            echo $_SESSION['5-4-2'] = $row[49];
            echo $_SESSION['5-4-3'] = $row[50];
            echo $_SESSION['5-4-4'] = $row[51];
            echo $_SESSION['5-4-5'] = $row[52];
            
            echo $_SESSION['5-4-6'] = $row[53];
            echo $_SESSION['5-4-10'] = $row[54];
            echo $_SESSION['5-4-11'] = $row[55];
            echo $_SESSION['5-4-9'] = $row[56];
            echo $_SESSION['5-4-8'] = $row[57];
            echo $_SESSION['5-4-7'] = $row[58];
            echo $_SESSION['5-4-12'] = $row[59];
            
            echo $_SESSION['5-4-13'] = $row[64];
            echo $_SESSION['5-4-14'] = $row[65];
            echo $_SESSION['5-4-15'] = $row[66];
            echo $_SESSION['5-4-16'] = $row[67];
            
            //ra
            echo $_SESSION['5-5-1'] = $row[72];
            echo $_SESSION['5-5-2'] = $row[73];
            echo $_SESSION['5-5-3'] = $row[74];
            echo $_SESSION['5-5-4'] = $row[75];
            echo $_SESSION['5-5-5'] = $row[76];
            echo $_SESSION['5-5-6'] = $row[77];
            echo $_SESSION['5-5-7'] = $row[78];
            echo $_SESSION['5-5-8'] = $row[79];
            echo $_SESSION['5-5-9'] = $row[80];
            echo $_SESSION['5-5-10'] = $row[81];
            echo $_SESSION['5-5-11'] = $row[82];
            //verification
            echo $_SESSION['5-6-1'] = $row[84];
            echo $_SESSION['5-6-2'] = $row[85];
            echo $_SESSION['5-6-3'] = $row[86];
            echo $_SESSION['5-6-4'] = $row[87];
            echo $_SESSION['5-6-5'] = $row[88];
            echo $_SESSION['5-6-6'] = $row[89];
            echo $_SESSION['5-6-7'] = $row[90];
            echo $_SESSION['5-6-8'] = $row[91];
            echo $_SESSION['5-6-9'] = $row[92];
            echo $_SESSION['5-6-10'] = $row[93];
             
           
	}
}
*/

/*
if($Status == '8')
{
*//*
 
 */
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
    ap.`FORM_ID,C,18`=ad1.`FORM_ID,C,18` where ap.`FORM_ID,C,18`='1';";

if($result =mysqli_query($conn, $sql))
{
	while($row=mysqli_fetch_array($result))
	{
            
         
           //app
            echo $_SESSION['5-1-1'] = $row[0];
            echo $_SESSION['5-1-2'] = $row[1];
            echo $_SESSION['5-1-3'] = $row[2];
            echo $_SESSION['5-1-4'] = $row[3];
            echo $_SESSION['5-1-5'] = $row[4];
            echo $_SESSION['5-1-6'] = $row[5];
            echo $_SESSION['5-1-7'] = $row[6];
            echo $_SESSION['5-1-8'] = $row[7];
            echo $_SESSION['5-1-9'] = $row[8];
            
            //per
            echo $_SESSION['5-2-1'] = $row[9];
            echo $_SESSION['5-2-2'] = $row[10];
            echo $_SESSION['5-2-3'] = $row[11];
            echo $_SESSION['5-2-4'] = $row[12];
            echo $_SESSION['5-2-5'] = $row[13];
            echo $_SESSION['5-2-6'] = $row[14];
            echo $_SESSION['5-2-7'] = $row[15];
            echo $_SESSION['5-2-8'] = $row[16];
            echo $_SESSION['5-2-9'] = $row[17];
            echo $_SESSION['5-2-10'] = $row[18];
            echo $_SESSION['5-2-11'] = $row[19];
            echo $_SESSION['5-2-12'] = $row[20];
            echo $_SESSION['5-2-13'] = $row[21];
            echo $_SESSION['5-2-14'] = $row[22];
            echo $_SESSION['5-2-15'] = $row[23];
            echo $_SESSION['5-2-16'] = $row[24];
            echo $_SESSION['5-2-17'] = $row[25];
            
            //address
            echo $_SESSION['5-3-1'] = $row[26];
            echo $_SESSION['5-3-2'] = $row[27];
            echo $_SESSION['5-3-3'] = $row[28];
            echo $_SESSION['5-3-4'] = $row[29];
            echo $_SESSION['5-3-5'] = $row[30];
            echo $_SESSION['5-3-6'] = $row[31];
            echo $_SESSION['5-3-7'] = $row[32];
            echo $_SESSION['5-3-8'] = $row[33];
            echo $_SESSION['5-3-9'] = $row[34];
            echo $_SESSION['5-3-10'] = $row[35];
            echo $_SESSION['5-3-11'] = $row[36];
            echo $_SESSION['5-3-12'] = $row[37];
            echo $_SESSION['5-3-13'] = $row[38];
            echo $_SESSION['5-3-14'] = $row[39];
            echo $_SESSION['5-3-15'] = $row[40];
            echo $_SESSION['5-3-16'] = $row[41];
            echo $_SESSION['5-3-17'] = $row[42];
            echo $_SESSION['5-3-18'] = $row[43];
            echo $_SESSION['5-3-19'] = $row[44];
            echo $_SESSION['5-3-21'] = $row[45];
            echo $_SESSION['5-3-20'] = $row[46];
            echo $_SESSION['5-3-22'] = $row[47];
            
            //other
            echo $_SESSION['5-4-1'] = $row[48];
            echo $_SESSION['5-4-2'] = $row[49];
            echo $_SESSION['5-4-3'] = $row[50];
            echo $_SESSION['5-4-4'] = $row[51];
            echo $_SESSION['5-4-5'] = $row[52];
            echo $_SESSION['5-4-6'] = $row[53];
            echo $_SESSION['5-4-10'] = $row[54];
            echo $_SESSION['5-4-11'] = $row[55];
            echo $_SESSION['5-4-9'] = $row[56];
            echo $_SESSION['5-4-8'] = $row[57];
            echo $_SESSION['5-4-7'] = $row[58];
            echo $_SESSION['5-4-12'] = $row[59];
            echo $_SESSION['5-4-13'] = $row[64];
            echo $_SESSION['5-4-14'] = $row[65];
            echo $_SESSION['5-4-15'] = $row[66];
            echo $_SESSION['5-4-16'] = $row[67];
            
            
            //ra
            echo $_SESSION['5-5-1'] = $row[72];
            echo $_SESSION['5-5-2'] = $row[73];
            echo $_SESSION['5-5-3'] = $row[74];
            echo $_SESSION['5-5-4'] = $row[75];
            echo $_SESSION['5-5-5'] = $row[76];
            echo $_SESSION['5-5-6'] = $row[77];
            echo $_SESSION['5-5-7'] = $row[78];
            echo $_SESSION['5-5-8'] = $row[79];
            echo $_SESSION['5-5-9'] = $row[80];
            echo $_SESSION['5-5-10'] = $row[81];
            echo $_SESSION['5-5-11'] = $row[82];
            
            //verification
            echo $_SESSION['5-6-1'] = $row[84];
            echo $_SESSION['5-6-2'] = $row[85];
            echo $_SESSION['5-6-3'] = $row[86];
            echo $_SESSION['5-6-4'] = $row[87];
            echo $_SESSION['5-6-5'] = $row[88];
            echo $_SESSION['5-6-6'] = $row[89];
            echo $_SESSION['5-6-7'] = $row[90];
            echo $_SESSION['5-6-8'] = $row[91];
            echo $_SESSION['5-6-9'] = $row[92];
            echo $_SESSION['5-6-10'] = $row[93];
            
        }
    }

    
 
 

?>