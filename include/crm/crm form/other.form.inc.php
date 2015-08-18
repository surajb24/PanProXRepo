<div id="Tab4I">
    <center>
	<form name="other"  action="" method="post">
           
            <table class="table2" >
                
                 <tr>
                    <th class="required">FORM ID</th>
                    <td class="required">
                        <?php echo $_SESSION['Level1_Form_ID']; ?>
                    </td>
                    <td></td>
                    
                </tr>
                
               	<tr class="appcom">
                    
                    <th class="required">Status Of Applicant</th>
				
                        <td>


                            <select name="SOA" id="SOA" class="SOA req" onblur="valid_select(this,'Status of Applicant ','0');">


                                <option value="<?php if(!empty($_SESSION['2-4-1'])) { echo $_SESSION['2-4-1']; } else { "";}?>">
                               <?php if(!empty($_SESSION['2-4-1'])) { echo $_SESSION['2-4-1']; } else { echo 'Status Of Applicant'; } ?></option>
                                </option>
			<?php Status_Applicant(); ?>
		
                            </select>
                        </td>
                            <td></td>
                        
		</tr> 
                
                <tr class="Resig">
			
                    <th>Registration Number (For company,firms,LLPs, etc.)</th>
                    <td>
                        <input type="text" name="RegNo"  id="RegNo" class="RegNo req"  placeholder="REGISTRATION NO" maxlength="30" onblur="valid_required(this,'Registration No','0');" onkeyup="firstCharSpace(this);" style="text-transform: uppercase;"
                               value="<?php echo $_SESSION['2-4-2']; ?>">
                    </td><td></td>
                    
		</tr>
                
                <tr class="appisd oprat">
			
                    <th class="required">Country Of Citizenship</th>
                    <td>
                        
                        <select name="CountryC" id="CountryC" class="CountryC req" onblur="valid_select(this,'Country Citizenship','0');">
                                <option value="<?php if(!empty($_SESSION['2-4-3'])) { echo $_SESSION['2-4-3']; } else { "";}?>">
                               <?php if(!empty($_SESSION['2-4-3'])) { echo $_SESSION['2-4-3']; } else { echo 'Select Country of Citizenship'; } ?></option>
                                </option>
			<?php Country(); ?>
                                
                        </select>
                        
                    </td><td></td>
                    
		</tr>
                
                 <tr class="appisd oprat">
			
                     <th class="required">ISD Code of the Country of Citizenship</th>
                    <td>
                        <input type="text" name="ISD" id="ISD" class="ISD req"  placeholder="ISD Number" onblur="valid_required(this,'ISD Code','0');" maxlength="6" onkeypress="return ValidNum(event);"
                               value="<?php echo $_SESSION['2-4-4']; ?>"> 
                    </td><td></td>
                    
		</tr>
                
                 <tr class="adarAA">
			
                    <th >AADHAR No</th>
                    <td>

                        <input type="text" name="AadharNo"  id="AadharNo" class="AadharNo"  placeholder="AADHAR NO" minlength="12" maxlength="12" onkeypress="return ValidNum(event);" onblur="adhr(this);"
          
                               value="<?php echo $_SESSION['2-4-5']; ?>">
                    </td><td></td>
                    
		</tr>
                
                <tr class="adinfo">
			
                    <th class="required">Name On AADHAR Card</th>
                    <td>

                        <input type="text" name="AName"  id="AName" class="AName"  placeholder="AADHAR NAME" maxlength="80" onkeypress="return ValidAlpha(event);" onkeyup="ValidFirstSpace(this);" onblur="this.value = this.value.toUpperCase();" 
          
                            style="text-transform: uppercase;"   value="<?php echo $_SESSION['2-4-17']; ?>">
                    </td><td></td>
                    
		</tr>
                
                <tr class="adinfo">
			
                    <th class="required">Year Of Birth On AADHAR Card</th>
                    <td>

                        <input type="text" name="Ayob"  id="Ayob" class="Ayob"  placeholder="AADHAR YOB" minlength="4" maxlength="4" onkeypress="return ValidNum(event);" 
          
                             value="<?php echo $_SESSION['2-4-18']; ?>">
                    </td><td></td>
                    
		</tr>
                
                 <tr class="adinfo">
			
                    <th class="required">Gender On AADHAR Card</th>
                    <td>

                        
                        <select name="Agen" id="Agen" class="Agen" onblur="valid_select(this,'Aadhar Gender ','0');">
                           <option value="<?php if(!empty($_SESSION['2-4-19'])) { echo $_SESSION['2-4-19']; } else { "";}?>">
                               <?php if(!empty($_SESSION['2-4-19'])) { echo $_SESSION['2-4-19']; } else { echo 'Select Gender'; } ?></option>
                           <?php Gender(); ?>
		            
	                </select>
                    </td><td></td>
                    
		</tr>
                
                <tr class="appcom">
			
                    <th ROWSPAN="4" class="required">Source Of Income</th>
                    <td>
                                               
                       <input type="checkbox" name="Salary"  id="Salary" class="chk" onchange="emptyContactSession();" value="Y"<?php if($_SESSION['2-4-6']=="Y") { echo "checked"; } ?>> Salary
                                              

                    </td>
                    <td>

                       
                       <input type="checkbox" name="CG"  id="CG" class="chk" value="Y" <?php if($_SESSION['2-4-7']=="Y") { echo "checked"; } ?>>Capital Gains

                      

                    </td>
                </tr>
                
                
                
                <tr class="appcom">
                    <td>

                        
                        <input type="checkbox" name="IHP"  id="IHP" class="chk" value="Y" <?php if($_SESSION['2-4-8']=="Y") { echo "checked"; } ?>>Income from House Property

       

                    </td>
                    <td>

                       
                         <input type="checkbox" name="IOS"  id="IOS"class="chk" value="Y" <?php if($_SESSION['2-4-9']=="Y") { echo "checked"; } ?>>Income from Other source

                       

                    </td>   
                </tr>
                      
                
                
                <tr class="appcom">

                    <td>
                        <input type="checkbox" name="BPC"  id="BPC" class="chk" <?php if($_SESSION['2-4-10'] == "Y") { echo "checked"; } ?> />Income From Business
                    </td>
                    <td>Code<input type="text"  name="SCode" id="SCode" class="chkcode req" placeholder="Business code" maxlength="2" size="2" onblur="valid_required(this,'Business Code..','0');" onkeyup="isNumber(this);" value="<?php echo $_SESSION['2-4-11']; ?>"></td>

                </tr>
                
                <tr class="appcom">
                    <td>

                        <input type="checkbox" name="NI"  id="NI" class="chk" value="Y" <?php if($_SESSION['2-4-12']=="Y") { echo "checked"; } ?>>No Income

                    </td>
                    <td>
                        
                    </td>
                </tr>   
              
                <tr class="AppC">
			
                    <th ROWSPAN="2">Mention other Permanent Account Number (PANs)inadvertently allotted to you</th>
                     <td>
                         PAN 1&nbsp;&nbsp;<input type="text" name="PAN1"  id="PAN1" class="PAN1" placeholder="PAN1" maxlength="10" onblur="PanValidate(this);"
                                                 value="<?php echo $_SESSION['2-4-13']; ?>"><div id="idreturn" style="color:red;"></div>
                    </td>
                    <td>
                        PAN 2&nbsp;&nbsp;<input type="text" name="PAN2"  id="PAN2" class="PAN2" placeholder="PAN2" maxlength="10" onblur="PanValidate(this);" 
                                                value="<?php echo $_SESSION['2-4-14']; ?>"><div id="idreturn" style="color:red;"></div>

                    </td>
                </tr>
                
                
                <tr class="AppC">

                    <td>
                        PAN 3&nbsp;&nbsp;<input type="text" name="PAN3"  id="PAN3" class="PAN3"  placeholder="PAN3" maxlength="10" onblur="PanValidate(this);"
                                                value="<?php echo $_SESSION['2-4-15']; ?>"><div id="idreturn" style="color:red;"></div>
                    </td>
                    <td>
                        PAN 4&nbsp;&nbsp;<input type="text" name="PAN4"  id="PAN4" class="PAN4"  placeholder="PAN4" maxlength="10" onblur="PanValidate(this);" 
                                                value="<?php echo $_SESSION['2-4-16']; ?>"><div id="idreturn" style="color:red;"></div>
                    </td> 
		</tr>
    
            </table>



            <br><br>
            

            <div align="center" class="buttons">
		
                <button type="submit" id="OtherSubmit" class="OtherSubmit btns" name="OtherSubmit" onclick="return valid_Other();">Submit</button>
	<button type="button" id="Otherpre"  name="Otherpre" class="Otherpre btns">Previous</button>
	<button type="button" id="Othernext"  name="Othernext" class="Othernext btns">Next</button>
	<button type="submit" class="btns" id=""  name="Level1_Final" >Final Submit</button>
		 
        </div> 
        </form>
</div>