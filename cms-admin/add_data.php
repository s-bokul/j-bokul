<?php
include("log/login.php");
if(!success())
	header("location: login.php");
require_once("db/dba.php");
db_connect();
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
<link type="text/css" href="../js/jquery-ui/development-bundle/themes/base/ui.all.css" rel="stylesheet" />
<script type="text/javascript" src="../js/jquery-ui/development-bundle/jquery-1.3.2.js"></script>
<script type="text/javascript" src="../js/jquery-ui/development-bundle/ui/ui.datepicker.js"></script>
<script type="text/javascript">
	$(function() {
		$('#date').datepicker({changeMonth: true,changeYear: true});
	});

	</script>
<?php include("normal_tinymce.php"); ?>
</head>

<body>
	<div align="center">
		<?php include("header.php"); ?>
	  <div id="page_body" align="left">
	    <form action="data_ins.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
	      <table width="978" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="600" height="400" align="center"><table width="600" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="30" align="left">Title : 
                  <input name="title" type="text" id="title" size="50" /></td>
                </tr>
                <tr>
                  <td height="30" align="left">                    Contant :
                  <input name="fileField" type="file" id="fileField" /></td>
                </tr>
                <tr>
                  <td height="45" align="left">
				  	<input type="image" src="images/submit-btn.png" value="Submit" />
                  	<img src="images/reset-btn.png" onclick="form1.reset()" />				  </td>
                </tr>
              </table></td>
            </tr>
          </table>
        </form>
      </div>
		<?php include("footer.dat"); ?>
	</div>
</body>
</html>
