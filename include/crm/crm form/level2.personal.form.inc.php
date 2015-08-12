
<div id="Tab9I">
    <center>
	<form name="personal" action="" method="post">
	    <table class="table2" >
			
                 <tr>
                    <th class="required">FORM ID</th>
                    <td class="required">
                        <?php echo $_SESSION['Level2_Form_ID']; ?>
                    </td>
                    
                </tr>
                
                <tr>
                    <th class="required"> Title</th>
	            <td>
                        <select name="title2" id="title" class="title2 req" onblur="valid_select(this,'Applicant Title ','0');">
                            <option value="<?php if(!empty($_SESSION['3-2-1'])) { echo $_SESSION['3-2-1']; } else { "";}?>">
                               <?php if(!empty($_SESSION['3-2-1'])) { echo $_SESSION['3-2-1']; } else { echo 'Select Application Title'; } ?>
                            </option>
                                <?php App_Title(); ?>
                        </select>
		    </td>
	        </tr>
			
		<tr>
			
                    <th class="required"> Last Name / Surname</th>
				<td>
				  <input type="text" name="Lname2" id="Lname" class="Lname2 req" placeholder="LAST NAME/SURNAME" onblur="valid_required(this,'Applicant Last Name','0'),this.value = this.value.toUpperCase();" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;"
                                         value="<?php echo $_SESSION['3-2-2']; ?>">
				
				</td>
				<p></p>
				
		</tr>
			
		<tr class="firstMS">
                    <th class="required">First Name</th>
				<td>
				   <input type="text" name="Fname2" id="Fname" class="Fname2 req"  placeholder="FIRST NAME" maxlength="25" onblur="valid_required(this,'Applicant First Name','0'),this.value = this.value.toUpperCase();" style="text-transform: uppercase;"
                                          
                                          onkeypress="return ValidAlpha(event);" onkeyup="ValidFirstSpace(this);" 
                                          value="<?php echo $_SESSION['3-2-3']; ?>">
						
				</td>
		</tr>
                
               <tr class="firstMS">
		    <th>Middle Name</th>
				<td>
				  
                                    <input type="text" name="Mname2" id="Mname" class="Mname2"  placeholder="MIDDLE  NAME" maxlength="25" onkeypress="return ValidAlpha(event);" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" onblur="this.value = this.value.toUpperCase();"
                                         value="<?php echo $_SESSION['3-2-4']; ?>">
				  
				</td>
		</tr>
			
		<tr id="">
                    <th class="required">Abbreviations of the above name,as you would like it,to be printed on the PAN card</th>
				<td>
                                    <input type="text" name="Abb2" id="Abb" class="Abb2 req" placeholder="ABBREVIATION" onblur="valid_required(this,'Abbreviation Name','0'),this.value = this.value.toUpperCase();" maxlength="85" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;"
                                          value="<?php echo $_SESSION['3-2-5']; ?>">
				</td>
		</tr>
		<tr class="fatherMS">
                    <th colspan="2"> Father's Name (Only 'individual applicants':Even married women should fill in father's name only)</th>
                    
		</tr>
                
                 <tr class="fatherMS">
                     <th class="required">Last Name / Surname</th>
                            <td>
                                <input type="text" name="FLname2" id="FLname" class="FLname2 req" placeholder="FATHERS LAST NAME/SURNAME" maxlength="25" onblur="valid_required(this,'Father Last Name','0'),this.value = this.value.toUpperCase();" onkeypress="return ValidAlpha(event);" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;"
                                       value="<?php echo $_SESSION['3-2-6']; ?>">
                            </td>
                </tr>
                
		<tr class="fatherMS">
                    <th class="required">First Name</th>
				<td>
				  <input type="text" name="FFname2" id="FFname" class="FFname2 req" placeholder="FATHERS FIRST NAME" maxlength="25" onblur="valid_required(this,'Father First Name','0'),this.value = this.value.toUpperCase();" onkeypress="return ValidAlpha(event);" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;"
                                         value="<?php echo $_SESSION['3-2-7']; ?>">
				</td>
		</tr>
                <tr class="fatherMS">
			
                    <th>Middle Name</th>
				<td>
                                    <input type="text" name="FMname2" id="FMname" class="FMname2" placeholder="FATHERS MIDDLE NAME" maxlength="25" onkeypress="return ValidAlpha(event);" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" onblur="this.value = this.value.toUpperCase();"
                                          value="<?php echo $_SESSION['3-2-8']; ?>">
				</td>
				
                </tr>	
                
		<tr id="gen">
                    <th class="required">Gender</th>
                    <td>

                        <input type="text" name='Gender2' id='Gender' class='Gender' readonly="true" value="<?php echo $_SESSION['3-2-9'];?>" />


                    </td>
		</tr>
		<tr id="">
                    <th class="required"> Date of Birth/Incorporation/Agreement/Partnership or Trust Deed/Formation of Body of individuals or association of Persons</th>
                                <td>
                                    <input type="text" name="date2" id="date2" maxlength="10"  class="date req"   placeholder="DD/MM/YYYY" onblur="validatedob(this), valid_required(this,'Date Of Birth','0'); " onkeypress="if (event.keyCode == 13) return validatedob(this)"  value="<?php echo $_SESSION['3-2-10']; ?>"> <div id="dterequre" style="color:red;"></div>
				</td>
		</tr>
		</table>
		
   
    <br>
    <br>
  
	
	     <div align="center" class="buttons">
		
                <button type="submit" id="Level2persubmit" class="Level2persubmit btns" name="level2personal_submit" onclick="return valid_personal_level2();">Submit</button>
                <button type="button" id="Level2perprevious" class="Level2perprevious btns" name="Level2perprevious">Previous</button>
                <button type="button" id="Level2pernext" class="Level2pernext btns"  name="Level2pernext">Next</button>
                <button type="submit" class="Level2perfinal btns" id="Level2perfinal"  name="Level2_Final" >Final Submit</button>
		 
             </div>
		 
	</form>
	
</div>

