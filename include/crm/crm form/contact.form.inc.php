<div id="Tab3I">
    <center>
    <form name="contact" action="" method="post">
        
        <table class="table2">
            
            <tr>
                <th class="required">FORM ID</th>
                <td class="required">
                    <?php echo $_SESSION['Level1_Form_ID']; ?>
                </td>
           </tr>
            
            <tr>
                <th class="required">Address for Communication</th>
            
                <td> 
                    <select name="addcom" id="addcom" class="addcom req" onblur="valid_select(this,'Address For Communication','0');" >

                        <option value='<?php if(!empty($_SESSION['2-3-1'])) { echo $_SESSION['2-3-1']; } else { '';}?>'>
                                
                               <?php if(!empty($_SESSION['2-3-1'])) { echo $_SESSION['2-3-1']; } else { echo 'Address For Communication'; } ?></option>
                         </option>
			
			<?php Address_Communication(); ?>
  
                    </select>
                </td>
            </tr>
            
            
            <tr class="residence" >
                <th colspan="2">Residence Address</th>
            </tr> 
            
            <tr class="residence">

                    <th>Flat/Room/Door/Block No</th>
                    <td>

                        <input type="text" name="RAdd" id="RAdd" class="RAdd req" placeholder="FLAT/ROOM/BLOCK NO" maxlength="25" onkeyup="ValidFirstSpace(this)" style="text-transform: uppercase;" onblur="valid_required(this,'Flat No','0'),this.value = this.value.toUpperCase();"  value="<?php echo $_SESSION['2-3-2'];?>">
                    </td>
            </tr>
            
            <tr class="residence">
                <th>Name of Premises/Building/Village</th>
                    <td>
                        <input type="text" name="RNPremises" id="RNPremises" class="RNPremises" placeholder="NAME OF PREMISES" maxlength="25" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" onblur="this.value = this.value.toUpperCase();"
                               value="<?php echo $_SESSION['2-3-3'];?>">
                    </td>
            </tr>
            
            <tr class="residence">
                <th>Road/Street/Lane/Post Office</th>
                    <td>
                        <input type="text" name="RRSL" id="RRSL" class="RRSL" placeholder="ROAD/STREET/LANE" maxlength="25" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" onblur="this.value = this.value.toUpperCase();"
                               value="<?php echo $_SESSION['2-3-4'];?>"> 
                    </td>
            </tr>
            
            <tr class="residence">
                <th>Area/Locality/Taluka/Sub-Division</th>
                    <td>
                        <input type="text" name="RALT" id="RALT" class="RALT req" placeholder="AREA/LOCALITY/TALUKA" maxlength="25" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" onblur="valid_required(this,'Area/Taluka','0'),this.value = this.value.toUpperCase();"
                               value="<?php echo $_SESSION['2-3-5'];?>">
                    </td>
            </tr>
            
            <tr class="residence">
                <th>Town/City/District</th>
                    <td>
                        <input type="text" name="RTCD" id="RTCD" class="RTCD req" placeholder="TOWN/CITY/DISTRICT" maxlength="25" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" onblur="valid_required(this,'Town/City','0'),this.value = this.value.toUpperCase();"
                               value="<?php echo $_SESSION['2-3-6'];?>">
                    </td>
            </tr>
            
            <tr class="residence">
                <th class="required">State/Union Territory</th>
                    <td>
                        
		<select name="RState" id="RState" class="RState req" onblur="valid_select(this,'State','0');">
		        <option value="<?php if(!empty($_SESSION['2-3-7'])) { echo $_SESSION['2-3-7']; } else { "";}?>">
                                        <?php if(!empty($_SESSION['2-3-7'])) { echo $_SESSION['2-3-7']; } else { echo "Select State"; } ?></option>
                                        </option>  					
			<?php State(); ?>
		            
	               </select>		
                            
                    </td>
            </tr>
            
            <tr class="residence">
                <th>Pin code/Zip code</th>
                    <td>

                        <input type="text" name="RPZcode" id="RPZcode" class="RPZcode req" placeholder="PINCODE/ZIP CODE" maxlength="6" onkeypress="return ValidNum(event);" onblur="valid_required(this,'Pincode','0')"
                               value="<?php echo $_SESSION['2-3-8']; ?>">

                        

                    </td>
            </tr>
            
            <tr class="residence">
                <th class="required">Country Name</th>
                    <td>
                        
                       <select name="RCountry" id="RCountry" class="RCountry req" onblur="valid_select(this,'Country','0');">

		            <option value="<?php if(!empty($_SESSION['2-3-9'])) { echo $_SESSION['2-3-9']; } else { echo ""; } ?>">
                                            <?php if(!empty($_SESSION['2-3-9'])) { echo $_SESSION['2-3-9']; } else { echo "Select Country"; } ?>
                                            </option>  
					
			<?php Country(); ?>
		            

	               </select>	
                        

                    </td>
            </tr>
    
                
            <tr class="selectoffice">
                <th>Please Select Office address</th>
                <td>
                    <select name="selectyes" id="selectyes" class="selectyes">
                        <option>---Select---</option>
                        <option value="Y">Yes</option>
                        <option value="N">No</option>
                    </select>
                </td>
            </tr>
            
           
            <tr class="office">
                <th colspan="2">Office Address</th>
            </tr>
            
            <tr class="office">
                <th>Name of office</th>
                    <td>
                        <input type="text" name="ONameofoffice" id="ONameofoffice" class="ONameofoffice" placeholder="NAME OF OFFICE" maxlength="75" onkeyup="ValidFirstSpace(this);" onblur="this.value = this.value.toUpperCase();"
                               style="text-transform: uppercase;"
                                   value="<?php echo $_SESSION['2-3-10']; ?>">
                    </td>
            </tr>
            <tr class="office">
                <th>Flat/Room/Door/Block No</th>
                    <td>
                        <input type="text" name="OFRDB" id="OFRDB" class="OFRDB" placeholder="FLAT/ROOM NO" maxlength="25" onkeyup="ValidFirstSpace(this);"  onblur="this.value = this.value.toUpperCase();" style="text-transform: uppercase;"
                                 value="<?php echo $_SESSION['2-3-11']; ?>">
                    </td>
            </tr>
            
            <tr class="office">
                <th>Name of Premises/Building/Village</th>
                    <td>
                        <input type="text" name="OPremises" id="OPremises" class="OPremises" placeholder="NAME OF PREMISES" maxlength="25" onkeyup="ValidFirstSpace(this);"  onblur="this.value = this.value.toUpperCase();" style="text-transform: uppercase;"
                                 value="<?php echo $_SESSION['2-3-12']; ?>">
                    </td>
            </tr>
            
            <tr class="office">
                <th>Road/Street/Lane/Post Office</th>
                    <td>
                        <input type="text" name="ORSLP" id="ORSLP" class="ORSLP" placeholder="ROAD/STREET/LANE" maxlength="25" onkeyup="ValidFirstSpace(this);" onblur="this.value = this.value.toUpperCase();" style="text-transform: uppercase;"
                                 value="<?php echo $_SESSION['2-3-13']; ?>">
                    </td>
            </tr>
            
            <tr class="office">
                <th>Area/Locality/Taluka/Sub-Division</th>
                <td>
                    <input type="text" name="OALTS" id="OALTS" class="OALTS req" placeholder="AREA/LOCALITY/TALUKA" maxlength="25" onkeyup="ValidFirstSpace(this);" onblur="this.value = this.value.toUpperCase();" style="text-transform: uppercase;"                            value="<?php echo $_SESSION['2-3-14']; ?>">
                    </td>
            </tr>
            
            <tr class="office">
                <th>Town/City/District</th>
                    <td>
                        <input type="text" name="OTCD" id="OTCD" class="OTCD req" placeholder="TOWN/CITY/DISTRICT" maxlength="25" onkeyup="ValidFirstSpace(this);"  onblur="this.value = this.value.toUpperCase();" style="text-transform: uppercase;"
                                 value="<?php echo $_SESSION['2-3-15']; ?>">
                    </td>
            </tr>
            
            <tr class="office">
                <th class="required">State/Union Territory</th>
                    <td>
                        <select name="OState" id="OState" class="OState req" <!--onblur="valid_select(this,'State','0');"-->>
                                                <option value="<?php if(!empty($_SESSION['2-3-16'])) { echo $_SESSION['2-3-16']; } else { echo ""; }?>">
                                                <?php if(!empty($_SESSION['2-3-16'])) { echo $_SESSION['2-3-16']; } else { echo "Select State"; }?>
                                                </option>  					
			<?php State(); ?>
		            
	      </select>	
						
                    </td>
            </tr>
            <tr class="office">
                <th>Pin code/Zip code</th>
                    <td>

                        <input type="text" name="OPZcode" id="OPZcode" class="OPZcode req" placeholder="PINCODE/ZIP CODE" maxlength="6"  onkeypress="return ValidNum(event);"
                               value="<?php echo $_SESSION['2-3-17']; ?>">
                        

                    </td>
            </tr>
            
            <tr class="office">
                <th class="required">Country Name</th>
                    <td>
                        <select name="OCountry" id="OCountry" class="OCountry req" <!--onblur="valid_select(this,'Country','0');"--->>
                                                <option value="<?php if(!empty($_SESSION['2-3-18'])) { echo $_SESSION['2-3-18']; } else { echo ""; }?>">
                                                <?php if(!empty($_SESSION['2-3-18'])) { echo $_SESSION['2-3-18']; } else { echo "Select Country"; }?>
                                                </option>  
					
			<?php Country(); ?>
                        </select>	
                    </td>
            </tr>
            
             <tr class="office">
                <th>Country Code</th>
                <td>
                    <input type="text" name="Ccode" id="Ccode" class="Ccode" placeholder="COUNTRY CODE" maxlength="3" onkeypress="return ValidNum(event);"
                           value="<?php echo $_SESSION['2-3-19'];?>">
                    </td>
            </tr>
     

            <tr >
                <th>Area/STD Code</th>
                <td>
                    <input type="text" name="OAScode" id="OAScode" class="OAScode" placeholder="AREA/STD CODE" maxlength="5" onkeypress="return ValidNum(event);"
                           value="<?php echo $_SESSION['2-3-20'];?>">
                    </td>
            </tr>
            
            <tr >
                <th>Telephone/Mobile Number</th>
                <td>
                    <input type="text" name="TelNo" id="TelNo" class="TelNo req" placeholder="TELEPHONE/MOBILE NO" maxlength="13" onkeypress="return ValidNum(event);" onblur="valid_required(this,'Mobile No','0');"
                           value="<?php echo $_SESSION['2-3-21'];?>">
                </td>
            </tr>
            
            <tr >
                <th>Email ID</th>
                    <td>
                        <input type="text" name="Email" id="Email" class="Email" placeholder="EMAIL ID"  onkeyup="firstCharSpace(this);" onblur="isValidEmail();"
                               value="<?php echo $_SESSION['2-3-22'];?>"><div id="idreturns" style="color:red;"></div>
                    </td>
            </tr>
            
        </table>
        <br>
        <br>
   
           

        
        <div align="center" class="buttons">
		
            <button type="submit" id="Contactsubmit" class="Contactsubmit btns" name="Contactsubmit" onclick="return Valid_Conatct();">Submit</button>
            <button type="button" id="Contactpre"  name="Contactpre" class="Contactpre btns">Previous</button>
            <button type="button" id="Contactnext"  name="Contactnext" class="Contactnext btns">Next</button>
            <button type="submit" class="btns" id=""  name="Level1_Final" >Final Submit</button>
		 
        </div> 
        
    </form>  
    
</div>

