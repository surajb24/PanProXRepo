
    
    
    $(document).ready(function()
    {
   //start date Validation

   $("#date").mask("99/99/9999");
   $("#date1").mask("99/99/9999");
    $("#date2").mask("99/99/9999");
    

 //Change color on blur when user types into textbox, select
  $("input").blur(function () {
         
         
                
          // change color of input controls on blur
    if($(this).attr("type") == "text" && $(this).val() == "")
        {
            var y=$(this).attr('class').split(' ');
            var chk=y[1];
             if(chk =='req')
            {
                $(this).css("border-color", "red");
            }
            else
            {
            $('#Mname').css("border-color", "white");
            $('#FMname').css("border-color", "white");
            $('#OMname').css("border-color", "white");
            $('#RNPremises').css("border-color", "white");
            $('#RRSL').css("border-color", "white");
            $('#OPremises').css("border-color", "white");
            $('#ORSLP').css("border-color", "white");
            $('#Ccode').css("border-color", "white");
            $('#OAScode').css("border-color", "white");
            $('#Email').css("border-color", "white");
            $("#AadharNo").css("border","white");
            $('#PAN1').css("border-color", "white");
            $('#PAN2').css("border-color", "white");
            $('#PAN3').css("border-color", "white");
            $('#PAN4').css("border-color", "white");
            $('#Rtitle').css("border-color", "white");
            $('#Rlast').css("border-color", "white");
            $('#Rfirst').css("border-color", "white");
            $('#Rmiddle').css("border-color", "white");
            $('#Rflat').css("border-color", "white");
            $('#Rbuilding').css("border-color", "white");
            $('#Rroad').css("border-color", "white");
            $('#Rarea').css("border-color", "white");
            $('#Rtown').css("border-color", "white");
            $('#Rstate').css("border-color", "white");
            $('#Rpincode').css("border-color", "white");
            $('#NOD').css("border-color", "white");
            $('#Mname').css("border-color", "white");
            $('#FMname').css("border-color", "white");
            $('#level2ReBuid').css("border-color", "white");
            $('#level2ReRoad').css("border-color", "white");
            $('#level2OfBuil').css("border-color", "white");
            $('#level2OfRoad').css("border-color", "white");
            
            }  
        }
        else {
            $(this).css("border-color", "white");
        } 
     });
     
     //reuired select start 

     $("select").blur(function(e){
              var select=$(this);
              var text=select.find("option:selected").val();
              if(text == "")
              {
                  
                    $(this).css("border-color", "red");
              }
              else
              {
                  $(this).css("border-color", "white");
              }           
    });
    
 
 
});


//start date Validation


function validatedob(e) {
         
      
    var today =new Date();
    var str=e.value;
    var t=1;
    
    var dateformat =/^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/;//pattern to match
  // Match the date format through regular expression  
        if(str.match(dateformat))  
        {  

        //Test which seperator is used '/' or '-'  
         var opera1 = str.split('/'); 
        lopera1 = opera1.length;  


        // Extract the string into month, date and year  
             if (lopera1>1)  
             {  
                var pdate = str.split('/');  

                }  

                var dd = parseInt(pdate[0]);  
                var mm  = parseInt(pdate[1]);  
                var yy = parseInt(pdate[2]);
	
        if(dd < 1 )
         {
              document.getElementById("dterequre").innerHTML = "Day cant be less than 1";
           e.value='';
           t=0;
            }
        
         if(mm < 1 )
         {
              document.getElementById("dterequre").innerHTML = "Month cant be less than 1";
           e.value='';
           t=0;
            }
        else if(mm >12)
        {
            document.getElementById("dterequre").innerHTML = "Month cant be greater than 12";
             e.value='';
             t=0;
         } 
         
         if(yy<1900 || yy>3000)
         {
            document.getElementById("dterequre").innerHTML = "Year should be greater than 1900 and less than 3000";
            e.value='';
            t=0;
            return false;
         }
            // Create list of days of a month [assume there is no leap year by default]  
        var ListofDays = [31,28,31,30,31,30,31,31,30,31,30,31];  
        if (mm==1 || mm>2)  
        {  
            if (dd>ListofDays[mm-1])  
            {  
                document.getElementById("dterequre").innerHTML = "Invalid days in date format!";
            e.value='';
            t=0;
             return false;  
             }  
          }  
        if (mm==2)  
        {  
         var lyear = false;  
            if ( (!(yy % 4) && yy % 100) || !(yy % 400))   
             {  
                 lyear = true;  
            }  
            if ((lyear==false) && (dd>=29))  
         {  
               document.getElementById("dterequre").innerHTML = "Invalid feb date format!";
             e.value='';
             t=0;
             return false;  
         }  
             if ((lyear==true) && (dd>29))  
        {  
             document.getElementById("dterequre").innerHTML = "Invalid leap year date format!";
              e.value='';
              t=0;
               return false;  
        }  
         }

	var myDate = new Date(yy, mm - 1, dd);

        if(myDate>today)
        {
               document.getElementById("dterequre").innerHTML = " Date cant be greater than today";
               e.value='';
               t=0;
                return false;
        }
        
       
        }
        else
    {
        
        document.getElementById("dterequre").innerHTML = "Invalid date format!";
        t=0;
        return false;
    }
  if(t==1)
  {
      document.getElementById("dterequre").innerHTML = "";
  }
	
}        



/*
//number validation start


function isNumber(e) {
    
if(!isNaN(e.value))
{
    var str = e.value;
    
  if(str.charAt(0) === ' ')
  {
      e.value = '';
  }
  
  if(str.indexOf('/\s/g'))
   {
       var str1 = str.replace(/ /g,'');
       e.value = str1;
   }
  
}
else
{
   var str = e.value;
        
        var str1 = str.slice(-1);
        var str2 = str.replace(str1, ''); 
        e.value = str2;
   
}

    
}
//number validation end  */

