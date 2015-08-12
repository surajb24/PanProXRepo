<?php
include '../conn.inc.php';
        header('Content-Type: text/DBF');
        header('Content-Disposition: attachment;filename=APPLDATA.DBF');

        //select table to export the data
        
        $sql = 'SELECT ai.`APPLN_NO,C,10`, ai.`INWARD_NO,N,10,0`, ai.`COUPON_NO,C,10`, vi.`DOA,D`,ai.`AREA_CODE,C,3`, ai.`RANGE,C,3`, ai.`AO_CODE,C,2`,pi.`AS_TITLE,C,1`, pi.`AS_LAST,C,75`,pi.`AS_MIDDLE,C,25`,pi.`AS_FIRST,C,25`,pi.`PAN_NAME,C,85`, pi.`OTH_NM_FLG,C,1`, pi.`OTH_TITLE,C,1`, pi.`OTH_LAST,C,75`, pi.`OTH_FIRST,C,25`, pi.`OTH_MIDDLE,C,25`,pi.`DOB,D`,pi.`FTH_LAST,C,25`, pi.`FTH_FIRST,C,25`, pi.`FTH_MIDDLE,C,25`,pi.`SEX,C,1`,oi. `CATEGORY,C,2`, oi.`STATUS,C,2`,CASE WHEN oi.`CONT_CIT,C,3`=\'\' THEN \'Y\' END `CITIZEN,C,1`, oi.`PROFESSION,C,2`, ri.`ADDR_FLAG,C,1`, ri.`RES_ADDR1,C,25`, ri.`RES_ADDR2,C,25`, ri.`RES_ADDR3,C,25`, ri.`RES_ADDR4,C,25`, ri.`RES_DIST,C,25`, ri.`RES_STATE,C,2`, ri.`RES_PIN,C,6`,ri.`OFF_NAME,C,75`, ri.`OFF_ADDR1,C,25`, ri.`OFF_ADDR2,C,25`, ri.`OFF_ADDR3,C,25`, ri.`OFF_ADDR4,C,25`, ri.`OFF_DIST,C,25`, ri.`OFF_STATE,C,2`, ri.`OFF_PIN,C,6`,ri.`E_MAIL_ID,C,41`, ri.`TEL_ISD,C,7`, ri.`TEL_STD,C,7`, ri.`TEL_NO,C,13`,oi.`SR_INC1,C,1`, oi.`SR_INC2,C,1`,oi. `SR_INC3,C,1`,oi.`SR_INC1VAL,C,2`, ra.`REP_TITLE,C,1`, ra.`REP_LAST,C,75`,ra.`REP_MIDDLE,C,25`,ra.`REP_FIRST,C,25`,ra.`REP_ADDR1,C,25`, ra.`REP_ADDR2,C,25`, ra.`REP_ADDR3,C,25`, ra.`REP_ADDR4,C,25`, ra.`REP_DIST,C,25`, ra.`REP_STATE,C,2`, ra.`REP_PIN,C,6`,vi.`RES_DOC,C,2`,vi.`IDENT_DOC,C,2`,bi.`PCC_CODE,C,8`,oi.`REGN_NO,C,30`,oc.`NID_BUS,C,30`,oc.`NID_DOC,D`,oc.`NO_OF_BR,N,4,0`, oc.`NO_OF_PART,N,2,0`, bi.`PDC_CODE,C,3`,bi.`AGENCY_CD,C,5`,oc.`DESP_MODE,C,1`,oi.`SR_INCED1,N,2,0`, oi.`SR_INCED2,N,2,0`,bi.`DOE_AT_AG,D`, bi.`DOR_AT_PDC,D`, ai.`AO_TYPE,C,2`,oc.`OBJ_STRING,C,34`,oc.`AG_OBJ_FL,C,1`,ra.`REP_FLAG,C,1`,oc.`VAL_FLAG,C,1`,oc.`DATA_USER,C,8`, oc.`EDIT_USER,C,8`, oc.`PDCFILETAG,C,1`, oc.`PPCFILETAG,C,1`,CONCAT(bi.`AGENCY_CD,C,5`,\'0\',ai.`INWARD_NO,N,10,0` ) `INW_CHAR,C,10`,oc.`PDCVALFLAG,C,1`, oc.`OBJ_DATE,D`, oc.`DESP_ID,C,10`, oc.`TAT_FLAG,C,1`, oc.`DOC_IMG,C,1`,bi.`BATCH_NO,C,20`,vi.`SIG_FLAG,C,1`,oc.`LTI_FLAG,C,1`, oc.`OTH_SRC,C,30`,oi.`SR_INC4,C,1`, oi.`SR_INC5,C,1`,oi.`SR_INCED3,N,2,0`,oc.`EDT_GEN_FL,C,1`, ai.`OLD_PAN,C,10`,oc.`BATTYPE,C,1`,oi.`NOINC,C,1`,ri.`RES_CNTRY,C,3`,oc.`RES_ZIP,C,11`, ri.`OFF_CNTRY,C,3`, oc.`OFF_ZIP,C,11`,oi.`UID_NO,C,12`,oi.`UID_VER,C,1`,oi.`CONT_CIT,C,3`, oi.`CONT_ISD,C,7`,oc.`LLP_STATUS,C,1`, oc.`KYC_FLAG,C,1`,vi.`VER_NAME,C,75`, vi.`VER_CAP,C,2`, vi.`VER_PLACE,C,30`,ai.`FORM_TYPE,C,1`,oi.`UID_NAME,C,80`, oi.`UID_YOB,C,4`, oi.`UID_SEX,C,1`,vi.`DOB_DOC,C,2` FROM `appl_status` aps inner join `cust_qc_appl_info` ai  on aps.`FORM_ID,C,18`=ai.`FORM_ID,C,18` inner join `cust_qc_verification_info` vi on aps.`FORM_ID,C,18`=vi.`FORM_ID,C,18` inner join `cust_personal_info_l1` pi on aps.`FORM_ID,C,18`=pi.`FORM_ID,C,18` inner join `cust_qc_other_info` oi on  aps.`FORM_ID,C,18`=oi.`FORM_ID,C,18` inner join `cust_qc_address_info` ri on aps.`FORM_ID,C,18`=ri.`FORM_ID,C,18` inner join `cust_qc_ra_info` ra on aps.`FORM_ID,C,18`=ra.`FORM_ID,C,18` inner join `batch_info` bi on aps.`BATCH_ID,N,11`=bi.`SR_NO,N,11` inner join `cust_other_col` oc on aps.`FORM_ID,C,18`=oc.`FORM_ID,C,18` where aps.`FINAL_STATUS,N,1`=10';
        
        $select_table = mysqli_query($conn, $sql);
        $rows = mysqli_fetch_assoc($select_table);

        if ($rows)
        {
        getcsv(array_keys($rows));
        }
        while($rows)
        {
        getcsv($rows);
        $rows = mysqli_fetch_assoc($select_table);
        }

        // get total number of fields present in the database
        function getcsv($no_of_field_names)
        {
        $separate = '';


        // do the action for all field names as field name
        foreach ($no_of_field_names as $field_name)
        {

        echo strtoupper($separate . $field_name);

        //sepearte with the comma
        $separate = ',';
        }

        //make new row and line
        echo "\r\n";
        }
