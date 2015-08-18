<?php

session_start();

if(isset($_GET['ContactSession']))
{
    
    if(!empty($_GET['ContactSession']))
    {
        if($_GET['ContactSession'] == 'Empty')
        {
            
            $_SESSION['AddressStatus'] = '';
            
            
            if(empty($_SESSION['AddressStatus']))
            {
                echo 'Contact Session Empty!';
            }
            
        }
    }
    
}


?>