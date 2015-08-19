//onsubmit application form validation

function validation_App(){

        
        var summary ="";

            var select = document.getElementById("apptype").value;
            var appno = document.getElementById("app_no").value;
           // var inwordno = document.getElementById("inword_no").value;
            var coupn_no = document.getElementById("coupon_no").value;
            var area_code=document.getElementById("ac").value;
            var ao_type=document.getElementById("ao_type").value;
            var range_code=document.getElementById("range_code").value;
            var ao_no=document.getElementById("ao_no").value;
            var pan=document.getElementById("pan_no").value;
          
           

                if(appno == ''){
                    var f=document.getElementById("app_no").getAttribute("placeholder");
                    summary+=valid_required((document.getElementById("app_no")),f,"1");
                   
                }
            
                if(coupn_no == ''){
                     var f=document.getElementById("coupon_no").getAttribute("placeholder");
                    summary+=valid_required((document.getElementById("coupon_no")),f,"1");
                 
                }
                
                
                if(select == ''){
                    summary+=valid_select(this,'Application type',"1");
                   
                }
                else{
                   if((select == "49A") || (select == "49AA"))
                   {
                        if(area_code == ''){
                            var f=document.getElementById("ac").getAttribute("placeholder");
                            summary+=valid_required((document.getElementById("ac")),f,"1");
                          
                        }
                        if(ao_type == ''){
                            var f=document.getElementById("ao_type").getAttribute("placeholder");
                            summary+=valid_required((document.getElementById("ao_type")),f,"1");
                         
                        }
                        if(range_code == ''){
                             var f=document.getElementById("range_code").getAttribute("placeholder");
                            summary+=valid_required((document.getElementById("range_code")),f,"1");
                        
                        }
                        if(ao_no == ''){
                             var f=document.getElementById("ao_no").getAttribute("placeholder");
                            summary+=valid_required((document.getElementById("ao_no")),f,"1");
                           
                        }
                   }
                   else
                   {
                        if(pan == ''){
                             var f=document.getElementById("pan_no").getAttribute("placeholder");
                            summary+=valid_required((document.getElementById("pan_no")),f,"1");
                          //  appl.push(capitalizeEachWord(f));
                        }
                   }

                }
                  
                if(summary!="")
                {  
                        alert(summary);
                            
                            var textFields = document.forms["app_form"].querySelectorAll("input");
                            for(var i=0; i < textFields.length; i++){
                            if(textFields[i].type == "text" && textFields[i].value == "")
                            {
                                textFields[i].style.backgroundColor = "#eeac9a";
                            }
                            else {
                             textFields[i].style.backgroundColor = "white";
                            }
                        }
                        
                        $(function(){
                            
                                     if($(".apptype").val()=="")
                                        {
                                        $(".apptype").css('background-color','#eeac9a');
                                        }
                                        
                                      });
                   
                        return false;
                }
                else
                        return true;
                  
        
 }
//2nd level application form start
function validapplevel2()
{
        
        
     var summary ="";

            var select = document.getElementById("apptype").value;
            var appno = document.getElementById("level2app_no").value;
            var coupan_no=document.getElementById("level2coupon_No").value;
            
            
                if(select == ''){
                        summary+=valid_select(this,'Application type',"1");

                  }
                
            
                if(appno === ''){
                    var f=document.getElementById("level2app_no").getAttribute("placeholder");
                    summary+=valid_required((document.getElementById("level2app_no")),f,"1");
                   
                }
                
                 if(coupan_no === ''){
                     var f=document.getElementById("level2coupon_No").getAttribute("placeholder");
                    summary+=valid_required((document.getElementById("level2coupon_No")),f,"1");
             
                }
                
                   
                                  
                if(summary!=="")
                {
                    
                    
                        alert(summary);
                            
                            var textFields = document.forms["level2app"].querySelectorAll("input");
                            for(var i=0; i < textFields.length; i++){
                            if(textFields[i].type == "text" && textFields[i].value == "")
                            {
                                textFields[i].style.backgroundColor = "#eeac9a";
                            }
                            else {
                             textFields[i].style.backgroundColor = "white";
                            }
                        }
                        
                        $(function(){
                           
                                    
                                     if($(".level2apptype").val()=="")
                                        {
                                        $(".level2apptype").css('background-color','#eeac9a');
                                        }
                                        
                                      });

                        return false;   
                }else
                    return true;                              
}           
//application from 2nd level end
    
