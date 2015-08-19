<?php
include '../conn.inc.php';
include 'select_id.php';
include 'select.inc.php';


//App_Form_Info
if(isset($_POST['app_submit']))
{
    
        
                $Apply_Type=$_POST['apptype'];    
                $_SESSION['5-1-1'] = $Apply_Type;
                 
                 $ID='APPLN_ID,N,1';
                 $TabelName='application_type';
                 $ColumnName='APPLN_NAME,C,10';
                 $Condition =$Apply_Type;
                 
                $APID=select_id($ID, $TabelName, $ColumnName, $Condition);
                $_SESSION['Form_Type'] = $APID;
            
                 $App_No=$_POST['app_no'];    
                 $_SESSION['5-1-2'] = $App_No;
                 
                 $Inword_Type=strtoupper($_POST['inword_no']);
                 $_SESSION['5-1-3'] = $Inword_Type;
                 
                 $Coupan_No=$_POST['coupon_no'];    
                 $_SESSION['5-1-4'] = $Coupan_No;
               
                 
                $Areacode = strtoupper($_POST['ac']);
                $_SESSION['5-1-5'] = $Areacode;

                $Aotype = strtoupper($_POST['ao_type']);
                $_SESSION['5-1-6'] = $Aotype;

                $Range_code = strtoupper($_POST['range_code']);
                $_SESSION['5-1-7'] = $Range_code;

                $Ao_No =strtoupper($_POST['ao_no']);
                $_SESSION['5-1-8'] = $Ao_No;
                
                $Pan_No = strtoupper($_POST['pan_no']);
                $_SESSION['5-1-9'] = $Pan_No;
                
                
                $sql = "UPDATE `cust_qc_appl_info` SET 
			
                        `FORM_TYPE,C,1` = '$APID',
			`APPLN_NO,C,10` = '$App_No',
			`INWARD_NO,N,10,0` = '$Inword_Type',
			`COUPON_NO,C,10` = '$Coupan_No',
                         `AREA_CODE,C,3` = '$Areacode', 
			`AO_TYPE,C,2` = '$Aotype',			
			`RANGE,C,3` = '$Range_code',
			`AO_CODE,C,2` = '$Ao_No',
			`OLD_PAN,C,10` = '$Pan_No',
			`STATUS,N,1` = '2',
			
			`FLAG1` = '',
                                                `FLAG2` = '',
                                                `FLAG3` = ''    
						
			WHERE `FORM_ID,C,18` = '$_SESSION[QC_Form_ID]';";
	
			
	if(mysqli_query($conn, $sql))
	{
		$_SESSION['AppStatus'] = '1';
		
		
                 echo '<script>
			
                            $(document).ready(function(){
                             
			alert("Application Level1 info Submitted Successfully!");
			$("#Tab1").removeClass("select");
			$("#Tab2").addClass("select");
			$("#Tab1I").slideUp();
			$("#Tab2I").slideDown();
                                                                         
                                                var a=$(".apptype").val();
                                                if(a=="CORRECTION")
                                                {
                                                document.getElementById("ra").style.display = "none";
                                                }
                        
						
		}); 
                
                            </script>';
                 
		
	}
	else
	{
		$flag1 = 'false';
		echo mysqli_error($conn);
	}
	
}
//End App Form Info


//Start Personal_Form_Info1

