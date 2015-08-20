<?php

include '../include/window.header.inc.php';

//Div For Pdf Start

    

         
    echo '<iframe id="content" src="../'.$_SESSION['Level1_Doc_Path'].'"></iframe>';


    
//Div For Pdf End
                
//Div For Form start
    ?>
    
<?php
    include '../include/level1.form.php';
    
//Div For Form End
              

?>


<script>

function emptyContactSession(e)
{
   var offname= docement.getElementById('ONameofoffice').value;
   
   if(offname==='')
   {
        // initialize 
        if(window.XMLHttpRequest)
        {

            xmlhttp = new XMLHttpRequest();

        }
        else
        {

            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

        }

        //response
        xmlhttp.onreadystatechange=function()
        {

            if(xmlhttp.readyState==4 && xmlhttp.status==200)
            {

                document.getElementById("response").innerHTML = xmlhttp.responseText;

            }

        }

        //passing varaible
        xmlhttp.open("GET","../ajax/sessionEmptyContact.php?ContactSession=Empty",true);
        xmlhttp.send();
    }
}    
    

function emptyOtherSession(e)
{
    var proofval=e.value;
    var AadharNo = document.getElementById('AadharNo');
    var name = document.getElementById('AName');
    var yob = document.getElementById('Ayob');
    var gender = document.getElementById('Agen');
    if(proofval==="AADHAR CARD ISSUED BY UIDAI"||proofval==="AADHAAR CARD ISSUED BY UIDAI")
    {
        if(AadharNo === '' || name === '' || yob === '' || gender === '')
        {
        // initialize 
        if(window.XMLHttpRequest)
        {
            
            
            // initialize 
            if(window.XMLHttpRequest)
            {

                xmlhttp = new XMLHttpRequest();

            }
            else
            {

                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

            }

            //response
            xmlhttp.onreadystatechange=function()
            {

                if(xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    document.getElementById("response").innerHTML = xmlhttp.responseText;
                }

            }

            //passing varaible
            xmlhttp.open("GET","../ajax/sessionEmptyOther.php?OtherSession=Empty",true);
            xmlhttp.send();
        }
        
        }
    }
}    


</script>
