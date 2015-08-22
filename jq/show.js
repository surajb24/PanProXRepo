$(document).ready(function() {
           
       
      
        $('.AppC').hide();
        $('.app2').hide();
        $('.appisd').hide();
        $('.appA').hide();
        $('.Resig').hide();
        $('.selectoffice').hide();
        $('.ra1').hide();
        $('.adinfo').hide();
      
       //Onload common events
        var check = $('#apptype').val();
        var add =  $('#addcom').val();
         
         if(check === "49A")
        {
            $('.app1').show();
            $(".AppC").hide();
            $('.appcom').show();
            $('.adarAA').show();
            $('#raTable').show();
            $('.selectoffice').show();
            $(".office").hide();
        } 
        
        
        else if(check === "49AA")
        {   
            $(".app1").show();
            $(".AppC").hide();
            $('.appcom').show();
            $('.appisd').show();
            $('.ra').show();
            $('.adarAA').hide();
            $('#raTable').show();
            $('.selectoffice').show();
            $(".office").hide();
        }
      
        else if(check === "CORRECTION") 
        {
                $('.app1').hide();
                $(".AppC").show();
                $('.adarAA').show();
                $('.appcom').hide();
                $('#raTable').hide();
                $('.buttons').show();
                $('.selectoffice').hide();
                
        
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
                 var $form = $("#addcom").closest('form');
             
               if($form.attr('name') == 'contact')
              
               {
                 
                $('#RCountry').val('');
                $('#OCountry').val('INDIA');
                $('#Ccode').val('91');
                document.contact.ONameofoffice.setAttribute("onblur","valid_required(this,'Office Name','0')");
                document.contact.OTCD.setAttribute("onblur","valid_required(this,'Town/City','0')");
                document.contact.OState.setAttribute("onblur","valid_select(this,'State','0'");
                document.contact.OPZcode.setAttribute("onblur","valid_required(this,'Pincode','0')");
               // document.contact.OCountry.setAttribute("onblur","valid_select(this,'Country','0')");
                   
                $("#RTCD").removeAttr("onblur","valid_required(this,'Town/City','0')");
                $("#RState").removeAttr("onblur","valid_select(this,'State','0'");
                $("#RPZcode").removeAttr("onblur","valid_required(this,'Pincode','0')");
              //  $("#RCountry").removeAttr("onblur","valid_select(this,'Country','0')");

               
            }
            else
            {
             
                $('#level2ReCoun').val('');
                $('#level2OfCoun').val('INDIA');
                
                $("#level2ReTown").removeAttr("onblur","valid_required(this,'Town/City','0')");
                $("#level2ReState").removeAttr("onblur","valid_select(this,'State','0'");
                $("#level2RePin").removeAttr("onblur","valid_required(this,'Pincode','0')");
              //  $("#level2ReCoun").removeAttr("onblur","valid_select(this,'Country','0')");
              
                document.contact2.level2NameOffice.setAttribute("onblur","valid_required(this,'Name of Office','0')");
                document.contact2.level2OfTown.setAttribute("onblur","valid_required(this,'Town/City','0')");
                document.contact2.level2OfState.setAttribute("onblur","valid_select(this,'State','0'");
                document.contact2.level2OfPin.setAttribute("onblur","valid_required(this,'Pincode','0')");
               // document.contact2.level2OfCoun.setAttribute("onblur","valid_select(this,'Country','0')");
                
            }
            }

            if(add === "RESIDANCE")
            {
                $(".residence").show();
                $(".office").hide();
                var $form = $("#addcom").closest('form');
               if($form.attr('name') == 'contact')
              
               {
                   //level 1 contact form
                   
                $('#OCountry').val('');
                $('#RCountry').val('INDIA');
                 $('#Ccode').val('');  
                   
                document.contact.RTCD.setAttribute("onblur","valid_required(this,'Town/City','0')");
                document.contact.RState.setAttribute("onblur","valid_select(this,'State','0'");
                document.contact.RPZcode.setAttribute("onblur","valid_required(this,'Pincode','0')");
                //document.contact.RCountry.setAttribute("onblur","valid_select(this,'Country','0')");
                
                $("#ONameofoffice").removeAttr("onblur","valid_required(this,'Office Name','0')");
                $("#OTCD").removeAttr("onblur","valid_required(this,'Town/City','0')");
                $("#OState").removeAttr("onblur","valid_select(this,'State','0'");
                $("#OPZcode").removeAttr("onblur","valid_required(this,'Pincode','0')");
            //    $("#OCountry").removeAttr("onblur","valid_select(this,'Country','0')");
               }
              else
              
               {
                    //level 2 contact form
                   
                $('#level2OfCoun').val('');
                $('#level2ReCoun').val('INDIA');
                   
                document.contact2.level2ReTown.setAttribute("onblur","valid_required(this,'Town/City','0')");
                document.contact2.level2ReState.setAttribute("onblur","valid_select(this,'State','0'");
                document.contact2.level2RePin.setAttribute("onblur","valid_required(this,'Pincode','0')");
              //  document.contact2.level2ReCoun.setAttribute("onblur","valid_select(this,'Country','0')");
                
                
                  
                $("#level2NameOffice").removeAttr("onblur","valid_required(this,'Name of Office','0')");
                $("#level2OfTown").removeAttr("onblur","valid_required(this,'Town/City','0')");
                $("#level2OfState").removeAttr("onblur","valid_select(this,'State','0'");
                $("#level2OfPin").removeAttr("onblur","valid_required(this,'Pincode','0')");
                //$("#level2OfCoun").removeAttr("onblur","valid_select(this,'Country','0')");
                  
               }
            }

        }

        if(b === "49A" || b === "49AA")
        {

           
            if(add === "RESIDANCE")
            {
                $(".residence").show();
                $(".office").hide();
                $(".selectoffice").show();
                var $form = $("#addcom").closest('form');
               if($form.attr('name') == 'contact')
              
               {
                   
                   //level 1 contact form
                   
                   
                $('#RCountry').val('INDIA');
                $('#OCountry').val('');
                 $('#Ccode').val('');
                document.contact.RTCD.setAttribute("onblur","valid_required(this,'Town/City','0')");
                document.contact.RState.setAttribute("onblur","valid_select(this,'State','0'");
                document.contact.RPZcode.setAttribute("onblur","valid_required(this,'Pincode','0')");
              //  document.contact.RCountry.setAttribute("onblur","valid_select(this,'Country','0')");
                
                $("#ONameofoffice").removeAttr("onblur","valid_required(this,'Office Name','0')");
                $("#OTCD").removeAttr("onblur","valid_required(this,'Town/City','0')");
                $("#OState").removeAttr("onblur","valid_select(this,'State','0'");
                $("#OPZcode").removeAttr("onblur","valid_required(this,'Pincode','0')");
              //  $("#OCountry").removeAttr("onblur","valid_select(this,'Country','0')");
               }
              else
              
               {
                    //level 2 contact form
                   
                $('#level2OfCoun').val('');
                $('#level2ReCoun').val('INDIA');
                   
                   
                document.contact2.level2ReTown.setAttribute("onblur","valid_required(this,'Town/City','0')");
                document.contact2.level2ReState.setAttribute("onblur","valid_select(this,'State','0'");
                document.contact2.level2RePin.setAttribute("onblur","valid_required(this,'Pincode','0')");
               // document.contact2.level2ReCoun.setAttribute("onblur","valid_select(this,'Country','0')");
                
                
                  
                $("#level2NameOffice").removeAttr("onblur","valid_required(this,'Name of Office','0')");
                $("#level2OfTown").removeAttr("onblur","valid_required(this,'Town/City','0')");
                $("#level2OfState").removeAttr("onblur","valid_select(this,'State','0'");
                $("#level2OfPin").removeAttr("onblur","valid_required(this,'Pincode','0')");
              //  $("#level2OfCoun").removeAttr("onblur","valid_select(this,'Country','0')");
                  
               }
            }
            
             if(add === "OFFICE")
            {
               
                  $(".office").show();
                  $(".residence").show();
                    $(".selectoffice").hide();
                   var $form = $("#addcom").closest('form');
             
               if($form.attr('name') == 'contact')
              
               {
                   
                $('#OCountry').val('INDIA');
                 $('#Ccode').val('91');            
                document.contact.ONameofoffice.setAttribute("onblur","valid_required(this,'Office Name','0')");
                document.contact.OTCD.setAttribute("onblur","valid_required(this,'Town/City','0')");
                document.contact.OState.setAttribute("onblur","valid_select(this,'State','0'");
                document.contact.OPZcode.setAttribute("onblur","valid_required(this,'Pincode','0')");
               // document.contact.OCountry.setAttribute("onblur","valid_select(this,'Country','0')");
                   
                $("#RTCD").removeAttr("onblur","valid_required(this,'Town/City','0')");
                $("#RState").removeAttr("onblur","valid_select(this,'State','0'");
                $("#RPZcode").removeAttr("onblur","valid_required(this,'Pincode','0')");
               // $("#RCountry").removeAttr("onblur","valid_select(this,'Country','0')");

               
            }
            else
            {
                  $('#level2OfCoun').val('INDIA');
                
                $("#level2ReTown").removeAttr("onblur","valid_required(this,'Town/City','0')");
                $("#level2ReState").removeAttr("onblur","valid_select(this,'State','0'");
                $("#level2RePin").removeAttr("onblur","valid_required(this,'Pincode','0')");
               // $("#level2ReCoun").removeAttr("onblur","valid_select(this,'Country','0')");
              
                document.contact2.level2NameOffice.setAttribute("onblur","valid_required(this,'Name of Office','0')");
                document.contact2.level2OfTown.setAttribute("onblur","valid_required(this,'Town/City','0')");
                document.contact2.level2OfState.setAttribute("onblur","valid_select(this,'State','0'");
                document.contact2.level2OfPin.setAttribute("onblur","valid_required(this,'Pincode','0')");
              //  document.contact2.level2OfCoun.setAttribute("onblur","valid_select(this,'Country','0')");
                
            }
             
            }


        }
         
    
    //onload add office address
    
      var addoffice = $('#selectyes').val();

            
	if (addoffice === 'Y') 
        {
          
              var $form = $("#addcom").closest('form');
             
               if($form.attr('name') == 'contact')
              
               {
            $('.office').show();
            $('#OCountry').val('INDIA');
            $('#Ccode').val('91');
            document.contact.ONameofoffice.setAttribute("onblur","valid_required(this,'Office Name','0')");
            document.contact.OTCD.setAttribute("onblur","valid_required(this,'Town/City','0')");
            document.contact.OState.setAttribute("onblur","valid_select(this,'State','0'");
            document.contact.OPZcode.setAttribute("onblur","valid_required(this,'Pincode','0')");
            //document.contact.OCountry.setAttribute("onblur","valid_select(this,'Country','0')");
            }
            else{
           
               $('#level2OfCoun').val('INDIA');
                document.contact2.level2NameOffice.setAttribute("onblur","valid_required(this,'Name of Office','0')");
                document.contact2.level2OfTown.setAttribute("onblur","valid_required(this,'Town/City','0')");
                document.contact2.level2OfState.setAttribute("onblur","valid_select(this,'State','0'");
                document.contact2.level2OfPin.setAttribute("onblur","valid_required(this,'Pincode','0')");
                
                
            }
    
        }
        else
        {
           var $form = $("#addcom").closest('form');
             
               if($form.attr('name') == 'contact')
              
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
            $('#Ccode').val('');
            $('#OCountry').val('');
             
             
                $("#ONameofoffice").removeAttr("onblur","valid_required(this,'Office Name','0')");
                $("#OTCD").removeAttr("onblur","valid_required(this,'Town/City','0')");
                $("#OState").removeAttr("onblur","valid_select(this,'State','0'");
                $("#OPZcode").removeAttr("onblur","valid_required(this,'Pincode','0')");
               // $("#OCountry").removeAttr("onblur","valid_select(this,'Country','0')");
        }
        else{
            
            $('.office').hide();
            $('#level2NameOffice').val('');
            $('#level2OfFlat').val('');
            $('#level2OfBuil').val('');
            $('#level2OfRoad').val('');
            $('#level2OfArea').val('');
            $('#level2OfTown').val('');
            $('#level2OfState').val('');
            $('#level2OfPin').val('');
            $('#level2OfCoun').val('');
             
                 $("#level2NameOffice").removeAttr("onblur","valid_required(this,'Name of Office','0')");
                $("#level2OfTown").removeAttr("onblur","valid_required(this,'Town/City','0')");
                $("#level2OfState").removeAttr("onblur","valid_select(this,'State','0'");
                $("#level2OfPin").removeAttr("onblur","valid_required(this,'Pincode','0')");
               // $("#OCountry").removeAttr("onblur","valid_select(this,'Country','0')");
            
            
        }
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
       
       //adhar gender on selection of title onload
       
       
      
       
       
       
            
       //code For Aadhar Card Info onload
       
     
           var ano=$("#AadharNo").val();
           if(ano!="")
           {
            
             $('.adinfo').show();

           }
           else
           {
               $('.adinfo').hide();
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
            $('#IOS').attr('checked', false);var $form = $("#addcom").closest('form');
             
               if($form.attr('name') == 'contact')
              
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
            $('#Ccode').val('');
            $('#OCountry').val('');
             
             
                $("#ONameofoffice").removeAttr("onblur","valid_required(this,'Office Name','0')");
                $("#OTCD").removeAttr("onblur","valid_required(this,'Town/City','0')");
                $("#OState").removeAttr("onblur","valid_select(this,'State','0'");
                $("#OPZcode").removeAttr("onblur","valid_required(this,'Pincode','0')");
               // $("#OCountry").removeAttr("onblur","valid_select(this,'Country','0')");
        }
        else{
            
            $('.office').hide();
            $('#level2NameOffice').val('');
            $('#level2OfFlat').val('');
            $('#level2OfBuil').val('');
            $('#level2OfRoad').val('');
            $('#level2OfArea').val('');
            $('#level2OfTown').val('');
            $('#level2OfState').val('');
            $('#level2OfPin').val('');
            $('#level2OfCoun').val('');
             
                 $("#level2NameOffice").removeAttr("onblur","valid_required(this,'Name of Office','0')");
                $("#level2OfTown").removeAttr("onblur","valid_required(this,'Town/City','0')");
                $("#level2OfState").removeAttr("onblur","valid_select(this,'State','0'");
                $("#level2OfPin").removeAttr("onblur","valid_required(this,'Pincode','0')");
               // $("#OCountry").removeAttr("onblur","valid_select(this,'Country','0')");
            
            
        }
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
     
           
       //code For Aadhar Card Info Onblur
       
    $("#AadharNo").blur(function () {
          
           var ano=$("#AadharNo").val();
           var len=ano.length;
           if(ano!="" && len==12)
           {
              
           if (confirm("Aadhar Card Info Display!")==true ) {
                $('.adinfo').show();

                   var check = $('#title').val();

                   var abb=$("#Abb").val(); 
                   $('#AName').val(abb);

                   var str=$("#date").val();
                    var opera1 = str.split('/'); 
                    lopera1 = opera1.length; 
                    if (lopera1>1)  
                    {  
                      var pdate = str.split('/');  

                     }  

                   var yy = parseInt(pdate[2]);
                   $('#Ayob').val(yy);

                  if(check==="SHRI")
                   {

                     $('#Agen').val('');
                     $('#Agen').val('MALE');
                    }
                    else if(check==="M/S")
                    {
                      $('#Agen').val('');
                    }

                     else 
                    {

                       $('#Agen').val('');
                      $('#Agen').val('FEMALE');

                    }


            
             } else {
                 $('#AName').val('');
                 $('#Ayob').val('');
                 $('#Agen').val('');
                $('.adinfo').hide();
            }
           }
           else
           {
               $('#AName').val('');
               $('#Ayob').val('');
               $('#Agen').val('');
               $('.adinfo').hide();
           }
        });
        
        
 //verification prof of doc onselect
    $("#POI,#POA,#Pdob").change(function(){
    
      if(($("#POI").val()=="AADHAR CARD ISSUED BY UIDAI") || ($("#POA").val()=="AADHAR CARD ISSUED BY UIDAI" )
              || ($("#Pdob").val()=="AADHAAR CARD ISSUED BY UIDAI" ))
      {
          if($("#AadharNo").val()=='')
          {
                        $("#Tab5").removeClass("select");
                        $("#Tab6").removeClass("select");
                        $("#Tab3").removeClass("select");
                        $("#Tab2").removeClass("select");
                        $("#Tab1").removeClass("select");
                        $("#Tab7").removeClass("select");
			$("#Tab4").addClass("select");
                        
			$("#Tab1I").slideUp();
			$("#Tab2I").slideUp();
                        $("#Tab3I").slideUp();
                        $("#Tab7I").slideUp();
                        $("#Tab5I").slideUp();
                        $("#Tab6I").slideUp();
                        $("#Tab4I").slideDown();
                        alert("Aadhar No details are mandatory");
                       // document.other.AadharNo.setAttribute("onblur","valid_required(this,'Aadhar No','0')");
                       // $("#AadharNo").focus();
                       
                    }
                    else
                    {
                     //$("#AadharNo").removeAttr("onblur","valid_required(this,'Aadhar No','0')");   
                    }
      }
    });
    
    
    //Salary on checked
     $('#Salary').change(function(){
      if ($('#Salary').is(':checked')) 
        {
          if($("#ONameofoffice").val()=='')
          {
                          $("#Tab5").removeClass("select");
                          $("#Tab6").removeClass("select");
                          $("#Tab4").removeClass("select");
                          $("#Tab2").removeClass("select");
                          $("#Tab1").removeClass("select");
                          $("#Tab7").removeClass("select");
                          $("#Tab3").addClass("select");

                          $("#Tab1I").slideUp();
                          $("#Tab2I").slideUp();
                          $("#Tab4I").slideUp();
                          $("#Tab7I").slideUp();
                          $("#Tab5I").slideUp();
                          $("#Tab6I").slideUp();
                          $("#Tab3I").slideDown();
                          $("#selectyes").val('Y');
                          $('.office').show();
                          $("#ONameofoffice").focus();
          }
      }    
         
     });
     
         
        
        
        
    //RA yes Or No onchange
  
           var selectedval1=$("#Rdetail").val();

             if(selectedval1 == "Y" )
           {
                 $('.ra1').show();

           }
           else
           {
               $('.ra1').hide();
             

           }

       
    
    // onchange event for application type selection
   // $('.app1').hide(); 
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
                                document.contact.selectyes.setAttribute("onblur","valid_select(this,'Required','0')");
                                $('.residence').show();
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
                               $('.residence').show();
                               $('.appA').val('');
                               $(".pan_no").val('');
                               document.contact.selectyes.setAttribute("onblur","valid_select(this,'Required','0')");
                                
                               
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
                                $('.selectoffice').hide();
                                $('.office').show();
                                $('.residence').show();
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
                                $("#selectyes").removeAttr("onblur","valid_select(this,'Required','0')");
                                
                         } 
	
	});    
               
    
    //office selection hide and show 
    
    $('select[name=selectyes]').change(function () {
            
	if ($(this).val() == 'Y') 
        {
            
              var $form = $("#addcom").closest('form');
             
               if($form.attr('name') == 'contact')
              
               {
            $('.office').show();
            $('#OCountry').val('INDIA');
            $('#Ccode').val('91');
            document.contact.ONameofoffice.setAttribute("onblur","valid_required(this,'Office Name','0')");
            document.contact.OTCD.setAttribute("onblur","valid_required(this,'Town/City','0')");
            document.contact.OState.setAttribute("onblur","valid_select(this,'State','0'");
            document.contact.OPZcode.setAttribute("onblur","valid_required(this,'Pincode','0')");
            //document.contact.OCountry.setAttribute("onblur","valid_select(this,'Country','0')");
            }
            else{
           
               $('#level2OfCoun').val('INDIA');
                document.contact2.level2NameOffice.setAttribute("onblur","valid_required(this,'Name of Office','0')");
                document.contact2.level2OfTown.setAttribute("onblur","valid_required(this,'Town/City','0')");
                document.contact2.level2OfState.setAttribute("onblur","valid_select(this,'State','0'");
                document.contact2.level2OfPin.setAttribute("onblur","valid_required(this,'Pincode','0')");
                
                
            }
    
        }
        else
        {
            var $form = $("#addcom").closest('form');
             
               if($form.attr('name') == 'contact')
              
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
            $('#Ccode').val('');
            $('#OCountry').val('');
             
             
                $("#ONameofoffice").removeAttr("onblur","valid_required(this,'Office Name','0')");
                $("#OTCD").removeAttr("onblur","valid_required(this,'Town/City','0')");
                $("#OState").removeAttr("onblur","valid_select(this,'State','0'");
                $("#OPZcode").removeAttr("onblur","valid_required(this,'Pincode','0')");
               // $("#OCountry").removeAttr("onblur","valid_select(this,'Country','0')");
        }
        else{
            
            $('.office').hide();
            $('#level2NameOffice').val('');
            $('#level2OfFlat').val('');
            $('#level2OfBuil').val('');
            $('#level2OfRoad').val('');
            $('#level2OfArea').val('');
            $('#level2OfTown').val('');
            $('#level2OfState').val('');
            $('#level2OfPin').val('');
            $('#level2OfCoun').val('');
             
                 $("#level2NameOffice").removeAttr("onblur","valid_required(this,'Name of Office','0')");
                $("#level2OfTown").removeAttr("onblur","valid_required(this,'Town/City','0')");
                $("#level2OfState").removeAttr("onblur","valid_select(this,'State','0'");
                $("#level2OfPin").removeAttr("onblur","valid_required(this,'Pincode','0')");
               // $("#OCountry").removeAttr("onblur","valid_select(this,'Country','0')");
            
            
        }
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
                 var $form = $("#addcom").closest('form');
             
               if($form.attr('name') == 'contact')
              
               {
                   
                $('#RCountry').val('');
                $('#OCountry').val('INDIA');
               $('#Ccode').val('91');
                document.contact.ONameofoffice.setAttribute("onblur","valid_required(this,'Office Name','0')");
                document.contact.OTCD.setAttribute("onblur","valid_required(this,'Town/City','0')");
                document.contact.OState.setAttribute("onblur","valid_select(this,'State','0'");
                document.contact.OPZcode.setAttribute("onblur","valid_required(this,'Pincode','0')");
                //document.contact.OCountry.setAttribute("onblur","valid_select(this,'Country','0')");
             
                   
                $("#RTCD").removeAttr("onblur","valid_required(this,'Town/City','0')");
                $("#RState").removeAttr("onblur","valid_select(this,'State','0'");
                $("#RPZcode").removeAttr("onblur","valid_required(this,'Pincode','0')");
             //   $("#RCountry").removeAttr("onblur","valid_select(this,'Country','0')");

               
            }
            else
            {
                
                $('#level2ReCoun').val('');
                $('#level2OfCoun').val('INDIA');
                
                $("#level2ReTown").removeAttr("onblur","valid_required(this,'Town/City','0')");
                $("#level2ReState").removeAttr("onblur","valid_select(this,'State','0'");
                $("#level2RePin").removeAttr("onblur","valid_required(this,'Pincode','0')");
              //  $("#level2ReCoun").removeAttr("onblur","valid_select(this,'Country','0')");
              
                document.contact2.level2NameOffice.setAttribute("onblur","valid_required(this,'Name of Office','0')");
                document.contact2.level2OfTown.setAttribute("onblur","valid_required(this,'Town/City','0')");
                document.contact2.level2OfState.setAttribute("onblur","valid_select(this,'State','0'");
                document.contact2.level2OfPin.setAttribute("onblur","valid_required(this,'Pincode','0')");
            //    document.contact2.level2OfCoun.setAttribute("onblur","valid_select(this,'Country','0')");
                
            }
            }

            if(add === "RESIDANCE")
            {

                $(".residence").show();
                $(".office").hide();
                var $form = $("#addcom").closest('form');
               if($form.attr('name') == 'contact')
              
               {
                   //level 1 contact form
                   
                $('#OCountry').val('');
                $('#RCountry').val('INDIA');
                 $('#Ccode').val('');
                document.contact.RTCD.setAttribute("onblur","valid_required(this,'Town/City','0')");
                document.contact.RState.setAttribute("onblur","valid_select(this,'State','0'");
                document.contact.RPZcode.setAttribute("onblur","valid_required(this,'Pincode','0')");
               /// document.contact.RCountry.setAttribute("onblur","valid_select(this,'Country','0')");
                
                $("#ONameofoffice").removeAttr("onblur","valid_required(this,'Office Name','0')");
                $("#OTCD").removeAttr("onblur","valid_required(this,'Town/City','0')");
                $("#OState").removeAttr("onblur","valid_select(this,'State','0'");
                $("#OPZcode").removeAttr("onblur","valid_required(this,'Pincode','0')");
               // $("#OCountry").removeAttr("onblur","valid_select(this,'Country','0')");
               }
              else
              
               {
                    //level 2 contact form
                   
                $('#level2OfCoun').val('');
                $('#level2ReCoun').val('INDIA');
                
                document.contact2.level2ReTown.setAttribute("onblur","valid_required(this,'Town/City','0')");
                document.contact2.level2ReState.setAttribute("onblur","valid_select(this,'State','0'");
                document.contact2.level2RePin.setAttribute("onblur","valid_required(this,'Pincode','0')");
               // document.contact2.level2ReCoun.setAttribute("onblur","valid_select(this,'Country','0')");
                
                
                  
                $("#level2NameOffice").removeAttr("onblur","valid_required(this,'Name of Office','0')");
                $("#level2OfTown").removeAttr("onblur","valid_required(this,'Town/City','0')");
                $("#level2OfState").removeAttr("onblur","valid_select(this,'State','0'");
                $("#level2OfPin").removeAttr("onblur","valid_required(this,'Pincode','0')");
              //  $("#level2OfCoun").removeAttr("onblur","valid_select(this,'Country','0')");
                  
               }
            }

        }

        if(b === "49A" || b === "49AA")
        {     

            if(add === "RESIDANCE")
            {
                $(".residence").show();
                $(".office").hide();
                $(".selectoffice").show();
                var $form = $("#addcom").closest('form');
               if($form.attr('name') == 'contact')
              
               {
                   //level 1 contact form
                   
                $('#RCountry').val('INDIA');
                $('#OCountry').val('');
                 $('#Ccode').val('');
                document.contact.RTCD.setAttribute("onblur","valid_required(this,'Town/City','0')");
                document.contact.RState.setAttribute("onblur","valid_select(this,'State','0'");
                document.contact.RPZcode.setAttribute("onblur","valid_required(this,'Pincode','0')");
               // document.contact.RCountry.setAttribute("onblur","valid_select(this,'Country','0')"); 
               document.contact.selectyes.setAttribute("onblur","valid_select(this,'Yes or No Office Address','0')");
                
                $("#ONameofoffice").removeAttr("onblur","valid_required(this,'Office Name','0')");
                $("#OTCD").removeAttr("onblur","valid_required(this,'Town/City','0')");
                $("#OState").removeAttr("onblur","valid_select(this,'State','0'");
                $("#OPZcode").removeAttr("onblur","valid_required(this,'Pincode','0')");
             //   $("#OCountry").removeAttr("onblur","valid_select(this,'Country','0')");
               }
              else
              
               {
                    //level 2 contact form
                
                $('#level2OfCoun').val('');
                $('#level2ReCoun').val('INDIA');
                   
                
                document.contact2.level2ReTown.setAttribute("onblur","valid_required(this,'Town/City','0')");
                document.contact2.level2ReState.setAttribute("onblur","valid_select(this,'State','0'");
               // document.contact2.level2RePin.setAttribute("onblur","valid_required(this,'Pincode','0')");
                document.contact2.level2ReCoun.setAttribute("onblur","valid_select(this,'Country','0')");
                document.contact2.selectyes.setAttribute("onblur","valid_select(this,'Yes or No Office Address','0')");
                
                  
                $("#level2NameOffice").removeAttr("onblur","valid_required(this,'Name of Office','0')");
                $("#level2OfTown").removeAttr("onblur","valid_required(this,'Town/City','0')");
                $("#level2OfState").removeAttr("onblur","valid_select(this,'State','0'");
                $("#level2OfPin").removeAttr("onblur","valid_required(this,'Pincode','0')");
              //  $("#level2OfCoun").removeAttr("onblur","valid_select(this,'Country','0')");
                  
               }
            }
            
             if(add === "OFFICE")
            {
               
                  $(".office").show();
                  $(".residence").show();
                    $(".selectoffice").hide();
                   var $form = $("#addcom").closest('form');
             
               if($form.attr('name') == 'contact')
              
               {
                     
                 $('#OCountry').val('INDIA');
                $('#Ccode').val('91');
                
                document.contact.ONameofoffice.setAttribute("onblur","valid_required(this,'Office Name','0')");
                document.contact.OTCD.setAttribute("onblur","valid_required(this,'Town/City','0')");
                document.contact.OState.setAttribute("onblur","valid_select(this,'State','0'");
                document.contact.OPZcode.setAttribute("onblur","valid_required(this,'Pincode','0')");
              //  document.contact.OCountry.setAttribute("onblur","valid_select(this,'Country','0')");
                   
                $("#RTCD").removeAttr("onblur","valid_required(this,'Town/City','0')");
                $("#RState").removeAttr("onblur","valid_select(this,'State','0'");
                $("#RPZcode").removeAttr("onblur","valid_required(this,'Pincode','0')");
               // $("#RCountry").removeAttr("onblur","valid_select(this,'Country','0')");
                $("#selectyes").removeAttr("onblur","valid_select(this,'Yes or No Office Address','0')");
               
            }
            else
            {
                
                  $('#level2OfCoun').val('INDIA');
                
                $("#level2ReTown").removeAttr("onblur","valid_required(this,'Town/City','0')");
                $("#level2ReState").removeAttr("onblur","valid_select(this,'State','0'");
                $("#level2RePin").removeAttr("onblur","valid_required(this,'Pincode','0')");
               // $("#level2ReCoun").removeAttr("onblur","valid_select(this,'Country','0')");
               $("#selectyes").removeAttr("onblur","valid_select(this,'Yes or No Office Address','0')");
               
               
                document.contact2.level2NameOffice.setAttribute("onblur","valid_required(this,'Name of Office','0')");
                document.contact2.level2OfTown.setAttribute("onblur","valid_required(this,'Town/City','0')");
                document.contact2.level2OfState.setAttribute("onblur","valid_select(this,'State','0'");
                document.contact2.level2OfPin.setAttribute("onblur","valid_required(this,'Pincode','0')");
               // document.contact2.level2OfCoun.setAttribute("onblur","valid_select(this,'Country','0')");
                
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
                            $("#Rdetail").focus();
                            break;
                            
            case 'Tab6':
                            $("#Photo").focus();
                            break;
              default:
                    text = "select tab";

            }
            }
            });       
     
        
        
          
        
        
        
        
        
            //Ra yes or no
        $("#Rdetail").change(function() { 
           var selectedval1=$("#Rdetail").val();

             if(selectedval1 == "Y" )
           {
                 $('.ra1').show();

           }
           else
           {

                 
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
               $('.ra1').hide();
           }

        });

}); 
    