if(isset($_POST['Personalsubmit']))
{
             if(!empty($_SESSION['AppStatus'])) 
             {
         
                
               $Apply_Title=$_POST['title'];    
               $_SESSION['5-2-1'] = $Apply_Title;
               
                $ID='SR_NO,N,1';
                $TabelName='title';
                $ColumnName='TITLE,C,6';
                $Condition =$Apply_Title;
                
                $APT= select_id($ID, $TabelName, $ColumnName, $Condition);
                $_SESSION['Applicant_Title'] = $APT;
            
                $Lname=strtoupper($_POST['Lname']);    
               $_SESSION['5-2-2'] = $Lname;
                 
                $Fname=strtoupper($_POST['Fname']);    
                $_SESSION['5-2-3'] = $Fname;
                 
                $Mname=strtoupper($_POST['Mname']);    
               $_SESSION['5-2-4'] = $Mname;
               
                $Abb = strtoupper($_POST['Abb']);
               $_SESSION['5-2-5'] = $Abb;
               
               $Other_Name = strtoupper($_POST['other']);
               $_SESSION['5-2-6'] = $Other_Name;
                
                $Otitle = $_POST['otitle'];
                $_SESSION['5-2-7'] = $Otitle;
               
                $ID='SR_NO,N,1';
                $TabelName='title';
                $ColumnName='TITLE,C,6';
                $Condition =$Otitle;
                
                $OTitle= select_id($ID, $TabelName, $ColumnName, $Condition);
                
                $OLname=strtoupper($_POST['OLname']);
                $_SESSION['5-2-8'] = $OLname;
                
                $OFname=strtoupper($_POST['OFname']);
                $_SESSION['5-2-9'] = $OFname;
                
                $OMname=strtoupper($_POST['OMname']);
                $_SESSION['5-2-10'] = $OMname;
                
              /* if($_POST['Gender'] == 'MALE')
               {
                        $Gender="M";
               }else{
                        $Gender="F";
               }*/
               
                $Gender1=$_POST['Gender'];
                $_SESSION['5-2-11'] = $Gender1;
                
               
                $ID='SEX_ID,C,1';
                $TabelName='sex';
                $ColumnName='SEX_NAME,C,6';
                $Condition =$Gender1;
                
               $GID = select_id($ID, $TabelName, $ColumnName, $Condition);
               
               $date = $_POST['date'];
               $_SESSION['5-2-12'] = $date;
               
               $date1 = explode('/', $date);

               $date1 = $date1[2].'/'.$date1[1].'/'.$date1[0];

               $date1 = date("Ymd", strtotime($date1));
               
               $_SESSION['DOB'] = $date1;
                
                $FLname = strtoupper($_POST['FLname']);
               $_SESSION['5-2-13'] = $FLname;
                
                $FFname = strtoupper($_POST['FFname']);
                $_SESSION['5-2-14'] = $FFname;
               
                $FMname = strtoupper($_POST['FMname']);
                $_SESSION['5-2-15'] = $FMname;
                
                $PM = $_POST['PM'];
                $_SESSION['5-2-16'] = $PM;
                
                /*if(isset($_POST['PM']))
                {
                        $PM="P";
                }else{
                        $PM="";
                }*/    
                
                
                $SM = $_POST['SM'];
                $_SESSION['5-2-17'] = $SM;
                
                /*if(isset($_POST['SM']))
                {
                        $PM="S";
                }else{
                        $PM="";
                }*/
                
                
               
               $sql = "UPDATE `cust_qc_personal_info` SET 
			
				
                         `AS_TITLE,C,1` = '$APT',
			`AS_LAST,C,75`= '$Lname',
			`AS_FIRST,C,25` = '$Fname',
			`AS_MIDDLE,C,25` = '$Mname',
                        `PAN_NAME,C,85` = '$Abb', 
			`OTH_NM_FLG,C,1` = '$Other_Name',			
			`OTH_TITLE,C,1` = '$OTitle',
			`OTH_LAST,C,75` = '$OLname',
			`OTH_FIRST,C,25` = '$OFname',
			`OTH_MIDDLE,C,25` = '$OMname',
                                                `SEX,C,1` = '$GID',
                                                `DOB,D` = '$date',
                                                `FTH_LAST,C,25` = '$FLname',   
                                                `FTH_FIRST,C,25` = '$FFname',   
                                                `FTH_MIDDLE,C,25` = '$FMname',      
			`STATUS,N,1` = '2',
			`flag1` = '0',
                                                `flag2` = '0',
                                                `flag3` = '0',
                                                `PM` = '$PM',
                                                `SM` = '$SM'
						
			WHERE `FORM_ID,C,18` = '$_SESSION[QC_Form_ID]';";
	
			
	if(mysqli_query($conn, $sql))
	{
		$_SESSION['PersonalStatus'] = '1';
		echo '<script>
			
		$(document).ready(function(){
		
                                        alert("Personal info Submitted Successfully!");
                                               $("#Tab2").removeClass("select");
                                               $("#Tab1").removeClass("select");
                                               $("#Tab3").addClass("select");
                                               $("#Tab2I").slideUp();
                                               $("#Tab1I").slideUp();
                                               $("#Tab3I").slideDown();
                                               
                                                var a=$(".apptype").val();
                                                if(a=="CORRECTION")
                                                {
                                                document.getElementById("ra").style.display = "none";
                                                }       
						
		}); 
				
		</script>';
	
		
	}
	else
	{
		$flag1 = 'false';
		echo mysqli_error($conn);
	}
	
	
       }
        else
        {
                 echo '<script>
			
		$(document).ready(function(){
		
                                        alert("First Submit Application Info!");
                                               $("#Tab2").removeClass("select");
                                               $("#Tab3").removeClass("select");
                                               $("#Tab1").addClass("select");
                                               $("#Tab2I").slideUp();
                                               $("#Tab3I").slideUp();
                                               $("#Tab1I").slideDown();
                                               
                                                
						
		}); 
				
		</script>';
	
            }
	
}
//End Personal_Form_Info1

/*Start Address--*/

