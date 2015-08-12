/*
function ValidateName(e) {

    var str = e.value;
   
      if(str.charAt(0) === ' ')
       {
          e.value = '';
       }

     if(!str.match(/^[a-zA-Z ]+$/))
    {
 
      /* var str1 = str.slice(-1);
        var str2 = str.replace(str1, ''); 
        e.value = str2;
        e.value ="";
     }
   
}
*/
//End Name Validation


    
    
    
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
                $(this).css("background-color", "#eeac9a");
            }
            else
            {
            $('#Mname').css("background-color", "white");
            $('#FMname').css("background-color", "white");
            $('#OMname').css("background-color", "white");
            $('#RNPremises').css("background-color", "white");
            $('#RRSL').css("background-color", "white");
            $('#OPremises').css("background-color", "white");
            $('#ORSLP').css("background-color", "white");
            $('#Ccode').css("background-color", "white");
            $('#OAScode').css("background-color", "white");
            $('#Email').css("background-color", "white");
            $("#AadharNo").css("background","white");
            $('#PAN1').css("background-color", "white");
            $('#PAN2').css("background-color", "white");
            $('#PAN3').css("background-color", "white");
            $('#PAN4').css("background-color", "white");
            $('#Rtitle').css("background-color", "white");
            $('#Rlast').css("background-color", "white");
            $('#Rfirst').css("background-color", "white");
            $('#Rmiddle').css("background-color", "white");
            $('#Rflat').css("background-color", "white");
            $('#Rbuilding').css("background-color", "white");
            $('#Rroad').css("background-color", "white");
            $('#Rarea').css("background-color", "white");
            $('#Rtown').css("background-color", "white");
            $('#Rstate').css("background-color", "white");
            $('#Rpincode').css("background-color", "white");
            $('#NOD').css("background-color", "white");
            $('#Mname').css("background-color", "white");
            $('#FMname').css("background-color", "white");
            $('#level2ReBuid').css("background-color", "white");
            $('#level2ReRoad').css("background-color", "white");
            $('#level2OfBuil').css("background-color", "white");
            $('#level2OfRoad').css("background-color", "white");
            
            }  
        }
        else {
            $(this).css("background-color", "white");
        } 
     });
     
     //reuired select start 

     $("select").blur(function(e){
              var select=$(this);
              var text=select.find("option:selected").val();
              if(text == "")
              {
                  
                    $(this).css("background-color", "#eeac9a");
              }
              else
              {
                  $(this).css("background-color", "white");
              }           
    });
    
 
 
});


//start date Validation


function validatedob(e) {
         
      
    var today =new Date();
    var str=e.value;
    
    
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
	
         if(mm < 1 )
         {
              document.getElementById("dterequre").innerHTML = "Month cant be less than 1";
           e.value='';

            }
        else if(mm >12)
        {
            document.getElementById("dterequre").innerHTML = "Month cant be greater than 12";
             e.value='';
         } 
         
         if(yy<1900 || yy>3000)
         {
            document.getElementById("dterequre").innerHTML = "Year should be greater than 1900 and less than 3000";
            e.value='';
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
             return false;  
         }  
             if ((lyear==true) && (dd>29))  
        {  
             document.getElementById("dterequre").innerHTML = "Invalid leap year date format!";
              e.value='';
               return false;  
        }  
         }

	var myDate = new Date(yy, mm - 1, dd);

        if(myDate>today)
        {
               document.getElementById("dterequre").innerHTML = " Date cant be greater than today";
               e.value='';
                return false;
        }
        
       
        }
        else
    {
        
        document.getElementById("dterequre").innerHTML = "Invalid date format!";
        return false;
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

var strTel=document.getElementById('TelNo').value;

if((strTel=="")&&(str==""))
{
   
    alert("Atleast Telephone or Email should be filled");
}
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
            document.getElementById("idaddar").innerHTML="Aadhar No should be 12 digits";
            e.value = "";
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





 