//Personal level1 onsubmit start
function valid_Person(){
                
       
         
            var summary ="";

            var selectper = document.getElementById("title").value;
            
            var lname = document.getElementById("Lname").value;
            var appre = document.getElementById("Abb").value;
            var date=document.getElementById("date").value;
            var fname=document.getElementById("Fname").value;
            var other=document.getElementById("other").value;
           
            var otitle=document.getElementById("otitle").value;
            var olname=document.getElementById("OLname").value;
            var ofname=document.getElementById("OFname").value;
            var flname=document.getElementById("FLname").value;
             var ffname=document.getElementById("FFname").value;
                            
                                         
                if(lname == ''){
                      
                    var f=document.getElementById("Lname").getAttribute("placeholder");
                    summary+=valid_required((document.getElementById("Lname")),f,"1");
                 
                }
        
                if(appre == ''){
                     var f=document.getElementById("Abb").getAttribute("placeholder");
                    summary+=valid_required((document.getElementById("Abb")),f,"1");
                 
                }
                if(date == ''){
                     var f=document.getElementById("date").getAttribute("placeholder");
                    summary+=valid_required((document.getElementById("date")),f,"1");
                   
                }
                
                if(selectper == ''){
                    summary+=valid_select(this,'Title type',"1");
                
                }
            else{
                   
                   if((selectper == "SHRI") || (selectper == "SMT") || (selectper == "KUMARI"))
                   {
                          
                        if(fname == ''){
                         
                         var f=document.getElementById("Fname").getAttribute("placeholder");
                            summary+=valid_required((document.getElementById("Fname")),f,"1");
               
                        }
                        if(other == ''){
                        summary+=valid_select(this,'Other Name',"1");


                           }
                           else{
                               if((other == "Y"))
                               {
                                   
                                   if(otitle == ''){
                                   summary+=valid_select(this,'Title type',"1");
                              
                                }
                                   if(olname == ''){
                                   var f=document.getElementById("OLname").getAttribute("placeholder");
                                   summary+=valid_required((document.getElementById("OLname")),f,"1");
                             
                                }
                                 if(ofname == ''){
                                   var f=document.getElementById("OFname").getAttribute("placeholder");
                                   summary+=valid_required((document.getElementById("OFname")),f,"1");
                                 
                                }
                                }
                               }
                            
                                if(flname == ''){
                               
                                  var f=document.getElementById("FLname").getAttribute("placeholder");
                                   summary+=valid_required((document.getElementById("FLname")),f,"1");
                           
                                }
                                 if(ffname == ''){
                               
                                  var f=document.getElementById("FFname").getAttribute("placeholder");
                                   summary+=valid_required((document.getElementById("FFname")),f,"1");
                           
                                }
                                                           
                           }
                   }
                
                  
                if(summary!="")
                {

                        alert(summary);
                                                              
                     
                            var textFields = document.forms["personal"].querySelectorAll("input");
                            for(var i=0; i < textFields.length; i++)
                            {
                            if(textFields[i].type == "text" && textFields[i].value == "")
                            {
                                $(".FMname").css("background","white");
                                $(".Mname").css("background","white");
                                $(".OMname").css("background","white");
                                                                
                                textFields[i].style.backgroundColor = "#eeac9a";
                            }
                            else {
                             textFields[i].style.backgroundColor = "white";
                            }
                        }
                        
                        $(function(){
                                        
                                    if($(".title").val()!=="")        
                                    {
                                    $(".title, .other, .Gender").css('background-color','white');
                                    }else{
                                    $(".title, .other, .Gender").css('background-color','#eeac9a');    
                                    }
                                                                        
                    });
                        
                      
                        return false;
                }
                else
                        return true;
                  
        
 }
//Personal level1 onsubmit End


//personal form level2 start