if(isset($_POST['Contactsubmit']))
{
        if(!empty($_SESSION['PersonalStatus'])) 
        {
               
	       $address_com=$_POST['addcom'];
                $_SESSION['5-3-1']=$address_com;
                
                $ID='ADDR_ID,C,1';
                $TabelName='addr_flag';
                $ColumnName='ADDR_NAME,C,9';
                $Condition =$address_com;
                
                $AC= select_id($ID, $TabelName, $ColumnName, $Condition);
                $_SESSION['Addr_Flag'] = $AC;
                
                
                $RNameofOffice=$_POST['RAdd'];
                $_SESSION['5-3-2']=$RNameofOffice;
                
                $RNPremises =$_POST['RNPremises'];
                $_SESSION['5-3-3'] = $RNPremises;
                
                $RRSL =$_POST['RRSL'];
                $_SESSION['5-3-4'] = $RRSL;
                
                $RALT =$_POST['RALT'];
                $_SESSION['5-3-5'] = $RALT;
                
                $RTCD =$_POST['RTCD'];
                $_SESSION['5-3-6'] = $RTCD;
                
                $RState =$_POST['RState'];
                $_SESSION['5-3-7'] = $RState;
                
                $ID='ST_NO,N,2';
                $TabelName='state';
                $ColumnName='ST_NAME,C,22';
                $Condition =$RState;
                
                $RState=  select_id($ID, $TabelName, $ColumnName, $Condition);
                $_SESSION['Res_State'] = $RState;
                
                $RPZcode =$_POST['RPZcode'];
                $_SESSION['5-3-8'] = $RPZcode;
                
                $RCountry =$_POST['RCountry'];
                $_SESSION['5-3-9'] = $RCountry;
                
                $ID='CNT_NO,N,3';
                $TabelName='country';
                $ColumnName='CNT_NAME,C,45';
                $Condition =$RCountry;
                
               $RCounrty=  select_id($ID, $TabelName, $ColumnName, $Condition);
               $_SESSION['Res_Country'] = $RCounrty;
             
                //office addresss 
                
                $ONameofoffice =$_POST['ONameofoffice'];
                $_SESSION['5-3-10'] = $ONameofoffice;
                
                $OFRDB =$_POST['OFRDB'];
                $_SESSION['5-3-11'] = $OFRDB;
                
                $OPremises =$_POST['OPremises'];
                $_SESSION['5-3-12'] = $OPremises;
                
                $ORSLP =$_POST['ORSLP'];
                $_SESSION['5-3-13'] = $ORSLP;
                
                $OALTS =$_POST['OALTS'];
                $_SESSION['5-3-14'] = $OALTS;
                
                $OTCD =$_POST['OTCD'];
                $_SESSION['5-3-15'] = $OTCD;
                
                $OState =$_POST['OState'];
                $_SESSION['5-3-16'] = $OState;
                
                $ID='ST_NO,N,2';
                $TabelName='state';
                $ColumnName='ST_NAME,C,22';
                $Condition =$OState;
                
                $OState =  select_id($ID, $TabelName, $ColumnName, $Condition);
                $_SESSION['Off_State'] = $OState;
                
                $OPZcode =$_POST['OPZcode'];
                $_SESSION['5-3-17'] = $OPZcode;
                
                $OCountry =$_POST['OCountry'];
                $_SESSION['5-3-18'] = $OCountry;
                
                $ID='CNT_NO,N,3';
                $TabelName='country';
                $ColumnName='CNT_NAME,C,45';
                $Condition =$OCountry;
                
               $OCountry =  select_id($ID, $TabelName, $ColumnName, $Condition);
               $_SESSION['Off_Country'] = $OCountry;
                
                $Ccode =$_POST['Ccode'];
                $_SESSION['5-3-19'] = $Ccode;
                
                
                $OAScode =$_POST['OAScode'];
                $_SESSION['5-3-20'] = $OAScode;
                
                $TelNo =$_POST['TelNo'];
                $_SESSION['5-3-21'] = $TelNo;
                
                $Email =$_POST['Email'];
                $_SESSION['5-3-22'] = $Email; 
                
                $_SESSION['offyn']=$_POST['selectyes'];
                
	$sql = " UPDATE `cust_qc_address_info` SET 
	
		`ADDR_FLAG,C,1` = '$AC', 
		
		`RES_ADDR1,C,25` = '$RNameofOffice', 
		
		`RES_ADDR2,C,25` = '$RNPremises',
		
		`RES_ADDR3,C,25` = '$RRSL',
		
		`RES_ADDR4,C,25` = '$RALT',
		
		`RES_DIST,C,25` = '$RTCD',
		
		`RES_STATE,C,2` = '$RState',
				
		`RES_PIN,C,6` = '$RPZcode',
		
		`RES_CNTRY,C,3` = '$RCounrty',
		
		`OFF_NAME,C,75` = '$ONameofoffice',
		
		`OFF_ADDR1,C,25` = '$OFRDB',
		
		`OFF_ADDR2,C,25` = '$OPremises',
		
		`OFF_ADDR3,C,25` = '$ORSLP',
		
		`OFF_ADDR4,C,25` = '$OALTS',
		
		`OFF_DIST,C,25` = '$OTCD',
		
		`OFF_STATE,C,2` = '$OState',
		
		`OFF_PIN,C,6` = '$OPZcode',
		
		`OFF_CNTRY,C,3` = '$OCountry',
		
		`TEL_ISD,C,7` = '$Ccode',
				

		`TEL_STD,C,7` = '$OAScode',
		
		`TEL_NO,C,13` = '$TelNo',
		

		`E_MAIL_ID,C,41` = '$Email',
		
		`STATUS,N,1` = '2',
		
		`flag1` = '',
		
		`flag2` = '' ,
		
		`flag3` = '' ,
		
		`flag4` = '' ,
		
		`flag5` = '' 
				
		where `FORM_ID,C,18` = '$_SESSION[QC_Form_ID]';";
		
		
	if(mysqli_query($conn, $sql))
	{	
		
		$_SESSION['AddressStatus'] = '1';
		
		echo 
		' <script>
			
		$(document).ready(function(){
		
			alert("Address info Submitted Successfully!");
			$("#Tab3").removeClass("select");
                                                $("#Tab2").removeClass("select");
                                                $("#Tab1").removeClass("select");
                                                $("#Tab4").addClass("select");
                                                $("#Tab3I").slideUp();
                                                $("#Tab2I").slideUp();
                                                $("#Tab1I").slideUp();
                                                $("#Tab4I").slideDown();
                                                
                                                var a=$(".apptype").val();
                                                if(a=="CORRECTION")
                                                {
                                                document.getElementById("ra").style.display = "none";
                                                }         
                                                    
						
		}); 

		</script>';
			
	}
	else
	{
		echo mysqli_error($conn);
	}
        }
        else
        {
           echo 
		' <script>
			
		$(document).ready(function(){
		
			alert("First Submit Personal Info!");
			
                                                $("#Tab1").removeClass("select");
                                                $("#Tab3").removeClass("select");
                                                $("#Tab2").addClass("select");
                                                $("#Tab1I").slideUp();
                                                $("#Tab3I").slideUp();
                                                $("#Tab2I").slideDown();
                                                
                                                      
                                                    
						
		}); 

		</script>'; 
        }
}
/*End Address--*/


/*Start Other Info--*/

