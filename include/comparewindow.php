<?php

include '../include/window.header.inc.php';



//Div For Pdf Start
  
    

         
        echo '<iframe id="content" src="../'.$_SESSION['Compare_Doc_Path'].'"></iframe>';


    
 //Div For Pdf End
                
 //Div For Form start
        

                
        include '../include/compare.form.php';

   
 //Div For Form End
              

?>