function valid_personal_level2(){
        
                
            var summary ="";

            var selectper = document.getElementById("title").value;
            var lname = document.getElementById("Lname").value;
            var fname = document.getElementById("Fname").value;
            var appre = document.getElementById("Abb").value;
            
            var flname=document.getElementById("FLname").value;
            var ffname=document.getElementById("FFname").value;
            var date=document.getElementById("date2").value;
           
                if(lname === '')
                   {
                      
                        var f=document.getElementById("Lname").getAttribute("placeholder");
                        summary+=valid_required((document.getElementById("Lname")),f,"1");
                   }
                          
                if(appre === '')
                    {
                          
                        var f=document.getElementById("Abb").getAttribute("placeholder");
                        summary+=valid_required((document.getElementById("Abb")),f,"1");
                    }  
                    
                if(date === '')
                    {
                        
                        var f=document.getElementById("date2").getAttribute("placeholder");
                        summary+=valid_required((document.getElementById("date2")),f,"1");
                    }  
                 
                if(selectper == ''){
                   
                    summary+=valid_select(this,'Title type',"1");
                
                }
               else
               {
                   
                   if((selectper == "SHRI") || (selectper == "SMT") || (selectper == "KUMARI"))
                   {
                        
                        if(fname === '')
                        {
                            var f=document.getElementById("Fname").getAttribute("placeholder");
                            summary+=valid_required((document.getElementById("Fname")),f,"1");
                        }    

                        if(flname === '')
                        {
                            var f=document.getElementById("FLname").getAttribute("placeholder");
                            summary+=valid_required((document.getElementById("FLname")),f,"1");
                        }  
                        
                        if(ffname === '')
                       {
                            var f=document.getElementById("FFname").getAttribute("placeholder");
                            summary+=valid_required((document.getElementById("FFname")),f,"1");
                        }
                    }
                }      
                      
                if(summary!="")
                {
                    
                        alert(summary);
                                                              
                     
                            var personal1 = document.forms["personal"].querySelectorAll("input");
                                
                                for(var i=0; i< personal1.length; i++)
                                {                         
                                    
                                        if(personal1[i].type === "text" &&  personal1[i].value === "")
                                    {
                                               $(".Mname2").css("background","white");
                                               $(".FMname2").css("background","white");
                                            
                                                personal1[i].style.backgroundColor = "#eeac9a";
                                                
                                    }else{
                                                 personal1[i].style.backgroundColor="white";
                                    }
                                }
                        
                        $(function(){
                                        
                                          
                                    if($(".title2").val()!=="")        
                                    {
                                       
                                    $(".title2").css('background-color','white');
                                    }else{
                                    $(".title2").css('background-color','#eeac9a');    
                                    }
                              
                    });
                    return false;
                }
                else 
                   
                    return true; 
 } 
 
 //End personal form 

//checkbox onsubmit validations
function valid_checkbox(flag)
{

     var c = document.getElementsByClassName('chk');
	 var cnt=0;
	 var chk1=0;
	 for(var i = 0; i < c.length; i++){
		 if(c[i].type == 'checkbox') 
		 {		  
			if(c[i].checked)
			{
				chk1++;
			}
			else
			{ 
				cnt++;
			}
		 }
	}
	
	if(chk1<1)
	{
		return "Please select atleast one checkbox" + "\n";
		
	}
	else 
	{
		return "";
	}

}


