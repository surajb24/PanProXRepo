<style>
    
#wrapper
{
	width:103%;
	height:490px;
	
}

#tabbox
{
 height: 30px;
}

a
{
color: #000;
margin: 0;
padding: 0;
text-decoration: none;
}
#panel
{
	background-color:#FAFAFA;
	height:auto;
	border:1px solid #DDDDDD;
	border-radius:5px;
          margin-top: 1px;
}
.tab
{
background: #DDDDDD;
display: block;
line-height: 30px;
text-align: center;
width: 11%;
float: left;
/* font-weight: bold; */
-webkit-border-top-left-radius: 4px;
-webkit-border-top-right-radius: 4px;
-moz-border-radius: 4px 4px 0px 0;
FONT-SIZE: 75%;
margin-left:1%;
}


.select
{
	background-color:#FAFAFA;
	border-bottom:none;
	border-top:1px solid #DDDDDD;
	border-left:1px solid #DDDDDD;
	border-right:1px solid #DDDDDD;
	border-radius:3px;
}
#Tab11I
{
	height:auto;
	padding:10px;
}

</style>

<div style="margin-top:10px; margin-right:40px; margin-left:40px;">
    
<div id="wrapper">

    <div id="tabbox">

        <a href="#" id="Tab11" class="tab Select">Agency Details</a>

    </div>

<div id="panel" style="overflow:hidden;">

    <div id="Tab11I">
        
        <form action="" method="POST">
            
            <center>
            <table>
                
                <tr>
                    
                    <th>Agency Code:</th>

                    <td>	
                        <input type="text" name="ag_co" placeholder="Agency Code" required>
                    </td>
                
                </tr>
                
                <tr>
                    
                    <th>Agency Name</th>

                    <td>

                        <input type="text" name="agencyname" placeholder="Agency Name">
                    </td>
                    
                </tr>
                
                <tr>
                    
                    <th>Agency Address 1:</th>

                    <td>
                        
                       <input type="text" name="add1" placeholder="Agency Address 1">
                       
                       
                    </td>
                    
                </tr>
                
                <tr>
                    
                    <th>Agency Address 2:</th>

                    <td>
                        
                       <input type="text" name="add2" placeholder="Agency Address 2">                       
                       
                    </td>
                    
                </tr>
                
                <tr>
                    
                    <th>Agency Address 3:</th>

                    <td>
                        
                       <input type="text" name="add3" placeholder="Agency Address 3">
                       
                       
                    </td>
                    
                </tr>
                
                <tr>
                                    
                    <th>Pin Code:</th>

                    <td>
                        
                       <input type="text" name="pincode" placeholder="Pin Code">
                       
                       
                    </td>
                    
                </tr>
                
                <tr>
                    
                    <th>PDC Code:</th>

                    <td>
                        
                        <select name="pdc_co">

                            <option value="001">001</option>
                            <option value="002">002</option>
                            <option value="003">003</option>
                            <option value="004">004</option>
                        
                        </select>
                        
                    </td>
                    
                </tr>
                
                
                
                <tr>
                    
                    <td colspan="2" style="text-align:right;">
                        <input type="submit" name="agency_submit" value="Agency" >
                        <input type="reset" name="" value="Reset" >
                    </td>
                    
                </tr>
                
            </table>
            </center>
        </form>
        
    </div>
</div>
</div>
</div>

<?php

if(isset($_POST['agency_submit']))
{
    $Date = date('d-m-Y');
    $AG_Code = $_POST['ag_co']; 
    $Agency_name = $_POST['agencyname'];
    $Agency_add1 = $_POST['add1'];
    $Agency_add2 = $_POST['add2'];
    $Agency_add3 = $_POST['add3'];
    $Agency_pincode = $_POST['pincode'];
    $PDC_Code = $_POST['pdc_co']; 
   
    /*
    $flag = '0';
    $year = date("Y");
    $month = date("M");
    $date1 = date('Y/m/d');
    $time = date('h:i:s a');
    */
    
    $query = "INSERT INTO `agency_details`
    (`AGC_CODE,C,3`, `AGC_NAME,C,20`, `AGC_ADD1,C,1`, `AGC_ADD1,C,2`, `AGC_ADD1,C,3`, `AGC,PN,D`, `DOR_AT_PDC,D`, `STATUS,N,1`, `Flag6`) 
    VALUES('$AG_Code', '$Agency_name', '$Agency_add1', '$Agency_add2', '$Agency_add3', '$Agency_pincode', '$PDC_Code', '1','1');";
    if(mysqli_query($conn, $query))
                {
        
                    echo "<script>alert('Agency Detail Submmited Successfully');window.location.href='2.home.php';</script>";
                 
                }
                
                else
                {
                echo 'Error: '.mysqli_error($conn);
                
                }
     
    }
?>