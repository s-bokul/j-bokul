<?php
include("log/login.php");
if(!success())
	header("location: login.php");
?>
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
		<?php include("header.php"); ?>
		<div style="font-family:'Trebuchet MS', Verdana;font-size:20px;font-weight:bold;height:auto;width:978px;vertical-align:middle;display:block;line-height:400px;" align="center">
			Edit Your Settings Here
		</div>
		<?php include("footer.dat"); ?>
	</div>
</body>
</html>