//Other form onsubmit start
function valid_Other()
{
            
            var summary ="";

            var smo = document.getElementById("SOA").value;
            var rgno = document.getElementById("RegNo").value;
            var AadharNo = document.getElementById("AadharNo").value;
            var countryv = document.getElementById("CountryC").value;
            var AName = document.getElementById("AName").value;
            var Ayob = document.getElementById("Ayob").value;
            var Agen = document.getElementById("Agen").value;
            var isd=document.getElementById("ISD").value;
            var chk="1";
            var code=document.getElementById("SCode").value;
            
            
            
            var poa = $("#POA").val();
            var pdob = $("#Pdob").val();
            var poi = $("#POI").val();
            
            
            if(AadharNo==="")
            
            {
                                
                if(poa === "AADHAR CARD ISSUED BY UIDAI" || pdob === "AADHAAR CARD ISSUED BY UIDAI" || poi === "AADHAR CARD ISSUED BY UIDAI")
                    {
               
                     alert('Aadhar Card is Mondatory');
                     $('#AadharNo').focus();
                      return false;
                        
                    }
            
            }else{
                
                return true;
            }
           
           
           
                             
             if($('.appcom').css('display') == 'none')
            {
            
               
            }
            else
            {
              
              if(smo == ''){
                  
                    summary+=valid_select(this,'Status Applicant',"1");
                  
                }
       
                
            }
            
             if($('.oprat').css('display') == 'none')
            {
            
               
            }
            else
            {
              
              if(countryv == ''){
                     summary+=valid_select(this,'Select Country',"1");
                   
                }
                 if(isd == '')
                {
                    var f=document.getElementById("ISD").getAttribute("placeholder");
                    summary+=valid_required((document.getElementById("ISD")),f,"1");
                     
                }
                
            }        
            
            if($('.Resig').css('display') == 'none')
            {
            
               
            }
            else
            {
               
                if(rgno == '')
                {
                    var f=document.getElementById("RegNo").getAttribute("placeholder");
                    summary+=valid_required((document.getElementById("RegNo")),f,"1");
                     
                }
       
                
            }
            
            


            //var d = document.getElementById("AadharNo"); 
            
            
        
                        
            
            if($('.adarAA').css('display') == 'none')
            {

            
            if (typeof valid_required(this,'Aadhar No','0') != 'undefined' && $.isFunction(valid_required(this,'Aadhar No','0'))){
            
                 alert("hiii");
               /* if(AadharNo == '')
                { 
                   
                    var f=document.getElementById("AadharNo").getAttribute("placeholder");
                    summary+=valid_required((document.getElementById("AadharNo")),f,"1");
                     
                }*/
            }
            else{
                
              alert("nooo");  
                
            }
       
 
                if(AadharNo !== '')
                {
                   if(AadharNo <12)
                   {
                    summary=summary+"Aadhar card value should not be less than 12 digits\n";
                    } 
                }
       
                
       
            
            if($('.adinfo').css('display') == 'none')
            {
            
               
            }
            else
            {
              
         
             
                 if(AName == '')
                {
                    var f=document.getElementById("AName").getAttribute("placeholder");
                    summary+=valid_required((document.getElementById("AName")),f,"1");
                     
                }
                
                if(Ayob == '')
                {
                    var f=document.getElementById("Ayob").getAttribute("placeholder");
                    summary+=valid_required((document.getElementById("Ayob")),f,"1");
                     
                }
                
                if(Agen == ''){
                     summary+=valid_select(this,'Gender',"1");
                  
                }        
          
           }
            if($('.appcom').css('display') == 'none')
            {
            
               
            }
            else
            {
              
              if(chk == "1"){
                summary +=valid_checkbox(chk);
              }
                
            }
            
            if($('.chkcode').is(':disabled'))
            {
  
               
            }
            else
            {
              
              if(code == ''){
                   
                     var f=document.getElementById("SCode").getAttribute("placeholder");
                    summary+=valid_required((document.getElementById("SCode")),f,"1");
                    
                }
                
            }
               
                
                if(summary!="")
                {
                            alert(summary);
                                                        
                            var textFields = document.forms["other"].querySelectorAll("input");
                            for(var i=0; i < textFields.length; i++){
                            if(textFields[i].type == "text" && textFields[i].value == "")
                            {
                                $(".AadharNo").css("background","white");    var etel="1";
                                $(".PAN1").css("background","white");
                                $(".PAN2").css("background","white");
                                $(".PAN3").css("background","white");
                                $(".PAN4").css("background","white");
                                textFields[i].style.backgroundColor = "#eeac9a";
                            }
                            else {
                             textFields[i].style.backgroundColor = "white";
                            }
                        }
                        
                        $(function(){
                            
                                        if($(".SOA,.SCode").val()!=='')
                                        {
                                        $(".SOA,.SCode").css('background-color','white');
                                        }else{
                                        $(".SOA,.SCode").css('background-color','#eeac9a');    
                                        }
                                   
                    });
                        return false;
                }
                else
                    return true;
                  
        
 }


function valid_textbox(flag)
{

     var b = document.getElementsByClassName('resii');
	 var len = b.length;
	 var chk2=0;
	 for(var i = 0; i < len; i++){
				  
			if(b[i].value !== '')
			{
				chk2++;
			}
		
	}
	
	if(chk2<1)
	{
		return "Please Fill atleast one Residence Address Field" + "\n";
		
	}
	else 
	{
		return "";
	}

}



function valid_office(flag)
{

     var b = document.getElementsByClassName('offye');
     var len = b.length;
	 
	 var chk2=0;
	 for(var i = 0; i < len; i++){
           		  
			if(b[i].value !== '')
			{
				chk2++;
                                
                               
			}
		
	}
        
        
	
	if(chk2<1)
	{
		return "Please Fill atleast one Office Address Field" + "\n";
		
	}
	else 
	{
		return "";
	}

}



function valid_communication(flag)
{

     var b = document.getElementsByClassName('comm');
      var len = b.length;
	
	 var chk2=0;
	 for(var i = 0; i < len; i++){
				  
			if(b[i].value !== '')
			{
				chk2++;
			}
			
	}
	
	if(chk2<1)
	{
		return "Please Fill Atleast Telephone or Email" + "\n";
		
	}
	else 
	{
		return "";
	}

}


//start level1 onsubmit contact 

function Valid_Conatct()
{
     
       var summary ="";
   
    var selectaddcont = document.getElementById("addcom").value;
    var selectyes = document.getElementById("selectyes").value;
    // var b = document.getElementById("selectyes").value;
    var RTCD = document.getElementById("RTCD").value;
    var RState = document.getElementById("RState").value;
    var RPZcode = document.getElementById("RPZcode").value;
    var RCountry = document.getElementById("RCountry").value;  
    var ONameofoffice = document.getElementById("ONameofoffice").value;
    var OTCD = document.getElementById("OTCD").value;
    var OState = document.getElementById("OState").value;
   var OPZcode = document.getElementById("OPZcode").value;
    var OCountry = document.getElementById("OCountry").value;
    var chk="1";
    var office="1";
    var rel="1";

    
   // var TelNo = document.getElementById("TelNo").value;
 


                    if(selectaddcont == ""){
                      
                            summary+=valid_select(this,'Address For Communication',"1");
                           
                     }
           else{
                                
                   if((selectaddcont == "RESIDANCE") )
                   {
                     
                              
                              
                               if(chk == "1"){
                                                summary +=valid_textbox(chk);
                                            }
                                            
                        if(RTCD == '')
                         {
                         var c=document.getElementById("RTCD").getAttribute("placeholder");
                         summary+=valid_required((document.getElementById("RTCD")),c,"1");
                   
                        }


                           if(RState == "")
                        {
                            summary+=valid_select(this,'State',"1");
                          
                        }
                        
                           if(RPZcode == '')
                         {
                         var c=document.getElementById("RPZcode").getAttribute("placeholder");
                         summary+=valid_required((document.getElementById("RPZcode")),c,"1");
                   
                        }
                        
                    

                        if(RCountry == "")
                        {
                               summary+=valid_select(this,'Country',"1");

                        }

                         
                 
                             if($('.selectoffice').css('display') == 'none')
                        {
            
                        
                        }
                        else
                          {
                           
                                if(selectyes == "")
                            {


                                   summary+=valid_select(this,'Yes or No Office Address',"1");

                            }

                           
                   
                          }
                  }
                 
                     //office  Address
                     
                  if( (selectaddcont == "OFFICE"|| selectyes == "Y"))
                          {
      

                              
                          
                    if(ONameofoffice =='')
                    {
                        var c=document.getElementById("ONameofoffice").getAttribute("placeholder");
                        summary+=valid_required((document.getElementById("ONameofoffice")),c,"1");
                       

                    }
                    
                    
                     if(office == "1"){
                                                summary +=valid_office(office);
                                              }
                     
                     
                    
                    if(OTCD =='')
                    {
                        var c=document.getElementById("OTCD").getAttribute("placeholder");
                        summary+=valid_required((document.getElementById("OTCD")),c,"1");
                        

                    }
                    
                    if(OState == "")
                     {
                            summary+=valid_select(this,'State',"1");
                           
                     }
                    
                    
                     if(OPZcode =='')
                    {
                        var c=document.getElementById("OPZcode").getAttribute("placeholder");
                        summary+=valid_required((document.getElementById("OPZcode")),c,"1");
                       

                    }

                     
                     
                     if(OCountry == "")
                     {
                            summary+=valid_select(this,'Country',"1");
                            
                     }
                    }  
                                                           
                  
                               if(rel == "1"){
                                                summary +=valid_communication(rel);
                                            }
         } 

         
  
    if(summary!=="")
    {
        alert(summary);
                                
                      var contact = document.forms["contact"].querySelectorAll("input");
                      var selectadd=$("#addcom").val();      
                                for(var i=0; i< contact.length; i++)
                                {                         
                                   if(selectadd == "RESIDANCE"){
                                        if(contact[i].type === "text" &&  contact[i].value === "")
                                    {
                                                $(".level2ReFlat").css("background","white");
                                                $(".level2ReBuid").css("background","white");
                                                $(".level2ReRoad").css("background","white");
                                                $(".level2ReArea").css("background","white");
                                                $(".level2NameOffice").css("background","white");
                                                $(".level2OfFlat").css("background","white");
                                                $(".level2OfBuil").css("background","white");
                                                $(".level2OfRoad").css("background","white");
                                                $(".level2OfArea").css("background","white");
                                                $(".level2OfTown").css("background","white");
                                                $(".level2OfState").css("background","white");
                                                $(".level2OfPin").css("background","white");
                                                $(".level2OfCoun").css("background","white");
                                                
                                              
                                                contact[i].style.backgroundColor = "#eeac9a";
                                               
                                                
                                    }else{
                                                 contact[i].style.backgroundColor="white";
                                    }
                                }
                                
                                 if(selectadd == "OFFICE"){
                                        if(contact[i].type === "text" &&  contact[i].value === "")
                                    {
                                                $(".level2ReFlat").css("background","white");
                                                $(".level2ReBuid").css("background","white");
                                                $(".level2ReRoad").css("background","white");
                                                $(".level2ReArea").css("background","white");
                                                $(".level2ReTown").css("background","white");
                                                $(".level2ReState").css("background","white");
                                                $(".level2RePin").css("background","white");
                                                $(".level2ReCoun").css("background","white");
                                                $(".level2OfFlat").css("background","white");
                                                $(".level2OfBuil").css("background","white");
                                                $(".level2OfRoad").css("background","white");
                                                $(".level2OfArea").css("background","white");
                                                contact[i].style.backgroundColor = "#eeac9a";
                                                 
                                                
                                    }else{
                                                 contact[i].style.backgroundColor="white";
                                    }
                                }
                                } 
                                 $(function(){
                                         if($(".addcomleve2,.level2ReState,.level2ReCoun,.selectyes,.level2OfState,.level2OfCoun").val()!=='')
                                        {
                                             $(".addcomleve2,.level2ReState,.level2ReCoun,.selectyes,.level2OfState,.level2OfCoun").css('background-color','white');
                                        }
                                        else
                                        {
                                             $(".addcomleve2,.level2ReState,.level2ReCoun,.selectyes,.level2OfState,.level2OfCoun").css('background-color','#eeac9a');    
                                        }
                                   
                                        });    
                       
        return false;
                
     }else
     return true;
   }
     
//end contact 


//level2 conatct form

function Valid_Conatct_level2()
{
        
   var summary ="";
    
    var selectaddcont = document.getElementById("addcom").value;
    var selectyes = document.getElementById("selectyes").value;
    // var b = document.getElementById("selectyes").value;
    var level2ReTown = document.getElementById("level2ReTown").value;
    var level2ReState = document.getElementById("level2ReState").value;
    var level2RePin = document.getElementById("level2RePin").value;
    var level2ReCoun = document.getElementById("level2ReCoun").value;  
    var level2NameOffice = document.getElementById("level2NameOffice").value;
    var level2OfTown = document.getElementById("level2OfTown").value;
    var level2OfPin = document.getElementById("level2OfPin").value;
    var level2OfState = document.getElementById("level2OfState").value;
    var level2OfCoun = document.getElementById("level2OfCoun").value;
    var chk="1";
    var office="1";

    
   // var TelNo = document.getElementById("TelNo").value;
 


                    if(selectaddcont == ""){
                            summary+=valid_select(this,'Address For Communication',"1");
                          
                     }
           else{
                                
                   if((selectaddcont == "RESIDANCE") )
                   {
                     
                              
                              
                               if(chk == "1"){
                                                summary +=valid_textbox(chk);
                                            }
                                            
                        if(level2ReTown == '')
                         {
                         var c=document.getElementById("level2ReTown").getAttribute("placeholder");
                         summary+=valid_required((document.getElementById("level2ReTown")),c,"1");
                   
                        }

                        if(level2RePin == '')
                         {
                         var c=document.getElementById("level2RePin").getAttribute("placeholder");
                         summary+=valid_required((document.getElementById("level2RePin")),c,"1");
                   
                        }
                        
                       if(level2ReState == "")
                        {
                            summary+=valid_select(this,'State',"1");
                          
                        }

                        if(level2ReCoun == "")
                        {
                               summary+=valid_select(this,'Country',"1");

                        }

                         
                 
                             if($('.selectoffice').css('display') == 'none')
                        {
            
                        
                        }
                        else
                          {
                             
                        if(selectyes == "")
                        {
                            
                            summary+=valid_select(this,'Yes or No Office Address',"1");
                          
                          } 
                          }
                  }
                     //office  Address
                     
                   if( (selectaddcont == "OFFICE"|| selectyes == "Y"))
                          {
      
             
                              
                          
                    if(level2NameOffice =='')
                    {
                        var c=document.getElementById("level2NameOffice").getAttribute("placeholder");
                        summary+=valid_required((document.getElementById("level2NameOffice")),c,"1");
                       

                    }
                    
                    
                     if(office == "1"){
                                                summary +=valid_office(office);
                                              }
                     
                     
                    
                    if(level2OfTown =='')
                    {
                        var c=document.getElementById("level2OfTown").getAttribute("placeholder");
                        summary+=valid_required((document.getElementById("level2OfTown")),c,"1");
                        

                    }
                    
                     if(level2OfPin =='')
                    {
                        var c=document.getElementById("level2OfPin").getAttribute("placeholder");
                        summary+=valid_required((document.getElementById("level2OfPin")),c,"1");
                       

                    }

                     if(level2OfState == "")
                     {
                            summary+=valid_select(this,'State',"1");
                           
                     }
                     
                     if(level2OfCoun == "")
                     {
                            summary+=valid_select(this,'Country',"1");
                            
                     }
                    }  
                                                           
                  
         } 

         
  
    if(summary!=="")
    {
        alert(summary);
                                
                      var contact = document.forms["contact2"].querySelectorAll("input");
                      var selectadd=$("#addcom").val();      
                                for(var i=0; i< contact.length; i++)
                                {                         
                                   if(selectadd == "RESIDANCE"){
                                        if(contact[i].type === "text" &&  contact[i].value === "")
                                    {
                                                $(".level2ReFlat").css("background","white");
                                                $(".level2ReBuid").css("background","white");
                                                $(".level2ReRoad").css("background","white");
                                                $(".level2ReArea").css("background","white");
                                                $(".level2NameOffice").css("background","white");
                                                $(".level2OfFlat").css("background","white");
                                                $(".level2OfBuil").css("background","white");
                                                $(".level2OfRoad").css("background","white");
                                                $(".level2OfArea").css("background","white");
                                                $(".level2OfTown").css("background","white");
                                                $(".level2OfState").css("background","white");
                                                $(".level2OfPin").css("background","white");
                                                $(".level2OfCoun").css("background","white");
                                                
                                              
                                                contact[i].style.backgroundColor = "#eeac9a";
                                               
                                                
                                    }else{
                                                 contact[i].style.backgroundColor="white";
                                    }
                                }
                                
                                 if(selectadd == "OFFICE"){
                                        if(contact[i].type === "text" &&  contact[i].value === "")
                                    {
                                                $(".level2ReFlat").css("background","white");
                                                $(".level2ReBuid").css("background","white");
                                                $(".level2ReRoad").css("background","white");
                                                $(".level2ReArea").css("background","white");
                                                $(".level2ReTown").css("background","white");
                                                $(".level2ReState").css("background","white");
                                                $(".level2RePin").css("background","white");
                                                $(".level2ReCoun").css("background","white");
                                                $(".level2OfFlat").css("background","white");
                                                $(".level2OfBuil").css("background","white");
                                                $(".level2OfRoad").css("background","white");
                                                $(".level2OfArea").css("background","white");
                                                contact[i].style.backgroundColor = "#eeac9a";
                                                 
                                                
                                    }else{
                                                 contact[i].style.backgroundColor="white";
                                    }
                                }
                                } 
                                 $(function(){
                                         if($(".addcomleve2,.level2ReState,.level2ReCoun,.selectyes,.level2OfState,.level2OfCoun").val()!=='')
                                        {
                                             $(".addcomleve2,.level2ReState,.level2ReCoun,.selectyes,.level2OfState,.level2OfCoun").css('background-color','white');
                                        }
                                        else
                                        {
                                             $(".addcomleve2,.level2ReState,.level2ReCoun,.selectyes,.level2OfState,.level2OfCoun").css('background-color','#eeac9a');    
                                        }
                                   
                                        });    
                       
        return false;
                
     }else
     return true;
     
   }
     
//end contact level2

//ra adress valid
function valid_raaddr(flag)
{

     var b = document.getElementsByClassName('radd');
     var len = b.length;
	 
	 var chk2=0;
	 for(var i = 0; i < len; i++){
           		  
			if(b[i].value !== '')
			{
				chk2++;
                                
                               
			}
		
	}
        
        
	
	if(chk2<1)
	{
		return "Please Fill atleast one RA Address Field" + "\n";
		
	}
	else 
	{
		return "";
	}

}


//start RA onsubmit



function Valid_RA()
{
    
    var selectraval = document.getElementById("Rdetail").value;
    
       var summary ="";
        if(selectraval == "")
         {
         
            summary+=valid_select(this,"RADetail","1");
                           
        }
        else if(selectraval=="Y")
        {
             var summary ="";
    
        var selectrtitle = document.getElementById("Rtitle").value;
        var selectlname = document.getElementById("Rlast").value;
        var selectfname = document.getElementById("Rfirst").value;
        var selecttown = document.getElementById("Rtown").value;
        var selectstate = document.getElementById("Rstate").value;
        var selectpin = document.getElementById("Rpincode").value;
        var chk="1"
        
        if(selectrtitle == "")
                     {
                            
                       summary+=valid_select(this,"Title","1");
                           
                     }
                     
        if(selectlname == ''){
                      
                    var f=document.getElementById("Rlast").getAttribute("placeholder");
                    summary+=valid_required((document.getElementById("Rlast")),f,"1");
                 
                }
                
        if(selectfname == ''){
                      
                    var f=document.getElementById("Rfirst").getAttribute("placeholder");
                    summary+=valid_required((document.getElementById("Rfirst")),f,"1");
                 
                }
                
         if(chk == "1"){
                                       summary +=valid_raaddr(chk);
                       }
                                              
        if(selecttown == '')
                         {
                         var c=document.getElementById("Rtown").getAttribute("placeholder");
                         summary+=valid_required((document.getElementById("Rtown")),c,"1");
                   
                        }        
        
        if(selectstate == "")
                     {
                            
                       summary+=valid_select(this,"State","1");
                           
                     }
        
        if(selectpin =='')
                    {
                        var c=document.getElementById("Rpincode").getAttribute("placeholder");
                        summary+=valid_required((document.getElementById("Rpincode")),c,"1");
                       

                    }
                     
                     
          if(summary!="")
    {
        alert(summary);
        
        
                var represent = document.forms["ra"].querySelectorAll("input");
                                
                                for(var i=0; i< represent.length; i++)
                                {                         
                                    
                                        if(represent[i].type == "text" &&  represent[i].value == "")
                                    {
                                                $(".Rmiddle,.Rflat,.Rbuilding,.Rroad,.Rarea").css("background","white");
                                             
                                                represent[i].style.backgroundColor = "#eeac9a";
                                                
                                    }else{
                                                 represent[i].style.backgroundColor="white";
                                    }
                                }
                                 $(function(){
                                        $('.Rtitle,.Rstate').css("background","#eeac9a");
                                        
                                        if($(".Rtitle,.Rstate").val()!=="")
                                         {
                                                $(".Rtitle,.Rstate").css('background-color','white');
                                          }  
                                        
                                    });    
     
     
       return false;
        
      }else return true;
      
      
        }
        
        
         if(summary!="")
        {
            alert(summary);
        
                 $(function(){
                        $('.Rdetail').css("background","#eeac9a");
                                        
                             if($(".Rdetail").val()!=="")
                               {
                                $(".Rdetail").css('background-color','white');
                                }  
                                        
                 });    
     
     
       return false;
        
      }else return true;
    
 
}

//End RA onsubmit

//start verification onsubmit

function Valid_Verification()
{
   
    var summary ="";
    
    var selectphoto = document.getElementById("Photo").value;
    var selectsign = document.getElementById("Sign").value;
 
    var selectpoi = document.getElementById("POI").value;
    var selectpoa = document.getElementById("POA").value;
    //var selectpdob = document.getElementById("Pdob").value;
    
    var selectaname = document.getElementById("Aname").value;
    var selectcapacity = document.getElementById("Capacity").value;
    var selectplace = document.getElementById("Place").value;
    var selectdate = document.getElementById("date1").value;
    
        
  
    
                    var verification=[];
                       
                    if(selectphoto == ""){
                            
                            summary+=valid_select(this,'Photograph',"1");
                           
                     }
                     
                    if(selectsign == ""){
                            summary+=valid_select(this,'Signature',"1");
                         
                            
                      }
                     
                    if(selectpoi == ""){
                            summary+=valid_select(this,'Identity Proof',"1");
                            
                     }
                     
                     // if(selectpdob == ""){
                          //  summary+=valid_select(this,'Address Proof',"1");
                          
                    // }
                     
                     if(selectaname == ""){
                            summary+=valid_select(this,'Applicant Name',"1");
                           
                     }  
                     
                     
                     if(selectcapacity == ""){
                            summary+=valid_select(this,'Capacity',"1");
                           
                     }
                      if(selectplace == ""){
                            summary+=valid_select(this,'Place',"1");
                            
                     }
                      if(selectdate == ""){
                            summary+=valid_select(this,'date',"1");
                            
                     }
                
                       
    if(summary!="")
    {
        alert(summary);
        
        
                var verification = document.forms["verification"].querySelectorAll("input");
                                
                                for(var i=0; i< verification.length; i++)
                                {                         
                                    
                                        if(verification[i].type == "text" &&  verification[i].value == "")
                                    {
                                                $(".NOD").css("background","white");
                                                verification[i].style.backgroundColor = "#eeac9a";
                                                
                                    }else{
                                                 verification[i].style.backgroundColor="white";
                                    }
                                }
                                 $(function(){
                                        $('.Photo,.Sign,.POI,.POA,.date,.Capacity').css("background","#eeac9a");
                                        
                                        if($(".Photo,.Sign,.POI,.POA,.Capacity").val()!=="")
                                         {
                                                $(".Photo,.Sign,.POI,.POA,.Capacity").css('background-color','white');
                                          }  
                                        
                                    });    
     
     
       return false;
        
    }else return true;
   
   }
  


}
