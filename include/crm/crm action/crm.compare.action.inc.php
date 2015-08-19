 <?php
 include 'select_id.php';
include 'select.inc.php';

//Start Application form2

if(isset($_POST['level2app_submit']))
{

                $level2apptype=$_POST['level2apptype'];    
                $_SESSION['4-1-1'] = $level2apptype;
            
                $ID='APPLN_ID,N,1';
                $TabelName='application_type';
                $ColumnName='APPLN_NAME,C,10';
                $Condition =$level2apptype;
               
                $level2apptype=  select_id($ID, $TabelName, $ColumnName, $Condition);
               
                $level2app_no=$_POST['level2app_no'];    
                $_SESSION['4-1-2'] = $level2app_no;
                 
                $level2inword_no=strtoupper($_POST['level2inword_no']);    
                $_SESSION['4-1-3'] = $level2inword_no;
                 
                $level2coupon_No=$_POST['level2coupon_No'];    
                $_SESSION['4-1-4'] = $level2coupon_No;
               
            
          
                $sql = "UPDATE `cust_compare_appl_info` SET 
			
				
                        `FORM_TYPE,C,1` = '$level2apptype',
			`APPLN_NO,C,10` = '$level2app_no',
			`INWARD_NO,N,10,0` = '$level2inword_no',
			`COUPON_NO,C,10` = '$level2coupon_No',
                        `STATUS,N,1` = '2',
			`FLAG1` = '',
                        `FLAG2` = '',
                        `FLAG3` = ''    
						
			WHERE `FORM_ID,C,18` = '$_SESSION[Compare_Form_ID]';";
	
			
	if(mysqli_query($conn, $sql))
	{
		$_SESSION['AppStatusLevel2'] = '1';
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
            if(!empty($_SESSION['AppStatusLevel2']))
            {
               $Title2=$_POST['title2'];    
               $_SESSION['4-2-1'] = $Title2;
               
                $ID='SR_NO,N,1';
                $TabelName='title';
                $ColumnName='TITLE,C,6';
                $Condition =$Title2;
                
                $Title2= select_id($ID, $TabelName, $ColumnName, $Condition);
               
            
                $Lname2=$_POST['Lname2'];    
                $_SESSION['4-2-2'] = $Lname2;
                 
                $Fname2=$_POST['Fname2'];    
                $_SESSION['4-2-3'] = $Fname2;
                 
                $Mname2=$_POST['Mname2'];    
                $_SESSION['4-2-4'] = $Mname2;
               
                $Abb2 = $_POST['Abb2'];
                $_SESSION['4-2-5'] = $Abb2;
               
               $FLname2 = $_POST['FLname2'];
               $_SESSION['4-2-6'] = $FLname2;
                
                $FFname2 = $_POST['FFname2'];
               $_SESSION['4-2-7'] = $FFname2;
               
                $FMname2 = $_POST['FMname2'];
               $_SESSION['4-2-8'] = $FMname2;
                
                $Gender2 = $_POST['Gender2'];
                $_SESSION['4-2-9'] = $Gender2;
               
                $ID='SEX_ID,C,1';
                $TabelName='sex';
                $ColumnName='SEX_NAME,C,6';
                $Condition =$Gender2;
                
               $GID = select_id($ID, $TabelName, $ColumnName, $Condition);

                $date2 = $_POST['date2'];
               $_SESSION['4-2-10'] = $date2;
                
                
       
            
            $sql = "UPDATE `cust_compare_personal_info` SET 
			
				
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
                        `STATUS,N,1` = '2',
                        `flag1` = '',
                        `flag2` = '',
                        `flag3` = ''    
						
			WHERE `FORM_ID,C,18` = '$_SESSION[Compare_Form_ID]';";
	
			
	if(mysqli_query($conn, $sql))
	{
		$_SESSION['PersonalStatusLevel2'] = '1';
                
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
        
        }else{
            echo '<script>
			
		$(document).ready(function(){
                                            
                    alert("First Submit Application Info");
                   $("#Tab8").addClass("select");
                   $("#Tab8I").slideDown();
                                   			
		}); 
				
		</script>';
        }
	
	
	
	
}
 //End Personal_Form_Info2


//Start Contact Form2

if(isset($_POST['Level2contactsubmit']))
{
            if(!empty($_SESSION['PersonalStatusLevel2']))
            {
               $addresscomlevel2=$_POST['addcomleve2'];    
               $_SESSION['4-3-1'] = $addresscomlevel2;  
                
                $ID='ADDR_ID,C,1';
                $TabelName='addr_flag';
                $ColumnName='ADDR_NAME,C,9';
                $Condition =$addresscomlevel2;
                
                $addresscomlevel2 =select_id($ID, $TabelName, $ColumnName, $Condition);
    
                $level2ReFlat=$_POST['level2ReFlat'];    
                $_SESSION['4-3-2'] = $level2ReFlat;
            
                $level2ReBuid=$_POST['level2ReBuid'];    
                $_SESSION['4-3-3'] = $level2ReBuid;
                 
                $level2ReRoad=$_POST['level2ReRoad'];    
                $_SESSION['4-3-4'] = $level2ReRoad;
                 
                $level2ReArea=$_POST['level2ReArea'];    
               $_SESSION['4-3-5'] = $level2ReArea;
               
                $level2ReTown = $_POST['level2ReTown'];
               $_SESSION['4-3-6'] = $level2ReTown;
               
                $level2ReState = $_POST['level2ReState'];
               $_SESSION['4-3-7'] = $level2ReState;
               
                $ID='ST_NO,N,2';
                $TabelName='state';
                $ColumnName='ST_NAME,C,22';
                $Condition =$level2ReState;
                
                $level2ReState =select_id($ID, $TabelName, $ColumnName, $Condition);
               
                
                $level2RePin = $_POST['level2RePin'];
               $_SESSION['4-3-8'] = $level2RePin;
                
                $level2ReCoun =$_POST['level2ReCoun'];
                $_SESSION['4-3-9'] = $level2ReCoun;
                
                $ID='CNT_NO,N,3';
                $TabelName='country';
                $ColumnName='CNT_NAME,C,45';
                $Condition =$level2ReCoun;
                
                $level2ReCoun =select_id($ID, $TabelName, $ColumnName, $Condition);
               
                $_SESSION['offyn']=$_POST['selectyes'];
                
                $level2NameOffice=$_POST['level2NameOffice'];
               $_SESSION['4-3-10'] = $level2NameOffice;
                
                $level2OfFlat=$_POST['level2OfFlat'];
               $_SESSION['4-3-11'] = $level2OfFlat;
                
                $level2OfBuil = $_POST['level2OfBuil'];
               $_SESSION['4-3-12'] = $level2OfBuil;

                $level2OfRoad = $_POST['level2OfRoad'];
               $_SESSION['4-3-13'] = $level2OfRoad;
                
                $level2OfArea = $_POST['level2OfArea'];
                $_SESSION['4-3-14'] = $level2OfArea;
                
                $level2OfTown = $_POST['level2OfTown'];
                $_SESSION['4-3-15'] = $level2OfTown;
                
                $level2OfState = $_POST['level2OfState'];
                $_SESSION['4-3-16'] = $level2OfState;
                
                
                $ID='ST_NO,N,2';
                $TabelName='state';
                $ColumnName='ST_NAME,C,22';
                $Condition =$level2OfState;
                
                $level2OfState =select_id($ID, $TabelName, $ColumnName, $Condition);
                
                
                $level2OfPin = $_POST['level2OfPin'];
                $_SESSION['4-3-17'] = $level2OfPin;
                
                $level2OfCoun= $_POST['level2OfCoun'];
                $_SESSION['4-3-18'] = $level2OfCoun;
                
                $ID='CNT_NO,N,3';
                $TabelName='country';
                $ColumnName='CNT_NAME,C,45';
                $Condition =$level2OfCoun;
                
                $level2OfCoun =select_id($ID, $TabelName, $ColumnName, $Condition);
               
                $sql = "UPDATE `cust_compare_address_info` SET 
                        
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
                        
                        `STATUS,N,1`='2',
                        `flag1` = '',
                        `flag2` = '',
                        `flag3` = '',
                        `flag4` = '',
                        `flag5` = ''
	
                        WHERE `FORM_ID,C,18` = '$_SESSION[Compare_Form_ID]';";
	
			
	if(mysqli_query($conn, $sql))
	{
		$_SESSION['ContactStatusLevel2'] = '1';
		
		echo '<script>
			
		$(document).ready(function(){
		
                    alert("Contact level2 Info Submitted Successfully!");
                     
                        
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
        
        }else{
            echo '<script>
			
		$(document).ready(function(){
		
                    alert("Submit Personal level2 Info");
                   $("#Tab8").removeClass("select");                   
                   $("#Tab9").addClass("select");
                   $("#Tab9I").slideDown();
                   $("#Tab8I").slideUp();
                   $("#Tab10I").slideUp();
                        
			
		}); 
                
                </script>';
        }
}
 //End Contact Form2

/*Final Submit for Level 2--*/

if(isset($_POST['Compare_Final']))
{
    if(!empty($_SESSION['AppStatusLevel2']) && !empty($_SESSION['PersonalStatusLevel2'])
       && !empty($_SESSION['ContactStatusLevel2']))
    {
        
        $Date = date('d-M-Y');
        $Time = date('H:i:s');
        
        $sql = 'UPDATE `appl_status` SET `COMPARE_E_TIME,C,8` = "'.$Time.'", `FINAL_STATUS,N,1` = "8" 
         WHERE `FORM_ID,C,18` = "'.$_SESSION['Compare_Form_ID'].'";';
        
        if(mysqli_query($conn, $sql))
        {
               
            $query = 'INSERT INTO `cust_qc_appl_info` (`FORM_ID,C,18`, `STATUS,N,1`) VALUES("'.$_SESSION['Compare_Form_ID'].'", "1"); ';
            mysqli_query($conn, $query);

            $query = 'INSERT INTO `cust_qc_personal_info` (`FORM_ID,C,18`, `STATUS,N,1`) VALUES("'.$_SESSION['Compare_Form_ID'].'", "1"); ';
            mysqli_query($conn, $query);

            $query = 'INSERT INTO `cust_qc_address_info` (`FORM_ID,C,18`, `STATUS,N,1`) VALUES("'.$_SESSION['Compare_Form_ID'].'", "1"); ';
            mysqli_query($conn, $query);
            
            $query = 'INSERT INTO `cust_qc_other_info` (`FORM_ID,C,18`, `STATUS,N,1`) VALUES("'.$_SESSION['Compare_Form_ID'].'", "1"); ';
            mysqli_query($conn, $query);

            $query = 'INSERT INTO `cust_qc_ra_info` (`FORM_ID,C,18`, `STATUS,N,1`) VALUES("'.$_SESSION['Compare_Form_ID'].'", "1"); ';
            mysqli_query($conn, $query);

            $query = 'INSERT INTO `cust_qc_verification_info` (`FORM_ID,C,18`, `STATUS,N,1`) VALUES("'.$_SESSION['Compare_Form_ID'].'", "1"); ';
            mysqli_query($conn, $query);
            
        //appl
            
            $_SESSION['2-1-1'] = '';
            $_SESSION['4-1-1'] = '';
            $_SESSION['3-1-1'] = '';

            $_SESSION['2-1-2'] = '';
            $_SESSION['4-1-2'] = '';
            $_SESSION['3-1-2'] = '';

            $_SESSION['2-1-3'] = '';
            $_SESSION['4-1-3'] = '';
            $_SESSION['3-1-3'] = '';

            $_SESSION['2-1-4'] = '';
            $_SESSION['4-1-4'] = '';
            $_SESSION['3-1-4'] = '';

            //personal
            $_SESSION['2-2-1'] = '';
            $_SESSION['4-2-1'] = '';
            $_SESSION['3-2-1'] = '';

            $_SESSION['2-2-2'] = '';
            $_SESSION['4-2-2'] = '';
            $_SESSION['3-2-2'] = '';

            $_SESSION['2-2-3'] = '';
            $_SESSION['4-2-3'] = '';
            $_SESSION['3-2-3'] = '';

            $_SESSION['2-2-4'] = '';
            $_SESSION['4-2-4'] = '';
            $_SESSION['3-2-4'] = '';

            $_SESSION['2-2-5'] = '';
            $_SESSION['4-2-5'] = '';
            $_SESSION['3-2-5'] = '';

            $_SESSION['2-2-13'] = '';
            $_SESSION['4-2-6'] = '';
            $_SESSION['3-2-6'] = '';

            $_SESSION['2-2-14'] = '';
            $_SESSION['4-2-7'] = '';
            $_SESSION['3-2-7'] = '';

            $_SESSION['2-2-15'] = '';
            $_SESSION['4-2-8'] = '';
            $_SESSION['3-2-8'] = '';

            $_SESSION['2-2-11'] = '';
            $_SESSION['4-2-9'] = '';
            $_SESSION['3-2-9'] = '';

            $_SESSION['2-2-12'] = '';
            $_SESSION['4-2-10'] = '';
            $_SESSION['3-2-10'] = '';

            //address
            $_SESSION['2-3-1'] = '';
            $_SESSION['4-3-1'] = '';
            $_SESSION['3-3-1'] = '';

            $_SESSION['2-3-2'] = '';
            $_SESSION['4-3-2'] = '';
            $_SESSION['3-3-2'] = '';

            $_SESSION['2-3-3'] = '';
            $_SESSION['4-3-3'] = '';
            $_SESSION['3-3-3'] = '';

            $_SESSION['2-3-4'] = '';
            $_SESSION['4-3-4'] = '';
            $_SESSION['3-3-4'] = '';

            $_SESSION['2-3-5'] = '';
            $_SESSION['4-3-5'] = '';
            $_SESSION['3-3-5'] = '';

            $_SESSION['2-3-6'] = '';
            $_SESSION['4-3-6'] = '';
            $_SESSION['3-3-6'] = '';

            $_SESSION['2-3-7'] = '';
            $_SESSION['4-3-7'] = '';
            $_SESSION['3-3-7'] = '';

            $_SESSION['2-3-8'] = '';
            $_SESSION['4-3-8'] = '';
            $_SESSION['3-3-8'] = '';

            $_SESSION['2-3-9'] = '';
            $_SESSION['4-3-9'] = '';
            $_SESSION['3-3-9'] = '';

            $_SESSION['2-3-10'] = '';
            $_SESSION['4-3-10'] = '';
            $_SESSION['3-3-10'] = '';

            $_SESSION['2-3-11'] = '';
            $_SESSION['4-3-11'] = '';
            $_SESSION['2-3-11'] = '';

            $_SESSION['2-3-12'] = '';
            $_SESSION['4-3-12'] = '';
            $_SESSION['3-3-12'] = '';

            $_SESSION['2-3-13'] = '';
            $_SESSION['4-3-13'] = '';
            $_SESSION['3-3-13'] = '';

            $_SESSION['2-3-14'] = '';
            $_SESSION['4-3-14'] = '';
            $_SESSION['3-3-14'] = '';

            $_SESSION['2-3-15'] = '';
            $_SESSION['4-3-15'] = '';
            $_SESSION['3-3-15'] = '';

            $_SESSION['2-3-16'] = '';
            $_SESSION['4-3-16'] = '';
            $_SESSION['3-3-16'] = '';

            $_SESSION['2-3-17'] = '';
            $_SESSION['4-3-17'] = '';
            $_SESSION['3-3-17'] = '';

            $_SESSION['2-3-18'] = '';
            $_SESSION['4-3-18'] = '';
            $_SESSION['3-3-18'] = '';
            
            $_SESSION['PersonalStatusLevel2'] = '';
            $_SESSION['AppStatusLevel2'] = '';
            $_SESSION['ContactStatusLevel2'] = '';
            
            echo '<script>';
            echo 'alert("Compare Entry Completed Sucessfully!");';
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