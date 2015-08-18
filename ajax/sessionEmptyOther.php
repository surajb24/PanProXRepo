<?php

session_start();

if(isset($_GET['OtherSession']))
{
    
    if(!empty($_GET['OtherSession']))
    {
        if($_GET['OtherSession'] == 'Empty')
        {
            
            $_SESSION['OtherStatus'] = '';
            
            if(empty($_SESSION['OtherStatus']))
            {
                echo 'Other Session Empty!';
            }
            
        }
    }
    
}


?>