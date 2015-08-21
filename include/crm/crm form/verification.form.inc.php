<div id="Tab6I">
    <center>
    <form name="verification" action="" method="post">
       
        <table class="table2">
            
             <tr>
                    <th class="required">FORM ID</th>
                    <td class="required">
                        <?php echo $_SESSION['Level1_Form_ID']; ?>
                    </td>
                    
                </tr>
            
     <!--       <tr>
                <th class="required">Photo</th>
                    <td>
                        <SELECT name="Photo" id="Photo" class="Photo req" onblur="valid_select(this,'Photograph','0');">
                            <option value="<?php if(!empty($_SESSION['2-6-1'])) { echo $_SESSION['2-6-1']; } else { "";}?>">
                                        <?php if(!empty($_SESSION['2-6-1'])) { echo $_SESSION['2-6-1']; } else { echo 'Select Photo'; } ?>
                            </option>
                           <option value="Y">Yes</option>
                            <option value="N">No</option>
                        </SELECT>
                    </td>
                
            </tr> -->
            <tr>
                <th class="required"> [S] Sign/ [L] LTI/ [N] For None </th>
                    <td>
                        <select name="Sign" id="Sign" class="Sign req" onblur="valid_select(this,'Signature','0');">
                             <option value="<?php if(!empty($_SESSION['2-6-2'])) { echo $_SESSION['2-6-2']; } else { "";}?>">
                                        <?php if(!empty($_SESSION['2-6-2'])) { echo $_SESSION['2-6-2']; } else { echo 'Select Sign'; } ?>
                            </option>
                            <option value="S">S</option>
                            <option value="L">L</option>
                            <option value="N">None</option>
                         </select>
                    </td>
            </tr>
            <tr>
                <th class="required" >Proof of Identity</th>
                <td>
                    <select name="POI" id="POI" class="POI req" onblur="valid_select(this,'Identity Proof','0');" onchange="emptyOtherSession(this);" >
                                 <option value="<?php if(!empty($_SESSION['2-6-3'])) { echo $_SESSION['2-6-3']; } else { "";}?>">
                                        <?php if(!empty($_SESSION['2-6-3'])) { echo $_SESSION['2-6-3']; } else { echo 'Select Proof Of Identity'; } ?>
                                </option>
                                <?php Proof_Identity();?>
                          
                    </select>
                </td>
            </tr>
            <tr>
                <th class="required">Proof of Address</th>
                    <td>
                       <select name="POA" id="POA" class="POA req" onblur="valid_select(this,'Address Proof','0');" onchange="emptyOtherSession(this);" >
                            <option value="<?php if(!empty($_SESSION['2-6-4'])) { echo $_SESSION['2-6-4']; } else { "";}?>">
                                        <?php if(!empty($_SESSION['2-6-4'])) { echo $_SESSION['2-6-4']; } else { echo 'Select Proof Of Address'; } ?>
                            </option>
                                <?php Proof_Address();?>
                          
                    </select>
                    </td>
            </tr>
            
            <tr>
                <th >Proof of Date of Birth</th>
                <td>
                    <select name="Pdob" id="Pdob" class="Pdob" onchange="emptyOtherSession(this);">
                                <option value="<?php if(!empty($_SESSION['2-6-5'])) { echo $_SESSION['2-6-5']; } else { "";}?>">
                                        <?php if(!empty($_SESSION['2-6-5'])) { echo $_SESSION['2-6-5']; } else { echo 'Select Proof Of DOB'; } ?>
                                </option>
                                <?php  DOB(); ?>
                    </select>
                </td>
                    
            </tr>
            <tr>
                <th>NO of Documents</th>
                    <td>
                        <input type="text" name="NOD" id="NOD" class="NOD" placeholder="NO OF DOCUMENTS" maxlength="2" onkeypress="return ValidNum(event);"
                               value="<?php echo $_SESSION['2-6-6']; ?>">
                    </td>
            </tr>
            <tr>
                <th class="required">Applicant Name</th>
                     <td>
                         <input type="text" name="Aname" id="Aname" class="Aname req" placeholder="APPLICANT NAME" maxlength="75"  onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" onblur="valid_required(this,'Name of Applicant','0'),onblur="this.value = this.value.toUpperCase();";"
                                value="<?php echo $_SESSION['2-6-7']; ?>">
                         
                    </td>
            </tr>
            <tr>
                <th class="required">Capacity</th>
                    <td>
                        <select name="Capacity" id="Capacity" class="Capacity req" onblur="valid_select(this,'capacity','0');">
                               <option value="<?php if(!empty($_SESSION['2-6-8'])) { echo $_SESSION['2-6-8']; } else { "";}?>">
                                        <?php if(!empty($_SESSION['2-6-8'])) { echo $_SESSION['2-6-8']; } else { echo 'Select Capacity'; } ?>
                                </option>
                                <?php Capacity();?>
                    </select>     
                        </select>
                    </td>
            </tr>
            <tr>
                <th class="required">Place</th>
                <td>
                    <input type="text" name="Place" id="Place" class="Place req" placeholder="PLACE" maxlength="30" onkeypress="return ValidAlpha(event);" onkeyup="ValidFirstSpace(this);" style="text-transform: uppercase;" onblur="valid_required(this,'place','0'),this.value = this.value.toUpperCase();"
                           value="<?php echo $_SESSION['2-6-9']; ?>">
                </td>
            </tr>
            <tr>
                <th class="required">Date</th>
                    <td>
                       <input type="text" name="Vdate" id="date1" maxlength="10"  placeholder="DD/MM/YYYY" class="date req" onblur="validatedob(this), valid_required(this,'Date Of Birth','0'); " onkeypress="if (event.keyCode == 13) return validatedob(this)"
                              value="<?php echo $_SESSION['2-6-10']; ?>">
                    </td>
            </tr>
        </table>
    </center>
        <br>
        <br>
        <div align="center" class="buttons">
		
                        <button type="submit" id="VerificationSubmit" class="VerificationSubmit btns" name="VerificationSubmit" onclick="return Valid_Verification();">Submit</button>
                        <button type="button" id="VerificationPre"  name="VerificationPre" class="VerificationPre btns">Previous</button>
                        <button type="button" id="Verificationnext"  name="Verificationnext" class="Verificationnext btns">Next</button>
                        <button type="submit" class="btns" id=""  name="Level1_Final" >Final Submit</button>
		 
        </div> 
        
    </form> 
    
</div>