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
</head>

<body>
	<div align="center">
		<?php include("header.php"); ?>
		<div id="page_body" align="left">
			<table cellpadding="1" cellspacing="1" border="0" bgcolor="#999999" width="978">
				<tr>
				  <td height="45" align="center" bgcolor="#ffffff" colspan="7">
				    <strong>
				  	<?php 
						if(isset($_GET['msg']))
							echo base64_decode($_GET['msg']);
					?>
					<span style="color:#FF3E3E">
						<?php 
						if(isset($_GET['msg2']))
							echo base64_decode($_GET['msg2']);
						?>
					</span>
					</strong>
				  </td>
			  </tr>
				<tr>
				  <td height="45" align="left" bgcolor="#ffffff" colspan="7"><a href="add_pages.php"><img src="images/icons32.png" alt="Pages" width="50" height="45" border="0" align="left" /></a><br />
			        <strong>Add New Page </strong></td>
			  </tr>
				<tr>
					<td width="163" height="25" align="center" bgcolor="#4C89D9">Menu</td>
				    <td width="163" align="center" bgcolor="#4C89D9">Parent</td>
				    <td width="125" align="center" bgcolor="#4C89D9">Order</td>
				    <td width="188" align="center" bgcolor="#4C89D9">Create Date </td>
				    <td width="117" align="center" bgcolor="#4C89D9">Status</td>
				    <td colspan="2" align="center" bgcolor="#4C89D9">Action</td>
				</tr>
				<?php
                $color = '#FFFFFF';
                $menu_query = query("select `menu_id`, `menu_name`, `parent_menu_id`, `create_date`, `is_active`, `order` from `menus` order by `parent_menu_id` asc");
                while ($result_menu = mysql_fetch_array($menu_query)) {
                    $submenu_query = query("select `menu_name` from `menus` where `menu_id`='" . $result_menu['parent_menu_id'] . "'");
                    $submenu_result = mysql_fetch_array($submenu_query);
                    $parent_menu = $submenu_result['menu_name'];
                    if (empty($parent_menu))
                        $parent_menu = 'None';

                    if ($result_menu['is_active'] == 1)
                        $menu_status = "Active";
                    else
                        $menu_status = "Inactive";

                    if ($color == '#FFFFFF')
                        $color = '#FFFF99';
                    else
                        $color = '#FFFFFF';
                    echo "<tr bgcolor='" . $color . "'>
								  <td height='25' align='left'>" . $result_menu['menu_name'] . "</td>
								  <td align='left'>" . $parent_menu . "</td>
								  <td align='center'>" . $result_menu['order'] . "</td>
								  <td align='center'>" . $result_menu['create_date'] . "</td>
								  <td align='center'>" . $menu_status . "</td>
								  <td align='center'><a href='edit_pages.php?id=" . $result_menu['menu_id'] . "'><img src='images/edit.png' alt='Edit' border='0' title='Edit' /></a></td>
								  <td align='center'><a href='page_delete.php?id=" . $result_menu['menu_id'] . "'><img src='images/delete.png' alt='Delete' border='0' title='Delete' /></a></td>
							  </tr>";
                }
			  ?>
			</table>
			
		</div>
		<?php include("footer.dat"); ?>
	</div>
</body>
</html>
