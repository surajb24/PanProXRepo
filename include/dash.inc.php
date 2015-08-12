<?php

include '../conn.inc.php';

$Level1_Pending = mysqli_query($conn, "SELECT `SR_NO,N,1` FROM `appl_status` WHERE `FINAL_STATUS,N,1` = '1'");
$Level1_Pending_Rows = mysqli_num_rows($Level1_Pending);

$Level1_Completed = mysqli_query($conn, "SELECT `SR_NO,N,1` FROM `appl_status` WHERE `FINAL_STATUS,N,1` = '4'");
$Level1_Completed_Rows = mysqli_num_rows($Level1_Completed);

$QC_Completed = mysqli_query($conn, "SELECT `SR_NO,N,1` FROM `appl_status` WHERE `FINAL_STATUS,N,1` = '10'");
$QC_Completed_Rows1 = mysqli_num_rows($QC_Completed);

?>
<style>
    
  .button,.button2 {
      font-size:12px;
  border: none;
  display: inline-block;
  height: 50px;
  line-height: 50px;
  position: relative;
  color: rgb(255,255,255);
  margin-bottom: 15px;
  border-radius: 5px;
  text-shadow: 0px 1px 0px rgba(0,0,0,0.5);
  -moz-box-shadow: 0px 2px 2px rgba(0,0,0,0.2);
  -webkit-box-shadow: 0px 2px 2px rgba(0,0,0,0.2);
  box-shadow: 0px 2px 2px rgba(0,0,0,0.2);
  cursor:pointer;
}

.button:hover
{
background-color:rgb(90, 127, 150);    
}

.button span:hover
{
    background-color: rgb(157, 157, 157);
    color:white;
}

.button2:hover
{
background-color:rgb(90, 127, 150);    
}

.button{
    padding-right: 30px;
    padding-left: 70px;
     background-color: rgb(145, 170, 186);
}

.button2{
   background-color: rgb(145, 170, 186);
  padding-right: 23px;
  padding-left: 23px;    
}

.button span {
  position: absolute;
  left: 0;
  width: 49px;
  height: 48px;
  background-color: rgba(0,0,0,0.5);
  -webkit-border-top-left-radius: 5px;
  -webkit-border-bottom-left-radius: 5px;
  -moz-border-radius-topleft: 5px;
  -moz-border-radius-bottomleft: 5px;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  border-right: 1px solid rgba(0,0,0,0.15);
  text-align: center;
  color:white;
  }
  
  .button_table, .button_table tr, .button_table th, .button_table td
  {
      border:none;
  }
  
  thead{
      
      background-color: rgb(238, 238, 238);
      border-top: 1px solid white;
  }
  
   .counter tr:nth-child(even) 
   {
       background: rgb(242, 244, 246);
 
   }
   .counter tr:nth-child(odd) {background: rgb(255, 255, 246);
     border-bottom: 2px solid rgb(242, 244, 246);
   }
  
 .table4 th{
      
       text-align: left;
  padding: 7px;
  padding-left: 3%;
    border-right: none;
        border-left: none;
           //border-bottom: none;
  }
</style>

<div id="">
    <center>
    <form name="" method="post" >
        
        <fieldset style="background: #FAFAFA;">
            
            <legend>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pending PAN Counter</legend>  
        <br>
        <table class="button_table" style="text-align:left; width:90%;">
            
            <tr>
               
                <td>

                    <button type="submit" name="pending_submit" class="button">
                    <span> 
                        <?php 
                        
                            if(!empty($_SESSION['Level1_Form_ID']) || !empty($_SESSION['Level1_Form_ID']))
                            {
                                echo '1';
                            }
                            else
                            {
                                echo '0';
                            }
                            
                        ?>
                    </span>
                    Pending</button>


                </td>
                
                <td>
                   
                    <button type="submit" name="level1_submit" class="button">
                        <span> <?php echo $Level1_Pending_Rows;?></span>Level1
                    </button>
                </td>
                
                <td>
                    <button type="submit" name="level2_submit" class="button">
                        <span> <?php echo $Level1_Completed_Rows;?></span>Level2
                    </button>
                </td>
                
                <?php
               /* 
                if($_SESSION['PAN_User_Role'] == '2')
                {
                ?>    
                
                <td>
                    <button type="submit" name="dbf_submit" class="button">
                        <span><?php echo $QC_Completed_Rows1;?></span>Export
                    </button>
                </td>
                
                <?php    
                }
                */
                ?>
                
            </tr>
            
        </table>
        
        </fieldset>
            
    </form>
    <br>


<?php


