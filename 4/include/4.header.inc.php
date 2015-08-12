<?php
include '../conn.inc.php';

if($_SESSION['PAN_User_Role'] !== '4')
{
	
	header("location:javascript://history.go(-1)");
	
}

?>

<!DOCTYPE html>
<html>
    
    
    <head>
        
        <title></title>
        
        <!-- Linked CSS Files -->
        <link rel="stylesheet" href="../css/menu.css" type="text/css" media="screen" />
        <link rel="stylesheet" type="text/css" href="../css/tabstyle.css" />
        <link rel="stylesheet" type="text/css" href="../css/table.css" />
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <link rel="stylesheet" type="text/css" href="../css/crm.table.css" />
        
        <!-- Linked JS Files -->
        <script type="text/javascript" src="../jq/lib/jquery.min.js"></script>
        <script type="text/javascript" src="../jq/lib/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="../jq/lib/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="../jq/lib/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="../jq/lib/jquery.maskedinput-1.2.2.min.js"></script> 
        <script type="text/javascript" src="../jq/lib/editscript.js"></script>    
        
        <script type="text/javascript" src="../jq/tabscript.js"></script>
        <script type="text/javascript" src="../jq/validations.js"></script>
        
     
        
        <script type="text/javascript" src="../jq/submit.js"></script>
        <script type="text/javascript" src="../jq/show.js"></script>
         
         <script type="text/javascript">
          $(document).ready(function() {
			  
		   $(window).load(function() {
			$(".loader").fadeOut();
			});
			  
		  $('.parent').click(function() {
			$('.sub-nav').toggleClass('visible');
			});
	      });

		</script>
         
    </head>
    
    <body>
        
        <div class="loader">
        </div>   
        
<!--Header Division Starts-->
<div style="position:absolute; background:#D3D3D3; height:40px; width:100%; z-index:-1;">
	
</div>	
		<div class="header">

			<div class="logo">

				<span class="span1">CloudZia</span> <span class="span2">PAN</span>

			</div>
			
			<div style="float:right; margin-right:0px; margin-top:10px;">
			
				   <ul class="nav">
					  <li class="parent">
						<img src="../img/808d3f7d.png" style="">
						<ul class="sub-nav" style="">
							<li><a href="../logout.inc.php">Logout</a></li>
							<li><a href="4.user.php">Profile</a></li>
						</ul>
					  </li>
				   </ul>
			   
			</div> 
			
			<div style="  float: right;  margin-top: 7.5px;  padding-top: 5px;  color: white;  margin-right: 2px;">
				
					Welcome 
					<?php 
					
					echo $_SESSION['PAN_User_Name'];
					
					?>!
				
			</div>

		</div>

<br/>	
<!--Menu Division Starts-->		
		<div id="tab-container">
		
			<ul class="tab-menu"> 
                                                        <a href='4.home.php'><li id="dataoperator-dash" class="">Dashboard</li></a>
			</ul>  
			
			<div class="clear"></div> 
			
			<div id="dataoperator-dash-tab" class="tab-content">
			
				<ul class="drop_menu">
					<li id="4.home"><a id="4.home-a" href='4.home.php'>Home</a></li>
                                                                </ul>
				
			</div>
						
		</div>
<!--Menu Division Ends-->

<!--<script type='text/javascript' src='../jq/header.js'></script>-->
<?php
$current_File_Name = $_SERVER['SCRIPT_NAME'];

$file = basename($current_File_Name);

$FileName = str_replace(".php", "", $file);

$sql = "SELECT `MenuName` FROM `menu` WHERE `FileName` = '$FileName';";

if($result = mysqli_query($conn, $sql))
{
	
	while($row = mysqli_fetch_array($result))
	{
		
		$MenuName = $row[0];
		$MenuName1 = str_replace('_', '-', $MenuName);
		$TabName = $MenuName1.'-tab';
		$FileName = str_replace('_', '-', $FileName);
		$LinkName = $FileName.'-a';
		
		echo '<script>';
	
			echo '
			$( "#'.$MenuName1.'" ).addClass( "active" );
			$( "#'.$TabName.'" ).addClass( "active" );
			
			$( "#'.$FileName.'" ).css( "background", "white");
			$( "#'.$LinkName.'" ).css( "color", "black");
			';
		echo '</script>';
	}
	
}
else
{
	echo 'Err'.mysqli_error($conn);
}
 
 
?>
		
        
        
        
        
        
        
        
 
