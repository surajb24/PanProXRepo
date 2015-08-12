
<div id="Tab2I">
    <center>
        <form name="personal" action="" method="post">
	    <table class="table2" >
                
		 <tr>
                    <th class="required">FORM ID</th>
                    <td class="required">
                        <?php echo $_SESSION['Level1_Form_ID']; ?>
                    </td>
                    
                </tr>	
                <tr>
                    <th class="required"> Title</th>
	            <td>
                        <select name="title" id="title" class="title" onblur="valid_select(this,'Applicant Title ','0');">
                           <option value="<?php if(!empty($_SESSION['2-2-1'])) { echo $_SESSION['2-2-1']; } else { "";}?>">
                               <?php if(!empty($_SESSION['2-2-1'])) { echo $_SESSION['2-2-1']; } else { echo 'Select Application Title'; } ?></option>
                           <?php App_Title(); ?>
		            
	        </select>
                            </td>
	        </tr>
                        
		<tr>
			
                    <th class="required"> Last Name / Surname</th>
                    <td>
                        <input type="text" name="Lname" id="Lname" class="Lname req" placeholder="LAST NAME/SURNAME" onblur="valid_required(this,'Applicant Last Name','0'),this.value = this.value.toUpperCase();" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" value="<?php echo $_SESSION['2-2-2'];?>">
                    </td>

		</tr>
			
		<tr class="firstMS">
                    <th class="required">First Name</th>
                        <td>
                            <input type="text" name="Fname" id="Fname" class="Fname req"  placeholder="FIRST NAME" maxlength="25" onblur="valid_required(this,'Applicant First Name','0'),this.value = this.value.toUpperCase();" onkeypress="return ValidAlpha(event);" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;"
                                   value="<?php echo $_SESSION['2-2-3'];?>">
			</td>
		</tr>
		<tr class="firstMS">
		    <th>Middle Name</th>
			<td>
                            <input type="text" name="Mname" id="Mname" class="Mname" placeholder="MIDDLE  NAME"   maxlength="25" onblur="this.value = this.value.toUpperCase();" onkeypress="return ValidAlpha(event);" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" value="<?php echo $_SESSION['2-2-4'];?>">
			</td>
		</tr>
			
		<tr id="">
                    <th class="required">Abbreviations of the above name,as you would like it,to be printed on the PAN card</th>
				<td>


                                    

                                    <input type="text" name="Abb" id="Abb" placeholder="ABBREVIATION" class="Abb req" onblur="valid_required(this,'Abbreviation Name','0'),this.value = this.value.toUpperCase();" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" maxlength="85" value="<?php echo $_SESSION['2-2-5'];?>">



                              

				</td>
		</tr>
			
                <tr  class="otherC">
                    <th class="required">Have you ever been known by any other name<p>If yes,please give that other name</p></th>
                        <td>
                            <select name="other" id="other" class="other req" onblur="valid_select(this,'Yes or NO ','0');">
                                <option value="<?php if(!empty($_SESSION['2-2-6'])) { echo $_SESSION['2-2-6']; }else{ echo "";} ?>"><?php if(!empty($_SESSION['2-2-6'])) { echo $_SESSION['2-2-6']; }else{ echo "Select Other Name";} ?></option>
                                <option value="Y">Y</option>
                                <option value="N">N</option>
                           </select>
                            
                        </td>
                </tr>
                
                <tr class="appA">
             
                    <th class="required"> Please select title as applicable</th>
                        <td>
                            <select name="otitle" id="otitle" class="otitle req" onblur="valid_select(this,'Other Title ','0'),this.value = this.value.toUpperCase();" >
                                       <option value="<?php if($_SESSION['2-2-7']) { echo $_SESSION['2-2-7']; }else{ echo ""; } ?>"><?php if(!empty($_SESSION['2-2-7'])) { echo $_SESSION['2-2-7']; }else{ echo "Select Other Title"; } ?></option>

                                        <?php App_Title(); ?>

                                        </select>
                        </td>
	</tr>
                
                        <tr class="appA">
			
                    <th class="required"> Last Name / Surname</th>
		<td>


                   <input type="text" name="OLname" id="OLname" class="OLname req" placeholder="OTHER'S LAST NAME/SURNAME" maxlength="25" onblur="valid_required(this,'Other Last Name','0'),this.value = this.value.toUpperCase();" onkeypress="return ValidAlpha(event);" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" value="<?php echo $_SESSION['2-2-8']; ?>">

                                </td>
                        </tr>
			
		<tr class="appA">
                    <th class="required">First Name</th>
				<td>


		<input type="text" name="OFname" id="OFname" class="OFname req"  placeholder="OTHER'S FIRST NAME" maxlength="25" onblur="valid_required(this,'Other First Name','0'),this.value = this.value.toUpperCase();" onkeypress="return ValidAlpha(event);" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" value="<?php echo $_SESSION['2-2-9']; ?>">


				</td>
		</tr>
                
		<tr  class="appA">
		    <th>Middle Name</th>
				<td>

				  <input type="text" name="OMname" id="OMname" class="OMname" placeholder="OTHER'S MIDDLE NAME" maxlength="25"  onkeypress="return ValidAlpha(event);" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" onblur="this.value = this.value.toUpperCase();" value="<?php echo $_SESSION['2-2-10']; ?>">

                                 
				</td>
		</tr>
                
		<tr id="gen">
                    <th class="required"> Gender</th>
                    <td>
                        
                        <input type="text" name='Gender' id='Gender' class='Gender' readonly="true" value="<?php echo $_SESSION['2-2-11'];?>" />
                        
                    </td>
		</tr>
		<tr id="">
                    <th class="required"> Date of Birth/Incorporation/Agreement/Partnership or Trust Deed/Formation of Body of individuals or association of Persons</th>
                                <td>

                                    <input type="text" name="date" id="date" maxlength="10"  placeholder="DD/MM/YYYY" class="date req" onblur="validatedob(this),valid_required(this,'Date Of Birth','0'); " onkeypress="if (event.keyCode == 13) return validatedob(this)"
                                           value="<?php echo $_SESSION['2-2-12']; ?>"><div id="dterequre" style="color:red;"></div>

                                 

				</td>
		</tr>
		<tr class="fatherMS">
                    <th colspan="2"> Father's Name (Only 'individual applicants':Even married women should fill in father's name only)</th>
                    
		</tr>
                
                 <tr class="fatherMS">
                     <th class="required">Last Name / Surname</th>
                            <td>

                              

                             <input type="text" name="FLname" id="FLname" class="FLname req" placeholder="FATHER LAST NAME/SURNAME" maxlength="25" onblur="valid_required(this,'Father Last Name','0'),this.value = this.value.toUpperCase();" onkeypress="return ValidAlpha(event);" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" value="<?php echo $_SESSION['2-2-13']; ?>">

                            </td>
                </tr>
                
		<tr class="fatherMS">
                    <th class="required">First Name</th>
				<td>

				  

				  <input type="text" name="FFname" id="FFname" class="FFname req" placeholder="FATHER FIRST NAME" maxlength="25" onblur="valid_required(this,'Father First Name','0'),this.value = this.value.toUpperCase();" onkeypress="return ValidAlpha(event);" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" value="<?php echo $_SESSION['2-2-14']; ?>">

				</td>
		</tr>
                <tr class="fatherMS">
			
                    <th>Middle Name</th>
                                                        <td>
                                                            <input type="text" name="FMname" id="FMname" class="FMname" placeholder="FATHER MIDDLE NAME" maxlength="25" onkeypress="return ValidAlpha(event);" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" onblur="this.value = this.value.toUpperCase();" value="<?php echo $_SESSION['2-2-15']; ?>">
                                                        </td>
				
                </tr>	
                
                <tr class="AppC">
                    <th>Document Mismatch</th>
                    
                    <td>
                        <input type="checkbox" name="PM" id="PM" class="chk"
                               value="P"<?php if($_SESSION['2-2-16']=="P") { echo "checked"; } ?>>
                                Photo Mismatch
                                
                        <input type="checkbox" name="SM" id="SM" class="chk" 
                                value="S"<?php if($_SESSION['2-2-17']=="S") { echo "checked"; } ?>>
                                Sign Mismatch
                    </td>
                    
                </tr>
                
                
	</table>
  
   <br/>
   <br/>
   
                       	
	     <div align="center" class="buttons">
		
			<button type="submit" id="Personalsubmit" class="Personalsubmit btns" name="Personalsubmit" onclick="return valid_Person();">Submit</button>
			<button type="button" id="Personalpre"  name="Personalpre" class="Personalpre btns">Previous</button>
			<button type="button" id="Personalnext"  name="Personalnext" class="Personalnext btns">Next</button>
			<button type="submit" class="btns" id=""  name="Level1_Final" >Final Submit</button>
		 
            </div>
		 
	</form>
	
</div>
