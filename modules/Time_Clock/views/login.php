<?php
	$error="";
	if(isset($_GET["err"])){
		$ecode = trim($_GET["err"]);
		if ($ecode == "1") 
			$error = "Wrong password or ID.";
	}
	if (isset($_GET["a"])){
		$action= trim($_GET["a"]);
		if ($action =="logout"){
			reset($_COOKIE);
			setcookie("userid","", time()-3600*24,"/");
		}	
	}
?>
<html xmlns="" lang="en-US">
  <head>
      <meta http-equiv="Content-type" content="text/html; UTF-8" />
      <title>Login Form (Demo)</title>
      <meta name="description" content="Login form"/>
      <meta name="keyword" content="loginin timein timeout" />
      <meta name="copyright" content="Copyright 2014 Edward Gao" />
      <link rel="stylesheet" type="text/css" href="../styles/main.css" />
  </head>
  <body>
  	<div id="wrapper1">
	  <div id="form">
	  <form id="login" method="post" action="../controllers/loginController.php" >
	  	<fieldset class="fieldset">
		  	<legend id="formlegend">Log In Form</legend>
			<table><tr><td><label class="formLabel" for="userid" class="label">Userid: </label></td>
				  <td><input type="text" id="userid" name="userid" /> </td></tr>
			       <tr><td><label class="formLabel" for="password" class="label">Password: </label></td>
			    	   <td><input type="password" id="password" name="password" /></td></tr>
			</table>
			<input type="submit" value="Submit" /><label class="warning">        <?=$error?></label>
			
		 </fieldset>   
	  </form>
	</div>  
	</div>
  </body>
</html>