if(isset($_POST['OtherSubmit']))
{	
    if(!empty($_SESSION['AddressStatus']))
    {
                $Cat=$_POST['SOA'];
                if($Cat==="INDIVIDUAL APPLICANT")
                {
                    $Cat='1';
                }else{
                    $Cat='2';
                } 
                
                $_SESSION['Cat'] = $Cat;
    
                $SOA =$_POST['SOA'];
                $_SESSION['5-4-1'] = $SOA;
                
                $ID='STA_CODE,C,1';
                $TabelName='status';
                $ColumnName='STATUS,C,30';
                $Condition =$SOA;
                
                $SOA= select_id($ID, $TabelName, $ColumnName, $Condition);
                $_SESSION['SOA'] = $SOA;
                
                
                $RegNo =$_POST['RegNo'];
                $_SESSION['5-4-2'] = $RegNo;
                
                $CountryC =$_POST['CountryC'];
                $_SESSION['5-4-3'] = $CountryC;
                
                if($CountryC == '')
                {
                    $_SESSION['citzen'] = 'Y';
                }
                else {
                    $_SESSION['citzen'] = 'N';
                }
                
                $ID='CNT_NO,N,3';
                $TabelName='country';
                $ColumnName='CNT_NAME,C,45';
                $Condition =$CountryC;
                
                $CountryC =select_id($ID, $TabelName, $ColumnName, $Condition);
                
                
                $ISD =$_POST['ISD'];
                $_SESSION['5-4-4'] = $ISD;
                
                $AadharNo =$_POST['AadharNo'];
                $_SESSION['5-4-5'] = $AadharNo;
                
                if(isset($_POST['AadharNo']))
                {
                        $Uver="1";
                }else{
                        $Uver="0";
                    
                }
                
                if(isset($_POST['Salary']))
                {
                        $Salary="Y";
                }else{
                        $Salary="N";
                    
                }
                
                $_SESSION['5-4-6'] = $Salary;
                
                if(isset($_POST['CG']))
                {
                        $CG="Y";
                }else{
                        $CG="N";
                }    
                $_SESSION['5-4-7'] = $CG;
                
                if(isset($_POST['IHP']))
                {
                        $IHP="Y";
                        
                }else{
                        $IHP="N";
                }   
                $_SESSION['5-4-8'] = $IHP;
                
                if(isset($_POST['IOS']))
                {
                        $IOS="Y";
                }else{
                        $IOS="N";
                }
                $_SESSION['5-4-9'] = $IOS;
                
                if(isset($_POST['BPC']))
                {
                    $BPC = 'Y';
                }
                else
                {
                    $BPC = 'N';
                }
                
                $_SESSION['5-4-10'] = $BPC;
                
                $SCode=$_POST['SCode'];
                $_SESSION['5-4-11'] = $SCode;
                
                if(isset($_POST['NI']))
                {
                        $NI="Y";
                }else{
                        $NI="N";
                }
                
                $_SESSION['5-4-12'] = $NI;
                
                 if(isset($_POST['NI'])&&!isset($_POST['IOS'])&&!isset($_POST['Salary'])&&!isset($_POST['BPC'])&&!isset($_POST['IHP'])&&!isset($_POST['CG']))
                {
                        $SCode=89;
                }else if(!isset($_POST['NI'])&&isset($_POST['IOS'])&&!isset($_POST['Salary'])&&!isset($_POST['BPC'])&&!isset($_POST['IHP'])&&!isset($_POST['CG']))
                {
                        $SCode=99;
                    
                }
                
                else if(!isset($_POST['NI'])&&!isset($_POST['IOS'])&&isset($_POST['Salary'])&&!isset($_POST['BPC'])&&!isset($_POST['IHP'])&&!isset($_POST['CG']))
                {
                    $SCode=50;
                }
                
                
                $PAN1=$_POST['PAN1'];
                $_SESSION['5-4-13'] = $PAN1;
                
                $PAN2=$_POST['PAN2'];
                $_SESSION['5-4-14'] = $PAN2;
                
                $PAN3=$_POST['PAN3'];
                $_SESSION['5-4-15'] = $PAN3;
                
                $PAN4=$_POST['PAN4'];
                $_SESSION['5-4-16'] = $PAN4;
                
                $ANAME=$_POST['AName'];
                $_SESSION['5-4-17'] = $ANAME;
                
                $AYOB=$_POST['Ayob'];
                $_SESSION['5-4-18'] = $AYOB;
                
                $AGEN=$_POST['Agen'];
                $_SESSION['5-4-19'] = $AGEN;
                
                $ID='SEX_ID,C,1';
                $TabelName='sex';
                $ColumnName='SEX_NAME,C,6';
                $Condition =$AGEN;
                
               $GID = select_id($ID, $TabelName, $ColumnName, $Condition);
                
	$sql = " UPDATE `cust_qc_other_info` SET 
	
		`CATEGORY,C,2`='$Cat',
		`STATUS,C,2` = '$SOA', 
		`REGN_NO,C,30` = '$RegNo',
		`CONT_CIT,C,3` = '$CountryC',
		`CONT_ISD,C,7` = '$ISD',
		`UID_NO,C,12` = '$AadharNo',
		`SR_INC1,C,1` = '$Salary',
		`SR_INC2,C,1` = '$BPC',
		`PROFESSION,C,2` = '$SCode',
                `SR_INC3,C,1` = '$IOS',
		`SR_INC4,C,1` = '$IHP',
		`SR_INC5,C,1` = '$CG',
                `NOINC,C,1` = '$NI' ,
                `SR_INCED1,N,2,0` = '',
                `SR_INCED2,N,2,0` = '',
                `SR_INCED3,N,2,0` = '',
                `SR_INC1VAL,C,2` = '',
                `OLD_PAN1,C,10` = '$PAN1' ,
                `OLD_PAN2,C,10` = '$PAN2' ,
                `OLD_PAN3,C,10` = '$PAN3' ,
                `OLD_PAN4,C,10` = '$PAN4' ,
                 `UID_VER,C,1` = '$Uver' ,
                `UID_NAME,C,80` = '$ANAME' ,
                `UID_YOB,C,4` = '$AYOB' ,
                `UID_SEX,C,1` = '$GID' ,
                `STATUS,N,1` = '2' 

		WHERE `FORM_ID,C,18` = '$_SESSION[QC_Form_ID]';";
	
	if(mysqli_query($conn, $sql))
	{	
		
		$_SESSION['OtherStatus'] = '1';
                                 echo 
		' <script>
			
                    $(document).ready(function(){
		
			alert("Other info Submitted Successfully!");
			$("#Tab4").removeClass("select");
                                                $("#Tab3").removeClass("select");
                                                $("#Tab2").removeClass("select");
                                                $("#Tab1").removeClass("select");
                                                $("#Tab5").addClass("select");
                                                $("#Tab4I").slideUp();
                                                $("#Tab3I").slideUp();
                                                $("#Tab2I").slideUp();
                                                $("#Tab1I").slideUp();
                                                $("#Tab5I").slideDown();
                                                
                                                var a=$(".apptype").val();
                                                if(a=="CORRECTION")
                                                {
                                                document.getElementById("ra").style.display = "none";
                                                }         
						
		}); 

		</script>';
                       
                                    
	}
	else
	{
		echo mysqli_error($conn);
	}
        }
        else
        {
                          echo 
		' <script>
			
                    $(document).ready(function(){
		
			alert("First Submit Address Info!");
			
                                                $("#Tab4").removeClass("select");
                                                $("#Tab2").removeClass("select");
                                                $("#Tab1").removeClass("select");
                                                $("#Tab3").addClass("select");
                                                
                                                $("#Tab4I").slideUp();
                                                $("#Tab2I").slideUp();
                                                $("#Tab1I").slideUp();
                                                $("#Tab3I").slideDown();
                                                
                                               
		}); 

		</script>';
        }
}
/*End Other Info--*/


