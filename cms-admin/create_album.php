<?php
include("log/login.php");
if(!success())
	header("location: login.php");
	
require_once("db/dba.php");
require_once("db/function.php");
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
<?php //include("normal_tinymce.php"); ?>
</head>

<body>
	<div align="center">
		<?php include("header.php"); ?>
		<div id="page_body" align="left">
		  <table width="978" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="30" align="left" valign="middle"><strong>Create New Album </strong></td>
            </tr>
            <tr>
              <td>
			  	<form id="form1" name="form1" method="post" action="album_ins.php">
					<table width="978" border="0" cellspacing="0" cellpadding="0">
					  <tr>
					    <td height="30">Album Page :</td>
					    <td align="left">
                        	<select name="parent" id="parent">
                              <?php
							  echo "select `menu_id`, `menu_name` from `menus` where `parent_menu_id`='0' and `is_gallery`='1';";
                                $menu_query=query("select `menu_id`, `menu_name` from `menus` where `parent_menu_id`='0' and `is_gallery`='1';");
                                while($result_menu=mysql_fetch_array($menu_query))
                                {
                                    echo "<option value='".$result_menu['menu_id']."'>".$result_menu['menu_name']."</option>";
                                }
                              ?>
                            </select>
                        </td>
				      </tr>
					  <tr>
						<td width="111" height="30" align="left">Album Name : </td>
					    <td width="867" align="left"><input name="album_name" type="text" id="album_name" size="30" />						</td>
					  </tr>
					  <tr>
					    <td height="5" align="left" valign="top"></td>
					    <td align="left"></td>
				      </tr>
					  <tr>
						<td height="30" align="left" valign="top">Description : </td>
					    <td align="left"><textarea name="description" id="description"></textarea></td>
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
