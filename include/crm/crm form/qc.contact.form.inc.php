<div id="Tab3I">
    <center>
    <form name="contact" action="" method="post">
        
        <table class="table2" >
            
            
               <tr>
                
                <th class="required">Note</th>
                <td>(a)<span style="color:red "> * </span>  One of the Residence Address field is mandatory<BR>
                    (b) <span style="color:red ">**</span>  One of the Office Address field is mandatory<BR>
                    (c) <span style="color:red "> #</span>  Either fill Telephone or Email id field <BR>
                
                </td>
                
            </tr>
            
            
            <tr>
                    <th class="required">FORM ID</th>
                    <td class="required"><?php echo $_SESSION['QC_Form_ID']; ?></td>
            </tr> 
            <tr>
                <th class="required">Address for Communication</th>
            
                <td> 
                    <select name="addcom" id="addcom" class="addcom req" onblur="valid_select(this,'Address For Communication','0');" >

                        <option value='<?php if(!empty($_SESSION['5-3-1'])) { echo $_SESSION['5-3-1']; } else { '';}?>'>
                                
                               <?php if(!empty($_SESSION['5-3-1'])) { echo $_SESSION['5-3-1']; } else { echo 'Address For Communication'; } ?></option>
                            </option>
			
			<?php Address_Communication(); ?>
  
	        </select>
                </td>
            </tr>
            
            
            <tr class="residence" >
                <th colspan="2"  style="color: black;background-color: #E2E2E2; font-weight: normal;font-size: 15px;">Residence Address</th>
            </tr> 
            
            <tr class="residence">


                <th>Flat/Room/Door/Block No&nbsp;&nbsp;<span style="color:red "> * </span></th>

                    <td>

                        <input type="text" name="RAdd" id="RAdd" class="RAdd resii" placeholder="FLAT/ROOM/BLOCK NO" maxlength="25" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" onblur="valid_required(this,'Flat No','0'),this.value = this.value.toUpperCase();"
                               value="<?php echo $_SESSION['5-3-2'];?>">
                    </td>
            </tr>
            
            <tr class="residence">
                <th>Name of Premises/Building/Village &nbsp;&nbsp;<span style="color:red "> * </span></th>
                    <td>
                        <input type="text" name="RNPremises" id="RNPremises" class="RNPremises resii" placeholder="NAME OF PREMISES" maxlength="25" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" onblur="this.value = this.value.toUpperCase();"
                               value="<?php echo $_SESSION['5-3-3'];?>">
                    </td>
            </tr>
            
            <tr class="residence">
                <th>Road/Street/Lane/Post Office&nbsp;&nbsp;<span style="color:red "> * </span></th>
                    <td>
                        <input type="text" name="RRSL" id="RRSL" class="RRSL resii" placeholder="ROAD/STREET/LANE" maxlength="25" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" onblur="this.value = this.value.toUpperCase();"
                               value="<?php echo $_SESSION['5-3-4'];?>"> 
                    </td>
            </tr>
            
            <tr class="residence">


                <th>Area/Locality/Taluka/Sub-Division&nbsp;&nbsp;<span style="color:red "> * </span></th>

                    <td>
                        <input type="text" name="RALT" id="RALT" class="RALT resii" placeholder="AREA/LOCALITY/TALUKA" maxlength="25" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" onblur="valid_required(this,'Area/Taluka','0'),this.value = this.value.toUpperCase();"
                               value="<?php echo $_SESSION['5-3-5'];?>">
                    </td>
            </tr>
            
            <tr class="residence">
                <th class="required">Town/City/District</th>
                    <td>
                        <input type="text" name="RTCD" id="RTCD" class="RTCD" placeholder="TOWN/CITY/DISTRICT" maxlength="25" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" onblur="valid_required(this,'Town/City','0'),this.value = this.value.toUpperCase();"
                               value="<?php echo $_SESSION['5-3-6'];?>">
                    </td>
            </tr>
            
            <tr class="residence">
                <th class="required">State/Union Territory</th>
                    <td>
                        
		<select name="RState" id="RState" class="RState" onblur="valid_select(this,'State','0');">
		        <option value="<?php if(!empty($_SESSION['5-3-7'])) { echo $_SESSION['5-3-7']; } else { "";}?>">
                                        <?php if(!empty($_SESSION['5-3-7'])) { echo $_SESSION['5-3-7']; } else { echo "Select State"; } ?></option>
                                        </option>  					
			<?php State(); ?>
		            
	               </select>		
                            
                    </td>
            </tr>
            
            <tr class="residence">
                <th class="required">Pin code/Zip code</th>
                    <td>

                        <input type="text" name="RPZcode" id="RPZcode" class="RPZcode" placeholder="PINCODE/ZIP CODE" maxlength="6" onkeypress="return ValidNum(event);" onblur="valid_required(this,'Pincode','0')"
                               value="<?php echo $_SESSION['5-3-8']; ?>">

                        

                    </td>
            </tr>
            
            
          <!---  <tr class="residence">
                <th class="required">Country Name</th>
                    <td>
                        
                       <select name="RCountry" id="RCountry" class="RCountry" onchange="displayisd1();"onblur="valid_select(this,'Country','0');">

		            <option value="<?php //if(!empty($_SESSION['5-3-9'])) { echo $_SESSION['5-3-9']; } else { echo ""; } ?>">
                                            <?php// if(!empty($_SESSION['5-3-9'])) { echo $_SESSION['5-3-9']; } else { echo "Select Country"; } ?>
                                            </option>  
					
			<?php //Country(); ?>
		            

	               </select>	
                        

                    </td>
            </tr> --->
            
            
                <tr class="residence">
                <th class="required">Country Name</th>
                    <td>
                        	
                        
                          <input type="text" name="RCountry" id="RCountry" class="RCountry" readonly="true" value="<?php echo $_SESSION['5-3-9'];?>" />
                        

                    </td>
                </tr>
    
                  <tr class="">
               <th colspan="2" style="color: black;background-color: #E2E2E2; font-weight: normal;font-size: 15px;">Office Address </th>
            </tr>
            
            <tr class="selectoffice">
                <th class="required">Please Select Office address</th>
                <td>
                    <select name="selectyes" id="selectyes" class="selectyes">
                        <option value="<?php if(!empty($_SESSION['offyn'])) { echo $_SESSION['offyn']; } else { "";}?>">
                       <?php if(!empty($_SESSION['offyn'])) { echo $_SESSION['offyn']; } else { echo 'Select Office Address '; } ?></option>
                        <option value="Y">Yes</option>
                        <option value="N">No</option>
                    </select>
                </td>
            </tr>
            
           
          
            
            <tr class="office">
                <th class="required">Name of office</th>
                    <td>
                        <input type="text" name="ONameofoffice" id="ONameofoffice" class="ONameofoffice" placeholder="NAME OF OFFICE" maxlength="75" onkeyup="ValidFirstSpace(this)" style="text-transform: uppercase;" onblur="this.value = this.value.toUpperCase();"
                                 value="<?php echo $_SESSION['5-3-10']; ?>">
                    </td>
            </tr>
            
            <tr class="office">


                <th>Flat/Room/Door/Block No&nbsp;&nbsp;<span style="color:red "> ** </span></th>

                    <td>
                        <input type="text" name="OFRDB" id="OFRDB" class="OFRDB offye" placeholder="FLAT/ROOM NO" maxlength="25" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" onblur="this.value = this.value.toUpperCase();"
                                 value="<?php echo $_SESSION['5-3-11']; ?>">
                    </td>
            </tr>
            
            <tr class="office">
                <th>Name of Premises/Building/Village&nbsp;&nbsp;<span style="color:red "> * * </span></th>
                    <td>
                        <input type="text" name="OPremises" id="OPremises" class="OPremises offye" placeholder="NAME OF PREMISES" maxlength="25" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" onblur="this.value = this.value.toUpperCase();"
                                 value="<?php echo $_SESSION['5-3-12']; ?>">
                    </td>
            </tr>
            
            <tr class="office">
                <th>Road/Street/Lane/Post Office&nbsp;&nbsp;<span style="color:red "> * *</span></th>
                    <td>
                        <input type="text" name="ORSLP" id="ORSLP" class="ORSLP offye" placeholder="ROAD/STREET/LANE" maxlength="25" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" onblur="this.value = this.value.toUpperCase();"
                                 value="<?php echo $_SESSION['5-3-13']; ?>">
                    </td>
            </tr>
            
            
            <tr class="office">

                <th>Area/Locality/Taluka/Sub-Division&nbsp;&nbsp;<span style="color:red "> * * </span></th>

                <td>
                    <input type="text" name="OALTS" id="OALTS" class="OALTS offye" placeholder="AREA/LOCALITY/TALUKA" maxlength="25" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" onblur="this.value = this.value.toUpperCase();"
                             value="<?php echo $_SESSION['5-3-14']; ?>">
                    </td>
            </tr>
            
            
            <tr class="office">
                <th class="required">Town/City/District</th>
                    <td>
                        <input type="text" name="OTCD" id="OTCD" class="OTCD" placeholder="TOWN/CITY/DISTRICT" maxlength="25" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" onblur="this.value = this.value.toUpperCase();"
                                 value="<?php echo $_SESSION['5-3-15']; ?>">
                    </td>
            </tr>
            
            <tr class="office">
                <th class="required">State/Union Territory</th>
                    <td>
                        <select name="OState" id="OState" class="OState" <!--onblur="valid_select(this,'State','0');"-->>
                                                <option value="<?php if(!empty($_SESSION['5-3-16'])) { echo $_SESSION['5-3-16']; } else { echo ""; }?>">
                                                <?php if(!empty($_SESSION['5-3-16'])) { echo $_SESSION['5-3-16']; } else { echo "Select State"; }?>
                                                </option>  					
			<?php State(); ?>
		            
                         </select>	
						
                    </td>
            </tr>
            
            <tr class="office">
                <th class="required">Pin code/Zip code</th>
                    <td>

                        <input type="text" name="OPZcode" id="OPZcode" class="OPZcode" placeholder="PINCODE/ZIP CODE" maxlength="6"  onkeypress="return ValidNum(event);"  
                               value="<?php echo $_SESSION['5-3-17']; ?>">
                        

                    </td>
            </tr>
            
           <!-- <tr class="office">
                <th class="required">Country Name</th>
                    <td>
                        <select name="OCountry" id="OCountry" class="OCountry" onchange="displayisd1();"<!--onblur="valid_select(this,'Country','0');">
                                                <option value="<?php //if(!empty($_SESSION['5-3-18'])) { echo $_SESSION['5-3-18']; } else { echo ""; }?>">
                                                <?php //if(!empty($_SESSION['5-3-18'])) { echo $_SESSION['5-3-18']; } else { echo "Select Country"; }?>
                                                </option>  
					
			<?php //Country(); ?>
                        </select>	
                    </td>
            </tr>  -->
            
            
             <tr class="office">
                <th class="required">Country Name</th>
                    <td>
                        	
                        
                          <input type="text" name="OCountry" id="OCountry" class="OCountry" readonly="true" value="<?php echo $_SESSION['5-3-18'];?>" />
                       

                    </td>
                </tr>
            
            
             <tr>
                <th clas="required">Country Code</th>
                <td>
                    <!---<input type="text" name="Ccode" id="Ccode" class="Ccode" placeholder="COUNTRY CODE" maxlength="3" onkeypress="return ValidNum(event);"
                           value="<?php// echo $_SESSION['5-3-19'];?>">--->
                    
                      <input type="text" name='Ccode' id='Ccode' class='Ccode' readonly="true" value="<?php echo $_SESSION['5-3-19'];?>" />
                    </td>
            </tr>
     

            <tr>
                <th clas="required">Area/STD Code</th>
                <td>
                    <input type="text" name="OAScode" id="OAScode" class="OAScode" placeholder="AREA/STD CODE" maxlength="5" onkeypress="return ValidNum(event);"
                           value="<?php echo $_SESSION['5-3-20'];?>">
                    </td>
            </tr>
            
            
            <tr>
                <th >Telephone/Mobile Number&nbsp;&nbsp;<span style="color:red "> # </span></th>
                <td>
                    <input type="text" name="TelNo" id="TelNo" class="TelNo comm" placeholder="TELEPHONE/MOBILE NO" maxlength="13" onkeypress="return ValidNum(event);" onblur="valid_required(this,'Mobile No','0');"
                           value="<?php echo $_SESSION['5-3-21'];?>">
                </td>
            </tr>
            
            
            <tr>
                <th>Email ID&nbsp;&nbsp;<span style="color:red "> # </span></th>
                    <td>
                        <input type="text" name="Email" id="Email" class="Email comm" placeholder="EMAIL ID"  onkeyup="firstCharSpace(this);" onblur="isValidEmail();"
                               value="<?php echo $_SESSION['5-3-22'];?>"><div id="idreturns" style="color:red;"></div>
                    </td>
            </tr>
            
        </table>
        <br><br>
   
           

        
        <div align="center" class="buttons">
		
            <button type="submit" id="Contactsubmit" class="Contactsubmit btns" name="Contactsubmit" onclick="return Valid_Conatct();">Submit</button>
            <button type="button" id="Contactpre"  name="Contactpre" class="Contactpre btns">Previous</button>
            <button type="button" id="Contactnext"  name="Contactnext" class="Contactnext btns">Next</button>
            <button type="submit" class="btns" id=""  name="Level1_Final" >Final Submit</button>
		 
        </div> 
        
    </form>  
    
</div>


<script>
                                         
                function displayisd1()
                {
                                      
                    var addcomval = document.getElementById('addcom').value;
                    
                                        
                    if(addcomval === 'RESIDANCE')
                    {
                        var CountryVal = document.getElementById('RCountry').value;
                    }
                    
                    if(addcomval === 'OFFICE')
                    {
                        var CountryVal = document.getElementById('OCountry').value;
                    }
                    
                    if(window.XMLHttpRequest){

                    xmlhttp=new XMLHttpRequest();
                    }else{
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange=function(){
                            if(xmlhttp.readyState==4 && xmlhttp.status==200){
                                    document.getElementById("OAScode").value=xmlhttp.responseText;

                            }
                    }

                    xmlhttp.open("GET","../ajax/isd_code.php?RCountry="+CountryVal,true);

                    xmlhttp.send();
                    
                }
             

</script>