/*Start RA info--*/

if(isset($_POST['Rasubmit']))
{
                  
     
                $RTitle = $_POST['Rtitle'];
                $_SESSION['5-5-1'] = $RTitle;
    
                $ID='SR_NO,N,1';
                $TabelName='title';
                $ColumnName='TITLE,C,6';
                $Condition =$RTitle;
                
                $RTitle = select_id($ID, $TabelName, $ColumnName, $Condition);
                $_SESSION['Rep_Title']  = $RTitle;
                
               
                
                $_SESSION['RFlag'] = $Rflag;
                
                $RALast =$_POST['Rlast'];
                $_SESSION['5-5-2'] = $RALast;
                
                $RAFirst =$_POST['Rfirst'];
                $_SESSION['5-5-3'] = $RAFirst;
                
                $RAMiddle =$_POST['Rmiddle'];
                $_SESSION['5-5-4'] = $RAMiddle;
                
                $RFlat =$_POST['Rflat'];
                $_SESSION['5-5-5'] = $RFlat;
                
                $RBuilding =$_POST['Rbuilding'];
                $_SESSION['5-5-6'] = $RBuilding;
                
                $RRoad =$_POST['Rroad'];
                $_SESSION['5-5-7'] = $RRoad;
                
                $RArea =$_POST['Rarea'];
                $_SESSION['5-5-8'] = $RArea;
	
                $RTown =$_POST['Rtown'];
                $_SESSION['5-5-9'] = $RTown;
                
                $RState =$_POST['RState'];
                $_SESSION['5-5-10'] = $RState;
                
                $ID='ST_NO,N,2';
                $TabelName='state';
                $ColumnName='ST_NAME,C,22';
                $Condition =$RState;
                
                $RState1 = select_id($ID, $TabelName, $ColumnName, $Condition);
                $_SESSION['Rep_State']  = $RState1;
                
                $RPincode =$_POST['Rpincode'];
                $_SESSION['5-5-11'] = $RPincode;
                
                $Rflag = $_POST['Rdetail'];
                $_SESSION['5-5-12'] = $Rflag;
               
                
	$sql = " UPDATE `cust_qc_ra_info` SET 
	
                `REP_TITLE,C,1` = '$RTitle',
		`REP_LAST,C,75` = '$RALast', 
		`REP_FIRST,C,25` = '$RAFirst', 
		`REP_MIDDLE,C,25` = '$RAMiddle',
		`REP_ADDR1,C,25` = '$RFlat',
		`REP_ADDR2,C,25` = '$RBuilding',
                `REP_ADDR3,C,25` = '$RRoad', 
		`REP_ADDR4,C,25` = '$RArea', 
		`REP_DIST,C,25` = '$RTown',
		`REP_STATE,C,2` = '$RState1',
		`REP_PIN,C,6` = '$RPincode',
                 `REP_FLAG,C,1`='$Rflag',
		`STATUS,N,1` = '2',
                
                `flag2` = '',
                `flag3` = ''
                
		WHERE `FORM_ID,C,18` = '$_SESSION[QC_Form_ID]';";
	
	if(mysqli_query($conn, $sql))
	{	
           
		$_SESSION['RAStatus'] = '1';
		
		echo 
		'<script>
			
		$(document).ready(function(){
		
			alert("Representative info Submitted Successfully!");

                            $("#Tab5").removeClass("select");
                            $("#Tab4").removeClass("select");
                            $("#Tab3").removeClass("select");
                            $("#Tab2").removeClass("select");
                            $("#Tab1").removeClass("select");
                            $("#Tab6").addClass("select");
                            $("#Tab7").removeClass("select");
                            $("#Tab1I").slideUp();
                            $("#Tab2I").slideUp();
                            $("#Tab3I").slideUp();
                            $("#Tab4I").slideUp();
                            $("#Tab5I").slideUp();
                            $("#Tab6I").slideDown();
                            $("#Tab7I").slideUp();
						
                    }); 

		</script>';
	}
	else
	{
		echo mysqli_error($conn);
	}
	
}
/*End Other--*/


/*Start verification Details--*/

