<div id="Tab8I">
    
    <center>
            <form name="level2app" action="" method="post">
               
            <table class="table2" >
                
                 <tr>
                    <th class="required">FORM ID</th>
                    <td class="required">
                        <?php echo $_SESSION['Level2_Form_ID']; ?>
                    </td>
                    
                </tr>
                
	<tr>
                    <th class="required">Application Type</th>
	        <td>
                                <select name="level2apptype" id="apptype" class="level2apptype req" onblur="valid_select(this,'Application Type','0');">
                                   <option value='<?php if(!empty($_SESSION['3-1-1'])) { echo $_SESSION['3-1-1'] ;} else { echo ''; } ?>'>
                                        <?php if(!empty($_SESSION['3-1-1'])) { echo $_SESSION['3-1-1'];} else { echo 'Select Application Type'; } ?>
                                    </option>
			<?php App_Type(); ?>
                                     
	               </select>
                           
                </td>
	</tr>
		
                <tr>
			
                    <th class="required">Application No</th>
                    <td>
                        <input type="text" name="level2app_no"  id="level2app_no" class="level2app_no req"  placeholder="APPLICATION NO" maxlength="10"
                        onblur="valid_required(this,'Application number','0');" onkeypress="return ValidNum(event);"
                        value="<?php echo $_SESSION['3-1-2']; ?>">
                    </td>
                    
                </tr>
                
                <tr>
			
                    <th>Inward No</th>
                    <td>
                        <input type="text" name="level2inword_no"  id="level2inword_no" class="level2inword_no"  placeholder="INWARD NO"
                               value="<?php echo $_SESSION['3-1-3']; ?>">
                    </td>
                    
		</tr>
                
                <tr>
			
                    <th class="required">Coupon No</th>
                    <td>
                        <input type="text" name="level2coupon_No"  id="level2coupon_No" class="level2coupon_No req"  placeholder="COUPON NO" maxlength="10" 
                               onkeypress="return ValidNum(event);" onblur="valid_required(this,'Coupon number','0');"
                               value="<?php echo $_SESSION['3-1-4']; ?>">
                    </td>
                    
                </tr>

            </table>

               
		<br/>
		<br/>
                
	    <div align="center" class="buttons">
                                    <button type="submit" id="Level2appsubmit" class="Level2appsubmit btns" name="level2app_submit" onclick="return validapplevel2();">Submit</button>
                                    <button type="button" id="Level2appprevious" class="Level2appprevious btns"  name="Level2appprevious">Previous</button>
                                    <button type="button" id="Level2appnext" class="Level2appnext btns" name="Level2appnext">Next</button>
                                    <button type="submit" class="Level2appfinal btns" id="Level2appfinal"  name="Level2_Final" >Final Submit</button>
		 
                        </div>
                	 
	</form>
	
</div>
