<div id="Tab5I">
    <center>
        <form name="ra"  action="" method="post">
            <div id="raTable">
        <table class="table2" id="">
            
                   
                        
            <tr>
                
                <th class="required">Note</th>
                <td><span style="color:red "> * </span>  One of the Residence Address field is mandatory
                
                </td>
                
            </tr>
            
            <tr>
                    <th class="required">FORM ID</th>
                    <td class="required"><?php echo $_SESSION['QC_Form_ID']; ?></td>
            </tr> 
            
             <tr >
                <th class="required">Is Representative Assessee Details Available(Yes or No)</th>
                <td>
                    <select name="Rdetail" id="Rdetail" class="Rdetail" onblur="valid_select(this,'Detail','0');">
                           
                           <option value="<?php if(!empty($_SESSION['5-5-12'])) { echo $_SESSION['5-5-12']; } else { "";}?>">
                               <?php if(!empty($_SESSION['5-5-12'])) { echo $_SESSION['5-5-12']; } else { echo 'Select RA Info'; } ?></option>
                               
                                <option value="Y">Yes</option>
                            <option value="N">No</option>
                    </select>
                </td>   
            </tr>
            
            <tr class="ra1" >
                <th colspan="2"  style="color: black;background-color: #E2E2E2; font-weight: normal;font-size: 15px;">Full Name(Full expanded name:Initials are not permitted)</th>
            </tr>
            
            
            <tr class="ra1">
                <th class="required">Please select title,as applicable</th>
                <td>
                    <select name="Rtitle" id="Rtitle" class="Rtitle" onblur="valid_select(this,'Title','0');">
                           
                           <option value="<?php if(!empty($_SESSION['5-5-1'])) { echo $_SESSION['5-5-1']; } else { "";}?>">
                               <?php if(!empty($_SESSION['5-5-1'])) { echo $_SESSION['5-5-1']; } else { echo 'Select Application Title'; } ?></option>
                               <?php App_Title(); ?>
                           
                    </select>
                </td>    
            </tr>
            
            <tr class="ra1">
                <th class="required">Last Name / Surname</th>
                    <td>
                        <input type="text" name="Rlast" id="Rlast" class="Rlast" placeholder="LAST NAME/SURNAME" class="" maxlength="25" onkeypress="return ValidAlpha(event);" style="text-transform: uppercase;" onKeyup="ValidFirstSpace(this);" onblur="this.value = this.value.toUpperCase();"
                               value="<?php echo $_SESSION['5-5-2']; ?>">
                    </td>
                
            </tr>
            <tr class="ra1">
                <th class="required">First Name</th>
                    <td>
                        <input type="text" name="Rfirst" id="Rfirst" class="Rfirst" placeholder="FIRST NAME" class="" maxlength="25" onkeypress="return ValidAlpha(event);" style="text-transform: uppercase;" onKeyup="ValidFirstSpace(this);" onblur="this.value = this.value.toUpperCase();"
                               value="<?php echo $_SESSION['5-5-3']; ?>">
                    </td>
                
            </tr>
            <tr class="ra1">
                <th>Middle Name</th>
                    <td>
                        <input type="text" name="Rmiddle" id="Rmiddle" class="Rmiddle" placeholder="MIDDLE NAME" class="" maxlength="25" onkeypress="return ValidAlpha(event);" style="text-transform: uppercase;" onKeyup="ValidFirstSpace(this);" onblur="this.value = this.value.toUpperCase();"
                               value="<?php echo $_SESSION['5-5-4']; ?>">
                    </td>
                
            </tr>
            <tr class="ra1">
                <th colspan="2" style="color: black;background-color: #E2E2E2; font-weight: normal;font-size: 15px;">Address</th>
            </tr>
            
            <tr class="ra1">
                <th>Flat/Room/Door/Block No&nbsp;&nbsp;<span style="color:red "> * </span></th>
                    <td>
                        <input type="text" name="Rflat" id="Rflat" class="Rflat" maxlength="25" placeholder="FLAT/BLOCK NO" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" onblur="this.value = this.value.toUpperCase();"
                               value="<?php echo $_SESSION['5-5-5']; ?>">
                    </td>
            </tr>
            <tr class="ra1">
                <th>Name of Premises/Building/Village&nbsp;&nbsp;<span style="color:red "> * </span></th>
                    <td>
                        <input type="text" name="Rbuilding" id="Rbuilding" class="Rbuilding" maxlength="25" placeholder="NAME OF PREMISES" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" onblur="this.value = this.value.toUpperCase();"
                               value="<?php echo $_SESSION['5-5-6']; ?>">
                    </td>
            </tr>
            <tr class="ra1">
                <th>Road/Street/Lane/Post Office&nbsp;&nbsp;<span style="color:red "> * </span></th>
                    <td>
                        <input type="text" name="Rroad" id="Rroad" class="Rroad" maxlength="25" placeholder="ROAD/STREET/POST OFFICE" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" onblur="this.value = this.value.toUpperCase();"
                               value="<?php echo $_SESSION['5-5-7']; ?>">
                    </td>
            </tr>
            <tr class="ra1">
                <th>Area/Locality/Taluka/Sub-Division&nbsp;&nbsp;<span style="color:red "> * </span></th>
                    <td>
                        <input type="text" name="Rarea" id="Rarea" class="Rarea" maxlength="25" placeholder="AREA/LOCALITY/TALUKA" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" onblur="this.value = this.value.toUpperCase();"
                               value="<?php echo $_SESSION['5-5-8']; ?>">
                    </td>
            </tr>
            <tr class="ra1">
                <th class="required">Town/City/District</th>
                    <td>
                        <input type="text" name="Rtown" id="Rtown" class="Rtown" maxlength="25" placeholder="TOWN/CITY" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" onblur="this.value = this.value.toUpperCase();"
                               value="<?php echo $_SESSION['5-5-9']; ?>">
                    </td>
            </tr>
            <tr class="ra1">
                <th class="required">State/Union Territory</th>
                    <td>
                        <select name="RState" id="Rstate" class="Rstate" onblur="valid_select(this,'State','0');">
                                <option value="<?php if(!empty($_SESSION['5-5-10'])) { echo $_SESSION['5-5-10']; } else { "";}?>">
                                <?php if(!empty($_SESSION['5-5-10'])) { echo $_SESSION['5-5-10']; } else { echo "Select State"; } ?></option>
                                </option>  					
		<?php State(); ?>
		            
	        </select>
                    </td>
            </tr>
            <tr class="ra1">
                <th class="required">Pincode</th>
                    <td>
                        <input type="text" name="Rpincode" id="Rpincode" class="Rpincode" placeholder="PINCODE" maxlength="6" min="6" onkeypress="return ValidNum(event);"
                               value="<?php echo $_SESSION['5-5-11']; ?>">
                    </td>
            </tr>
        </table>
            </div>
        <br> 
        <br> 
        <br>
        <br> 
       
        <div align="center" class="buttons">
		
	<button type="submit" id="Rasubmit" class="Rasubmit btns" name="Rasubmit" onclick="return Valid_RA();">Submit</button>
	<button type="button" id="Rapre"  name="Rapre" class="Rapre btns">Previous</button>
	<button type="button" id="Ranext"  name="Ranext" class="Ranext btns">Next</button>
	<button type="submit" class="btns" id=""  name="Level1_Final" >Final Submit</button>
		 
        </div> 
        
      </form>   
        
    
</div>
