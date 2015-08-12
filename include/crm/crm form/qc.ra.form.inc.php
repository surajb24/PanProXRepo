<div id="Tab5I">
    <center>
        <form name="ra"  action="" method="post">
            <div id="raTable">
        <table class="table2" id="">
            <tr>
                    <th class="required">FORM ID</th>
                    <td class="required"><?php echo $_SESSION['QC_Form_ID']; ?></td>
            </tr> 
            <tr >
                <th colspan="2">Full Name(Full expanded name:Initials are not permitted)</th>
            </tr>
            
            <tr >
                <th>Please select title,as applicable</th>
                <td>
                    <select name="Rtitle" id="Rtitle" class="Rtitle" onblur="valid_select(this,'Title','0');">
                           
                           <option value="<?php if(!empty($_SESSION['5-5-1'])) { echo $_SESSION['5-5-1']; } else { "";}?>">
                               <?php if(!empty($_SESSION['5-5-1'])) { echo $_SESSION['5-5-1']; } else { echo 'Select Application Title'; } ?></option>
                               <?php App_Title(); ?>
                           
                    </select>
                </td>    
            </tr>
            
            <tr>
                <th>Last Name / Surname</th>
                    <td>
                        <input type="text" name="Rlast" id="Rlast" class="Rlast" placeholder="LAST NAME/SURNAME" class="" maxlength="25" onkeypress="return ValidAlpha(event);" style="text-transform: uppercase;" onKeyup="ValidFirstSpace(this);" onblur="this.value = this.value.toUpperCase();"
                               value="<?php echo $_SESSION['5-5-2']; ?>">
                    </td>
                
            </tr>
            <tr>
                <th>First Name</th>
                    <td>
                        <input type="text" name="Rfirst" id="Rfirst" class="Rfirst" placeholder="FIRST NAME" class="" maxlength="25" onkeypress="return ValidAlpha(event);" style="text-transform: uppercase;" onKeyup="ValidFirstSpace(this);" onblur="this.value = this.value.toUpperCase();"
                               value="<?php echo $_SESSION['5-5-3']; ?>">
                    </td>
                
            </tr>
            <tr>
                <th>Middle Name</th>
                    <td>
                        <input type="text" name="Rmiddle" id="Rmiddle" class="Rmiddle" placeholder="MIDDLE NAME" class="" maxlength="25" onkeypress="return ValidAlpha(event);" style="text-transform: uppercase;" onKeyup="ValidFirstSpace(this);" onblur="this.value = this.value.toUpperCase();"
                               value="<?php echo $_SESSION['5-5-4']; ?>">
                    </td>
                
            </tr>
            <tr>
                <th colspan="2">Address</th>
            </tr>
            
            <tr>
                <th>Flat/Room/Door/Block No</th>
                    <td>
                        <input type="text" name="Rflat" id="Rflat" class="Rflat" maxlength="25" placeholder="FLAT/BLOCK NO" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" onblur="this.value = this.value.toUpperCase();"
                               value="<?php echo $_SESSION['5-5-5']; ?>">
                    </td>
            </tr>
            <tr>
                <th>Name of Premises/Building/Village</th>
                    <td>
                        <input type="text" name="Rbuilding" id="Rbuilding" class="Rbuilding" maxlength="25" placeholder="NAME OF PREMISES" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" onblur="this.value = this.value.toUpperCase();"
                               value="<?php echo $_SESSION['5-5-6']; ?>">
                    </td>
            </tr>
            <tr>
                <th>Road/Street/Lane/Post Office</th>
                    <td>
                        <input type="text" name="Rroad" id="Rroad" class="Rroad" maxlength="25" placeholder="ROAD/STREET/POST OFFICE" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" onblur="this.value = this.value.toUpperCase();"
                               value="<?php echo $_SESSION['5-5-7']; ?>">
                    </td>
            </tr>
            <tr>
                <th>Area/Locality/Taluka/Sub-Division</th>
                    <td>
                        <input type="text" name="Rarea" id="Rarea" class="Rarea" maxlength="25" placeholder="AREA/LOCALITY/TALUKA" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" onblur="this.value = this.value.toUpperCase();"
                               value="<?php echo $_SESSION['5-5-8']; ?>">
                    </td>
            </tr>
            <tr>
                <th>Town/City/District</th>
                    <td>
                        <input type="text" name="Rtown" id="Rtown" class="Rtown" maxlength="25" placeholder="TOWN/CITY" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" onblur="this.value = this.value.toUpperCase();"
                               value="<?php echo $_SESSION['5-5-9']; ?>">
                    </td>
            </tr>
            <tr>
                <th>State/Union Territory</th>
                    <td>
                        <select name="RState" id="Rstate" class="Rstate" onblur="valid_select(this,'State','0');">
                                <option value="<?php if(!empty($_SESSION['5-5-10'])) { echo $_SESSION['5-5-10']; } else { "";}?>">
                                <?php if(!empty($_SESSION['5-5-10'])) { echo $_SESSION['5-5-10']; } else { echo "Select State"; } ?></option>
                                </option>  					
		<?php State(); ?>
		            
	        </select>
                    </td>
            </tr>
            <tr>
                <th>Pincode</th>
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
		
	<button type="submit" id="Rasubmit" class="Rasubmit btns" name="Rasubmit">Submit</button>
	<button type="button" id="Rapre"  name="Rapre" class="Rapre btns">Previous</button>
	<button type="button" id="Ranext"  name="Ranext" class="Ranext btns">Next</button>
	<button type="submit" class="btns" id=""  name="Level1_Final" >Final Submit</button>
		 
        </div> 
        
      </form>   
        
    
</div>