if($_SESSION['PAN_User_Role'] == '2')
{
    
    $Level1_Completed = mysqli_query($conn, "SELECT `SR_NO,N,1` FROM `appl_status` WHERE `FINAL_STATUS,N,1` = '4'");
    $Level1_Completed_Rows = mysqli_num_rows($Level1_Completed);

    $Level2_Completed = mysqli_query($conn, "SELECT `SR_NO,N,1` FROM `appl_status` WHERE `FINAL_STATUS,N,1` = '6'");
    $Level2_Completed_Rows = mysqli_num_rows($Level2_Completed);

    $Compare_Completed = mysqli_query($conn, "SELECT `SR_NO,N,1` FROM `appl_status` WHERE `FINAL_STATUS,N,1` = '8'");
    $Compare_Completed_Rows = mysqli_num_rows($Compare_Completed);

   

    $DBF_Completed = mysqli_query($conn, "SELECT `SR_NO,N,1` FROM `appl_status` WHERE `FINAL_STATUS,N,1` = '11'");
    $DBF_Completed_Rows = mysqli_num_rows($DBF_Completed);
    
    echo '<form>';
    
    echo '<fieldset>
            
            <legend>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PAN Counter Of Whole Team</legend>';
    
    echo '<table class="table4" style="font-family: Arial, Helvetica, sans-serif;font-size: 12px;width: 100%;border-collapse:collapse;margin: initial;">';
    
        echo '<thead>';
        
            echo '<tr>';
            
                echo '<th>Status</th>';
                
                echo '<th>Counter</th>';
                
            echo '</tr>';
        
        echo '</thead>';
        
        echo '<tbody class="counter">';
        
            echo '<tr>';
            
                echo '<th>Level 1 Completed</th>';
                echo '<th>'.$Level1_Completed_Rows.'</th>';
            
            echo '</tr>';
            
            echo '<tr>';
            
                echo '<th>Level 2 Completed</th>';
                echo '<th>'.$Level2_Completed_Rows.'</th>';
            
            echo '</tr>';
            echo '<tr>';
            
                echo '<th>Compare Pending</th>';
                echo '<th>'.$Level2_Completed_Rows.'</th>';
            
            echo '</tr>';
            
            echo '<tr>';
            
                echo '<th>Compare Completed</th>';
                echo '<th>'.$Compare_Completed_Rows.'</th>';
            
            echo '</tr>';
            
            echo '<tr>';
            
                echo '<th>QC Pending</th>';
                echo '<th>'.$Compare_Completed_Rows.'</th>';
            
            echo '</tr>';
            
            echo '<tr>';
            
                echo '<th>QC Completed</th>';
                echo '<th>'.$QC_Completed_Rows.'</th>';
            
            echo '</tr>';
            
            echo '<tr>';
            
                echo '<th>DBF Completed</th>';
                echo '<th>'.$DBF_Completed_Rows.'</th>';
            
            echo '</tr>';
        
        echo '</tbody>';
    
        
        
    echo '</table>';
    
    echo '</fieldset>';
    
    echo '</form><br>';
}


//Common Conters for all users

$sql = 'SELECT `SR_NO,N,1` FROM `appl_status` WHERE `ASSIGN_TO_L1,C,30` = "'.$_SESSION['PAN_User_ID'].'" AND `FINAL_STATUS,N,1` = "4";';
$Level1_Completed = mysqli_query($conn, $sql);
$Level1_Completed_Rows = mysqli_num_rows($Level1_Completed);

$sql = 'SELECT `SR_NO,N,1` FROM `appl_status` WHERE `ASSIGN_TO_L2,C,30` = "'.$_SESSION['PAN_User_ID'].'" AND `FINAL_STATUS,N,1` = "6";';
$Level2_Completed = mysqli_query($conn, $sql);
$Level2_Completed_Rows = mysqli_num_rows($Level2_Completed);

$sql = 'SELECT `SR_NO,N,1` FROM `appl_status` WHERE `ASSIGN_TO_L1,C,30` = "'.$_SESSION['PAN_User_ID'].'" AND `FINAL_STATUS,N,1` = "8";';
$Compare_Completed = mysqli_query($conn, $sql);
$Compare_Completed_Rows = mysqli_num_rows($Compare_Completed);

$sql = 'SELECT `SR_NO,N,1` FROM `appl_status` WHERE `ASSIGN_TO_L1,C,30` = "'.$_SESSION['PAN_User_ID'].'" AND `FINAL_STATUS,N,1` = "10";';
$QC_Completed = mysqli_query($conn, $sql);
$QC_Completed_Rows = mysqli_num_rows($QC_Completed);

$sql = 'SELECT `SR_NO,N,1` FROM `appl_status` WHERE `ASSIGN_TO_L1,C,30` = "'.$_SESSION['PAN_User_ID'].'" AND `FINAL_STATUS,N,1` = "11";';
$DBF_Completed = mysqli_query($conn, $sql);
$DBF_Completed_Rows = mysqli_num_rows($DBF_Completed);

 echo '<form>';
    
    echo '<fieldset>
            
            <legend>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your PAN Counter</legend>';
    
    echo '<table class="table4" style="font-family: Arial, Helvetica, sans-serif;font-size: 12px;width: 100%;border-collapse:collapse;margin: initial;">';

    echo '<thead>';

        echo '<tr>';

            echo '<th>Status</th>';

            echo '<th>Counter</th>';

        echo '</tr>';

    echo '</thead>';

    echo '<tbody class="counter">';

        echo '<tr>';

            echo '<th>Level 1 Completed</th>';
            echo '<th>'.$Level1_Completed_Rows.'</th>';

        echo '</tr>';

        echo '<tr>';

            echo '<th>Level 2 Completed</th>';
            echo '<th>'.$Level2_Completed_Rows.'</th>';

        echo '</tr>';

        echo '<tr>';

            echo '<th>Compare Pending</th>';
            echo '<th>'.$Level2_Completed_Rows.'</th>';

        echo '</tr>';

        echo '<tr>';

            echo '<th>Compare Completed</th>';
            echo '<th>'.$Compare_Completed_Rows.'</th>';

        echo '</tr>';

        echo '<tr>';

            echo '<th>QC Pending</th>';
            echo '<th>'.$Compare_Completed_Rows.'</th>';

        echo '</tr>';

        echo '<tr>';

            echo '<th>QC Completed</th>';
            echo '<th>'.$QC_Completed_Rows.'</th>';

        echo '</tr>';

        echo '<tr>';

            echo '<th>DBF Completed</th>';
            echo '<th>'.$DBF_Completed_Rows.'</th>';

        echo '</tr>';

    echo '</tbody>';

echo '</table>';

echo '</fieldset>';
    
echo '</form>';

?>

</div>