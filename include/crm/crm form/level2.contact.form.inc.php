<div id="Tab10I">
    <center>
    <form name="contact2" action="" method="post">
        
        <table class="table2" >
            
             <tr>
                    <th class="required">FORM ID</th>
                    <td class="required">
                        <?php echo $_SESSION['Level2_Form_ID']; ?>
                    </td>
                    
                </tr>
                    
               <tr>
                <th class="required">Address for Communication</th>
                <td> 
                    <select name="addcomleve2" id="addcom" class="addcomleve2 req" onblur="valid_select(this,'Address For Communication','0');">
		    <option value="<?php if(!empty($_SESSION['3-3-1'])) { echo $_SESSION['3-3-1']; } else { "";}?>">
                                    <?php if(!empty($_SESSION['3-3-1'])) { echo $_SESSION['3-3-1']; } else { echo 'Address For Communication'; } ?></option>
                                    </option>
			
			<?php Address_Communication(); ?>
		            
	               </select>
                </td>
                 </tr>
            
            <tr class="residence">
                <th colspan="2" style="color:green">Residence Address</th>
                                
            </tr> 
            
            <tr class="residence">

                <th>Flat/Room/Door/Block No</th>
                    <td>


                        <input type="text" name="level2ReFlat" id="level2ReFlat" class="level2ReFlat resii" placeholder="FLAT/ROOM NO" 
                               maxlength="25" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" onblur="this.value = this.value.toUpperCase();"
                               value="<?php echo $_SESSION['3-3-2']; ?>">
                    </td>
            </tr>
            <tr class="residence">
                <th>Name of Premises/Building/Village</th>
                    <td>
                        <input type="text" name="level2ReBuid" id="level2ReBuid" class="level2ReBuid resii" placeholder="NAME OF PREMISES" maxlength="25" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;"
                               onblur="this.value = this.value.toUpperCase();"  value="<?php echo $_SESSION['3-3-3']; ?>">
                    </td>
            </tr>
            <tr class="residence">
                <th>Road/Street/Lane/Post Office</th>
                    <td>
                        <input type="text" name="level2ReRoad" id="level2ReRoad" class="level2ReRoad resii" placeholder="ROAD/STREET/LANE" maxlength="25" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;"
                               onblur="this.value = this.value.toUpperCase();"  value="<?php echo $_SESSION['3-3-4']; ?>">
                    </td>
            </tr>
            <tr class="residence">
                <th>Area/Locality/Taluka/Sub-Division</th>
                    <td>
                        <input type="text" name="level2ReArea" id="level2ReArea" class="level2ReArea resii" placeholder="AREA/LOCALITY/TALUKA" maxlength="25" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;"
                               onblur="this.value = this.value.toUpperCase();"
                               value="<?php echo $_SESSION['3-3-5']; ?>">
                    </td>
            </tr>
            
            <tr class="residence">
                <th class="required">Town/City/District</th>
                    <td>
                        <input type="text" name="level2ReTown" id="level2ReTown" class="level2ReTown" placeholder="TOWN/CITY/DISTRICT" maxlength="25" onkeyup="ValidFirstSpace(this);" onblur="this.value = this.value.toUpperCase();"
                           style="text-transform: uppercase;"    value="<?php echo $_SESSION['3-3-6']; ?>">
                    </td>
            </tr>
            
            <tr class="residence">
                <th class="required">State/Union Territory</th>
                    <td>
                        
                        <select name="level2ReState" id='level2ReState' class='level2ReState req' <!--onblur="valid_select(this,'State','0');"--> placeholder="STATE/UNION TERRITORY">
                                <option value="<?php if(!empty($_SESSION['3-3-7'])) { echo $_SESSION['3-3-7']; } else { "";}?>">
                                <?php if(!empty($_SESSION['3-3-7'])) { echo $_SESSION['337']; } else { echo "Select State"; } ?></option>
                                 </option>  					
			<?php State(); ?>
		            
                                
                            </select>
                           
                    </td>
            </tr>
            
            <tr class="residence">
                <th class="required">Pin code/Zip code</th>
                    <td>

                        <input type="text" name="level2RePin" id="level2RePin" class="level2RePin" placeholder="PINCODE/ZIP CODE" maxlength="6" onkeypress="return ValidNum(event);" 
                               value="<?php echo $_SESSION['3-3-8']; ?>">

                    </td>
            </tr>
            
            <tr class="residence">
                <th class="required">Country Name</th>
                    <td>
                        <select name="level2ReCoun" id="level2ReCoun" class="level2ReCoun req" <!--onblur="valid_select(this,'Country','0');"--> Placeholder="COUNTRY" onchange="return address(this);">
                                <option value="<?php if(!empty($_SESSION['3-3-9'])) { echo $_SESSION['3-3-9']; } else { echo ""; } ?>">
                                        <?php if(!empty($_SESSION['3-3-9'])) { echo $_SESSION['3-3-9']; } else { echo "Select Country"; } ?>
                                </option>  
                                        <?php Country(); ?>
                        </select>
                    </td>
            </tr>
            
            
                           
            <tr class="selectoffice">
                <th class="required">Please Select Office address</th>
                <td>
                    <select name="selectyes" id="selectyes" class="selectyes">
                        <option>---Select---</option>
                        <option value="Y">Yes</option>
                        <option value="N">No</option>
                    </select>
                </td>
            </tr>
            
            
            <tr class="office">
                <th colspan="2" style="color:green;">Office Address <span style="color:red;">(Please fill atleast one address field like Flat/Room/Door No or Name Of Premises/Building/Village)</span></th>
            </tr>
            
            <tr class="office">
                <th class="required">Name of office</th>
                    <td>
                        <input type="text" name="level2NameOffice" id="level2NameOffice" class="level2NameOffice" placeholder="NAME OF OFFICE" maxlength="75" onkeyup="ValidFirstSpace(this);"  onblur="this.value = this.value.toUpperCase();" style="text-transform: uppercase;"  
                               value="<?php echo $_SESSION['3-3-10']; ?>">
                    </td>                                                                                                                                                                                                                                          
            </tr>
            
            <tr class="office">
                <th>Flat/Room/Door/Block No</th>
                    <td>
                        <input type="text" name="level2OfFlat" id="level2OfFlat" class="level2OfFlat offye" placeholder="FLAT/ROOM NO" maxlength="25" onkeyup="ValidFirstSpace(this);"  onblur="this.value = this.value.toUpperCase();" style="text-transform: uppercase;"              
                               value="<?php echo $_SESSION['3-3-11']; ?>">
                    </td>
            </tr>
            
            <tr class="office">
                <th>Name of Premises/Building/Village</th>
                    <td>
                        <input type="text" name="level2OfBuil" id="level2OfBuil" class="level2OfBuil offye" placeholder="NAME OF PREMISES" maxlength="25" onkeyup="ValidFirstSpace(this);"   onblur="this.value = this.value.toUpperCase();" style="text-transform: uppercase;"
                                 value="<?php echo $_SESSION['3-3-12']; ?>">
                    </td>
            </tr>
            
            <tr class="office">
                <th>Road/Street/Lane/Post Office</th>
                    <td>
                        <input type="text" name="level2OfRoad" id="level2OfRoad" class="level2OfRoad offye" placeholder="ROAD/STREET/LANE" maxlength="25" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;"
                               onblur="this.value = this.value.toUpperCase();" value="<?php echo $_SESSION['3-3-13']; ?>">
                    </td>
            </tr>
            <tr class="office">
                <th>Area/Locality/Taluka/Sub-Division</th>
                <td>
                        <input type="text" name="level2OfArea" id="level2OfArea" class="level2OfArea offye" placeholder="AREA/LOCALITY/TALUKA" maxlength="25" onkeyup="ValidFirstSpace(this);"  onblur="this.value = this.value.toUpperCase();" style="text-transform: uppercase;"
                                 value="<?php echo $_SESSION['3-3-14']; ?>">
                    </td>
            </tr>
            <tr class="office">
                <th class="required">Town/City/District</th>
                    <td>
                        <input type="text" name="level2OfTown" id="level2OfTown" class="level2OfTown" placeholder="TOWN/CITY/DISTRICT" maxlength="25" onkeyup="ValidFirstSpace(this);"      onblur="this.value = this.value.toUpperCase();" style="text-transform: uppercase;"                      
                               value="<?php echo $_SESSION['3-3-15']; ?>">
                    </td>
            </tr>
            
            <tr class="office">
                <th class="required">State/Union Territory</th>
                    <td>
                        <select name='level2OfState' id="level2OfState" class="level2OfState req" placeholder="STATE/UNION TERRITORY" <!--onblur="valid_select(this,'State','0');"-->>
                                 <option value="<?php if(!empty($_SESSION['3-3-16'])) { echo $_SESSION['3-3-16']; } else { "";}?>">
                                        <?php if(!empty($_SESSION['3-3-16'])) { echo $_SESSION['3-3-16']; } else { echo "Select State"; } ?></option>
                                 </option>  					
			<?php State(); ?>
                        </select>
                        
					
                    </td>
            </tr>
            <tr class="office">
                <th class="required">Pin code/Zip code</th>
                    <td>

                        <input type="text" name="level2OfPin" id="level2OfPin" class="level2OfPin req" placeholder="PINCODE/ZIP CODE" maxlength="6" onkeypress="return ValidNum(event);"
                               value="<?php echo $_SESSION['3-3-17']; ?>">
                        

                    </td>
            </tr>
            <tr class="office">
                <th class="required">Country Name</th>
                    <td>
                        <select name="level2OfCoun" id="level2OfCoun" class="level2OfCoun"  placeholder="COUNTRY" <!--onblur="valid_select(this,'Country','0');"-->>
                                <option value="<?php if(!empty($_SESSION['3-3-18'])) { echo $_SESSION['3-3-18']; } else { echo ""; } ?>">
                                        <?php if(!empty($_SESSION['3-3-18'])) { echo $_SESSION['3-3-18']; } else { echo "Select Country"; } ?>
                                </option>  
                                        <?php Country(); ?>
                        </select>
                                              
                    </td>
            </tr>
           	     
        </table>
        <br><br>

           

        <div align="center" class="buttons">
		
                            <button type="submit" id="Level2contactsubmit" class="Level2contactsubmit btns" name="Level2contactsubmit" onclick="return Valid_Conatct_level2();">Submit</button>
			<button type="button" id="Level2contactprevious" class="Level2contactprevious btns"  name="">Previous</button>
			<button type="button" id="Level2contactnext" class="Level2contactnext btns"  name="">Next</button>
			<button type="submit" class="Level2contactfinal btns" id="Level2contactfinal"  name="Level2_Final" >Final Submit</button>
		 
        </div> 
        
    </form>  
    
</div>

