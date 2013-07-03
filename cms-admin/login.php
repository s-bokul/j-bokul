<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CMS Login</title>

<link href="css/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
</head>

<body>
	<div align="center">
		<div id="head-sec">Wellcome To Admin Area </div>
		<div id="login-box">
			<br />
			<span class="texthead"> Use Valid user name and password to gain access</span><br /><br />
			<span class="fail_log">
				<?php
					if(isset($_GET['warn']))
					{
						echo base64_decode($_GET['warn']);
					} 
			 	?>
			</span>
			<br /><br />
			<form action="log/log_test.php" method="post" name="form1" id="form1">	
				<table width="341" border="0" cellpadding="2" cellspacing="3" align="center">
					<tr>
						<td width="91" align="left" class="texthead">User Name </td>
						<td width="10" align="center" class="texthead">:</td>
					  <td width="219" align="left"><input name="user_name" class="form-login" title="Username" value="" size="30" maxlength="2048" /></td>
					</tr>
					<tr>
						<td align="left" class="texthead">Password</td>
						<td align="center" class="texthead">:</td>
						<td align="left"><input name="password" type="password" class="form-login" title="Password" value="" size="30" maxlength="2048" /></td>
					</tr>
					<tr>
						<td align="left"></td>
						<td></td>
					  <td align="left"><input type="image" src="images/login-btn.png" ></td>
					</tr>
			  </table>
			</form>
		</div>
		<div id="foot-sec">Copyright &copy; 2013</div>
	</div>
</body>
</html>
