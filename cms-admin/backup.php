<?php
include("log/login.php");
if(!success())
	header("location: login.php");
require_once("db/dba.php");
//db_connect();

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
a
{
	color:#0099FF;
	text-decoration:none;
}
a:hover
{
	color:#333333;
}
-->
</style>

</head>

<body>
	<div align="center">
		<?php include("header.php"); ?>
		<div id="page_body" align="center">
		  <table width="978" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="200" align="center" valign="middle">
			  	<strong>
				  	<?php 
						if($_GET['msg']) 
						{
							echo base64_decode($_GET['msg']);
							//echo "<br /><br /><br /><a href='backup/".$_GET['f']."'>Need To Download</a>";
							echo "<br /><br /><br /><a href='usage.php?d=".$_GET['f']."'>Need To Download</a>";
						}
							
						
					?>
				<span style="color:#FF3E3E">
						<?php 
						if($_GET['msg2']) 
							echo base64_decode($_GET['msg2']);
						?>
				</span>
				</strong>
		
			  </td>
            </tr>
            <tr>
              <td height="100" align="center" valign="middle">
			  	<form id="form1" name="form1" method="post" action="backup_post.php">
				  <input name="backup" type="hidden" id="backup" value="backup" />
				  <input type="submit" name="Submit" value="Backup Database" />
				</form>
			  </td>
            </tr>
          </table>
		</div>
		
		<?php include("footer.dat"); ?>
	</div>
</body>
</html>