if(isset($_POST['VerificationSubmit']))
{
	if(!empty($_SESSION['OtherStatus']))
        {
                $Photo=$_POST['Photo'];    
               $_SESSION['5-6-1'] = $Photo;
            
                $Sign=$_POST['Sign'];    
               $_SESSION['5-6-2'] = $Sign;
                 
                $POI=$_POST['POI'];    
                $_SESSION['5-6-3'] = $POI;
                
                $ID='IDENT_DOC_ID,N,2';
                $TabelName='ident_doc';
                $ColumnName='IDENT_DOC_NAME,C,80';
                $Condition =$POI;
                
                $POI= select_id($ID, $TabelName, $ColumnName, $Condition);
                $_SESSION['Iden_Proof'] = $POI;
             
                $POA=$_POST['POA'];    
                $_SESSION['5-6-4'] = $POA;
               
                $ID='RES_DOC_ID,N,2';
                $TabelName='res_doc';
                $ColumnName='RES_DOC_NAME,C,80';
                $Condition =$POA;
                
                $POA= select_id($ID, $TabelName, $ColumnName, $Condition);
                $_SESSION['Res_Proof'] = $POA;
               
               
                $Pdob = $_POST['Pdob'];
               $_SESSION['5-6-5'] = $Pdob;
               
                $ID='DOB_DOC_ID,N,2';
                $TabelName='dob_doc';
                $ColumnName='DOB_DOC,C,2';
                $Condition =$Pdob;
                
               $Pdob= select_id($ID, $TabelName, $ColumnName, $Condition);
               
               
                $NOD= $_POST['NOD'];
               $_SESSION['5-6-6'] = $NOD;
                
                $Aname = $_POST['Aname'];
               $_SESSION['5-6-7'] = $Aname;
                
                $Capacity=$_POST['Capacity'];
               $_SESSION['5-6-8'] = $Capacity;
               
                $ID='CAP_NO,N,1';
                $TabelName='capacity';
                $ColumnName='CAP_NAME,C,23';
                $Condition =$Capacity;
               
               $Capacity=  select_id($ID, $TabelName, $ColumnName, $Condition);
               $_SESSION['Capacity'] = $Capacity;
                
               $Place=$_POST['Place'];
               $_SESSION['5-6-9'] = $Place;
                
               $dateofbirth=$_POST['Vdate'];
               $_SESSION['5-6-10'] = $dateofbirth;
               
               $dateofbirth1 = explode('/', $dateofbirth);

               $dateofbirth1 = $dateofbirth1[2].'/'.$dateofbirth1[1].'/'.$dateofbirth1[0];

               $dateofbirth1 = date("Ymd", strtotime($dateofbirth1));
               
               $_SESSION['DOA'] = $dateofbirth1;
                        
                            
                            $sql = " UPDATE `cust_qc_verification_info` SET 
	
		`PHOTO_FLAG,C,1` = '$Photo', 
		
		`SIG_FLAG,C,1` = '$Sign', 
		
		`IDENT_DOC,C,2` = '$POI',
		
		`RES_DOC,C,2` = '$POA',
		
		`DOB_DOC,C,2` = '$Pdob',
		
		`NoOfDoc` = '$NOD',
	
		`VER_NAME,C,75` = '$Aname',
                    
		`VER_CAP,C,2` = '$Capacity',
                    		
		`VER_PLACE,C,30` = '$Place',
                                   
		`DOA,D` = '$dateofbirth',
				
		`STATUS,N,1` = '2',
		`flag1` = '',
		`flag2` = '',
                                `flag3` = ''
		
		
		WHERE `FORM_ID,C,18` = '$_SESSION[QC_Form_ID]';";
	
                        if(mysqli_query($conn, $sql))
                        {	
	
		$_SESSION['VerificationStatus'] = '1';
		
		echo 
		'<script>
			
		$(document).ready(function(){
		
			alert("Verification Details Info Submitted Successfully!");
			//$("#Tab6").removeClass("select");
			$("#Tab5").removeClass("select");
                        $("#Tab4").removeClass("select");
                        $("#Tab3").removeClass("select");
                        $("#Tab2").removeClass("select");
                        $("#Tab1").removeClass("select");
			//$("#Tab7").addClass("select");
                        $("#Tab6").addClass("select");
			$("#Tab1I").slideUp();
			$("#Tab2I").slideUp();
                        $("#Tab3I").slideUp();
                        $("#Tab4I").slideUp();
                        $("#Tab5I").slideUp();
                        //$("#Tab6I").slideUp();
                        $("#Tab6I").slideDown();
			//$("#Tab7I").slideDown();
                                                
                                                var a=$(".apptype").val();
                                                if(a=="CORRECTION")
                                                {
                                                document.getElementById("ra").style.display = "none";
                                                }  
						
		}); 

		</script>';
                        }
                        else
                        {
                            echo mysqli_error($conn);
                        }
        }
        else
        {
                      echo 
		' <script>
			
                    $(document).ready(function(){
		
			alert("First Submit Other Info!");
			
                                                $("#Tab3").removeClass("select");
                                                $("#Tab2").removeClass("select");
                                                $("#Tab1").removeClass("select");
                                                $("#Tab6").removeClass("select");
                                                $("#Tab5").removeClass("select");
                                                $("#Tab4").addClass("select");
                                                
                                                $("#Tab3I").slideUp();
                                                $("#Tab2I").slideUp();
                                                $("#Tab1I").slideUp();
                                                $("#Tab6I").slideUp();
                                                $("#Tab5I").slideUp();
                                                $("#Tab4I").slideDown();
                                                
                                               
		}); 

		</script>';
        }
}
/*End verification Details--*/

/*Final Submit for Level 1--*/

