
<?php
include 'select_id.php';
include 'select.inc.php';

$_SESSION['Batch_ID'] ='BF01';

//App_Form_Info
if(isset($_POST['app_submit']))
    {
    
        
                $Apply_Type=$_POST['apptype'];    
                $_SESSION['2-1-1'] = $Apply_Type;
                 
                 $ID='APPLN_ID,N,1';
                 $TabelName='application_type';
                 $ColumnName='APPLN_NAME,C,10';
                 $Condition =$Apply_Type;
                 
                $APID=select_id($ID, $TabelName, $ColumnName, $Condition);
            
                 $App_No=$_POST['app_no'];    
                 $_SESSION['2-1-2'] = $App_No;
                 
                 $Inword_Type=strtoupper($_POST['inword_no']);
                 $_SESSION['2-1-3'] = $Inword_Type;
                 
                 $Coupan_No=$_POST['coupon_no'];    
                 $_SESSION['2-1-4'] = $Coupan_No;
               
                 
                $Areacode = strtoupper($_POST['ac']);
                $_SESSION['2-1-5'] = $Areacode;

                $Aotype = strtoupper($_POST['ao_type']);
                $_SESSION['2-1-6'] = $Aotype;

                $Range_code = strtoupper($_POST['range_code']);
                $_SESSION['2-1-7'] = $Range_code;

                $Ao_No =strtoupper($_POST['ao_no']);
                $_SESSION['2-1-8'] = $Ao_No;
                
                $Pan_No = strtoupper($_POST['pan_no']);
                $_SESSION['2-1-9'] = $Pan_No;
                
                
                $sql = "UPDATE `cust_appl_info_l1` SET 
			
				
                                                `APPLN_TYPE,N,1` = '$APID',
			`APPLN_NO,C,10` = '$App_No',
			`INWARD_NO,N,10,0` = '$Inword_Type',
			`COUPON_NO,C,10` = '$Coupan_No',
                                                `AREA_CODE,C,3` = '$Areacode', 
			`AO_TYPE,C,2` = '$Aotype',			
			`RANGE,C,3` = '$Range_code',
			`AO_CODE,C,2` = '$Ao_No',
			`OLD_PAN,C,10` = '$Pan_No',
			`STATUS,N,1` = '1',
			
			`FLAG1` = '',
                                                `FLAG2` = '',
                                                `FLAG3` = ''    
						
			WHERE `FORM_ID,C,18` = '$_SESSION[Batch_ID]';";
	
			
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
              
                
               $Apply_Title=$_POST['title'];    
               $_SESSION['2-2-1'] = $Apply_Title;
               
                $ID='SR_NO,N,1';
                $TabelName='title';
                $ColumnName='TITLE,C,6';
                $Condition =$Apply_Title;
                
                $APT= select_id($ID, $TabelName, $ColumnName, $Condition);
                
            
                $Lname=strtoupper($_POST['Lname']);    
               $_SESSION['2-2-2'] = $Lname;
                 
                $Fname=strtoupper($_POST['Fname']);    
                $_SESSION['2-2-3'] = $Fname;
                 
                $Mname=strtoupper($_POST['Mname']);    
               $_SESSION['2-2-4'] = $Mname;
               
                $Abb = strtoupper($_POST['Abb']);
               $_SESSION['2-2-5'] = $Abb;
               
               $Other_Name = strtoupper($_POST['other']);
               $_SESSION['2-2-6'] = $Other_Name;
                
                $Otitle = $_POST['otitle'];
                $_SESSION['2-2-7'] = $Otitle;
               
                $ID='SR_NO,N,1';
                $TabelName='title';
                $ColumnName='TITLE,C,6';
                $Condition =$Otitle;
                
                $OTitle= select_id($ID, $TabelName, $ColumnName, $Condition);
                
                $OLname=strtoupper($_POST['OLname']);
                $_SESSION['2-2-8'] = $OLname;
                
                $OFname=strtoupper($_POST['OFname']);
                $_SESSION['2-2-9'] = $OFname;
                
                $OMname=strtoupper($_POST['OMname']);
                $_SESSION['2-2-10'] = $OMname;
                
              /* if($_POST['Gender'] == 'MALE')
               {
                        $Gender="M";
               }else{
                        $Gender="F";
               }*/
               
                $Gender1=$_POST['Gender'];
                $_SESSION['2-2-11'] = $Gender1;
                
               
                $ID='SEX_ID,C,1';
                $TabelName='sex';
                $ColumnName='SEX_NAME,C,6';
                $Condition =$Gender1;
                
               $GID = select_id($ID, $TabelName, $ColumnName, $Condition);
               
               $date = $_POST['date'];
               $_SESSION['2-2-12'] = $date;
                
                $FLname = strtoupper($_POST['FLname']);
               $_SESSION['2-2-13'] = $FLname;
                
                $FFname = strtoupper($_POST['FFname']);
                $_SESSION['2-2-14'] = $FFname;
               
                $FMname = strtoupper($_POST['FMname']);
                $_SESSION['2-2-15'] = $FMname;
                
                $PM = $_POST['PM'];
                $_SESSION['2-2-16'] = $PM;
                
                /*if(isset($_POST['PM']))
                {
                        $PM="P";
                }else{
                        $PM="";
                }*/    
                
                
                $SM = $_POST['SM'];
                $_SESSION['2-2-17'] = $SM;
                
                /*if(isset($_POST['SM']))
                {
                        $PM="S";
                }else{
                        $PM="";
                }*/
                
                
               
               $sql = "UPDATE `cust_personal_info_l1` SET 
			
				
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
			`STATUS,N,1` = '1',
			`flag1` = '0',
                                                `flag2` = '0',
                                                `flag3` = '0',
                                                `PM` = '$PM',
                                                `SM` = '$SM'
						
			WHERE `FORM_ID,C,18` = '$_SESSION[Batch_ID]';";
	
			
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
//End Personal_Form_Info1

/*Start Address--*/

if(isset($_POST['Contactsubmit']))
{
        
               
                $address_com=$_POST['addcom'];
                $_SESSION['2-3-1']=$address_com;
                
                $ID='ADDR_ID,C,1';
                $TabelName='addr_flag';
                $ColumnName='ADDR_NAME,C,9';
                $Condition =$address_com;
                
                $AC= select_id($ID, $TabelName, $ColumnName, $Condition);
                
                
                $RNameofOffice=$_POST['RAdd'];
                $_SESSION['2-3-2']=$RNameofOffice;
                
                $RNPremises =$_POST['RNPremises'];
                $_SESSION['2-3-3'] = $RNPremises;
                
                $RRSL =$_POST['RRSL'];
                $_SESSION['2-3-4'] = $RRSL;
                
                $RALT =$_POST['RALT'];
                $_SESSION['2-3-5'] = $RALT;
                
                $RTCD =$_POST['RTCD'];
                $_SESSION['2-3-6'] = $RTCD;
                
                $RState =$_POST['RState'];
                $_SESSION['2-3-7'] = $RState;
                
                $ID='ST_NO,N,2';
                $TabelName='state';
                $ColumnName='ST_NAME,C,22';
                $Condition =$RState;
                
                $RState=  select_id($ID, $TabelName, $ColumnName, $Condition);
                
                $RPZcode =$_POST['RPZcode'];
                $_SESSION['2-3-8'] = $RPZcode;
                
                $RCountry =$_POST['RCountry'];
                $_SESSION['2-3-9'] = $RCountry;
                
                $ID='CNT_NO,N,3';
                $TabelName='country';
                $ColumnName='CNT_NAME,C,45';
                $Condition =$RCountry;
                
               $RCounrty=  select_id($ID, $TabelName, $ColumnName, $Condition);
                
                
                
                //office addresss 
                
                $ONameofoffice =$_POST['ONameofoffice'];
                $_SESSION['2-3-10'] = $ONameofoffice;
                
                $OFRDB =$_POST['OFRDB'];
                $_SESSION['2-3-11'] = $OFRDB;
                
                $OPremises =$_POST['OPremises'];
                $_SESSION['2-3-12'] = $OPremises;
                
                $ORSLP =$_POST['ORSLP'];
                $_SESSION['2-3-13'] = $ORSLP;
                
                $OALTS =$_POST['OALTS'];
                $_SESSION['2-3-14'] = $OALTS;
                
                $OTCD =$_POST['OTCD'];
                $_SESSION['2-3-15'] = $OTCD;
                
                $OState =$_POST['OState'];
                $_SESSION['2-3-16'] = $OState;
                
                $ID='ST_NO,N,2';
                $TabelName='state';
                $ColumnName='ST_NAME,C,22';
                $Condition =$OState;
                
                $OState =  select_id($ID, $TabelName, $ColumnName, $Condition);
                
                $OPZcode =$_POST['OPZcode'];
                $_SESSION['2-3-17'] = $OPZcode;
                
                $OCountry =$_POST['OCountry'];
                $_SESSION['2-3-18'] = $OCountry;
                
                $ID='CNT_NO,N,3';
                $TabelName='country';
                $ColumnName='CNT_NAME,C,45';
                $Condition =$OCountry;
                
               $OCountry =  select_id($ID, $TabelName, $ColumnName, $Condition);
                
                $Ccode =$_POST['Ccode'];
                $_SESSION['2-3-19'] = $Ccode;
                
                
                $OAScode =$_POST['OAScode'];
                $_SESSION['2-3-20'] = $OAScode;
                
                $TelNo =$_POST['TelNo'];
                $_SESSION['2-3-21'] = $TelNo;
                
                $Email =$_POST['Email'];
                $_SESSION['2-3-22'] = $Email; 
                
                
                
	$sql = " UPDATE `cust_address_info_l1` SET 
	
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
				
		`TEL_NO,C,13` = '$TelNo',
		


		`TEL_STD,C,7` = '$OAScode',
		
		`TEL_NO,C,13` = '$TelNo',
		

		`E_MAIL_ID,C,41` = '$Email',
		
		`STATUS,N,1` = '1',
		
		`flag1` = '',
		
		`flag2` = '' ,
		
		`flag3` = '' ,
		
		`flag4` = '' ,
		
		`flag5` = '' 
				
		where `FORM_ID,C,18` = '$_SESSION[Batch_ID]';";
		
		
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
/*End Address--*/

/*Start Other Info--*/

if(isset($_POST['OtherSubmit']))
{	
       
                $SOA =$_POST['SOA'];
                $_SESSION['2-4-1'] = $SOA;
                
                $ID='STA_CODE,C,1';
                $TabelName='status';
                $ColumnName='STATUS,C,30';
                $Condition =$SOA;
                
                $SOA= select_id($ID, $TabelName, $ColumnName, $Condition);
                
                
                $RegNo =$_POST['RegNo'];
                $_SESSION['2-4-2'] = $RegNo;
                
                $CountryC =$_POST['CountryC'];
                $_SESSION['2-4-3'] = $CountryC;
                
                $ID='CNT_NO,N,3';
                $TabelName='country';
                $ColumnName='CNT_NAME,C,45';
                $Condition =$CountryC;
                
                $CountryC =select_id($ID, $TabelName, $ColumnName, $Condition);
                
                
                $ISD =$_POST['ISD'];
                $_SESSION['2-4-4'] = $ISD;
                
                $AadharNo =$_POST['AadharNo'];
                $_SESSION['2-4-5'] = $AadharNo;
                
                if(isset($_POST['Salary']))
                {
                        $Salary="Y";
                }else{
                        $Salary="N";
                    
                }
                
                $_SESSION['2-4-6'] = $Salary;
                
                if(isset($_POST['CG']))
                {
                        $CG="Y";
                }else{
                        $CG="N";
                }    
                $_SESSION['2-4-7'] = $CG;
                
                if(isset($_POST['IHP']))
                {
                        $IHP="Y";
                        
                }else{
                        $IHP="N";
                }   
                $_SESSION['2-4-8'] = $IHP;
                
                if(isset($_POST['IOS']))
                {
                        $IOS="Y";
                }else{
                        $IOS="N";
                }
                $_SESSION['2-4-9'] = $IOS;
                
                if(isset($_POST['BPC']))
                {
                    $BPC = 'Y';
                }
                else
                {
                    $BPC = 'N';
                }
                
                $_SESSION['2-4-10'] = $BPC;
                
                $SCode=$_POST['SCode'];
                $_SESSION['2-4-11'] = $SCode;
                
                if(isset($_POST['NI']))
                {
                        $NI="Y";
                }else{
                        $NI="N";
                }
                
                $_SESSION['2-4-12'] = $NI;
                
                $PAN1=$_POST['PAN1'];
                $_SESSION['2-4-13'] = $PAN1;
                
                $PAN2=$_POST['PAN2'];
                $_SESSION['2-4-14'] = $PAN2;
                
                $PAN3=$_POST['PAN3'];
                $_SESSION['2-4-15'] = $PAN3;
                
                $PAN4=$_POST['PAN4'];
                $_SESSION['2-4-16'] = $PAN4;
                
	$sql = " UPDATE `cust_other_info` SET 
	
		
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
                                `STATUS,N,1` = '1' ,
                                `flag1` = '' ,
                                `flag2` = '' ,
                                `flag3` = '' 

		WHERE `FORM_ID,C,18` = '$_SESSION[Batch_ID]';";
	
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
/*End Other Info--*/



/*Start RA info--*/

if(isset($_POST['Rasubmit']))
{
                  
      
                $RTitle = $_POST['Rtitle'];
                $_SESSION['2-5-1'] = $RTitle;
    
                $ID='SR_NO,N,1';
                $TabelName='title';
                $ColumnName='TITLE,C,6';
                $Condition =$RTitle;
                
                $RTitle= select_id($ID, $TabelName, $ColumnName, $Condition);
                
                $RALast =$_POST['Rlast'];
                $_SESSION['2-5-2'] = $RALast;
                
                $RAFirst =$_POST['Rfirst'];
                $_SESSION['2-5-3'] = $RAFirst;
                
                $RAMiddle =$_POST['Rmiddle'];
                $_SESSION['2-5-4'] = $RAMiddle;
                
                $RFlat =$_POST['Rflat'];
                $_SESSION['2-5-5'] = $RFlat;
                
                $RBuilding =$_POST['Rbuilding'];
                $_SESSION['2-5-6'] = $RBuilding;
                
                $RRoad =$_POST['Rroad'];
                $_SESSION['2-5-7'] = $RRoad;
                
                $RArea =$_POST['Rarea'];
                $_SESSION['2-5-8'] = $RArea;
	
                $RTown =$_POST['Rtown'];
                $_SESSION['2-5-9'] = $RTown;
                
                $RState =$_POST['RState'];
                $_SESSION['2-5-10'] = $RState;
                
                $ID='ST_NO,N,2';
                $TabelName='state';
                $ColumnName='ST_NAME,C,22';
                $Condition =$RState;
                
                $RState1= select_id($ID, $TabelName, $ColumnName, $Condition);
                
                $RPincode =$_POST['Rpincode'];
                $_SESSION['2-5-11'] = $RPincode;
                
               
                
	$sql = " UPDATE `cust_ra_info` SET 
	
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
		`REP_PIN,C,6` = ' $RPincode',
		`STATUS,N,1` = '1',
                `flag1` = '',
                `flag2` = '',
                `flag3` = ''
                
		WHERE `FORM_ID,C,18` = '$_SESSION[Batch_ID]';";
	
	if(mysqli_query($conn, $sql))
	{	
           
		$_SESSION['RepresntativeStatus'] = '1';
		
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
/*End Emergency--*/

/*Start verification Details--*/

if(isset($_POST['VerificationSubmit']))
{
	
                $Photo=$_POST['Photo'];    
               $_SESSION['2-6-1'] = $Photo;
            
                $Sign=$_POST['Sign'];    
               $_SESSION['2-6-2'] = $Sign;
                 
                $POI=$_POST['POI'];    
                $_SESSION['2-6-3'] = $POI;
                
                $ID='IDENT_DOC_ID,N,2';
                $TabelName='ident_doc';
                $ColumnName='IDENT_DOC_NAME,C,80';
                $Condition =$POI;
                
                $POI= select_id($ID, $TabelName, $ColumnName, $Condition);
             
                $POA=$_POST['POA'];    
                $_SESSION['2-6-4'] = $POA;
               
                $ID='RES_DOC_ID,N,2';
                $TabelName='res_doc';
                $ColumnName='RES_DOC_NAME,C,80';
                $Condition =$POA;
                
                $POA= select_id($ID, $TabelName, $ColumnName, $Condition);
               
               
                $Pdob = $_POST['Pdob'];
               $_SESSION['2-6-5'] = $Pdob;
               
                $ID='DOB_DOC_ID,N,2';
                $TabelName='dob_doc';
                $ColumnName='DOB_DOC,C,2';
                $Condition =$Pdob;
                
               $Pdob= select_id($ID, $TabelName, $ColumnName, $Condition);
               
               
                $NOD= $_POST['NOD'];
               $_SESSION['2-6-6'] = $NOD;
                
                $Aname = $_POST['Aname'];
               $_SESSION['2-6-7'] = $Aname;
                
                $Capacity=$_POST['Capacity'];
               $_SESSION['2-6-8'] = $Capacity;
               
                $ID='CAP_NO,N,1';
                $TabelName='capacity';
                $ColumnName='CAP_NAME,C,23';
                $Condition =$Capacity;
               
               $Capacity=  select_id($ID, $TabelName, $ColumnName, $Condition);
                
                $Place=$_POST['Place'];
               $_SESSION['2-6-9'] = $Place;
                
                $dateofbirth=$_POST['Vdate'];
               $_SESSION['2-6-10'] = $dateofbirth;
                        
                            
                            $sql = " UPDATE `cust_verification_info` SET 
	
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
				
		`STATUS,N,1` = '1',
		`flag1` = '',
		`flag2` = '',
                                `flag3` = ''
		
		
		WHERE `FORM_ID,C,18` = '$_SESSION[Batch_ID]';";
	
                        if(mysqli_query($conn, $sql))
                        {	
	
		$_SESSION['VerificationStatus'] = '1';
		
		echo 
		'<script>
			
		$(document).ready(function(){
		
			alert("Verification Details Info Submitted Successfully!");
			$("#Tab6").removeClass("select");
			$("#Tab5").removeClass("select");
                                                $("#Tab4").removeClass("select");
                                                $("#Tab3").removeClass("select");
                                                $("#Tab2").removeClass("select");
                                                $("#Tab1").removeClass("select");
			$("#Tab7").addClass("select");
			$("#Tab1I").slideUp();
			$("#Tab2I").slideUp();
                                                $("#Tab3I").slideUp();
                                                $("#Tab4I").slideUp();
                                                $("#Tab5I").slideUp();
                                                $("#Tab6I").slideUp();
			$("#Tab7I").slideDown();
                                                
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
/*End verification Details--*/


  
//Start Application form2

if(isset($_POST['level2app_submit']))
{
                
                
                $level2apptype=$_POST['level2apptype'];    
                $_SESSION['3-1-1'] = $level2apptype;
            
                $ID='APPLN_ID,N,1';
                $TabelName='application_type';
                $ColumnName='APPLN_NAME,C,10';
                $Condition =$level2apptype;
               
                $level2apptype=  select_id($ID, $TabelName, $ColumnName, $Condition);
               
                $level2app_no=$_POST['level2app_no'];    
                $_SESSION['3-1-2'] = $level2app_no;
                 
                $level2inword_no=strtoupper($_POST['level2inword_no']);    
                $_SESSION['3-1-3'] = $level2inword_no;
                 
                $level2coupon_No=$_POST['level2coupon_No'];    
                $_SESSION['3-1-4'] = $level2coupon_No;
               
            
          
                $sql = "UPDATE `cust_appl_info_l2` SET 
			
				
                                                `APPLN_TYPE,N,1` = '$level2apptype',
			`APPLN_NO,C,10` = '$level2app_no',
			`INWARD_NO,N,10,0` = '$level2inword_no',
			`COUPON_NO,C,10` = '$level2coupon_No',
                                                `STATUS,N,1` = '1',
			
			`FLAG1` = '',
                                                `FLAG2` = '',
                                                `FLAG3` = ''    
						
			WHERE `FORM_ID,C,18` = '$_SESSION[Batch_ID]';";
	
			
	if(mysqli_query($conn, $sql))
	{
		$_SESSION['ApplicationStatuslevel2'] = '1';
                                echo '<script>
			
		$(document).ready(function(){
                
			alert("Application Level2 info Submitted Successfully!");
			$("#Tab8").removeClass("select");
			$("#Tab9").addClass("select");
			$("#Tab8I").slideUp();
			$("#Tab9I").slideDown();
						
                    	}); 

		</script>';
                    
                
                }else
            {
		$flag1 = 'false';
		echo mysqli_error($conn);
            }
	
	
	
	
}
 //End Application form2

//Start Personal_Form_Info2

if(isset($_POST['level2personal_submit']))
{
                
               $Title2=$_POST['title2'];    
               $_SESSION['3-2-1'] = $Title2;
               
                $ID='SR_NO,N,1';
                $TabelName='title';
                $ColumnName='TITLE,C,6';
                $Condition =$Title2;
                
                $Title2= select_id($ID, $TabelName, $ColumnName, $Condition);
               
            
                $Lname2=$_POST['Lname2'];    
                $_SESSION['3-2-2'] = $Lname2;
                 
                $Fname2=$_POST['Fname2'];    
                $_SESSION['3-2-3'] = $Fname2;
                 
                $Mname2=$_POST['Mname2'];    
                $_SESSION['3-2-4'] = $Mname2;
               
                $Abb2 = $_POST['Abb2'];
               $_SESSION['3-2-5'] = $Abb2;
               
               $FLname2 = $_POST['FLname2'];
               $_SESSION['3-2-6'] = $FLname2;
                
                $FFname2 = $_POST['FFname2'];
               $_SESSION['3-2-7'] = $FFname2;
               
                $FMname2 = $_POST['FMname2'];
               $_SESSION['3-2-8'] = $FMname2;
                
                $Gender2 = $_POST['Gender2'];
                $_SESSION['3-2-9'] = $Gender2;
               
                $ID='SEX_ID,C,1';
                $TabelName='sex';
                $ColumnName='SEX_NAME,C,6';
                $Condition =$Gender2;
                
               $GID = select_id($ID, $TabelName, $ColumnName, $Condition);

                $date2 = $_POST['date2'];
               $_SESSION['3-2-10'] = $date2;
                
                
       
            
            $sql = "UPDATE `cust_personal_info_l2` SET 
			
				
                        `AS_TITLE,C,1` = '$Title2',
                        `AS_LAST,C,75`= '$Lname2',
                        `AS_FIRST,C,25` = '$Fname2',
                        `AS_MIDDLE,C,25` = '$Mname2',
                        `PAN_NAME,C,85` = '$Abb2', 
                        `FTH_LAST,C,25` = '$FLname2',   
                        `FTH_FIRST,C,25` = '$FFname2',   
                        `FTH_MIDDLE,C,25` = '$FMname2',
                        `SEX,C,1` = '$GID',
                        `DOB,D` = '$date2',
                        `STATUS,N,1` = '1',
                        `flag1` = '',
                        `flag2` = '',
                        `flag3` = ''    
						
			WHERE `FORM_ID,C,18` = '$_SESSION[Batch_ID]';";
	
			
	if(mysqli_query($conn, $sql))
	{
		$_SESSION['Personaltatuslevel2'] = '1';
                
               echo '<script>
			
		$(document).ready(function(){
                                            
                                        alert("Personal2 info Submitted Successfully!");
                                        
                                              
                                               $("#Tab9").removeClass("select");
                                               $("#Tab8").removeClass("select");
                                               $("#Tab10").addClass("select");
                                               $("#Tab9I").slideUp();
                                               $("#Tab8I").slideUp();
                                               $("#Tab10I").slideDown();
                                               
                                                 
						
		}); 
				
		</script>';
		
		
		
	}
	else
	{
		$flag1 = 'false';
		echo mysqli_error($conn);
	}
	
	
	
	
}
 //End Personal_Form_Info2


//Start Contact Form2

if(isset($_POST['Level2contactsubmit']))
 {
        
               $addresscomlevel2=$_POST['addcomleve2'];    
               $_SESSION['3-3-1'] = $addresscomlevel2;  
                
                $ID='ADDR_ID,C,1';
                $TabelName='addr_flag';
                $ColumnName='ADDR_NAME,C,9';
                $Condition =$addresscomlevel2;
                
                $addresscomlevel2 =select_id($ID, $TabelName, $ColumnName, $Condition);
    
                $level2ReFlat=$_POST['level2ReFlat'];    
                $_SESSION['3-3-2'] = $level2ReFlat;
            
                $level2ReBuid=$_POST['level2ReBuid'];    
                $_SESSION['3-3-3'] = $level2ReBuid;
                 
                $level2ReRoad=$_POST['level2ReRoad'];    
                $_SESSION['3-3-4'] = $level2ReRoad;
                 
               $level2ReArea=$_POST['level2ReArea'];    
               $_SESSION['3-3-5'] = $level2ReArea;
               
               $level2ReTown = $_POST['level2ReTown'];
               $_SESSION['3-3-6'] = $level2ReTown;
               
               $level2ReState = $_POST['level2ReState'];
               $_SESSION['3-3-7'] = $level2ReState;
               
                $ID='ST_NO,N,2';
                $TabelName='state';
                $ColumnName='ST_NAME,C,22';
                $Condition =$level2ReState;
                
                $level2ReState =select_id($ID, $TabelName, $ColumnName, $Condition);
               
                
               $level2RePin = $_POST['level2RePin'];
               $_SESSION['3-3-8'] = $level2RePin;
                
                $level2ReCoun =$_POST['level2ReCoun'];
                $_SESSION['3-3-9'] = $level2ReCoun;
                
                $ID='CNT_NO,N,3';
                $TabelName='country';
                $ColumnName='CNT_NAME,C,45';
                $Condition =$level2ReCoun;
                
                $level2ReCoun =select_id($ID, $TabelName, $ColumnName, $Condition);
               
                $level2NameOffice=$_POST['level2NameOffice'];
               $_SESSION['3-3-10'] = $level2NameOffice;
                
                $level2OfFlat=$_POST['level2OfFlat'];
               $_SESSION['3-3-11'] = $level2OfFlat;
                
                $level2OfBuil = $_POST['level2OfBuil'];
               $_SESSION['3-3-12'] = $level2OfBuil;

                $level2OfRoad = $_POST['level2OfRoad'];
               $_SESSION['3-3-13'] = $level2OfRoad;
                
                $level2OfArea = $_POST['level2OfArea'];
                $_SESSION['3-3-14'] = $level2OfArea;
                
                $level2OfTown = $_POST['level2OfTown'];
                $_SESSION['3-3-15'] = $level2OfTown;
                
                $level2OfState = $_POST['level2OfState'];
                $_SESSION['3-3-16'] = $level2OfState;
                
                
                $ID='ST_NO,N,2';
                $TabelName='state';
                $ColumnName='ST_NAME,C,22';
                $Condition =$level2OfState;
                
                $level2OfState =select_id($ID, $TabelName, $ColumnName, $Condition);
                
                
                $level2OfPin = $_POST['level2OfPin'];
                $_SESSION['3-3-17'] = $level2OfPin;
                
                $level2OfCoun= $_POST['level2OfCoun'];
                $_SESSION['3-3-18'] = $level2OfCoun;
                
                $ID='CNT_NO,N,3';
                $TabelName='country';
                $ColumnName='CNT_NAME,C,45';
                $Condition =$level2OfCoun;
                
                $level2OfCoun =select_id($ID, $TabelName, $ColumnName, $Condition);
               
                $sql = "UPDATE `cust_address_info_l2` SET 
                        
                        `ADDR_FLAG,C,1` = '$addresscomlevel2',
                            
                        `RES_ADDR1,C,25` = '$level2ReFlat',
                        `RES_ADDR2,C,25` = '$level2ReBuid',
                        `RES_ADDR3,C,25` = '$level2ReRoad',
                        `RES_ADDR4,C,25` = '$level2ReArea', 
                        `RES_DIST,C,25` = '$level2ReTown',			
                        `RES_STATE,C,2` = '$level2ReState',
                        `RES_PIN,C,6` = '$level2RePin',
                        `RES_CNTRY,C,3` = '$level2ReCoun',
                            
                        `OFF_NAME,C,75` = '$level2NameOffice',
                        `OFF_ADDR1,C,25` = '$level2OfFlat',
                        `OFF_ADDR2,C,25` = '$level2OfBuil',
                        `OFF_ADDR3,C,25` = '$level2OfRoad',   
                        `OFF_ADDR4,C,25` = '$level2OfArea', 
                            
                        `OFF_DIST,C,25` = '$level2OfTown',      
                        `OFF_STATE,C,2` = '$level2OfState',
                        `OFF_PIN,C,6` = '$level2OfPin',
                        `OFF_CNTRY,C,3` = '$level2OfCoun',
                        `TEL_ISD,C,7` = '',
                        `TEL_STD,C,7` = '',
                        `TEL_NO,C,13` = '',
                        `E_MAIL_ID,C,41` ='',
                        `STATUS,N,1`='1',
                        `flag1` = '',
                        `flag2` = '',
                        `flag3` = '',
                        `flag4` = '',
                        `flag5` = ''
	
                        WHERE `FORM_ID,C,18` = '$_SESSION[Batch_ID]';";
	
			
	if(mysqli_query($conn, $sql))
	{
		$_SESSION['ContactStatuslevel2'] = '1';
		
		echo '<script>
			
		$(document).ready(function(){
		
                        alert("Contact level2 Info Submitted Successfully!");
                     
                        
                        
                        
			
		}); 
                                        </script>';
	}
	else
	{
		$flag1 = 'false';
		echo mysqli_error($conn);
	}
	
}
 //End Contact Form2

?>



