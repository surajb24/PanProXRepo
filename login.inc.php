<!doctype html>
<html itemscope="" itemtype="http://schema.org/WebPage" lang="en-IN">

<head>

	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="text/html" charset="UTF-8" http-equiv="content-type">
	<meta content="img/logo.png" itemprop="image">
    <link rel="stylesheet" href="css/login.css" media="screen" type="text/css" >

</head>

<body>

<center>

<div class="container">

  <section>
  <div class="imp"><h1>Login Panel</h1></div>
  <span><img src="img/logo.png" class="logo-login"></span>
  <form action=""  method="post" >
	
	
    <input placeholder='User ID' type='text' name="user_name" class="username" autofocus required/>
	<div class="se"><img src="img/User.png" class="user"></div>
	<br>
    <input placeholder='Password' type='password' name="password" class="password" required/>
	<div class="se"><img src="img/key.png" class="user"></div>
	
	<br>
	<br>
	<button class="btnlogin" type="submit" name="log_in"><a href="#" class="login"><b>Login</b></a></button>
  </form>

  <h2>
    <a href='security_check.php'>Forgot Password?</a>
  </h2>
 <div style="height:15px; width:100%;"></div>
  <div class="imp1">
  <h1><span class="span1">CloudZia</span> <span class="span2">PAN</span></h1>
  </div>
	</section>
</div>
</body>

</html>

<?php

include 'login.action.php';

?>