//Pan card validation

function PanValidate(e)
{

 var str;
var t;
str =e.value;

if(str.length < 10 )
{   
   
        document.getElementById("idreturn").innerHTML = "Enter valid PAN";
          e.value="";
}
else
{
     document.getElementById("idreturn").innerHTML = "";
}

var res = str.substring(0,5);
var res1= str.substring(5,9);
var res2= str.substring(9,10);

var validChars = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];

var validNo = ['1','2','3','4','5','6','7','8','9','0'];

// Pan for first 5 char
    for(var i = 0; i < res.length; i += 1) {
        if(validChars.indexOf(res.charAt(i)) < 0 ) {
       
           t=0;
           e.value='';
        }
		else{
		  t=1;
		}
		
    }
	
	// Pan for first 6 to 9 NO
    for(var j = 0; j < res1.length; j += 1) {
        if(validNo.indexOf(res1.charAt(j)) < 0) {

            t=0;   
            e.value='';
        }
		else{
		  t=1;
		}
    }
	
	// Pan for LAST char
    for(var k = 0; k < res2.length; k += 1) {
        if(validChars.indexOf(res2.charAt(k)) < 0 ) {
           
            t=0;
          e.value='';
        }
		else{
		  t=1;
		}
    }
	
	if(t==1)
{
//alert("It is a valid PanCARD No");
   document.getElementById("idreturn").innerHTML = "";
}	
else if(t==0)
{
     document.getElementById("idreturn").innerHTML = "Invalid Pan Card No";
//e.value='';
//$(".pan_no").val('');
}
}

//End of Pan

//white space of PAN no and Email id not allowed 

function firstCharSpace(e){
    
   var str =e.value;
    if(str.charAt(0) === ' ')
  {
      e.value = '';
  }
  if(str.indexOf('/\s/g'))
   {
       var str1 = str.replace(/ /g,'');
       e.value = str1;
   }
}

//email validation

function isValidEmail() {
     
var str;
var t=1;
str =document.getElementById('Email').value;




if(document.getElementById('Email').value!=="")
{

    var res = str.split('@');
    if(str.split('@').length!=2)
  {
      document.getElementById("idreturns").innerHTML="Invalid Email Id";
        t=0;
    }
var part1=res[0];
var part2=res[1];

var validChars = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','.','0','1','2','3','4','5','6','7','8','9','_','-'];

// part1
if(part1.length==0)
{
       document.getElementById("idreturns").innerHTML="No Content Before @";
        t=0;
}
// emailName must only include valid chars
    for(var i = 0; i < part1.length; i += 1) {
        if(validChars.indexOf(part1.charAt(i)) < 0 ) {
                document.getElementById("idreturns").innerHTML="Invalid character in name section";
                t=0;   
        }
    }
    // emailDomain must only include valid chars
    for(var j = 0; j < part2.length; j += 1) {
        if(validChars.indexOf(part2.charAt(j)) < 0) {
            document.getElementById("idreturns").innerHTML="Invalid character in domain section";
            t=0;   
        }
    }

//chk afr @ content:  part2
var dotsplt=part2.split('.');  //alert(“After @ :”+part2);
    if(part2.split(".").length<2)
 {
      document.getElementById("idreturns").innerHTML="Dot Missing In Email ID";
        t=0;
    }
    
    if(dotsplt[0].length==0 )
{
    
    document.getElementById("idreturns").innerHTML="No content b/w @ and Dot";
    t=0;
}
    if(dotsplt[1].length<2 ||dotsplt[1].length>4)
{
        document.getElementById("idreturns").innerHTML="Error after dot";
    t=0;
}

if(t==1)
{
    document.getElementById("idreturns").innerHTML="";
//alert("It is a valid email");
}
}
}
/*
//convert to uppercase
function makeUpper(e)
{       

	 e.value = e.value.toUpperCase();
}
*/

function valid_select(e,flag,flag1){
    
        if((e.value == "") && (flag1=='0'))
        {
          // alert("Please select "+ capitalizeEachWord(flag) + "."); // prompt user
           //e.focus(); //set focus back to control
           return false;
        }
	else
        {
                        
            return ("Please select "+ capitalizeEachWord(flag) + "." + "\n");
                                          
        }
              
}


function capitalizeEachWord(str) {
    return str.replace(/\w\S*/g, function(txt) {
        return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
    });
}

function valid_required(e,flag,flag1){
      
      	if((e.value == "") && (flag1=="0"))
        {
           //  alert("Please select " + capitalizeEachWord(flag) +"."); // prompt user
           //e.focus(); //set focus back to control
           
           return false;
           
        }
        else{
             return(capitalizeEachWord(flag) +" field should not be empty" + "\n");
         }
}



//Adhar card validations
function adhr(e){
       
	var adhar=e.value;
	var lenadhar=adhar.length;
        if(lenadhar<12)
        {
           // alert("Aadhar No should be 12 digits");
           // e.value = "";
        }
        
}

//first character space
function ValidFirstSpace(e) {
 
    var str = e.value;
  
      if(str.charAt(0) === ' ')
       {
          e.value = '';
       }

   }
   
//Name validation
function ValidAlpha(e) {
    var k;	
    document.all ? k = e.keyCode : k = e.which;
    return ((k > 96 && k < 123)||k==8||(k > 64 && k < 91)||k==''||k==32);
    
     
}
//number validation
function ValidNum(e) {
    var k;
    document.all ? k = e.keyCode : k = e.which;
    return ((k > 47 && k < 58)||k==8);
}




 