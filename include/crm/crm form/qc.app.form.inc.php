<div id="Tab1I">
    <center>
            <form name="app_form" action="" method="post" >
               
            <table class="table2" >
            <tr>
                    <th class="required">FORM ID</th>
                    <td class="required"><?php echo $_SESSION['QC_Form_ID']; ?></td>
            </tr>         
	<tr>
                    <th class="required">Application Type</th>
	        <td>
                    <select name="apptype" id="apptype" class="apptype req" onblur="valid_select(this,'Application Type','0');">
                                    <option value='<?php if(!empty($_SESSION['5-1-1'])) { echo $_SESSION['5-1-1'] ;} else { echo ''; } ?>'>
                                        <?php if(!empty($_SESSION['5-1-1'])) { echo $_SESSION['5-1-1'];} else { echo 'Select Application Type'; } ?>
                                    </option>
			<?php App_Type(); ?>
                                     
	               </select>
                           
                        </td>
	</tr>
		
                <tr>
			
                    <th class="required">Application No</th>
                    <td>
                        <input type="text" name="app_no"  id="app_no" class="app_no req"  placeholder="APPLICATION NO" maxlength="10" onblur="valid_required(this,'Application number','0');" onkeypress="return ValidNum(event);" value="<?php echo $_SESSION['5-1-2'];?>">
                    </td>
                    
	</tr>
                
                <tr>
			
                    <th>Inward No</th>
                    <td>
                        <input type="text" name="inword_no"  id="inword_no" class="inword_no"  placeholder="INWARD NO"  value="<?php echo $_SESSION['5-1-3'];?>">
                    </td>
                    
		</tr>
                
                <tr>
			
                    <th class="required">Coupon No</th>
                    <td>
                        <input type="text" name="coupon_no"  id="coupon_no" class="coupon_no req"  placeholder="COUPON NO" maxlength="10" onkeypress="return ValidNum(event);" onblur="valid_required(this,'Coupon number','0');" value="<?php echo $_SESSION['5-1-4'];?>">
                    </td>
                    
	</tr>
      
        <tr class="app1">
			
                    <th class="required">Area Code</th>
                    <td>
                        <input type="text" name="ac"  id="ac" class="ac req"  placeholder="AC" maxlength="3" size="3" onblur="valid_required(this,'Area Code number','0'),this.value = this.value.toUpperCase();" onKeyup="ValidFirstSpace(this);"  onkeypress="return ValidAlpha(event);" style="text-transform: uppercase;" value="<?php echo $_SESSION['5-1-5'];?>"/>
                    </td>
                    
	</tr>
			
        <tr class="app1" >
			
                    <th class="required">AO Type</th>
                    <td>
                        <input type="text" name="ao_type"  id="ao_type" class="ao_type req"  placeholder="AO TYPE" maxlength="2" size="3" onblur="valid_required(this,'Ao Type..','0'),this.value = this.value.toUpperCase();" onKeyup="ValidFirstSpace(this);"  onkeypress="return ValidAlpha(event);" style="text-transform: uppercase;" value="<?php echo $_SESSION['5-1-6'];?>"/>
                    </td>
                    
		</tr>
           
                <tr class="app1">
			
                    <th class="required">Range Code</th>
                    <td>
                        <input type="text" name="range_code"  id="range_code" class="range_code req"  placeholder="RC" maxlength="3" size="3" onblur="valid_required(this,'Range code number','0');" onkeypress="return ValidNum(event);" value="<?php echo $_SESSION['5-1-7'];?>"/>
                    </td>
                    
                </tr>
                
                <tr class="app1">
			
                    <th class="required">Ao No</th>
                    <td>
                        <input type="text" name="ao_no"  id="ao_no" class="ao_no req"  placeholder="AO NO" maxlength="2" size="3" onblur="valid_required(this,'AO number','0');" onkeypress="return ValidNum(event);" value="<?php echo $_SESSION['5-1-8'];?>"/>
                    </td>
                    
		</tr>
         
                
		<tr class="AppC">
                    <th class="required">PAN No</th>
                    <td>
                        <input type="text" name="pan_no" id="pan_no" class="pan_no req" placeholder="PAN NO" maxlength="10" onblur="valid_required(this,'PAN number','0'),PanValidate(this);" onkeyup="firstCharSpace(this);" style="text-transform: uppercase;" value="<?php echo $_SESSION['5-1-9'];?>"/><div id="idreturn" style="color:red;"></div>
                    </td>
		</tr>
			
            </table>
    
               
		<br/>
		<br/>
	
	     <div align="" class="buttons">
                       <button type="submit" id="app_submit" class="app_submit btns" name="app_submit" onclick="return validation_App();">Submit</button>
			<button type="button" id="apppre"  name="apppre" class="apppre btns">Previous</button>
			<button type="button" id="appnext"  name="appnext" class="appnext btns">Next</button>
			<button type="submit" class="btns" id=""  name="Level1_Final" >Final Submit</button>
		 
		 </div>
		 
	</form>
	
</div>


