<?php

include '../include/window.header.inc.php';

//Div For Pdf Start


         
        echo '<iframe id="content" src="../'.$_SESSION['QC_Doc_Path'].'" style="width:100%;height:270px;"></iframe>';

    
 //Div For Pdf End
                
 //Div For Form start
        

                
        include '../include/qc.form.php';

   
 //Div For Form End
 
        
?>