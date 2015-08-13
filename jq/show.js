$(document).ready(function() {
   
        
        $('.AppC').hide();
        $('.app2').hide();
        $('.appisd').hide();
        $('.appA').hide();
        $('.Resig').hide();
        $('.selectoffice').hide();
       
       
      
       //Onload common events
        var check = $('#apptype').val();
         var add =  $('#addcom').val();
        
        if(check === "CORRECTION") 
        {
                $(".AppC").show();
                $('.adarAA').show();
                $('.appcom').hide();
                $('#raTable').hide();
                $('.buttons').show();
                $('.selectoffice').hide();
                $('.app1').hide();
        
        }
        else if(check ==="49A")
        {
            $(".AppC").hide();
            $('.appcom').show();
            $('.adarAA').show();
            $('#raTable').show();
            $('.app1').show();
        }    
        else
        {
            $(".AppC").hide();
            $('.appcom').show();
            $('.appisd').show();
            $('.ra').show();
            $('.adarAA').hide();
            $('#raTable').show();
            $('.app1').show();
        }
        
     
   
        //onload event for address for comm
        
        var b = $('#apptype').val();
        var add = $('#addcom').val();
        
        
        if(b === "CORRECTION")
        {

            if(add === "OFFICE")
            {
                
                $(".office").show();
                $(".residence").hide();
            }

            if(add === "RESIDANCE")
            {

                $(".residence").show();
                $(".office").hide();
            }

        }

        if(b === "49A" || b === "49AA")
        {

            $(".office").show();
            $(".residence").show();


        }
                
                
// onload events for title selection
 
 
       var selectedval=$("#title").val();
      
       if(selectedval == "SHRI")
       {
          
           $("#RegNo").val('');
           
           $('#Gender').val('');
           $('#Gender').val('MALE');
          
           $('select[name="otitle"]').find('option[value="SHRI"]').attr("selected",true);
          
          document.personal.Lname.setAttribute("onkeypress","return ValidAlpha(event);");
          document.personal.Abb.setAttribute("onkeypress","return ValidAlpha(event);");
         // document.verification.Aname.setAttribute("onkeypress","return ValidAlpha(event);");
           $("#Lname").attr('maxlength','25');
           $('.fatherMS').show();
           $(".firstMS").show();
           $('.otherC').show();
       
           $("#gen").show();
           //male
       }
       else if(selectedval == "SMT" )
       {
           //female
            
            $("#RegNo").val('');
            
            $('#Gender').val('');
            $('#Gender').val('FEMALE');
            
            $('select[name="otitle"]').find('option[value="SMT"]').attr("selected",true);
     
            document.personal.Lname.setAttribute("onkeypress","return ValidAlpha(event);");
            document.personal.Abb.setAttribute("onkeypress","return ValidAlpha(event);");

           // document.verification.Aname.setAttribute("onkeypress","return ValidAlpha(event);");


            $("#Lname").attr('maxlength','25');
            $('.fatherMS').show();
            $(".firstMS").show();
            $('.otherC').show();
            $("#gen").show();
 
       }
       else if(selectedval == "KUMARI")
       {
         
           
            $("#RegNo").val('');
            
            $('#Gender').val('');
            $('#Gender').val('FEMALE');
           
            $('select[name="otitle"]').find('option[value="KUMARI"]').attr("selected",true);
           
           
            document.personal.Lname.setAttribute("onkeypress","return ValidAlpha(event);");
            document.personal.Abb.setAttribute("onkeypress","return ValidAlpha(event);");
           // document.verification.Aname.setAttribute("onkeypress","return ValidAlpha(event);");
            $("#Lname").attr('maxlength','25');
           
            $('.fatherMS').show();
            $(".firstMS").show();
            $('.otherC').show();
            $("#gen").show();
            
            
        }else  if(selectedval=="M/S"){    
          
          //$("#Gender").val('');  
           $("#Fname").val('');
           $("#Mname").val('');

           $("#FLname").val('');
           $("#FFname").val('');
           $("#FMname").val('');     
           $("#other").attr("selected", false);
           $("#OLname").val('');
           $("#OFname").val('');
           $("#OMname").val('');   

           $("#FLname").val('');
           $("#FFname").val('');
           $("#FMname").val('');     
            
           $("#OLname").val('');
           $("#OFname").val('');
           $("#OMname").val('');  
            
           $("#gen").hide();
           $(".firstMS").hide();
           $('.otherC').hide();
           $('.appA').hide();
           $('.fatherMS').hide();
            
           $("#Lname").attr('maxlength','75');
           $("#Lname").removeAttr("onkeypress","return ValidAlpha(event);");
           $("#Abb").removeAttr("onkeypress","return ValidAlpha(event);");
            //$("#Aname").removeAttr("onkeypress","return ValidAlpha(event);");
           
          
           $('select[name="Gender"]').val('');
           $('select[name="Gender"]').attr("disabled", true);
           $('select[name="otitle"]').attr("disabled", false);
           $('.Resig').show();
           $('.adarAA').hide();
            
             
       }
       
       
        //code for onload abbreviation
       
           var checks = $('#title').val();
           var fnames = $("#Fname").val();
           var mnames = $("#Mname").val();
           var lnames = $("#Lname").val();
           var final= fnames + ' ' + mnames +' ' + lnames;
           var final2= lnames;
            if(checks === "SHRI" || checks === "SMT" || checks === "KUMARI") 
           {

            $("#Abb").val(final);
            $("#Aname").val(final);
            
           }
            if(checks === "M/S") 
           {

            $("#Abb").val(final2);
            $("#Aname").val(final2);
           }
       
       //code for abbreviation
       
       
       $("#Fname, #Mname, #Lname").keyup(function () {
           var checks = $('#title').val();
           var fnames = $("#Fname").val();
           var mnames = $("#Mname").val();
           var lnames = $("#Lname").val();
           var final= fnames + ' ' + mnames + ' ' + lnames;
           var final2= lnames;
            if(checks === "SHRI" || checks === "SMT" || checks === "KUMARI") 
           {

            $("#Abb").val(final);
            $("#Aname").val(final);
            
           }
            if(checks === "M/S") 
           {

            $("#Abb").val(final2);
            $("#Aname").val(final2);
           }
        });
       
       
          //onload other yes or no
        
    
        var selectedo=$("#other").val();
    
         if(selectedo == "Y" )
       {
             $('.appA').show();
            
       }
       else
       {
           $('.appA').hide();
           $("#otitle").val('');
           $("#OLname").val('');
           $("#OFname").val('');
           $("#OMname").val('');   
         
       }
       
   
//onload event for photo checkbox
    
    if ($('#PM').is(':checked') === true)
            {
                $('#PM').attr('checked', true);
                
            } 
            else
            {   
                $('#PM').attr('checked', false);
                
            }    

//onload event for sign checkbox  
    
    if ($('#SM').is(':checked') === true)
            {
                $('#SM').attr('checked', true);
                
            } 
            else
            {   
                $('#SM').attr('checked', false);
                
            }    

//source of income selection onload
   
        
       var selectedval2=$("#SOA").val();
   
       if(selectedval2 == "INDIVIDUAL APPLICANT"  || selectedval2 == "HINDU UNDIVIDED FAMILY - HUF")
       {
           
           
           if($('#Salary').attr('disabled') == true)
           {
                $('#Salary').attr("disabled", false);
                              
            }
            else
            {
                
                $('#Salary').attr('disabled', false); 
                  
            }     
             
       }
       else
       {
          
          $('#Salary').attr('checked', false); 
          $('#Salary').attr('disabled', true);
       
       }

         //No Income Checked uncheked
        if ($('#NI').is(':checked') == true)
        {
            var selectedval2 = $("#SOA").val();
            
            $('#Salary').attr('disabled', true);
            $('#CG').attr('disabled', true);
            $('#IHP').attr('disabled', true);
            $('#IOS').attr('disabled', true);
            $('#BPC').attr('disabled', true);
            
            $('#Salary').attr('checked', false);
            $('#CG').attr('checked', false);
            $('#IHP').attr('checked', false);
            $('#IOS').attr('checked', false);
            $('#BPC').attr('checked', false);
            
            
                 
        } 
        else 
        {
            var selectedval2 = $("#SOA").val();
            
            if(selectedval2 == "INDIVIDUAL APPLICANT"  || selectedval2 == "HINDU UNDIVIDED FAMILY - HUF")
            {
                
                
             //salary on page load   
            if ($('#Salary').is(':checked') == true)
            {
                $('#Salary').attr('checked', true);
              
            } 
            else
            {   
                $('#Salary').attr('checked', false);
                $('#Salary').attr('disabled', false); 
            }
                
            }
            else
            {
                
                if(selectedval2 == "")
                {
                    $('#Salary').attr('checked', false);
                    $('#Salary').attr('disabled', false); 
                }
                else
                {
                    $('#Salary').attr('checked', false);
                    $('#Salary').attr('disabled', true); 
                }
                
            }
            
           
        }
        
        
//Business code Enable and disable onload
 
            if ($('#BPC').is(':checked') === true)
            {
                $('#BPC').attr('checked', true);
                $('#SCode').attr('disabled', false);
            } 
            else
            {   
                $('#BPC').attr('checked', false);
                $('#SCode').attr('disabled', true);
                $('#SCode').val('');
            }


    
  //CG on load  
    
            if ($('#CG').is(':checked') == true)
            {
                $('#CG').attr('checked', true);
          
            } 
            else
            {   
                $('#CG').attr('checked', false);
                
            }
    
    //IHP on load  
    
            if ($('#IHP').is(':checked') == true)
            {
                $('#IHP').attr('checked', true);
          
            } 
            else
            {   
                $('#IHP').attr('checked', false);
                
            }
          
          
    //IOS on load  
    
            if ($('#IOS').is(':checked') == true)
            {
                $('#IOS').attr('checked', true);
          
            } 
            else
            {   
                $('#IOS').attr('checked', false);
                
            }
              
    
    // onchange event for application type selection
    
	$('select[name=apptype]').change(function () {
            
	if ($(this).val() == '49A') 
        {
				
                                $('.app1').show();
                                $('.appcom').show();
                                $('.adarAA').show();
                                $('.AppC').hide();
                                $('.appisd').hide();
                                $('.appA').hide();
                                $('.Resig').hide();
                                $('#raTable').show();
                                $('.office').hide();
                                $('.selectoffice').show();
                                
                                $(".pan_no").val('');
                                $('.AppC').val('');
                                $('.appisd').val('');
                                $('.appA').val('');
                                $('.Resig').val('');
                                
                                
                               
	} 
			
        if ($(this).val() == '49AA') {
				
                               $('.app1').show();
                               $('.appA').hide();
                               $('.appcom').show();
                               $('.AppC').hide();
                               $('.adarAA').hide();
                               $('.appisd').show();
                               $('.Resig').hide();
                               $('#raTable').show();
                               $('.office').hide();
                               $('.selectoffice').show();
                              
                               $('.appA').val('');
                               $(".pan_no").val('');
                                
                               
			} 
	
        if ($(this).val() === 'CORRECTION') {
		
                                
                                $('.adarAA').show();
                                $('.appcom').hide();
                                $('.AppC').show();
                                $('.otherC').hide();
                                $('.app1').hide(); 
                                $('.appA').hide();
                                $('.appisd').hide();
                                $('.Resig').hide();
                                
                                $('#ac').val('');
                                $('#ao_type').val('');
                                $('#range_code').val('');
                                $('#ao_no').val('');
                                $('#Rtitle').val('');
                                $('#Rlast').val('');
                                $('#Rfirst').val('');
                                $('#Rmiddle').val('');
                                $('#Rflat').val('');
                                $('#Rbuilding').val('');
                                $('#Rroad').val('');
                                $('#Rarea').val('');
                                $('#Rtown').val('');
                                $('#Rstate').val('');
                                $('#Rpincode').val('');
                                $('#raTable').hide();
                         } 
	
	});    
               
    
    //office selection hide and show 
    
    $('select[name=selectyes]').change(function () {
            
	if ($(this).val() == 'Y') 
        {
            $('.office').show();
    
        }
        else
        {
            $('.office').hide();
            $('#ONameofoffice').val('');
            $('#OFRDB').val('');
            $('#OPremises').val('');
            $('#ORSLP').val('');
            $('#OALTS').val('');
            $('#OTCD').val('');
            $('#OState').val('');
            $('#OPZcode').val('');
            $('#OCountry').val('');
        }
    });
    
// onchange events for title selection
 
   $("#title").change(function() { 
       var selectedval=$("#title").val();
      
       if(selectedval == "SHRI"){
           $("#Lname").val('');
           $("#Abb").val('');
           $("#date").val('');
           $("#RegNo").val('');
           
           $('#Gender').val('');
           $('#Gender').val('MALE');
          
           $('select[name="otitle"]').find('option[value="SHRI"]').attr("selected",true);
         
          
           document.personal.Lname.setAttribute("onkeypress","return ValidAlpha(event);");
           document.personal.Abb.setAttribute("onkeypress","return ValidAlpha(event);");

          // document.verification.Aname.setAttribute("onkeypress","return ValidAlpha(event);");

         //  document.verification.Aname.setAttribute("onkeypress","return ValidAlpha(event);");

           $("#Lname").attr('maxlength','25');
           $('.fatherMS').show();
           $(".firstMS").show();
           $('.otherC').show();
           $("#gen").show();
           $('.Aname').show();
           //male
       }
       else if(selectedval == "SMT" )
       {
           //female
            $("#Lname").val('');
            $("#Abb").val('');
            $("#date").val('');
            $("#RegNo").val('');
            
            $('#Gender').val('');
            $('#Gender').val('FEMALE');
            $('.Aname').show();
           $('select[name="otitle"]').find('option[value="SMT"]').attr("selected",true);
           
           
           document.personal.Lname.setAttribute("onkeypress","return ValidAlpha(event);");
           document.personal.Abb.setAttribute("onkeypress","return ValidAlpha(event);");

          //  document.verification.Aname.setAttribute("onkeypress","return ValidAlpha(event);");

           // document.verification.Aname.setAttribute("onkeypress","return ValidAlpha(event);");

            $("#Lname").attr('maxlength','25');
            $('.fatherMS').show();
            $(".firstMS").show();
            $('.otherC').show();
            $("#gen").show();
       }
       else if(selectedval == "KUMARI")
       {
         
            $("#Lname").val('');
            $("#Abb").val('');
            $("#date").val('');
            $("#RegNo").val('');
            
            $('#Gender').val('');
            $('#Gender').val('FEMALE');
           $('.Aname').show();
           $('select[name="otitle"]').find('option[value="KUMARI"]').attr("selected",true);
           
           document.personal.Lname.setAttribute("onkeypress","return ValidAlpha(event);");
           document.personal.Abb.setAttribute("onkeypress","return ValidAlpha(event);");
           // document.verification.Aname.setAttribute("onkeypress","return ValidAlpha(event);");
            $("#Lname").attr('maxlength','25');
           
            $('.fatherMS').show();
            $(".firstMS").show();
            $('.otherC').show();
            $("#gen").show();
            
        }else  if(selectedval=="M/S"){    
          
           $("#Lname").val('');
           $("#Abb").val('');
           $("#Fname").val('');
           $("#Mname").val('');

           $("#FLname").val('');
           $("#FFname").val('');
           $("#FMname").val('');     
           $("#other").attr("selected", false);
           $("#OLname").val('');
           $("#OFname").val('');
           $("#OMname").val('');   

            $("#FLname").val('');
            $("#FFname").val('');
            $("#FMname").val('');     
           
            $("#OLname").val('');
            $("#OFname").val('');
            $("#OMname").val('');   

            $("#date").val('');
            $("#gen").hide();
            $(".firstMS").hide();
            $('.otherC').hide();
            $('.appA').hide();
            $('.fatherMS').hide();
            $("#Lname").attr('maxlength','75');
           
             $("#Lname").removeAttr("onkeypress","return ValidAlpha(event);");
            $("#Abb").removeAttr("onkeypress","return ValidAlpha(event);");

           // $("#Aname").removeAttr("onkeypress","return ValidAlpha(event);");

              
           
          
            $('select[name="Gender"]').val('');
            $('select[name="Gender"]').attr("disabled", true);
        
            $('select[name="otitle"]').attr("disabled", false);
            $('.Resig').show();
            $('.adarAA').hide();
             $('.Aname').show();
       }
         
    });
    
    //other name yes or no
    $("#other").change(function() { 
       var selectedval1=$("#other").val();
     
         if(selectedval1 == "Y" )
       {
             $('.appA').show();
            
       }
       else
       {
           $('.appA').hide();
           $("#otitle").val('');
           $("#OLname").val('');
           $("#OFname").val('');
           $("#OMname").val('');   
         
       }
         
    });


    //onchange event for address for comm

   $("#addcom").change(function() { 
       

        
        var add = $("#addcom").val();
        var b = $("#apptype").val();

        if(b === "CORRECTION")
        {

            if(add === "OFFICE")
            {
                
                $(".office").show();
                $(".residence").hide();
            }

            if(add === "RESIDANCE")
            {

                $(".residence").show();
                $(".office").hide();
            }

        }

        if(b === "49A" || b === "49AA")
        {     

            if(add === "RESIDANCE")
            {
                $(".residence").show();
                $(".office").show();
          
                var $form = $("#addcom").closest('form');
               if($form.attr('name') == 'contact')
              
               {
                   //level 1 contact form
                   /*
                $("#ONameofoffice").removeAttr("onblur","valid_required(this,'Office Name','0')");
                $("#OFRDB").removeAttr("onblur","valid_required(this,'Flat No','0')");
                $("#OALTS").removeAttr("onblur","valid_required(this,'Area/Taluka','0')");
                $("#OTCD").removeAttr("onblur","valid_required(this,'Town/City','0')");
                $("#OState").removeAttr("onblur","valid_select(this,'State','0'");
                $("#OPZcode").removeAttr("onblur","valid_required(this,'Pincode','0')");
                $("#OCountry").removeAttr("onblur","valid_select(this,'Country','0')");*/
               }
              else
              
               {
                   //level 2 contact form
               /* $("#level2NameOffice").removeAttr("onblur","valid_required(this,'Name of Office','0')");
                $("#level2OfFlat").removeAttr("onblur","valid_required(this,'Flat No','0')");
                $("#level2OfArea").removeAttr("onblur","valid_required(this,'Area/Taluka','0')");
                $("#level2OfTown").removeAttr("onblur","valid_required(this,'Town/City','0')");
                $("#level2OfState").removeAttr("onblur","valid_select(this,'State','0'");
                $("#level2OfPin").removeAttr("onblur","valid_required(this,'Pincode','0')");
                $("#level2OfCoun").removeAttr("onblur","valid_select(this,'Country','0')");
                   */
               }
            }
            
             if(add === "OFFICE")
            {
               
                  $(".office").show();
                  $(".residence").show();
                   var $form = $("#addcom").closest('form');
             
               if($form.attr('name') == 'contact')
              
               {
                /*
                document.contact.ONameofoffice.setAttribute("onblur","valid_required(this,'Office Name','0')");
                document.contact.OFRDB.setAttribute("onblur","valid_required(this,'Flat No','0')");
                document.contact.OALTS.setAttribute("onblur","valid_required(this,'Area/Taluka','0')");
                document.contact.OTCD.setAttribute("onblur","valid_required(this,'Town/City','0')");
                document.contact.OState.setAttribute("onblur","valid_select(this,'State','0'");
                document.contact.OPZcode.setAttribute("onblur","valid_required(this,'Pincode','0')");
                document.contact.OCountry.setAttribute("onblur","valid_select(this,'Country','0')");
                */
            }
            else
            {
                /*
                document.contact2.level2NameOffice.setAttribute("onblur","valid_required(this,'Name of Office','0')");
                document.contact2.level2OfFlat.setAttribute("onblur","valid_required(this,'Flat No','0')");
                document.contact2.level2OfArea.setAttribute("onblur","valid_required(this,'Area/Taluka','0')");
                document.contact2.level2OfTown.setAttribute("onblur","valid_required(this,'Town/City','0')");
                document.contact2.level2OfState.setAttribute("onblur","valid_select(this,'State','0'");
                document.contact2.level2OfPin.setAttribute("onblur","valid_required(this,'Pincode','0')");
                document.contact2.level2OfCoun.setAttribute("onblur","valid_select(this,'Country','0')");*/
                
            }
             
            }

        }

        if(b === "")
        {

            alert('Please select Proper Application Type!');

        }


    });


   //source of inconme selection onchange
   
    $("#SOA").change(function() { 
        
       var selectedval2=$("#SOA").val();
   
       if(selectedval2 == "INDIVIDUAL APPLICANT"  || selectedval2 == "HINDU UNDIVIDED FAMILY - HUF")
       {
           
           if($('#Salary').attr('disabled') == true)
           {
                $('#Salary').attr("disabled", false);
                              
            }
            else
            {
                
                $('#Salary').attr('disabled', false); 
                  
            }     
             
             
       }
       else
       {
          
          $('#Salary').attr('checked', false); 
          $('#Salary').attr('disabled', true);
       
       }
         
    });
    
    
     $('#NI').change(function(){
         
        if ($('#NI').is(':checked') == true)
        {
            var selectedval2 = $("#SOA").val();
            
            $('#Salary').attr('disabled', true);
            $('#CG').attr('disabled', true);
            $('#IHP').attr('disabled', true);
            $('#IOS').attr('disabled', true);
            $('#BPC').attr('disabled', true);
            $('#SCode').attr('disabled', true);
            $('#SCode').val('');
            
            $('#Salary').attr('checked', false);
            $('#CG').attr('checked', false);
            $('#IHP').attr('checked', false);
            $('#IOS').attr('checked', false);
            $('#BPC').attr('checked', false);
                 
        } 
        else 
        {
            var selectedval2 = $("#SOA").val();
            
            if(selectedval2 == "INDIVIDUAL APPLICANT"  || selectedval2 == "HINDU UNDIVIDED FAMILY - HUF")
            {
                
                $('#Salary').attr('checked', false);
                $('#Salary').attr('disabled', false); 
                
            }
            else
            {
                
                if(selectedval2 == "")
                {
                    $('#Salary').attr('checked', false);
                    $('#Salary').attr('disabled', false); 
                }
                else
                {
                    $('#Salary').attr('checked', false);
                    $('#Salary').attr('disabled', true); 
                }
                
            }
            
           
            $('#CG').attr('disabled', false);
            $('#IHP').attr('disabled', false);
            $('#IOS').attr('disabled', false);
            $('#BPC').attr('disabled', false);
            
            
            $('#CG').attr('checked', false);
            $('#IHP').attr('checked', false);
            $('#IOS').attr('checked', false);
            $('#BPC').attr('checked', false);
                
        }
        
    });
    
    
   //Business code Enable and disable
   
   $('#BPC').change(function(){
            if ($('#BPC').is(':checked') == true){
        
                 $('#SCode').attr('disabled', false);
            } 
            else
                {
                $('#SCode').attr('disabled', true);
                $('#SCode').val('');
                }
        });
        
        //auto focus for tab selection
        
            $("#apptype").focus();
            $('.tab').click(function() {
            if($( ".tab" ).hasClass( "select" )){
            var sel = $('.select');
            var id = sel.attr('id');


            switch(id)
            {

            case 'Tab1':
                            $("#apptype").focus();
                            break;

            case 'Tab2':
                            $("#title").focus();
                            break;
                            
           case 'Tab3':
                            $("#addcom").focus();
                            break;
                            
            case 'Tab4':
                            $("#SOA").focus();
                            break;
                            
            case 'Tab5':
                            $("#Rtitle").focus();
                            break;
                            
            case 'Tab6':
                            $("#Photo").focus();
                            break;
              default:
                    text = "select tab";

            }
            }
            });       
        
        

}); 
    
