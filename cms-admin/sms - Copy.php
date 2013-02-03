<?php
include("log/login.php");
if(!success())
	header("location: login.php");
require_once("db2/dba.php");
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
						if($_GET['msg']) 
							echo base64_decode($_GET['msg']);
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
				  <td height="45" align="left" bgcolor="#ffffff" colspan="7"><a href="sms_group_add.php"><img src="images/buddygroup.png" alt="Pages" width="50" height="45" border="0" align="left" /></a><br />
			        <strong>Add New Group</strong></td>
			  </tr>
				<tr>
					<td height="25" align="center" bgcolor="#4C89D9">Group SL</td>
				    <td align="center" bgcolor="#4C89D9">Group Name</td>
				    <td align="center" bgcolor="#4C89D9">Create Date </td>
				    <td align="center" bgcolor="#4C89D9">View</td>
                    <td align="center" bgcolor="#4C89D9">SMS</td>
				    <td align="center" bgcolor="#4C89D9">Action</td>
				</tr>
				<?php
					$sms_group_query=query("select `group_id`, `group_name`, `create_date` from `sms_group` order by `group_id` asc");
					$i=1;
					while($result_sms_group=mysql_fetch_array($sms_group_query))
					{						
						if($color=='#FFFFFF')
							$color='#FFFF99';
						else
							$color='#FFFFFF';
						echo "<tr bgcolor='".$color."'>
								  <td height='25' align='center'>".$i."</td>
								  <td align='left'>".$result_sms_group['group_name']."</td>
								  <td align='center'>".$result_sms_group['create_date']."</td>
								  <td align='center'><a href='sms_group_view_details.php?id=".$result_sms_group['group_id']."'>View Group Details</a></td>
								  <td align='center'><a href='sms_group_send.php?id=".$result_sms_group['group_id']."'>Send Group SMS</a></td>
								  <td align='center'><a href='sms_group_delete.php?id=".$result_sms_group['group_id']."'><img src='images/delete.png' alt='Delete' border='0' title='Delete' /></a></td>
							  </tr>";
						++$i;
					}
			  ?>
			</table>
			
		</div>
		<?php include("footer.dat"); ?>
	</div>
</body>
</html>
