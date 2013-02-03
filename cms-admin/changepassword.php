<?php
include("log/login.php");
if(!success())
	header("location: login.php");
require_once("db/dba.php");
db_connect();
if($_POST["Submit"]=='Submit')
{
	$password=$_POST["password"];
	$cpassword=$_POST["cpassword"];
	if($password==$cpassword)
	{
		$update_query=query("UPDATE `user` SET `password` = '$password' WHERE `user`.`id` = 1;");
		if($update_query)
			$warn="Password changed Successfully";
	}
	else
	{
		$warn="Please Enter Same Password";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
		<?php include("header.php"); ?>
		<div id="page_body" align="center">
			<table cellpadding="0" cellspacing="0" width="100%" border="0">
            	<tr>
                	<td align="center">
                    <form id="form1" name="form1" method="post" action="">
                	  <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td height="30">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="30" colspan="3">
                          	<strong>
							<?php 
                                if(!empty($warn)) 
                                    echo $warn;
                            ?>				
                            </strong>				  
                          </td>
                        </tr>
                        <tr>
                          <td height="30">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td width="148" height="30">New Password</td>
                          <td width="20" align="center">:</td>
                          <td width="432"><input type="password" name="password" id="password" /></td>
                        </tr>
                        <tr>
                          <td height="30">Confirm Password</td>
                          <td align="center">:</td>
                          <td><input type="password" name="cpassword" id="cpassword" /></td>
                        </tr>
                        <tr>
                          <td height="10"></td>
                          <td align="center"></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td height="30">&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>
                          <input type="image" src="images/submit-btn.png" value="Submit" name="Submit" />
                          <img src="images/reset-btn.png" onclick="form1.reset()" /></td>
                        </tr>
                        <tr>
                          <td height="30">&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                      </table>
                      </form>
                	</td>
            	</tr>
            </table>
		</div>
		<?php include("footer.dat"); ?>
	</div>
</body>
</html>