if(isset($_POST['Level1_Final']))
{
    if(!empty($_SESSION['AppStatus']) && !empty($_SESSION['PersonalStatus'])
       && !empty($_SESSION['AddressStatus']) && !empty($_SESSION['OtherStatus'])
       && !empty($_SESSION['RAStatus']) && !empty($_SESSION['VerificationStatus']))
    {
        
        $Date = date('d-M-Y');
        $Time = date('H:i:s');
        
        $sql = 'UPDATE `appl_status` SET `QC_E_TIME,C,8` = "'.$Time.'", `FINAL_STATUS,N,1` = "10"
                WHERE `FORM_ID,C,18` = "'.$_SESSION['QC_Form_ID'].'";';
        
        if(mysqli_query($conn, $sql))
        {
        
            
            // appl info
            $V1 = $_SESSION['5-1-2'];
            $V2 = $_SESSION['5-1-3'];
            $V3 = $_SESSION['5-1-4'];
            $V4 = $_SESSION['DOA'];
            $V5 = $_SESSION['5-1-5'];
            $V6 = $_SESSION['5-1-7'];
            $V7 = $_SESSION['5-1-8'];
            
            
            //per1
            $V8 = $_SESSION['Applicant_Title'];
            $V9 = $_SESSION['5-2-2'];
            $V10 = $_SESSION['5-2-4'];
            $V11 = $_SESSION['5-2-3'];
            $V12 = $_SESSION['5-2-5'];
            $V13 = $_SESSION['5-2-6'];
            $V14 = $_SESSION['5-2-7'];
            $V15 = $_SESSION['5-2-8'];
            $V16 = $_SESSION['5-2-9'];
            $V17 = $_SESSION['5-2-10'];
            
            
            
            $V18 = $_SESSION['DOB'];
            $V19 = $_SESSION['5-2-13'];
            $V20 = $_SESSION['5-2-14'];
            $V21 = $_SESSION['5-2-15'];
            $V22 = $_SESSION['5-2-11']; //gender
            $V23 = $_SESSION['Cat']; //category
            $V24 = $_SESSION['SOA']; //app status
            $V25 = $_SESSION['citzen']; // citizen
            $V26 = $_SESSION['5-4-11']; // profession
           
            
            //add1
            
            $V27 = $_SESSION['Addr_Flag'];
            $V28 = $_SESSION['5-3-2'];
            $V29 = $_SESSION['5-3-3'];
            $V30 = $_SESSION['5-3-4'];
            $V31 = $_SESSION['5-3-5'];
            $V32 = $_SESSION['5-3-6'];
            $V33 = $_SESSION['Res_State'];
            $V34 = $_SESSION['5-3-8'];
            
            $V35 = $_SESSION['5-3-10'];
            $V36 = $_SESSION['5-3-11'];
            $V37 = $_SESSION['5-3-12'];
            $V38 = $_SESSION['5-3-13'];
            $V39 = $_SESSION['5-3-14'];
            $V40 = $_SESSION['5-3-15'];
            $V41 = $_SESSION['Off_State'];
            $V42 = $_SESSION['5-3-17'];
            
            $V43 = $_SESSION['5-3-22'];
            $V44 = $_SESSION['5-3-19'];
            $V45 = $_SESSION['5-3-20'];
            $V46 = $_SESSION['5-3-21'];
            $V47 = $_SESSION['5-4-6'];
            $V48 = $_SESSION['5-4-10'];
            $V49 = $_SESSION['5-4-9'];
            $V50 = ''; // income value 1
            
           
            //other
           
            $V = $_SESSION['5-4-3'];
            $V = $_SESSION['5-4-4'];
 
            $V = $_SESSION['5-4-13'];
            $V = $_SESSION['5-4-14'];
            $V = $_SESSION['5-4-15'];
            $V = $_SESSION['5-4-16'];
            
            
            //ra
            $V51 = $_SESSION['Rep_Title'];
            $V52 = $_SESSION['5-5-2'];
            $V53 = $_SESSION['5-5-4'];
            $V54 = $_SESSION['5-5-3'];
            
            $V55 = $_SESSION['5-5-5'];
            $V56 = $_SESSION['5-5-6'];
            $V57 = $_SESSION['5-5-7'];
            $V58 = $_SESSION['5-5-8'];
            $V59 = $_SESSION['5-5-9'];
            $V60 = $_SESSION['Rep_State'];
            $V61 = $_SESSION['5-5-11'];
            $V62 = $_SESSION['Res_Proof'];
            $V63 = $_SESSION['Iden_Proof'];
            $V64 = $_SESSION['PCC_Code'];
            $V65 = $_SESSION['5-4-2']; // regn no
            $V66 = ''; // nid bus
            $V67 = $_SESSION['DOB']; // dob as nid doc
            $V68 = '0';
            $V69 = '0';
            $V70 = $_SESSION['PDC_Code'];
            $V71 = $_SESSION['Agency_Code'];
            $V72 = '2'; // desp mode
            $V73 = ''; // src inc ed1
            $V74 = ''; // src inc ed2
            $V75 = $_SESSION['DOE'];
            $V76 = $_SESSION['DOR'];
            $V77 = $_SESSION['5-1-6']; //AO Type
            $V78 = ''; // obj string
            $V79 = ''; // ag obj fg
            $V80 = $_SESSION['RFlag'];
            $V81 = 'A'; // val flag
            
            $V82 = 'KOSHY'; // data user
            $V83 = ''; // edit user
            $V84 = ''; // pdc file tag
            $V85 = ''; // ppc file tag
            $V86 = $V71.$V2; // inward char
            
            $V87 = ''; // pdc val flag
            $V88 = ''; // obj date
            $V89 = ''; // desp id
            $V90 = 'N'; // tat flag
            $V91 = ''; // doc img
            
            $V92 = $_SESSION['Batch_No'];
            $V93 = $_SESSION['5-6-2']; // sign
            $V94 = ''; // lti flag
            $V95 = ''; // oth src
            $V96 = $_SESSION['5-4-8'];
            $V97 = $_SESSION['5-4-7'];
            $V98 = ''; // src inc ed3
            $V99 = ''; // edit gen fl
            $V100 = $_SESSION['5-1-9']; // old pan no
            
            $V101 = $_SESSION['Batch_Type'];
            $V102 = $_SESSION['5-4-12']; // no income
            
            $V103 = $_SESSION['Res_Country']; // res country
            $V104 = ''; // res zip
            $V105 = $_SESSION['Off_Country']; // off country
            $V106 = ''; // off zip
            
            $V107 = $_SESSION['5-4-5']; //uid no
            $V108 = '0'; //uid verification
            
            $V109 = $_SESSION['Cont_Cit']; // cont cit
            $V110 = $_SESSION['Cont_ISD']; // cont isd
            
            $V111 = ''; // LLP status
            $V112 = ''; // KYC Flag
            
            $V113 = $_SESSION['5-6-7'];
            $V114 = $_SESSION['Capacity'];
            $V115 = $_SESSION['5-6-9'];
            
            $V116 = $_SESSION['Form_Type']; //form type
            
            //$V117 = $_SESSION['UID_Name'];
            //$V118 = $_SESSION['UID_YOB'];
            //$V119 = $_SESSION['UID_SEX'];
            
            $V117 = '';
            $V118 = '';
            $V119 = '';
            
            
            //verification
            $V = $_SESSION['5-6-1']; // photo flag
            $V = $_SESSION['5-6-5']; // dob proof
            $V = $_SESSION['5-6-6']; // no of doc
            
            
            $db = dbase_open('/home/suraj/wpro/PanPro1/trunk/d.output/APPLDATA.DBF', 2);

            if ($db) {
              dbase_add_record($db, array(
                  $V1, $V2, $V3, $V4, $V5, $V6, $V7, $V8, $V9, $V10, $V11, $V12, $V13, $V14, $V15, $V16, $V17, $V18, $V19, $V20, $V21, $V22, 
                  $V23, $V24, $V25, $V26, $V27, $V28, $V29, $V30, $V31, $V32, $V33, $V34, $V35, $V36, $V37, $V38, $V39, $V40, $V41, $V42, $V43, $V44,
                  $V45, $V46, $V47, $V48, $V49, $V50, $V51, $V52, $V53, $V54, $V55, $V56, $V57, $V58, $V59, $V60, $V61, $V62, $V63, $V64, $V65, $V66, 
                  $V67, $V68, $V69, $V70, $V71, $V72, $V73, $V74, $V75, $V76, $V77, $V78, $V79, $V80, $V81, $V82, $V83, $V84, $V85, $V86, $V87, $V88, $V89,
                  $V90, $V91, $V92, $V93, $V94, $V95, $V96, $V97, $V98, $V99, $V100, $V101, $V102, $V103, $V104, $V105, $V106, $V107, $V108, $V109, $V110, 
                  $V111, $V112, $V113, $V114, $V115, $V116, $V117, $V118, $V119
                  ));   
              dbase_close($db);
            
            }
            
            //empty the qc sessions
            
             //app1
            $_SESSION['5-1-1'] = '';
            $_SESSION['5-1-2'] = '';
            $_SESSION['5-1-3'] = '';
            $_SESSION['5-1-4'] = '';
            $_SESSION['5-1-5'] = '';
            $_SESSION['5-1-6'] = '';
            $_SESSION['5-1-7'] = '';
            $_SESSION['5-1-8'] = '';
            $_SESSION['5-1-9'] = '';
            
            //per1
            $_SESSION['5-2-1'] = '';
            $_SESSION['5-2-2'] = '';
            $_SESSION['5-2-3'] = '';
            $_SESSION['5-2-4'] = '';
            $_SESSION['5-2-5'] = '';
            $_SESSION['5-2-6'] = '';
            $_SESSION['5-2-7'] = '';
            $_SESSION['5-2-8'] = '';
            $_SESSION['5-2-9'] = '';
            $_SESSION['5-2-10'] = '';
            $_SESSION['5-2-11'] = '';
            $_SESSION['5-2-12'] = '';
            $_SESSION['5-2-13'] = '';
            $_SESSION['5-2-14'] = '';
            $_SESSION['5-2-15'] = '';
            $_SESSION['5-2-16'] = '';
            $_SESSION['5-2-17'] = '';
            
            //add1
            
            $_SESSION['5-3-1'] = '';
            $_SESSION['5-3-2'] = '';
            $_SESSION['5-3-3'] = '';
            $_SESSION['5-3-4'] = '';
            $_SESSION['5-3-5'] = '';
            $_SESSION['5-3-6'] = '';
            $_SESSION['5-3-7'] = '';
            $_SESSION['5-3-8'] = '';
            
            $_SESSION['5-3-9'] = '';
            $_SESSION['5-3-10'] = '';
            $_SESSION['5-3-11'] = '';
            $_SESSION['5-3-12'] = '';
            $_SESSION['5-3-13'] = '';
            $_SESSION['5-3-14'] = '';
            $_SESSION['5-3-15'] = '';
            $_SESSION['5-3-16'] = '';
            $_SESSION['5-3-17'] = '';
            
            $_SESSION['5-3-18'] = '';
            $_SESSION['5-3-19'] = '';
            $_SESSION['5-3-20'] = '';
            $_SESSION['5-3-21'] = '';
            $_SESSION['5-3-22'] = '';
            
            //other
            
            $_SESSION['5-4-1'] = '';
            $_SESSION['5-4-2'] = '';
            $_SESSION['5-4-3'] = '';
            $_SESSION['5-4-4'] = '';
            $_SESSION['5-4-5'] = '';
            
            $_SESSION['5-4-6'] = '';
            $_SESSION['5-4-10'] = '';
            $_SESSION['5-4-11'] = '';
            $_SESSION['5-4-9'] = '';
            $_SESSION['5-4-8'] = '';
            $_SESSION['5-4-7'] = '';
            $_SESSION['5-4-12'] = '';
            
            $_SESSION['5-4-13'] = '';
            $_SESSION['5-4-14'] = '';
            $_SESSION['5-4-15'] = '';
            $_SESSION['5-4-16'] = '';
            
            //ra
            $_SESSION['5-5-1'] = '';
            $_SESSION['5-5-2'] = '';
            $_SESSION['5-5-3'] = '';
            $_SESSION['5-5-4'] = '';
            $_SESSION['5-5-5'] = '';
            $_SESSION['5-5-6'] = '';
            $_SESSION['5-5-7'] = '';
            $_SESSION['5-5-8'] = '';
            $_SESSION['5-5-9'] = '';
            $_SESSION['5-5-10'] = '';
            $_SESSION['5-5-11'] = '';
            
            //verification
            $_SESSION['5-6-1'] = '';
            $_SESSION['5-6-2'] = '';
            $_SESSION['5-6-3'] = '';
            $_SESSION['5-6-4'] = '';
            $_SESSION['5-6-5'] = '';
            $_SESSION['5-6-6'] = '';
            $_SESSION['5-6-7'] = '';
            $_SESSION['5-6-8'] = '';
            $_SESSION['5-6-9'] = '';
            $_SESSION['5-6-10'] = '';
            
            $_SESSION['AppStatus']= '';
            $_SESSION['PersonalStatus']= '';
            $_SESSION['AddressStatus']= '';
            $_SESSION['OtherStatus']= '';
            $_SESSION['RAStatus']= '';
            $_SESSION['VerificationStatus']= '';
            
            echo '<script>';
            echo 'alert("QC Data Entry Completed Sucessfully!");';
            echo 'window.close();';
            echo '</script>';
        }
        else
        {
            echo mysqli_error($conn);
        }
        
    }
    else 
    {
        
        echo '<script>';
        echo 'alert("All Forms are Mandatory. Please fill up all Forms.");';
        echo '</script>';
        
    }
    
}
?>