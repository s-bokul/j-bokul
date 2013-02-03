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
<script language="javascript">
function charCount(ta, tf){

	var str = ta.value.length;

	tf.value = str;

	return;

}
</script>
</head>

<body>
	<div align="center">
		<?php include("header.php"); ?>
		<div id="page_body" align="left">
		  <table width="978" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="30" align="left" valign="middle"><strong>Add New SMS Group</strong></td>
            </tr>
            <tr>
              <td>
			  	<form id="mainForm" name="mainForm" method="post" action="sms_group_send_ins.php">
					<table width="978" border="0" cellspacing="0" cellpadding="0">
					  <tr>
					    <td height="30">&nbsp;</td>
					    <td>&nbsp;</td>
				      </tr>
					  <tr>
						<td width="111" height="30" align="left" valign="top">Message Body : </td>
					    <td width="867" align="left"><input name="group_id" type="hidden" value="<?php echo $_GET["id"]; ?>" /><textarea style="width:310px;height:115px;" name="smsArea" id="smsArea" onKeyUp="charCount(this, document.mainForm.charCountField);"></textarea></td>
					  </tr>
                      <tr>
					    <td height="30">Total Char</td>
					    <td>
							<input name="charCountField" type="text" id="charCountField3" size="7" maxlength="10">
                  		</td>
				      </tr>
					  <tr>
					    <td height="5" align="left" valign="top"></td>
					    <td align="left"></td>
				      </tr>
					  
					  <tr>
					    <td height="10" align="left" colspan="2"></td>
				      </tr>
					  <tr>
						<td height="30" align="left" colspan="2">
							<input type="image" src="images/submit-btn.png" value="Submit" />
                  			<img src="images/reset-btn.png" onclick="form1.reset()" />						</td>
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
