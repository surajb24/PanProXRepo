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
            var countryv = document.getElementById("CountryC").value;
            var isd=document.getElementById("ISD").value;
            var chk="1";
            var code=document.getElementById("SCode").value;
           
                             
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
                                $(".AadharNo").css("background","white");
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


//start level1 onsubmit contact 

function Valid_Conatct()
{
    
    var summary ="";
    
    var selectaddcont = document.getElementById("addcom").value;
    
    /*var Radd = document.getElementById("RAdd").value;
    var RALT = document.getElementById("RALT").value;
    var RTCD = document.getElementById("RTCD").value;*/
    var RState = document.getElementById("RState").value;
  //  var RPZcode = document.getElementById("RPZcode").value;
    var RCountry = document.getElementById("RCountry").value;  
  /*  var ONameoffice = document.getElementById("ONameofoffice").value;
    var OFRDB = document.getElementById("OFRDB").value;
   var OALTS = document.getElementById("OALTS").value;
    var OTCD = document.getElementById("OTCD").value;*/
    var Ostate = document.getElementById("OState").value;
   // var OPZcode = document.getElementById("OPZcode").value;
    var OCountry = document.getElementById("OCountry").value;
    
   // var TelNo = document.getElementById("TelNo").value;
 


                    if(selectaddcont == ""){
                            summary+=valid_select(this,'Address For Communication',"1");
                          
                     }
           else{
                                
            
                   if((selectaddcont == "RESIDANCE") )
                   {
                        $(".addcom").css("backgroundColor","white");
                                
                        //Residence Address  
                         if($('.residence').css('display') == 'none')
                        {
            
               
                        }
                        else
                          {
                                /* if(Radd =='')
                         {
                             var c=document.getElementById("RAdd").getAttribute("placeholder");
                             summary+=valid_required((document.getElementById("RAdd")),c,"1");


                         } 


                        if(RALT == '')
                             {
                                var c=document.getElementById("RALT").getAttribute("placeholder");
                                summary+=valid_required((document.getElementById("RALT")),c,"1");

                             }

                         if(RTCD == '')
                         {
                         var c=document.getElementById("RTCD").getAttribute("placeholder");
                         summary+=valid_required((document.getElementById("RTCD")),c,"1");

                          }

                            if(TelNo =='')
                         {
                             var c=document.getElementById("TelNo").getAttribute("placeholder");
                             summary+=valid_required((document.getElementById("TelNo")),c,"1");

                         }

                        if(RPZcode == '')
                         {
                         var c=document.getElementById("RPZcode").getAttribute("placeholder");
                         summary+=valid_required((document.getElementById("RPZcode")),c,"1");
                   
                        }
                        */
                       if(RState == "")
                        {
                            summary+=valid_select(this,'State',"1");
                          
                        }

                        if(RCountry == "")
                        {
                               summary+=valid_select(this,'Country',"1");

                        }
                     }
                  }
                     //office  Address
                     
                   if( (selectaddcont == "OFFICE"))
                          {
                        $(".addcom").css("backgroundColor","white");
                          if($('.office').css('display') == 'none')
                        {
            
               
                         }
                        else
                          {
                     
                   /*  if(ONameoffice =='')
                    {
                        var c=document.getElementById("ONameofoffice").getAttribute("placeholder");
                        summary+=valid_required((document.getElementById("ONameofoffice")),c,"1");
                       

                    } 
                                                                  
                    if(OFRDB =='')
                    {
                        var c=document.getElementById("OFRDB").getAttribute("placeholder");
                        summary+=valid_required((document.getElementById("OFRDB")),c,"1");
                     

                    }                    
                 
                     if(OALTS =='')
                    {
                        var c=document.getElementById("OALTS").getAttribute("placeholder");
                        summary+=valid_required((document.getElementById("OALTS")),c,"1");
                        

                    }
                    
                    if(OTCD =='')
                    {
                        var c=document.getElementById("OTCD").getAttribute("placeholder");
                        summary+=valid_required((document.getElementById("OTCD")),c,"1");
                        

                    }
                    
                     if(OPZcode =='')
                    {
                        var c=document.getElementById("OPZcode").getAttribute("placeholder");
                        summary+=valid_required((document.getElementById("OPZcode")),c,"1");
                       

                    }
                    
                       if(TelNo =='')
                    {
                        var c=document.getElementById("TelNo").getAttribute("placeholder");
                        summary+=valid_required((document.getElementById("TelNo")),c,"1");
                       

                    }
                    
                  
                     */
                     if(Ostate == ""){
                            summary+=valid_select(this,'State',"1");
                           
                     }
                     
                     if(OCountry == ""){
                            summary+=valid_select(this,'Country',"1");
                            
                     }
                      }  
                                                           
                }    
         }    
                     
    
    if(summary!=="")
    {
        alert(summary);
                                
                            /*   var contact = document.forms["contact"].querySelectorAll("input");
                                
                                for(var i=0; i< contact.length; i++)
                                {                         
                                    
                                        if(contact[i].type === "text" &&  contact[i].value === "")
                                    {
                                                $(".RNPremises").css("background","white");
                                                $(".RRSL").css("background","white");
                                                $(".OPremises").css("background","white");
                                                $(".ORSLP").css("background","white");
                                                $(".Ccode").css("background","white");
                                                $(".OAScode").css("background","white");
                                                $(".Email").css("background","white");
                                                contact[i].style.backgroundColor = "#eeac9a";
                                                
                                    }else{
                                                 contact[i].style.backgroundColor="white";
                                    }
                                }  /*/
                                 $(function(){
                                         if($(".addcom,.RState,.RCountry,.OState,.OCountry").val()!=='')
                                        {
                                             $(".addcom,.RState,.RCountry,.OState,.OCountry").css('background-color','white');
                                        }
                                        else
                                        {
                                             $(".addcom,.RState,.RCountry,.OState,.OCountry").css('background-color','#eeac9a');    
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
   /* var Flat= document.getElementById("level2ReFlat").value;
    var Area = document.getElementById("level2ReArea").value;
    var Town = document.getElementById("level2ReTown").value;*/
    var State = document.getElementById("level2ReState").value;
   // var pin = document.getElementById("level2RePin").value;
    var Country = document.getElementById("level2ReCoun").value;
     

   /* var Officename = document.getElementById("level2NameOffice").value;
    var Oflat = document.getElementById("level2OfFlat").value;
    var Oarea= document.getElementById("level2OfArea").value;
    var Otown = document.getElementById("level2OfTown").value;*/
    var Ostate = document.getElementById("level2OfState").value;
  //  var Opin = document.getElementById("level2OfPin").value;
    var Ocountry = document.getElementById("level2OfCoun").value;
    
                    
                    if(selectaddcont == ""){
                            summary+=valid_select(this,'Address For Communication',"1");
                          
                     }
                else{
                                
            
                   if((selectaddcont == "RESIDANCE") )
                   {
                       
                        $(".addcom").css("backgroundColor","white");
                                
                        //Residence Address  
                         if($('.residence').css('display') == 'none')
                        {
            
                        
                        }
                        else
                        {
                            
                          /*  if(Flat =='')
                            { 
                              
                                var c=document.getElementById("level2ReFlat").getAttribute("placeholder");
                                summary+=valid_required((document.getElementById("level2ReFlat")),c,"1");
                               
                            } 
                            
                            if(Area == '')
                            {
                                var c=document.getElementById("level2ReArea").getAttribute("placeholder");
                                summary+=valid_required((document.getElementById("level2ReArea")),c,"1");

                            }

                            if(Town == '')
                            {
                                var c=document.getElementById("level2ReTown").getAttribute("placeholder");
                                summary+=valid_required((document.getElementById("level2ReTown")),c,"1");

                            }*/

                            if(State =='')
                            {
                                var c=document.getElementById("level2ReState").getAttribute("placeholder");
                                summary+=valid_required((document.getElementById("level2ReState")),c,"1");

                            }
                               /*
                            if(pin == '')
                             {
                             var c=document.getElementById("level2RePin").getAttribute("placeholder");
                             summary+=valid_required((document.getElementById("level2RePin")),c,"1");

                            }*/
                             if(Country == '')
                             {
                             var c=document.getElementById("level2ReCoun").getAttribute("placeholder");
                             summary+=valid_required((document.getElementById("level2ReCoun")),c,"1");

                            }
                           
                        }
                    }
                     //office  Address
                     
                   if( (selectaddcont == "OFFICE"))
                       {
                            $(".addcom").css("backgroundColor","white");
                             if($('.office').css('display') == 'none')
                        {
            
               
                         }
                   else
                    {
                     
                      /*  if(Officename =='')
                       {
                           var c=document.getElementById("level2NameOffice").getAttribute("placeholder");
                           summary+=valid_required((document.getElementById("level2NameOffice")),c,"1");
                        } 
                                                                  
                        if(Oflat =='')
                        {
                            var c=document.getElementById("level2OfFlat").getAttribute("placeholder");
                            summary+=valid_required((document.getElementById("level2OfFlat")),c,"1");

                        }                    
                 
                        if(Oarea =='')
                       {
                           var c=document.getElementById("level2OfArea").getAttribute("placeholder");
                           summary+=valid_required((document.getElementById("level2OfArea")),c,"1");

                       }
                    
                        if(Otown =='')
                        {
                            var c=document.getElementById("level2OfTown").getAttribute("placeholder");
                            summary+=valid_required((document.getElementById("level2OfTown")),c,"1");

                        }
                        */
                        if(Ostate =='')
                       {
                           var c=document.getElementById("level2OfState").getAttribute("placeholder");
                           summary+=valid_required((document.getElementById("level2OfState")),c,"1");
                        }
                    
                     /*  if(Opin =='')
                        {
                            var c=document.getElementById("level2OfPin").getAttribute("placeholder");
                            summary+=valid_required((document.getElementById("level2OfPin")),c,"1");

                        }*/
                        
                        if(Ocountry =='')
                        {
                            var c=document.getElementById("level2OfCoun").getAttribute("placeholder");
                            summary+=valid_required((document.getElementById("level2OfCoun")),c,"1");

                        }
                    
               
                      }  
                                                           
                }    
         }    
                     
                if(summary!="")

                {  
                        alert(summary);
                            
                           /* var textFields = document.forms["contact2"].querySelectorAll("input");
                          
                            for(var i=0; i < textFields.length; i++){
                            if(textFields[i].type == "text" && textFields[i].value == "")
                            {
                                $(".level2ReBuid").css("background","white");
                                $(".level2ReRoad").css("background","white");
                                $(".level2OfBuil").css("background","white");
                                $(".level2OfRoad").css("background","white");
                                textFields[i].style.backgroundColor = "#eeac9a";
                            }
                            else {
                             textFields[i].style.backgroundColor = "white";
                            }
                        }
                        */
                        $(function(){
                           
                                     if($(".addcomleve2,.level2ReState,.level2ReCoun,.level2OfState,.level2OfCoun").val()=="")
                                        {
                                        $(".addcomleve2,.level2ReState,.level2ReCoun,.level2OfState,.level2OfCoun").css('background-color','#eeac9a');
                                        }
                                        
                                      });
                                                                                         
                        return false;
                }
                else
     return true;

     
   }
     
//end contact level2

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
  
    
    //end verification



