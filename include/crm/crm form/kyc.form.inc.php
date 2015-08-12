<div id="Tab7I">
    <center>
    <form name="kyc" action="" method="post">
        
        <table class="table2" >
            
             <tr>
                    <th class="required">FORM ID</th>
                    <td class="required">
                        <?php echo $_SESSION['Level1_Form_ID']; ?>
                    </td>
                    
                </tr>
            <tr class="residence" >
                <th colspan="2"  class='heading'>Individuals</th>
            </tr>     
            
            <tr>
                <th>Marital Status</th>
            
                <td> 
                    <select name="maritalstatus" id="maritalstatus" class="maritalstatus req" onblur="valid_select(this,'Marital Status','0');" >

                        <option value='<?php if(!empty($_SESSION['2-7-1'])) { echo $_SESSION['2-7-1']; } else { '';}?>'>
                                
                               <?php if(!empty($_SESSION['2-7-1'])) { echo $_SESSION['2-7-1']; } else { echo 'Select Marital Status'; } ?></option>
                            </option>
			
			<?php Marital_Status(); ?>
  
	        </select>
                </td>
            </tr>
            
            <tr>
                <th>Citizenship Status</th>
            
                <td> 
                    <select name="citystatus" id="citystatus" class="citystatus req" onblur="valid_select(this,'Citizenship Status','0');" >

                        <option value='<?php if(!empty($_SESSION['2-7-2'])) { echo $_SESSION['2-7-2']; } else { '';}?>'>
                                
                               <?php if(!empty($_SESSION['2-7-2'])) { echo $_SESSION['2-7-2']; } else { echo 'Citizenship Status'; } ?></option>
                        </option>
			
			<?php Citizenship_Status(); ?>
  
                    </select>
                </td>
            </tr>
                        
            <tr class="residence">
                <th colspan="">In Case Of Foreign,Country Of Citizenship</th>
                <td><input type="text" name='foreign_city' value='<?php echo $_SESSION['2-7-3']; ?>' class="RRSL" placeholder="IN CASE OF FOREIGN,COUNTRY OF CITIZENSHIP" maxlength="25" onkeyup="ValidFirstSpace(this),makeUpper(this);"></td>
            </tr> 
            
            <tr class="residence">

               <th>Occupation Details</th>
                <td> 
                    <select name="occupation" id="occupation" class="occupation req" onblur="valid_select(this,'Occupation Details','0');" >

                        <option value='<?php if(!empty($_SESSION['2-7-4'])) { echo $_SESSION['2-7-4']; } else { '';}?>'>
                                
                               <?php if(!empty($_SESSION['2-7-4'])) { echo $_SESSION['2-7-4']; } else { echo 'Occupation Details'; } ?></option>
                        </option>
			
			<?php Occupation(); ?>
  
                    </select>
                </td>        
            </tr>
            
            <tr>
                <th class='heading' colspan='2'>Non Individuals</th>
            </tr>
            
            <tr class="residence">
                <th>Non Individual Status</th>
                <td> 
                    <select name="nonindividual" id="nonindividual" class="nonindividual req" onblur="valid_select(this,'Non Individuals','0');" >
                        <option value=''>Select Non-Individual</option>
                        <option value='<?php echo $_SESSION['2-7-5']; ?>'>Y</option>
                        <option value='<?php echo $_SESSION['2-7-5']; ?>'>N</option>
			
                    </select>
                </td>        
            </tr>
            <tr class="residence">
                <th>Gross Annual Income(INR)Network(Assets less liabilities)in INR</th>
                    <td>
                        <input type="text" name="INR" id="INR" class="INR" placeholder="GROSS ANNUAL INCOME" maxlength="25" onkeyup="ValidFirstSpace(this),makeUpper(this);"
                               value="<?php echo $_SESSION['2-7-6'];?>"> 
                    </td>
            </tr>
            <tr class="residence">
                <th>Public Company(If listed On stock exchange)</th>
                    <td> 
                    <select name="stockexchange" id="stockexchange" class="stockexchange req" onblur="valid_select(this,'Stock Exechange','0');" >
                        <option value=''>Select Stock Exchange</option>
                        <option value='<?php echo $_SESSION['2-7-7']; ?>'>Y</option>
                        <option value='<?php echo $_SESSION['2-7-7']; ?>'>N</option>
			  
                    </select>
                    </td> 
            </tr>
            <tr class="residence">
                <th>Stock Exchange Name </th>
                    <td>
                        <input type="text" name="SXName" id="SXName" class="SXName req" placeholder="TOWN/CITY/DISTRICT" maxlength="25" onkeyup="ValidFirstSpace(this),makeUpper(this);" onblur="valid_required(this,'Stock/Exchange','0');"
                               value="<?php echo $_SESSION['2-7-8'];?>">
                    </td>
            </tr>
            <!--
            <tr class="residence">
                <th class="required">Non Individuals</th>
                    <td>
                        
		<select name="RState" id="RState" class="RState req" onblur="valid_select(this,'State','0');">
		        <option value=""></option>
                        <option value=""></option>  					
			
	               </select>		
                            
                    </td>
            </tr>
            -->
            
            <tr class="residence" colspan='2'>
                <th>Entity Involved any Following Services</th>
            </tr>
            
            <tr class="residence">
                <th class="required">Foreign Exchange,Money Changer services</th>
                    <td>
                        
                    <select name="FMCS" id="FMCS" class="FMCS req" onblur="valid_select(this,'Foreign Exchange','0');">
                        <option value=''>Select Foreign Exchange</option>
                        <option value="<?php echo $_SESSION['2-7-9']; ?>">Y</option>  
                        <option value="<?php echo $_SESSION['2-7-9']; ?>">N</option>  
                    </select>	
                        
                    </td>
            </tr>
                        
            <tr class="office">
                <th>Gaming/Gambling/Lottery Services(Casinos and Betting Syndicates)</th>
                    <td>
                       <select name="GLS" id="GLS" class="GLS req" onblur="valid_select(this,'Gaming/Gambling/Lottery Services','0');">
                        <option value=''>Select Gaming/Gambling Services</option>
                        <option value="<?php echo $_SESSION['2-7-10']; ?>">Y</option>  
                        <option value="<?php echo $_SESSION['2-7-10']; ?>">N</option>  
                        </select> 
                    </td>
            </tr>
            <tr class="office">
                <th>Money/Lending/Pawning</th>
                    <td>
                       <select name="MLP" id="MLP" class="MLP req" onblur="valid_select(this,'Money/Lending/Pawing','0');">
                        <option value=''>Select Money Lending</option>
                        <option value="<?php echo $_SESSION['2-7-11']; ?>">Y</option>  
                        <option value="<?php echo $_SESSION['2-7-12']; ?>">N</option>  
                        </select>
                    </td>
            </tr>
            
            <tr colspan='2'>
                <th>Weather The Applicant or Applicant's authorised signatories/trustees/office bearers is</th>
            </tr>
            
            <tr class="office">
                <th>Politically Exposed Person</th>
                    <td>
                        <select name="PEP" id="PEP" class="PEP req" onblur="valid_select(this,'Politically Exposed Person','0');">
                            <option value=''>Select Politically Exposed</option>
                            <option value="<?php echo $_SESSION['2-7-13']; ?>">Y</option>  
                            <option value="<?php echo $_SESSION['2-7-13']; ?>">N</option>  
                        </select> 
                    </td>
            </tr>
            <tr class="office">
                <th>Related Politically Exposed Person</th>
                    <td>
                        <select name="RPEP" id="RPEP" class="RPEP req" onblur="valid_select(this,'Related Politically Exposed Person','0');">
                            <option value=''>Select Related Politically Exposed</option>
                        <option value="<?php echo $_SESSION['2-7-14']; ?>">Y</option>  
                        <option value="<?php echo $_SESSION['2-7-14']; ?>">N</option>  
                        </select> 
                        
                    </td>
            </tr>
            <tr class="office">
                <th>Taxpayer Identification Number In the Country Of Residence</th>
                    <td>
                        <input type="text" name="TI" id="TI" class="TI req" placeholder="Taxpayer Identification Number In The Country Of Residence" maxlength="25" onkeyup="ValidFirstSpace(this),makeUpper(this);" 
                                 value="<?php echo $_SESSION['2-7-15']; ?>">
                    </td>
            </tr>
            
        </table>
        <br><br>
           
        <div align="center" class="buttons">
		
            <button type="submit" id="Kycsubmit" class="Keysubmit btns" name="Kycsubmit" onclick="return Valid_Kyc();">Submit</button>
            <button type="button" id="Kycpre"  name="Kycpre" class="Kycpre btns">Previous</button>
            <button type="button" id="Kycnext"  name="Kycnext" class="Contactnext btns">Next</button>
            <button type="submit" class="btns" id=""  name="Level1_Final" >Final Submit</button>
		 
        </div> 
        
    </form>  
    
</div>

