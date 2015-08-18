<!doctype html>
<html>
<head>

	<link rel="stylesheet" href="css/menu.css" type="text/css" media="screen" />  
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" /> 
	<link rel='stylesheet' href='css/table.css' />

	<style>
	.container{width:100%;}
	</style>
	
	<script type='text/javascript' src='jq/jquery-1.11.1.min.js'></script>
	<script type='text/javascript' src='jq/jquery-1.8.3.min.js'></script>
	<script type="text/javascript" src="jq/jquery.min.js"></script>
	<script type="text/javascript" src="jq/script.js"></script>
	<script type="text/javascript" src="jq/ems.js"></script>
	<script type="text/javascript" src="jq/tabs.js"></script>
	
</head>

<body>
<div class="container">
<!--Header Division Starts-->		
		<div class="header">

			<div class="logo">

				<span class="span3">CloudZia</span> <span class="span2">PAN</span>

			</div>
			

		</div>
<!--Header Division Ends-->		

<div class="clear" style="border-bottom:1px solid #ddc;"></div>



<center>

	<h3>Forget Passward Wizard</h3>
	
<div class="clear" style="border-bottom:1px solid #ddc;"></div>

	<div class="form-container">
	
			<form name="frm">
				<fieldset style="width:65%;">
					<legend align="center">Find Your Details</legend>
					<input type="text" name="name" onkeyup="display();" placeholder="User Name" style="width:42%; padding-left:2%; font-size:1em; border:none;" pattern='[\S\s]{3,}' required autofocus />
				</fieldset>
			</form>
	
		
		<br/>
		<a href="index.php"><button type="button">login Page</button></a>
		<br/><br/>
		<div id="hint">

		</div>
		
	</div>

</div>

</body>
</html>

<script>
function display(){

if(window.XMLHttpRequest){

	

	xmlhttp=new XMLHttpRequest();
	}else{
	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function(){
		if(xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById("hint").innerHTML=xmlhttp.responseText;
		}
	}
	
	xmlhttp.open("GET","forgot_name.php?name="+document.frm.name.value,true);

	xmlhttp.send();
}
</script>